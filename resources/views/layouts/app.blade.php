
<!--This panel is for redirect sign in -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
           <p class="text-2xl font-bold">Welcome!!</p> 
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if (auth()->check())
        <li class="mx-8">
          <p class="text-xl">Welcome <b>{{ auth()->user()->last}}</b> </p>
        </li>
      
        <li>
            <a href="{{ route('signin.destroy')}}" class="font-semibold
             py-2 px-4 rounded-md bg-red-500 hover:bg-red-600"> Log out</a>
        </li>
        @else
        <li class="mx-6">
          <a href="{{ route('signin.index')}}" class="font-semibold 
          hover:bg-indigo-700 py-3 px px-4 rounded">Sign In</a>
      </li>
      <li>
          <a href="{{ route('signup.index')}}" class="font-semibold
          border-2 border-while py-2 px-4 rounded-md hover:bg-white
          hover:text-indigo-700">Sign Up</a>

        @endif
        </ul>
    </nav>

   @yield('content')



  </body>
</html>