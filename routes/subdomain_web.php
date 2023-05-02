<?php
use Illuminate\Support\Facades\Route;

// Subdomain routes

Route::get('/',function(){
    return 'subdomain';
});

Route::get('/test',function(){
    return 'test subdomain';
});