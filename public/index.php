<?php

use app\database\Connection;
use app\libraries\SiteTemplate;

require '../vendor/autoload.php';

$blog = new SiteTemplate;

$connection = Connection::getConnection();

$prepare = $connection->prepare('select * from users');
$prepare->execute();
$users = $prepare->fetchAll();

$blog->assign(['name' => 'Alexandre', 'age' => 40, 'users' => $users]);
$blog->display('home.tpl');

// $smarty = new Smarty();
// $smarty->setTemplateDir(VIEWS);
// $smarty->setConfigDir(VIEWS . DIRECTORY_SEPARATOR . 'configs');
// $smarty->setCompileDir(VIEWS . DIRECTORY_SEPARATOR . 'templates_c');
// $smarty->setCacheDir(VIEWS . DIRECTORY_SEPARATOR . 'cache');

// $smarty->assign('name', 'Alexandre');
// $smarty->display('contact.tpl');
