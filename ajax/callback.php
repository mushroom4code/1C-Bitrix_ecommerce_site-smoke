<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use B01110011ReCaptcha\BitrixCaptcha;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Anonymized\Telegram\Container;
use Anonymized\Telegram\Data\ProxySettings;
use Anonymized\Telegram\Service\Notification\TelegramNotification;
use Anonymized\Telegram\Data\SettingsForm;
use Anonymized\Telegram\Service\NotificationService;
use Anonymized\Telegram\Exception\SendException;
use Anonymized\Telegram\Event\SampleEvent;

CModule::IncludeModule("iblock");
Loader::includeModule('main');

if (class_exists('B01110011ReCaptcha\BitrixCaptcha')) {
    $res = BitrixCaptcha::checkSpam();
    if ($res === false) {
        echo 'Ошибка CAPTCHA';
        die;
    }
}

$PHONE = htmlspecialcharsbx($_REQUEST['PHONE']);

if ($PHONE != '') {
    $el = new CIBlockElement;
    $arElement = [
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => IBLOCK_CALLBACK_ID,
        'NAME' => $PHONE,
    ];

    $MESAGE_EMAIL = 'Телефон: ' . $PHONE . '<br>';
    $result = $el->add($arElement);
    if (intval($result) > 0) {
        $arEventFields = [
            'MESAGE' => $MESAGE_EMAIL,
            //'EMAIL' => $EMAIL,
            'TITLE' => 'Ваше сообщение принято',
            'PHONE' => $PHONE,
        ];

        CEvent::SendImmediate("SEND", SITE_ID, $arEventFields);

        if (Loader::includeModule(<<Заменено для анонимности>>)) {

            $response = Context::getCurrent()->getResponse();
            $response->addHeader('Content-Type', 'application/json');
            $set = new ProxySettings();
            try {
                $tgmToken = <<Заменено для анонимности>>;
                $tgmChatId = <<Заменено для анонимности>>;

                $notification = (new TelegramNotification($tgmToken))->to($tgmChatId);

                /** cat catch (SendException $e) ch (SendException $e)
                 * @var $notificator NotificationService
                 */
                $notificator = Container::get(NotificationService::class);

                $sampleEvent = SampleEvent::make([
                    'CHAT_ID' => $tgmChatId,
                    'PROXY' => $set->getDSN(),
                ]);
                //Шаблон сообщения
                $message = '<b>Форма:</b> Форма заказа обратного звонка' . PHP_EOL;
                $message .= '<b>Телефон: </b>' . $PHONE . PHP_EOL;
                $messages = $sampleEvent->convertNew($message);

                $notificator->with($notification)->send($messages);
            } catch (SendException $e) {
                echo 'Ошибка отправки сообщения из-за некорректных настроек модуля';
            } catch (\Throwable $e) { //print_r($e);
                echo 'Ошиыбка отправки сообщения';
            }
        }
        echo 1;
    } else
        echo $el->LAST_ERROR;
} else {
    echo 'Ошибка';
}
