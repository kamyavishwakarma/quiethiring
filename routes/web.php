<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/jobs', function () {
    return view('frontend.jobs');
});

Route::get('/jobs/laravel-developer', function () {
    return view('frontend.job-details');
});

Route::get('/jobs/laravel-developer/apply', function () {
    return view('frontend.apply');
});
Route::get('/companies', function () {
    return view('frontend.companies');
});
Route::get('/freshers', function () {
    return view('frontend.freshers');
});
Route::get('/internships', function () {
    return view('frontend.internships');
});
Route::get('/internships/software-development-intern', function () {
    return view('frontend.internship-details');
});
Route::get('/about', function () {
    return view('frontend.about');
});
    