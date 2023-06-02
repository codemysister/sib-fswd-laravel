<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required|min:10',
            'img' => 'mimes:png,jpg',
            'status' => 'required'
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

        $path = $request->img->store('sliders', 'public');
        $slider = Slider::create([
            'caption' => $request->caption,
            'img' => 'storage/'.$path,
            'status' => $request->status
        ]);

        return redirect()->route('slider.index');
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
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required|min:10',
            'img' => 'mimes:jpeg,jpg,png',
            'status' => 'required'
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


        if($request->hasFile('img')){
            Storage::delete($slider->img);
            $path = $request->img->store('sliders', 'public');
            $slider->update([
                'caption' => $request->caption,
                'img' => 'storage/'.$path,
                'status' => $request->status
            ]);

        }else{
            $slider->update([
                'caption' => $request->caption,
                'status' => $request->status
            ]);
        }



        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
