<?php

namespace Codich\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function Home(){
    	return View('home');
    }

	Public function servicios(){
    	return View('servicios');
    }

	Public function administrador(){
    	return View('admin');
    }
}
