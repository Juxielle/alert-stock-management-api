<?php

namespace App\Http\Controllers;

use App\Classes\Constant;
use App\Classes\Page;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Exception;
use Illuminate\Database\Eloquent\Model;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private function getPage(Request $request, Builder $query): Page
    {
        $models = $query->get();//$query->paginate(Constant::PAGES_COUNT)->items();
        $count = $models->count();

        if ($count > Constant::PAGES_COUNT)
            $count = $count % Constant::PAGES_COUNT == 0 ? $count / Constant::PAGES_COUNT : ($count / Constant::PAGES_COUNT) + 1;
        else if ($count > 0) $count = 1;

        return new Page(
            models: $models,
            pageCount: (int)$count,
            selectedPage: $request->has("page") ? $request->page : 1
        );
    }

    protected function sendList(Request $request, Builder $query, string $route): View|RedirectResponse|Redirector|Response|JsonResponse
    {
        $page = $this->getPage($request, $query);

        if($request->isJson())
            return response()->json($page->models, Response::HTTP_OK);

        return view($route, compact('page'));
    }

    protected function send(Request $request, Model|Collection|null $model, string $route, bool $isView = false): View|RedirectResponse|Redirector|Response|JsonResponse
    {
        if($request->isJson())
            return response()->json($model, Response::HTTP_OK);

        if($isView) return view($route, compact('model'));
        else return redirect($route)->with(["successMessage" => "Sauvegarde des données effectué avec succès... Merci pour votre confiance !"]);
    }

    protected function sendValidatorError(Request $request, array $errors, array $models = []): RedirectResponse|Redirector|Response|JsonResponse
    {
        if($request->isJson())
            return $this->catch(new Exception());

        return Redirect::back()->withErrors($errors)->with($models);
    }

    protected function success(Collection $list): RedirectResponse|Redirector|Response|JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $list,
        ], Response::HTTP_OK);
    }

    protected function catch(Exception $e): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => $e->getMessage(),
            'error_code' => $e->getCode(),
            'success' => false
        ], Response::HTTP_BAD_REQUEST);
    }
}
