<x-nav/>

<x-header>
   
</x-header>
  

<x-main>
        <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8 border bg-gray-100">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-9 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Todoapp">
            <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in</h2>
            </div>
        
            <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
           
                <form class="space-y-6" action="/login" method="POST">
                    @csrf
                    
                    <div>
                        <label 
                            for="email" 
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >
                                Email
                        </label>
                        <div class="mt-2">
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                value="{{ old('email') }}"
                                required 
                                class="block pl-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                >
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
    
    
                    <div>
                        <div class="flex items-center justify-between">
                            <label 
                                for="password" 
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >
                                    Password
                            </label>
                        </div>
                        <div class="mt-2">
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                class="form-control"
                                >
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                        </div>

                    <button 
                        type="submit" 
                        class="flex w-full justify-center mt-8 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            Log in
                    </button>
                
                    </div>
            </form>
        
            <p class="mt-10 text-center text-sm text-gray-500">
                Forgot password?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"> Help</a>
            </p>
            </div>
        </div>
      
    </x-main>

<x-footer/>