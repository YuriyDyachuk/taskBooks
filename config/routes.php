<?php

use taskBooks\Route;

Route::add('^films/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Films', 'action' => 'view']);

//admin
Route::add('^admin$',['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Route::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

//Default
Route::add('^$', ['controller' => 'Main', 'action' => 'index']);
Route::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

