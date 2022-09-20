<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return "Hello Focal-X Team From Root Page";
    }

    public function aboutPage()
    {
        return "Hello Focal-X Team From about Page";
    }
}
