@extends('layouts.main')

@section('container')

<div class="px-3 sm:h-full lg:h-screen md:h-screen py-20">
  
  <h1 class="text-center mb-20 text-4xl"><i class="fas fa-user-plus"></i> Register Page</h1>
  
  <div class="content-center justify-center">
    
    <div class="bg-blue-300 p-5 rounded-lg">
      <form action="/register" method="post">
        @csrf
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('name') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="text" name="name" placeholder="Name" value="{{ old('name') }}"  autofocus="">
        </div>
        @error('name')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('email') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="text" name="email" placeholder="Email" value="{{ old('email') }}"  autofocus="">
        </div>
        @error('email')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('password') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="password" placeholder="Password"  autofocus="" name="password" id="showpassword">
          <span class="flex-shrink-0 fas fa-eye buttonshowpass" onclick="checkpassword()"></span>
        </button>
        </div>
        @error('password')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('password_confirmation') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="password" placeholder="Confrimation Password"  autofocus="" name="password_confirmation" id="showpasswordconfirm">
          <span class="flex-shrink-0 fas fa-eye buttonshowpassconfirm" onclick="checkpasswordconfirm()"></span>
        </button>
        </div>
        @error('password_confirmation')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        <div class="mt-3 text-black">
          <span class="font-bold text-sm">Already have an account ? <a href="{{ route('login') }}" class="underline">Login</a></span>
        </div>
        <div class="mt-3 text-center">
          <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Register
          </button>
        </div>
      </form>
    </div>
    
  </div>
  
</div>

@endsection
