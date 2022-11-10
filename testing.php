<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';

//error_reporting(E_ALL);
//ini_set('display_errors','On');
define('SMARTY_DIR', '/usr/local/lib/php/Smarty-v.e.r/libs/');
//$smarty->debugging_ctrl = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'URL' : 'NONE';
$smarty = new Smarty; // declare object in Smarty 
$smarty->allow_php_templates = true;
$smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT);

//$smarty->auto_literal = false;
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("Name", "Surya Pratap Singh"); // declaring and assigning value to a variable 

// Creating array with key value pair 

$smarty->assign(
        'ContactInfo1',
        array(
                "UserID" => "@Surya.Ucertify",
                "email" => "surya.pratap@ucertify.com",
                "phone" => array(
                        "ph1" => "9557534363",
                        "ph2" => "8394098383"
                )
        )
);

$smarty->assign(
        'ContactInfo2',
        array(
                "@Surya.Ucertify",
                "surya.pratap@ucertify.com",
                array(
                        "9557534363",
                        "8394098383"
                )
        )
);
$smarty->assign("book1", "Let Us C");
$smarty->assign("book2", "rudest book ever");
$smarty->assign("book3", "Prime obsession");
$smarty->assign(
        "Passage",
        "Smarty is a template engine for PHP.
         More specifically.
         it facilitates a manageable2 way to separate application logic and content from its presentation. This is best described in a situation where the application programmer and the template designer play different roles, or in most cases are not the same person."
);

$smarty->assign("employeeID"," " );
$smarty->assign('EmailAddress','surya.pratap@ucertify.com');



$smarty->assign("foo", 66);

$smarty->assign('start',1);
$smarty->assign('to',5);

$smarty->assign("arr" , array(1,2,3,4,5,6,7,8));

$smarty->assign('cust_ids', array(1000,1001,1002,1003));
$smarty->assign('cust_names', array(
                                'Joe Schmoe',
                                'Jack Smith',
                                'Jane Johnson',
                                'Charlie Brown')
                              );
$smarty->assign('customer_id', 1001);

$later = strtotime('+20 day');
$smarty->assign('later', $later);


$smarty->display('template/testing.tpl');

$smarty->testInstall();