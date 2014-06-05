<?php

require_once '../../../appConfig.php';

require_once BASEPATH . COREPHP . 'App2.class.php';
require_once BASEPATH . COREPHP . 'DB.class.php';

$a = new App(
        $id = "",
        $title = "MotherMayI - Permissions Management",
        $template = 'App2',
        $class = '',
        $js = "",
        $jslibs = "",
        $css = "",
        $csslibs = "apps.css",
        $pageTitle = "MotherMayI - Permissions Management",
        $pageSubTitle = "",
        $header = 'apps',
        $nav = 'navDefault',
        $footer = 'wo',
        $content = "indexContent",
        $appID = ""
);

if(THISSERVER == 'DEV'){
        $a->displayApp();
} else {
        $role = $a->getRoles();
        if ($role[0]['ROLES_NAME'] === 'APP_USER') {
                $a->displayApp();
        } else {
                echo "Sorry, you don't have the right access.";
        }
}


?>
