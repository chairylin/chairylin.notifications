<?php
IncludeModuleLangFile(__FILE__);

if (class_exists("chairylin_notifications"))
    return;

Class chairylin_notifications extends CModule
{
    var $MODULE_ID = "chairylin.notifications";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function __construct()
    {
        $arModuleVersion = array();

        include(dirname(__FILE__) . "/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

        $this->MODULE_NAME = GetMessage("CHAIRYLIN_NOTIFICATIONS_INSTALL_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("CHAIRYLIN_NOTIFICATIONS_INSTALL_DESCRIPTION");

        //$this->PARTNER_NAME = "macte";
        //$this->PARTNER_URI = "http://mp.1c-bitrix.ru/";
//		echo $this->MODULE_NAME;
    }


    function DoInstall()
    {
        global $DB, $APPLICATION, $step;
        $APPLICATION->IncludeAdminFile(GetMessage("FORM_INSTALL_TITLE"),
        $_SERVER["DOCUMENT_ROOT"]."/local/modules/mymodule/install/step1.php");
    }

    function DoUninstall()
    {
        global $DB, $APPLICATION, $step;
        $APPLICATION->IncludeAdminFile(GetMessage("FORM_INSTALL_TITLE"), 
        $_SERVER["DOCUMENT_ROOT"]."/local/modules/mymodule/install/unstep1.php");
    }
}
?>