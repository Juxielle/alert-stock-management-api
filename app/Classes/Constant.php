<?php

namespace App\Classes;

abstract class Constant
{
    const OTHER = "other";
    const MODEL = "model";
    const GABON_KEY = "gabon";
    const BANK_PAYMENT_KEY = "bank";
    const SEX_M = "M";
    const SURVIVING_SPOUSE_KEY = "surviving_spouse_key";
    const HAS_PENSION_KEY = "has_pension";
    const CNI = "cni";
    const SA = "sa";
    const SINGLE = "single";
    const CIVIL_SERVANT = "civil_servant";
    const DESC_ORDER = "desc";
    const LAST_UPDATE = "last_update";
    const PROFILE_IMAGE = "profile_image";
    const PAGES_COUNT = 20;

    const ENTITY_TYPE = "entity-type";

    const FILE_PATH = "documents";
    const TEMP_FILE_PATH = "files-temp";
    const IMAGE_PATH = "images";
    const DEFAULT_IMAGE = "assets/images/default_profile_image.png";
    const DEFAULT_PDF = "void-file.pdf";

    const REQUIRED_DOCUMENT_ERROR = "required_document_error";
    const FAIL_TO_SAVE = "fail_to_save";
    const FAIL_TO_SAVE_DOCUMENT = "fail_to_save_document";
    const VALIDATOR_ERROR = "validator_error";
    const NOT_FOUND_ERROR = "not_found_error";
    const SAVE_FILE_ERROR = "save_file_error";

    const ACTIVE = "active";
    const BLOCKED = "blocked";
    const ADMIN = "admin";
    const SUPER_ADMIN = "super-admin";

    const IN_PROGRESS = "in-progress";
    const IN_PROGRAM = "in-program";
    const FINISHED = "finished";
    const MONTHLY = "monthly";
    const CUSTOMER = "customer";

    const NORMAL = "normal";
    const STOCK_WARNING = "stock-warning";
    const STOCK_CRITICAL = "stock-critical";
    const OUT_OF_STOCK = "out-of-stock";
    const EXPIRING = "expiring";
    const EXPIRED = "expired";
}
