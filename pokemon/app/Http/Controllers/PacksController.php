<?php

namespace App\Http\Controllers;
class PacksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('Pokemon/Packs');
    }
}
