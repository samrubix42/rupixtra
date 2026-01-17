<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'public.home')->name('home');
Route::livewire('/about', 'public.about')->name('about');
Route::livewire('/contact', 'public.contact')->name('contact');
Route::livewire('/services', 'public.service')->name('services');
Route::livewire('/service/{slug}', 'public.service-view')->name('service.view');
Route::livewire('/blog', 'public.blog')->name('blog');
Route::livewire('/blog/{slug}', 'public.blog-view')->name('blog.view');
Route::livewire('/calculator', 'public.calculator')->name('calculator');
Route::livewire('/loan-reviews', 'public.loan')->name('loan.reviews');
Route::livewire('/credit-cards', 'public.creditcard')->name('credit.cards');
Route::livewire('/mutual-funds', 'public.mutual-fund')->name('mutual.funds');
Route::livewire('/life-insurance', 'public.life-insurance')->name('life.insurance');
Route::livewire('/loan-details', 'public.loan-detail')->name('loan.details');
    