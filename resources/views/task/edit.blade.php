<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5">
                    <form action="{{route('task.update', ['task' => $task->id])}}" method="post">
                        @csrf @method('PATCH')
                        {{-- タスクの名前の入力欄 --}}
                        <label for="hs-input-with-add-on-url" class="block text-sm text-gray-700 font-medium dark:text-white">Task Name</label>
                        <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Enter new task name here." value="{{$task->name}}" required autofocus>
                        {{-- タスク完了チェックボックス --}}
                        <label for="hs-checkbox-in-form" class="flex mt-3 p-3 w-full bg-white border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox" id="done" name="done" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" @if($task->done == 1) checked @endif>
                            <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Done</span>
                        </label>
                        {{-- 編集ボタン --}}
                        <button type="submit" class="mt-3 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Update
                        </button>
                        {{-- キャンセルボタン --}}
                        <button type="button" onclick="location.href='{{route('dashboard')}}'" class="mt-3 ml-3 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Cansel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
