<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show(){
        return view('show');
    }

    public function create(){
        return "untuk tambah data";
    }

    public function edit($id){
        return view('edit', compact('id'));
    }

    public function update($id){
        return "untuk update data";
    }

    public function destroy($id){
        return "untuk hapus data";
    }
}
