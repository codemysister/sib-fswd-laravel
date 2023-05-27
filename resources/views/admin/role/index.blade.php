@extends('admin.layout.layout')

@section('content')

<div class="container">


    <!-- Modal toggle -->
    <a href="{{route('role.create')}}">
        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Tambah
        </button>
    </a>


    <div class="card mt-5">
        <div class="card-header">Kelola Role</div>
        <div class="card-body">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($roles as $role)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$loop->iteration}}
                            </td>

                            <td class="px-6 py-4">
                                {{$role->name}}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{route('role.edit', $role->id)}}">
                                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
                                </a>

                                <form class="inline" action="{{route('role.destroy', $role->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" onclick="confirm('apakah anda yakin ingin menghapus role ini ? ')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>

                                </button>
                            </form>

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
