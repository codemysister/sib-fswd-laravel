@extends('admin.layout.layout')

@section('content')

<div class="container">


    <div class="max-w-xl mx-auto mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h1 class="font-bold text-2xl mb-6">Edit Program</h1>
        <form action="{{route('program.update', $program->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">

                <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @selected($program->category_id == $category->id)>{{$category->name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title</label>
                <input type="text" id="title" name="title" value="{{$program->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="admin..." required>
            </div>

            <div class="mb-6">
                <label for="caption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Caption</label>
                <input type="text" id="caption" name="caption" value="{{$program->caption}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="admin..." required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="img">Gambar</label>
                <input name="img" value="{{$program->img}}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="img" type="file">
            </div>



            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</div>
@endsection
