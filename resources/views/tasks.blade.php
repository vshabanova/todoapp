<x-nav/>

<x-header>
    All Tasks
    <button class="inline-block flex text-sm border border-green-900 bg-green-300 p-2 mt-3 rounded hover:bg-green-600 hover:text-white"><a href="/tasks-new">+ Create a new task</a></button>
</x-header>

<x-main>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="border border-gray-700 rounded m-3 mb-80 p-6">
        <h2 class="text-xl font-semibold mb-4">Existing Tasks</h2>

        @if(count($tasks) > 0)
        <ul>

            {{-- ALL TASKS --}}
            @foreach((new \App\Http\Controllers\TaskController())->sortTasks() as $task)
                @php
                    $taskColor = ''; // Default color

                    if ($task->deadline) {
                        $daysRemaining = now()->diffInDays(\Carbon\Carbon::parse($task->deadline), false);
                        $taskColor = $daysRemaining < 6 ? 'text-red-500' : '';
                    }
                @endphp

                <li class="border border-gray-900 bg-gray-100 hover:bg-gray-300 rounded px-8 pt-6 pb-4 m-4 {{$taskColor}}
                    @if($task->completed) bg-green-300 hover:bg-green-400 @endif"
                    onclick="completeTask({{ $task->id }})">

                    {{-- Clickable checkmark --}}
                    <div class="task-checkmark mb-3 " onclick="completeTask({{ $task->id }})">
                        {{ $task->completed ? '✔' : '◻' }}
                    </div>
                    <div class="text-left text-large mb-2 font-bold">{{ $task->title }}</div>
                    <div class="text-left mb-6">{{ $task->description }}</div>
                    @if($task->deadline)
                        <div class="text-sm text-right mt-6">
                            <div>Remaining: {{ $daysRemaining }} days </div>
                            <div>Deadline: {{ Carbon\Carbon::parse($task->deadline)->format('d-m-Y') }} </div>
                        </div>
                    @endif
                    <div class="flex justify-between">
                        <button 
                            onclick="event.stopPropagation(); window.location.href='{{ route('tasks.edit', ['task' => $task->id]) }}'" 
                            class="button border rounded border-black text-black bg-gray-200 px-5 py-2 mb-3 hover:bg-gray-100"
                            >Edit
                        </button>    
                        
                        <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                            @csrf
                            @method('DELETE')
                
                            <button 
                                type="submit"
                                onclick="event.stopPropagation(); return confirm('Are you sure you want to delete this task?');"
                                class="button rounded border border-red-500 text-black bg-red-200 px-3 py-2 ml-4 mt-2 hover:text-white hover:bg-red-400"
                            >Delete
                            </button>
                        </form>
                </div>
                </li>
                
            @endforeach
        </ul>

        @else
            <p class="mb-5">No tasks found so far.</p>
            <p class="mb-5">It's time to add them!</p>
        @endif
    </div>
</x-main>

<x-footer/>
