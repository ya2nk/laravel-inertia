<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }
    
    public function dashboard()
    {
        $items = ['item1','item2'];
        return Inertia::render('Dashboard',compact('items'));
    }
    
    public function settings()
    {
        return Inertia::render('Settings');
    }
}
