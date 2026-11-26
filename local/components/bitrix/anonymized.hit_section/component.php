<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 * @var CMain $APPLICATION
 * @var array $arParams
 */

use <<Заменено для анонимности>>\<<Заменено для анонимности>>HitsHelper;

global $USER;
$filter['USER_ID'] = $USER->GetID();

$sectionsArr = [];
$sectionsItemsArr = [];
$sectionsItemsArr = <<Заменено для анонимности>>HitsHelper::getHitsSectionsItemsArr($arParams, false);
$sectionsItemsArr = <<Заменено для анонимности>>HitsHelper::getHitsSectionsItemsByPopularity($sectionsItemsArr);
$sectionsArr = <<Заменено для анонимности>>HitsHelper::getHitsSections($sectionsItemsArr);

$arResult['SECTIONS_ITEMS'] = $sectionsItemsArr;
$arResult['SECTIONS'] = $sectionsArr;

foreach ($arResult['SECTIONS_ITEMS'] as $sectionKey => $sectionItems) {
    if (!isset($GLOBALS['HITS_FILTER_' . $sectionKey])) {
        $GLOBALS['HITS_FILTER_' . $sectionKey]['ID'] = [];
    }
    foreach ($sectionItems as $sectionItem) {
        array_push($GLOBALS['HITS_FILTER_' . $sectionKey]['ID'], $sectionItem['ID']);
    }
}

// Блокировка показа Вы смотрели если параметр установлен, если его не существует, присваиваем.
if (!isset($arParams['ACTIVE_BLOCK_YOU_SEE'])) {
    $arParams['ACTIVE_BLOCK_YOU_SEE'] = 'Y';
}
$this->IncludeComponentTemplate();
