<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @var  CAllMain|CMain $APPLICATION */
$APPLICATION->SetTitle("Адреса магазинов");
use Bitrix\Conversion\Internals\MobileDetect;

$mobile = new MobileDetect();
?>
    <div id="box_address" class="mb-5">
        <h1 class="mb-5"><b>Адреса магазинов</b></h1>
        <?php if (!$mobile->isMobile()) { ?>
            <section class="box_map mb-5">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A<<Заменено для анонимности>>&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true">
                </script>
            </section>
        <?php } else { ?>
            <section class="box_map_mobile mb-5">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A<<Заменено для анонимности>>&amp;width=320&amp;height=240&amp;lang=ru_RU&amp;scroll=true">
                </script>
            </section>
        <?php } ?>
        <h5 class="mb-5"><b>Москва и МО</b></h5>
        <div class="row d-flex row_section justify-content-between">
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3 ">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
            <div class="box_text_business mb-3 col-lg-3 col-md-3 col-12 mr-3">
                <div class="d-flex row_section mb-3 mr-2 box_row">
                            <span class="d-flex align-items-center mr-2 flex-row">
                                <i class="fa fa-circle header_icon mr-1" aria-hidden="true"></i>
                                 <i class="fa fa-circle header_icon" aria-hidden="true"></i>
                            </span>
                    <b class="text_delivery"><<Заменено для анонимности>></b>
                </div>
                <div class="d-flex flex-column justify-content-between align-content-between">
                    <span class="mb-3 text_delivery">Телефон: <<Заменено для анонимности>></span>
                    <span class="mb-3 text_delivery"> Время работы: ПН-ВС 11:00-23:00</span>
                </div>
            </div>
        </div>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>