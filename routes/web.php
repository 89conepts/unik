<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::get('/add-product', function () {
    return view('backend.add-product');
});


Route::get('/category-list', function () {
    return view('backend.category-list');
});


Route::get('/edit-page', function () {
    return view('backend.edit-page');
});

Route::get('/new-page', function () {
    return view('backend.new-page');
});


Route::get('/add-new-user', function () {
    return view('backend.add-new-user');
});



Route::get('/gallery', function () {
    return view('backend.gallery');
});


Route::get('/list-page', function () {
    return view('backend.list-page');
});


Route::get('/login', function () {
    return view('backend.login');
});


Route::get('/new-category', function () {
    return view('backend.new-category');
});

Route::get('/product-list', function () {
    return view('backend.product-list');
});


Route::get('/all-roles', function () {
    return view('backend.all-roles');
});

Route::get('/create-role', function () {
    return view('backend.create-role');
});

Route::get('/all-user', function () {
    return view('backend.all-user');
});



