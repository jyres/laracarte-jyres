<?php

Route::get('/', 'pagesController@home')->name('root_path');

Route::get('/about', 'pagesController@about')->name('about_path');

Route::get('/contact', 'contactsController@create')->name('contact_path');
