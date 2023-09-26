@extends('layouts.app')

@section('content')
{{--    кнопки --}}
    <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            onclick="window.location='{{ route('block.create') }}'">
        Добавить блок
    </button>
    <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            onclick="window.location='{{ route('theory.create') }}'">
        Добавить теорию и задания
    </button>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Добавить технику</button>
    <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            onclick="window.location='{{ route('users.index') }}'">
        Список пользователей
    </button>

{{--    таблица --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Блок
                </th>
                <th scope="col" class="px-6 py-3">
                    Описание
                </th>
                <th scope="col" class="px-6 py-3">
                    Задания
                </th>
                <th scope="col" class="px-6 py-3">
                    Техники
                </th>
                <th scope="col" class="px-6 py-3">
                    Действия
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($blocks as $block)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$block->title}}
                    </th>
                    <td class="px-6 py-4">
                        {{$block->description}}
                    </td>
                    <td class="px-6 py-4">
                        @foreach($block->theories as $theory)
                            <p>{{$theory->assignment}}</p>
                        @endforeach
                    </td>
                    <td class="px-6 py-4">
                        test
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('block.edit', $block) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection