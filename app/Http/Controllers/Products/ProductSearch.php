<?php

namespace App\Http\Controllers\Products;

use App\Classes\Constant;
use App\EntityClasses\EntityField;
use App\EntityConstraints\ProductConstraint;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ProductSearch extends Controller
{
    public function search(Request $request): View|RedirectResponse|Redirector|Response|JsonResponse
    {
        if(!$request->has(EntityField::NUMBER))
            return $this->catch(new Exception("Valeur de recherche absente !"));

        $number = $request->input(EntityField::NUMBER);
        $query = Product::where(EntityField::NUMBER, $number);

        $constraint = new ProductConstraint();
        $query = $constraint->queryAfterSearch($request, $query);

        $models = $query->get()->load("alerts");
        return response()->json($models, Response::HTTP_OK);
    }
}
