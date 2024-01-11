<x-nav/>

<x-header>
    All Tasks
    <button class="inline-block flex text-sm border border-green-900 bg-green-300 p-2 mt-3 rounded hover:bg-green-600 hover:text-white"><a href="/tasks-new">+ Create a new task</a></button>
</x-header>
  
<x-main>
    <div class="border border-gray-700 rounded m-3 mb-80 p-6">
        <h2 class="text-xl font-semibold mb-4">Existing Tasks</h2>

        @if(count($tasks) > 0)
        <ul>
            @foreach($tasks as $task)
                @php
                    $taskColor = ''; // Default color
    
                    if ($task->deadline) {
                        $daysRemaining = now()->diffInDays(\Carbon\Carbon::parse($task->deadline), false);
                        $taskColor = $daysRemaining < 6 ? 'text-red-500' : '';
                    }
                @endphp
    
                <li class="border border-gray-900 bg-gray-100 hover:bg-gray-300 rounded px-8 pt-6 pb-4 m-4 {{ $taskColor }}">
                    <div class="text-left text-large mb-2 font-bold">{{ $task->title }}</div>
                    <div class="text-left">{{ $task->description }}</div>
                    @if($task->deadline)
                        <div class="text-sm text-right mt-6">
                            @if($daysRemaining < 6)
                                <div>Remaining: {{ $daysRemaining }} days </div>
                            @endif
                            <div>Deadline: {{ Carbon\Carbon::parse($task->deadline)->format('d-m-Y') }} </div>
                        </div>
                    @endif
                    
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