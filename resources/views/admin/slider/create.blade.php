@extends('admin.layout.layout')

@section('content')

<div class="container">


    <div class="max-w-xl mx-auto mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h1 class="font-bold text-2xl mb-6">Tambah Slider</h1>

        @error('caption')
        <div class="text-red-400 font-semibold py-2">
            {{ $errors->first('caption') }}
        </div>
        @enderror

        @error('img')
        <div class="text-red-400 font-semibold py-2">
            {{ $errors->first('img') }}
        </div>
        @enderror

        @error('status')
        <div class="text-red-400 font-semibold py-2">
            {{ $errors->first('status') }}
        </div>
        @enderror

        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="caption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Caption</label>
                <input type="text" id="caption" name="caption" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="bla bla.." required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="img">Gambar</label>
                <input name="img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="img" type="file">
            </div>

            <div class="mb-6">

                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Pilih status</option>
                    <option value="0">nonaktif</option>
                    <option value="1">aktif</option>
                </select>

            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</div>
@endsection
