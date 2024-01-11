<x-nav/>

<x-header>
    Tasks
</x-header>
  
<x-main>
    
    <div class="border border-black rounded p-5 inline-block bg-yellow-300">
        <form method="POST" action="/tasks">
            @csrf
            <div>
                <label 
                    for="title" 
                    class="block text-m font-medium leading-6 text-gray-900"
                    >
                        Title
                </label>
                <div class="mt-2">
                    <input 
                        id="title" 
                        name="title" 
                        type="text" 
                        value="{{ old('title') }}"
                        placeholder="Homework till 27.12"
                        required 
                        class="block pl-4  w-full bg-yellow-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        >
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <br>
            <div>
                <label 
                    for="description" 
                    class="block text-m font-medium leading-6 text-gray-900">
                    Description
                </label>
                <div class="mt-2">
                    <input
                        id="description" 
                        name="description" 
                        type="text" 
                        value="{{ old('description') }}"
                        placeholder="Read 30 pages in Spanish "
                        required 
                        class="block pl-4 pb-9 w-full bg-yellow-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        >
            
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <br>
            <button 
                type="submit" 
                class=" border border-indigo-300 flex w-full justify-center mt-1 rounded-md bg-yellow-100 px-3 py-1.5 text-sm font-semibold leading-6 text-indigo-500 hover:text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >
                Create task
            </button>
            
        </form>
    </div>

    
    <div class="border border-gray-700 m-3  p-6">
        <form>
            <p class="mb-5">Existing tasks coming soon...</p>
            <a href="/contacts" class="border border-gray-800 rounded bg-gray-400 hover:bg-gray-600 p-2 mt-6"> 
                Click for more info
            </a>
        </form>
    </div>
</x-main>

<x-footer/>