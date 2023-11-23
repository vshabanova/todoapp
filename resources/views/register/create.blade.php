<x-nav/>
  
<x-main>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 border bg-gray-100">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
    
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
       
            <form class="space-y-6" action="/register" method="POST">
                @csrf

                <div>
                    <label 
                        for="username" 
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Full name
                    </label>
                    <div class="mt-2 p">
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            placeholder="Carla Smith" 
                            value="{{ old('name') }}"
                            required 
                            class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
        
                
                <div>
                    <label 
                        for="username" 
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Username
                    </label>
                    <div class="mt-2">
                        <input 
                            id="username" 
                            name="username" 
                            type="text" 
                            placeholder="carlasmith" 
                            value="{{ old('username') }}"
                            required 
                            class="block pl-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                            @error('username')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                    </div>
                </div>


                <div>
                    <label 
                        for="email" 
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >
                            Email address
                    </label>
                    <div class="mt-2">
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            placeholder="carla@smith.com" 
                            value="{{ old('email') }}"
                            required 
                            class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
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

                <div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label 
                                for="password_confirmation" 
                                class="block text-sm font-medium leading-6 text-gray-900"
                                >
                                    Confirm password
                            </label>
                        </div>
                        <div class="mt-2">
                            <input 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                type="password" 
                                required 
                                class="block pl-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                class="form-control"
                                >
                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                        </div>
                    <div>

                <button 
                    type="submit" 
                    class="flex w-full justify-center mt-8 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Sign in
                </button>

                </div>
        </form>
    
        <p class="mt-10 text-center text-sm text-gray-500">
            Already a member?
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"> Log in</a>
        </p>
        </div>
    </div>
  
</x-main>

<x-footer/>