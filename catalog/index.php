<?php

define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
use <<Заменено для анонимности>>\<<Заменено для анонимности>>Helper;
/**
 * @var  CAllMain|CMain $APPLICATION
 */

// сайт выставка <<Заменено для анонимности>>
$iblock_id = IBLOCK_CATALOG;
$priceCodes = BXConstants::PriceCode();

if (SITE_ID === SITE_EXHIBITION) {
    $iblock_id = IBLOCK_CATALOG_EX;
    $priceCodes = [0 => "b2b"];
}

if (defined('IS_MERCH_PROPERTY')) {
    $GLOBALS['ArFilter'] = array(
        '!=PROPERTY_'.IS_MERCH_PROPERTY.'_VALUE' => 'Да'
    );
}
//TODO local redirect for category 18+
if (CATEGORY_DISABLED) {
    $GLOBALS['ArFilter'] = array(
        '!=PROPERTY_SEE_PRODUCT_AUTH_VALUE' => 'Нет'
    );
}

$parameters = <<Заменено для анонимности>>Helper::getDefaultCatalogParameters();
$parameters['FILTER_NAME'] = 'ArFilter';
$parameters['SEF_FOLDER'] = "/catalog/";
$parameters['ELEMENT_SORT_FIELD'] = "name";
$parameters['ELEMENT_SORT_ORDER'] = "asc";
$parameters['ELEMENT_SORT_FIELD2'] = "name";
$parameters['ELEMENT_SORT_ORDER2'] = "desc";
$parameters['LIST_OFFERS_LIMIT'] = "5";

$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"<<Заменено для анонимности>>_catalog.catalog",
    $parameters,
	false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
