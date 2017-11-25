<?php

Route::get('/', 'pagesController@home')->name('root_path');

Route::get('/about', 'pagesController@about')->name('about_path');
