<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   
    public function index() {
        return view('html101');
    }

    public function store(Request $request) {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $fileName);
            $data['photo'] = $fileName;
        }

        return view('result', compact('data'));
    }
}
