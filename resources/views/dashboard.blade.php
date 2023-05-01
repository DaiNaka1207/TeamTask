<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- タスク一覧のコンポーネントを表示 --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-task-list :tasks="$tasks"/>
            </div>
            {{-- タスク新規作成ボタンのコンポーネントを表示 --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5">
                <x-create-button/>
            </div>
        </div>
    </div>
</x-app-layout>
