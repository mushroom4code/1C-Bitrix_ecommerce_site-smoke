<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 * @var CMain $APPLICATION
 */

use <<Заменено для анонимности>>\<<Заменено для анонимности>>HitsHelper;

global $USER;
$filter['USER_ID'] = $USER->GetID();

$queryObject = Bitrix\Catalog\SubscribeTable::getList(array('select' => array('ID', 'ITEM_ID', 'USER_CONTACT'), 'filter' => $filter));

while ($subscribe = $queryObject->fetch()) {
    $arResult['CURRENT_USER_SUBSCRIPTIONS']['ITEMS_IDS'][] = $subscribe['ITEM_ID'];
    $arResult['CURRENT_USER_SUBSCRIPTIONS']['SUBSCRIPTIONS'][] = $subscribe;
}

$component = $this->getComponent();

if (<<Заменено для анонимности>>HitsHelper::checkIfHits($APPLICATION)) {
    $sectionsArr = [];
    $sectionsItemsArr = [];
    $sectionsItemsArr = <<Заменено для анонимности>>HitsHelper::getHitsSectionsItemsArr($arResult['ITEMS'], $arParams, false);
    $sectionsItemsArr = <<Заменено для анонимности>>HitsHelper::getHitsSectionsItemsByPopularity($sectionsItemsArr);
    $sectionsArr = <<Заменено для анонимности>>HitsHelper::getHitsSections($sectionsItemsArr);

    $arResult['SECTIONS_ITEMS'] = $sectionsItemsArr;
    $arResult['SECTIONS'] = $sectionsArr;
}

$arParams = $component->applyTemplateModifications();

// Блокировка показа Вы смотрели если параметр установлен, если его не существует, присваиваем.
if (!isset($arParams['ACTIVE_BLOCK_YOU_SEE'])) {
    $arParams['ACTIVE_BLOCK_YOU_SEE'] = 'Y';
}