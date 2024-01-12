<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TODOapp</title>

    <link rel="icon" src="iconhtml.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>


<body class="h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <a href="/"><img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Todoapp"></a>
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                 @guest
                  <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                  @endguest

                  @auth
                  <a href="/tasks" class="<?= urlIs('/tasks') ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">My Tasks</a>
                  @endauth
                  
                  <a href="/contacts" class="<?= urlIs('/contacts') ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium">Contacts</a>
                  
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              
              
      
                <!--
                  Dropdown menu, show/hide based on menu state.
      
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->

                <!-- @@@Profile dropdown -->

            <div class="mt-8 md:mt-0 flex items-center">
              
              @guest
              <a href="/register" class="<?= urlIs('/register') ? 'hidden' : 'text-white bg-blue-900 hover:bg-blue-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Register</a>
              <a href="/login" class="<?= urlIs('/login') ? 'hidden' : 'text-white bg-blue-900 hover:bg-blue-700 hover:text-white'?> rounded-md px-3 py-2 text-sm font-medium ml-4" aria-current="page">Login</a>
              @endguest 

              @auth 
              {{-- TODO add a link on the name to redirect to users profile --}}
             <div class="border rounded-full border-gray-600 flex items-center mr-4 px-0">
              
              <x-dropdown>
                  <x-slot name="trigger">
                    <div class="relative w-full ml-1 m-3 px-3">
                        <button type="button"  class=" items-center inline-block relative absolute flex bg-gray-800 text-sm focus:outline-none focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                          <span class="text-xs text-gray-400 font-bold uppercase pl-4 ml-0 mr-6">{{ auth()->user()->name}} </span>
                          <span class="absolute -inset-1.5"></span>
                          <span class="sr-only">Open user menu</span>
                          <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                      </div>
                  </x-slot>

                      <x-dropdown-item href="/" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Home</x-dropdown-item>
                      <x-dropdown-item href="/team" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Team</x-dropdown-item>
                      <x-dropdown-item href="/#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Settings</x-dropdown-item>
                      <x-dropdown-item href="/#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-3">Logout</x-dropdown-item>
              </x-dropdown>
            </div>
                <form method="POST" action="/logout">
                  @csrf

                  <button type="submit" class="text-gray-400 bg-gray-700 rounded-md px-3 py-2 text-sm font-medium hover:text-white ">Log out</button>
                </form>
              @endauth

              </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
          </div>
        </div>

        

      </nav>