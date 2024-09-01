<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = '/Login/Login';
$route['loginUser'] = '/Login/LoginUser';
$route['signup'] = '/Register/Register';
$route['signupUser'] = '/Register/RegisterUser';
$route['home'] = '/Home/index';
$route['logout'] = '/Login/logout';
$route['dashboard'] = '/Dashboard/index';
$route['addForm'] = '/BlogForm/index';
$route['addBlog'] = '/BlogForm/add';
$route['updateBlog/(:num)'] = 'BlogForm/edit/$1';
$route['deleteBlog/(:num)'] = 'BlogForm/delete/$1';

