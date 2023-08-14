<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index', ['message' => 'Hello form laravel']);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
