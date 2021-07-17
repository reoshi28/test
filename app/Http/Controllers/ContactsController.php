<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('confirm', ['inputs' => $inputs]);
    }
    public function process()
    { }

    public function complete()
    {
        return view('complete');
    }
}
