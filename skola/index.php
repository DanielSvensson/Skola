<?php
//
// PHASE: BOOTSTRAP
//
define('SKOLA_INSTALL_PATH', dirname(__FILE__));
define('SKOLA_SITE_PATH', SKOLA_INSTALL_PATH . '/application');

require(SKOLA_INSTALL_PATH.'/src/CSkola/bootstrap.php');

$sk = CSkola::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$sk->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$sk->ThemeEngineRender();