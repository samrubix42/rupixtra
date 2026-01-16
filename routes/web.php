<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'public.home')->name('home');
Route::livewire('/about', 'public.about')->name('about');
Route::livewire('/contact', 'public.contact')->name('contact');
Route::livewire('/services', 'public.services')->name('services');
