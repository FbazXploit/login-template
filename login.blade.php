@extends('layouts.main')

@section('container')

<div class="px-3 sm:h-full lg:h-screen md:h-screen py-20">
  
  <h1 class="text-center mb-20 text-4xl"><i class="fas fa-sign-in-alt"></i> Login Page</h1>
  
  <div class="content-center justify-center">
    
    <div class="bg-blue-400 p-5 rounded-lg">
    
    @if(session()->has('error'))
      <div class="flex items-center bg-red-600 text-white text-sm font-bold px-4 py-3 rounded-md" role="alert">
        <i class="fill-current w-4 h-4 mr-2 fas fa-exclamation"></i>
        <p>{{ session('error') }}</p>
      </div>
    @endif
      
    @if(session()->has('success'))
      <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 rounded-md" role="alert">
        <i class="fill-current w-4 h-4 mr-2 fas fa-check"></i>
        <p>{{ session('success') }}</p>
      </div>
      @endif
      
      <form action="/login" method="post">
        @csrf
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('email') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="text" name="email" placeholder="Email" value="{{ old('email') }}" autofocus="">
        </div>
        @error('email')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        <div class="flex items-center border-b-2 dark:border-gray-400 border-gray-700 py-2 mt-3 @error('password') dark:border-red-600 border-red-600 @enderror">
          <input class="appearance-none bg-transparent border-none w-full text-black mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-none focus:ring-0" type="password" placeholder="Password" name="password" autofocus="" id="showpassword">
          <span class="flex-shrink-0 fas fa-eye buttonshowpass" onclick="checkpassword()"></span>
        </button>
        </div>
        @error('password')
          <span class="text-red-500 italic text-sm">{{ $message }}</span>
        @enderror
        
        <div class="mt-3 text-black">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" name="remember">
            <span class="ml-2">Remember Me</span>
          </label>
        </div>
        
        <div class="mt-3 text-black">
          <a href="{{ route('password.request') }}" class="hover:underline font-bold text-sm">Forgot Password ?</a>
          <span class="ml-5 font-bold text-sm">Don't have an account ? <a href="{{ route('register') }}" class="underline">Register</a></span>
        </div>
        <div class="mt-3 text-center">
          <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            Log in
          </button>
        </div>
      </form>
    </div>
    
  </div>
  
</div>

@endsection
