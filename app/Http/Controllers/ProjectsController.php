<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $data = DB::table('projects')->get();

        return view('index', ['data' => $data]);
    }

    public function insert()
    {

        return view('insert');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
