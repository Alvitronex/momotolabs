@extends('layouts.app')


@section('title', 'Signin')

@section('content')

<div>
    <img src="vacancy.png" alt="">
</div>
<div class=" block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-5xl text-center font-bold">Sing In</h1>
    <br>

    <form class="mt-4" method="post" action="">
        @csrf

        <label for="" class="text-lg  m-2 ">
        
            Email
        </label>
        <input type="email" class="border border-gray-200 rounded-md bg-200 w-full
        text-lg placeholder-gray-900 p-2 m-2 focus:bg-white" name="email" id="email" >
        <label for="" class="text-lg  m-2 ">
            Password
        </label>
        <input type="password" class="border border-gray-200 rounded-md bg-200 w-full
        text-lg placeholder-gray-900 p-2 m-2 focus:bg-white" name="password" id="passwrod">
  <!--For look at alert-->
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-600 p-2 my-2">{{ $message }}</p>
        @enderror
        


        <button type="submit" class="rounded-md bg-red-500 w-full text-lg text-white font semibold p-2 my-3 hover:bg-red-600">
            Sign In
        </button>



    </form>
</div>

    @endsection
    