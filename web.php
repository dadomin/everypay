<?php

use Damin\Route;

Route::get("/", "MainController@index");
Route::get("/home", "HomeController@index");
Route::get("/logout", "LoginController@logout");
Route::get("/profile", "ProfileController@index");
Route::get("/guide", "PageController@guide");
Route::get("/cs", "PageController@faq");
Route::get("/cs/faq", "PageController@faq");
Route::get("/cs/notice", "PageController@notice");
Route::get("/terms", "PageController@terms");
Route::get("/privacy", "PageController@privacy");

Route::post("/register", "LoginController@register");
Route::post("/login", "LoginController@login");