<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmHomeController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function create() {}

    public function update() {}

    public function delete() {}

    public function rollback() {}
}
