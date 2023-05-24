@extends('admin.layout.layout')

@section('content')

    <div class="container">
        <a href="" class="">
            <button class="p-2 my-2 bg-blue-500 rounded text-white">Tambah</button>
        </a>
        <div class="card">
            <div class="card-header">Kelola User</div>
            <div class="card-body">

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$user['nama']}}
                </td>

                <td class="px-6 py-4">
                    {{$user['role']}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

            </div>
        </div>

    </div>
@endsection
