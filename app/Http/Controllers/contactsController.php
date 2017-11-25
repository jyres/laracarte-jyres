<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    public function create(){
    	return view('contacts/contact');
    }
}
