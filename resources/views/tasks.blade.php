
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
            
    {{-- TASKS WITH DEADLINES --}}
        @foreach($tasks->whereNotNull('deadline')->sortBy('deadline') as $task)
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
                <div class="task-checkmark " onclick="completeTask({{ $task->id }})">
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
                <!--NOT FINISHED --><a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="button border border-black px-3 py-2 hover:bg-gray-200 mt-5">Edit Task</a>
            </li>
        @endforeach

    {{-- TASKS WITHOUT DEADLINES --}}
            @foreach($tasks->sortBy(function($task) {
                    // Sort by days remaining (in ascending order), completed status (in ascending order), and created_at (in descending order)
                    return [
                        
                        'completed' => $task->completed,
                        'created_at' => $task->created_at->timestamp,
                        
                    ];
                }) as $task)
                @if (!$task->deadline)
                    <li class="border border-gray-900 bg-gray-100 hover:bg-gray-300 rounded px-8 pt-6 pb-4 m-4 {{$taskColor}}
                        @if($task->completed) bg-green-300 hover:bg-green-400 @endif"
                        onclick="completeTask({{ $task->id }})">
                    
                        {{-- Clickable checkmark --}}
                        <div class="task-checkmark " onclick="completeTask({{ $task->id }})">
                            {{ $task->completed ? '✔' : '◻' }}
                        </div>
                        <div class="text-left text-large mb-2 font-bold">{{ $task->title }}</div>
                        <div class="text-left mb-6">{{ $task->description }}</div>
                        
                        <!--NOT FINISHED --><a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="button border border-black px-3 py-2 hover:bg-gray-200 mt-5">Edit Task</a>
                    </li>
                @endif
            @endforeach
        </ul>

        
    @else
        <p class="mb-5">No tasks found so far.</p>
        <p class="mb-5">It's time to add them!</p>
    @endif
    </div>
</x-main>

<x-footer/>