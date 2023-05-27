<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $programs = Program::all();
        return view('admin.program.index', compact('programs'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $categories = Category::all();
        return view('admin.program.create', compact('categories'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $path = $request->img->store('programs', 'public');
        $program = Program::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'img' => 'storage/'.$path,
            'caption' => $request->caption
        ]);

        return redirect()->route('program.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Program $program)
    {
        $categories = Category::all();
        return view('admin.program.edit', compact('program', 'categories'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
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



        return redirect()->route('program.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('program.index');
    }
}
