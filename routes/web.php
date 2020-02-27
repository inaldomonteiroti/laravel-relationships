<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->get('one-to-one','OneToOneController@oneToOne');
$this->get('one-to-one-inverse','OneToOneController@OneToOneInverse');
$this->get('one-to-one-insert','OneToOneController@OneToOneInsert');

$this->get('one-to-many','OneToManyController@OneToMany');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->get('one-to-one','OneToOneController@oneToOne');
$this->get('one-to-one-inverse','OneToOneController@OneToOneInverse');
$this->get('one-to-one-insert','OneToOneController@OneToOneInsert');

$this->get('one-to-many','OneToManyController@OneToMany');
$this->get('many-to-one','OneToManyController@ManyToOne');
$this->get('one-to-many-two','OneToManyController@OneToManyTwo');
$this->get('one-to-many-insert','OneToManyController@OneToManyInsert');
$this->get('one-to-many-insert-two','OneToManyController@OneToManyInsertTwo');

$this->get('has-many-through','OneToManyController@HasManyThrough');

Route::get('/', function () {
    return view('welcome');
});


