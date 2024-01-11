<x-nav/>

<x-header>
    All Tasks
    <button class="inline-block flex text-sm border border-green-900 bg-green-300 p-2 mt-3 rounded hover:bg-green-600 hover:text-white"><a href="/tasks-new">Create a new task</a></button>
</x-header>
  
<x-main>
    <div class="border border-gray-700 rounded m-3 mb-80 p-6">
        <h2 class="text-xl font-semibold mb-4">Existing Tasks</h2>

        @if(count($tasks) > 0)
            <ul>
                @foreach($tasks as $task)
                    <li class="border border-gray-900 bg-gray-100 hover:bg-gray-300 rounded px-8 pt-6 pb-4 m-4"
                        ><div class="text-left text-large mb-2 font-bold">{{ $task->title }} </div>
                        <div class="text-left">{{ $task->description }}</div>
                        <div class=" text-sm text-right mb-0 mt-6">{{ $task->created_at}}</div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="mb-5">No tasks found.</p>
        @endif
        <div class="mt-6">
            <a href="/contacts" class="border border-gray-400 text-xs text-gray-500 rounded bg-gray-200 hover:bg-gray-600 hover:text-white p-2 mt-15"> 
                Click for more info
            </a>
        </div>
    </div>
</x-main>

<x-footer/>