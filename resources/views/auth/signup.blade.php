@extends('layouts.app')

<!--open session in where we are redirected this route to home.blade that it's do carry it to main-->
@section('title', 'Signup')

@section('content')
<div class=" block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-5xl text-center font-bold">Sing Up</h1>
    <br>

    <form class="mt-4" method="post" action="">
        @csrf

        <label for="" class="text-lg  m-2 ">
            First name
        </label>
        <input type="text" class="border border-gray-200 rounded-md bg-200 w-full
        text-lg placeholder-gray-900 p-2 m-2 focus:bg-white" name="name" id="name" >
        
        
       
        <label for="" class="text-lg  m-2 ">
            Last name
        </label>
        <input type="text" class="border border-gray-200 rounded-md bg-200 w-full
        text-lg placeholder-gray-900 p-2 m-2 focus:bg-white" name="last" id="last" >
        

        

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

        

        <label for="" class="text-lg  m-2 ">
           Confirm Password
        </label>
        <input type="password" class="border border-gray-200 rounded-md bg-200 w-full
        text-lg placeholder-gray-900 p-2 m-2 focus:bg-white" name="password_confirmation" id="passwrod_confirmation">



        <button type="submit" class="rounded-md bg-red-500 w-full text-lg text-white font semibold p-2 my-3 hover:bg-red-600">
            Sign Up
        </button>



    </form>
</div>
<!--it is closing session and redirect to new pagination-->
    @endsection
     