<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
include(GetLangFileName(dirname(__FILE__) . "/", "/.description.php"));


$psTitle = "Oplata";
$psDescription = "<a href=\"https://oplata.com\" target=\"_blank\">https://oplata.com</a>";

$array = array(
    'oplata_merchant',
    'oplata_secret_key',
    'oplata_price_currency',
    'oplata_server_callback_url',
    'oplata_response_url',
    'oplata_language'
);


$arPSCorrespondence = array(
    "MERCHANT" => array(
        "NAME" => GetMessage("OPLATA_MERCHANT"),
        "DESCR" => GetMessage("OPLATA_MERCHANT"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "SECURE_KEY" => array(
        "NAME" => GetMessage("OPLATA_SECURE_KEY"),
        "DESCR" => GetMessage("OPLATA_SECURE_KEY"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "PRICE_CURRENCY" => array(
        "NAME" => GetMessage("OPLATA_PRICE_CURRENCY"),
        "DESCR" => GetMessage("OPLATA_DESC_PRICE_CURRENCY"),
        "VALUE" => "CURRENCY",
        "TYPE" => "ORDER"
    ),
    "SERVER_CALLBACK_URL" => array(
        "NAME" => GetMessage("OPLATA_SERVER_CALLBACK_URL"),
        "DESCR" => GetMessage("OPLATA_DESC_SERVER_CALLBACK_URL"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "RESPONSE_URL" => array(
        "NAME" => GetMessage("OPLATA_RESPONSE_URL"),
        "DESCR" => GetMessage("OPLATA_DESC_RESPONSE_URL"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "LANGUAGE" => array(
        "NAME" => GetMessage("OPLATA_LANGUAGE"),
        "DESCR" => GetMessage("OPLATA_DESC_LANGUAGE"),
        "VALUE" => "RU",
        "TYPE" => ""
    ),
);
?>