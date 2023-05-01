<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Done</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a class="text-blue-500 hover:text-blue-700" href="{{route('task.edit', ['task' => $task->id])}}">{{$task->id}}</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$task->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">@if ($task->done == 1) o @else x @endif</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <form action="{{route('task.destroy', ['task' => $task->id])}}" method="POST" onSubmit="return submitCheck()">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[1.25rem] w-[1.25rem] rounded-full border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">x</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // 削除ボタンが押下されたら確認メッセージを表示
    function submitCheck(){
        if(!window.confirm('本当に削除しますか？')) {
            return false;
        }
    }
</script>