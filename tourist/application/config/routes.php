<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MainController';
$route['home'] = 'MainController/home';
$route['historic'] = 'MainController/historic';
$route['popular'] = 'MainController/popular';
$route['picnic'] = 'MainController/picnic';
$route['adventure'] = 'MainController/adventure';
$route['ex'] = 'MainController/extras';
$route['about'] = 'MainController/about';
$route['contact'] = 'MainController/contact';
$route['adminpicnic'] = 'MainController/adminpicnic';
$route['placeadmin'] = 'MainController/adminplace';
$route['placeprocess'] = 'MainController/placeprocess';
$route['profile'] = 'MainController/profile';
$route['adminhistoric'] = 'MainController/adminhistoric';
$route['adminacco'] = 'MainController/adminacco';
$route['adminadventure'] = 'MainController/adminadventure';
$route['admingiven'] = 'MainController/admingiven';
$route['adminnews'] = 'MainController/adminnews';
$route['adminpop'] = 'MainController/adminpopular';
$route['pppp'] = 'MainController/profilecheck';
$route['header'] = 'MainController/header';
$route['footer'] = 'MainController/footer';
$route['searchprocess'] = 'MainController/searchprocess';
//



$route['login'] = 'MainController/login';
//$route['incorrectlogin'] = 'MainController/incorrectlogin';

$route['hadmin'] = 'MainController/hadmin';

$route['signup'] = 'MainController/signup';
$route['signupprocess'] = 'MainController/signupprocess';
$route['picnicprocess'] = 'MainController/picnicprocess';
$route['loginprocess'] = 'MainController/loginprocess';
$route['historicprocess'] = 'MainController/historicprocess';
$route['accoprocess'] = 'MainController/accoprocess';
$route['adventureprocess'] = 'MainController/adventureprocess';
$route['givenprocess'] = 'MainController/givenprocess';
$route['newsprocess'] = 'MainController/newsprocess';
$route['popularprocess'] = 'MainController/popularprocess';
$route['contactprocess'] = 'MainController/contactprocess';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
