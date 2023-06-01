@extends('auth.layout')
@section('content')
<div class="relative mx-auto z-0 flex max-w-sm flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border mt-10" >
    <div class="p-6 mb-0 text-center w-1/2 bg-white border-b-0 rounded-t-2xl">
      <h1 class="text-3xl text-left font-bold">Daftar</h1>
    </div>

    <div class="flex-auto p-6">
      <form role="form text-left" action="{{url('register')}}" method="POST">
        @csrf
        <div class="mb-4">
          <input type="text" name="name" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama" value="{{old('name')}}"/>
        </div>

        <div class="mb-4">
          <input type="email" name="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{old('email')}}" />
        </div>
        <div class="mb-4">
          <input type="password" name="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" value="{{old('password')}}"/>
        </div>

        <div class="mb-4">
          <input type="password" name="password_confirmation" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password Konfirmasi" aria-label="Password" aria-describedby="password-addon" value="{{old('password_confirmation')}}"/>
        </div>

        <div class="mb-4">
          <select name="role" id="role" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{old('role')}}">
            <option selected>Pilih Role</option>
            <option value="user">User</option>
            <option value="staff">Staff</option>
          </select>
        </div>

        <div class="text-center">
            <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Daftar</button>

        </div>
        <p class="mt-6 mb-0 leading-normal text-center text-sm">Sudah punya akun? <a href="{{route('login')}}" class="font-bold text-slate-700">Login</a></p>
      </form>
    </div>
  </div>
@endsection
