<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApiProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diambil',
            'data' => $programs
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title' => 'required|min:10',
            'img' => 'mimes:jpeg,jpg,png',
            'caption' => 'required|min:10'
        ], [
            'required' => '* Input :attribute harus diisi.',
            'min' => '* Input :attribute minimal 10 karakter',
            'mimes' => '* Input :attribute harus bertipe .png atau .jpg'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $path = $request->img->store('programs', 'public');
        $program = Program::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'img' => 'storage/'.$path,
            'caption' => $request->caption
        ]);

         return response()->json([
            'status' => 200,
            'message' => 'Data berhasil ditambahkan',
            'data' => $program
        ]);
    }

    public function update(Request $request, Program $program)
    {

        if($request->hasFile('img')){
            Storage::delete($program->img);
            $path = $request->img->store('programs', 'public');
            $program->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'img' => 'storage/'.$path,
                'caption' => $request->caption
            ]);

        }else{
            $program->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'caption' => $request->caption
            ]);
        }


        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diupdate',
            'data' => $program
        ]);
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil dihapus',
            'data' => $program
        ]);
    }
}
