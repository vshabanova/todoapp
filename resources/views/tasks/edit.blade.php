<x-nav/>

<x-header>
    Edit Task
</x-header>

<x-main>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PATCH')
        <!-- Your form fields go here -->
        <!-- Use the $task variable to pre-fill the form fields with existing task data -->
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
                    value="{{ old('title', $task->title )}}"
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
                    value="{{ old('description', $task->description) }}"
                    required 
                    class="block pl-4 pb-9 w-full bg-yellow-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    >
        
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <br>
        <div>
            <label for="deadline" class="block text-m font-medium leading-6 text-gray-900">
                Deadline (optional)
            </label>
            <div class="mt-2">
                <input
                    id="deadline" 
                    name="deadline" 
                    type="date" 
                    value="{{ old('deadline', $task->deadline) }}"
                    class="block pl-4 w-full bg-yellow-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                >
                @error('deadline')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit"
                class=" border border-indigo-300 flex w-full justify-center mt-1 rounded-md bg-yellow-100 px-3 py-1.5 text-sm font-semibold leading-6 text-indigo-500 hover:text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >Update
        </button>
    </form>

</x-main>

<x-footer/>