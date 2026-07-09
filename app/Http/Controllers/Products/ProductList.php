<?php

namespace App\Http\Controllers\Products;

/*
    Description des procédures
    - Liste des produits: filtrer par alert status
    - Front Web:
        - 3 menus principaux: produits, alerts, outils
            -> menu produits: liste des produits, seuils de stock
            -> menu alerts: stock normal, seuil bientôt atteint, seuil attein, en rupture de stock
            -> menu outils: scan produit
    - Front Mobile:
            -> Accueil
            -> Liste de produits avec filtre
            -> Scan de produits
            -> Compte utilisateur
    -
*/

use App\Classes\Constant;
use App\Classes\RoutePath;
use App\EntityClasses\EntityField;
use App\EntityConstraints\ProductConstraint;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ProductList extends Controller
{
    public function list(Request $request): View|RedirectResponse|Redirector|Response|JsonResponse
    {
        $query = Product::orderBy(EntityField::CREATED_AT, Constant::DESC_ORDER)
            ->orderBy(EntityField::UPDATED_AT, Constant::DESC_ORDER);

        if ($request->has(Constant::LAST_UPDATE))
            $query = $query->whereDate(EntityField::UPDATED_AT, '>=', Carbon::parse($request->last_update));

        $constraint = new ProductConstraint();
        $query = $constraint->queryAfterSearch($request, $query);

        $models = new Collection([]);
        if ($request->has(EntityField::STATUS)) {
            $status = $request->input(EntityField::STATUS);
            foreach ($query->get() as $model) {
                if (count($model->alerts) == 0) continue;
                $alert = $model->alerts[0];
                if ($alert->status != $status) continue;
                $models->push($model->load("alerts"));
            }
        }
        else $models = $query->get()->load("alerts");
        //$query = $models->isNotEmpty() ? $models->toQuery() : Product::whereRaw('1 = 0');

        return response()->json($models, Response::HTTP_OK);
        //return $this->sendList($request, $query, RoutePath::PRODUCT_LIST_ROUTE);
    }
}
