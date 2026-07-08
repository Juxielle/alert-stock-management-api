<?php

namespace App\Classes;

abstract class RoutePath
{
    const PENSION_PAGE = "frontend.pensions.pension-page";
    const FRONT_HOME = "/";

    const OLDESS_PENSION_FORM = "frontend.pensions.oldess-pension-form";

    const OLDESS_PENSION_FORM_REDIRECTION = "/pensions/form?pension_type=oldess-pension";

    const USER_LIST_ROUTE = "backend.users.user-list";
    const PRODUCT_LIST_ROUTE = "backend.products.product-list";

    const OLDESS_PENSION_LIST_REDIRECTION = "/admin/pensions/oldess-pensions";

    const OLDESS_PENSION_DETAIL = "backend.oldess-pensions.oldess-pension-detail";
}
