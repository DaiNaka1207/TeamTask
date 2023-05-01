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
                    <label for="hs-input-with-add-on-url" class="block text-sm text-gray-700 font-medium dark:text-white">Task Name</label>
                    <form action="{{route('task.store')}}" method="post" class="flex rounded-md shadow-sm">
                        @csrf
                        {{-- 新規タスクにカレントチームのIDを渡すため --}}
                        <input type="hidden" name="team_id" value="{{$user->currentTeam->id}}">
                        {{-- 新規タスクの名前の入力欄 --}}
                        <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-l-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Enter new task name here." required autofocus>
                        {{-- 追加ボタン --}}
                        <button type="submit" class="py-3 px-4 inline-flex flex-shrink-0 justify-center items-center gap-2 rounded-r-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm">
                            Add
                        </button>
                        {{-- キャンセルボタン --}}
                        <button type="button" onclick="location.href='{{route('dashboard')}}'" class="ml-3 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Cansel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
