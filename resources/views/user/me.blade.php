@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">Личный кабинет</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg font-semibold mb-2">Имя</p>
                    <p>{{ auth()->user()->name }}</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg font-semibold mb-2">Фамилия</p>
                    <p>{{ auth()->user()->surname }}</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg font-semibold mb-2">Возраст</p>
                    <p>{{ auth()->user()->age }}</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-lg font-semibold mb-2">Email</p>
                    <p>{{ auth()->user()->email }}</p>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Редактировать</button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold mb-2">Завершенные блоки</h2>
            <ul class="list-disc pl-5">
                <li class="mb-2 flex items-center">
                    <svg class="w-4 h-4 fill-current text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>Понимание своих эмоций</span>
                </li>
                <li class="mb-2 flex items-center">
                    <svg class="w-4 h-4 fill-current text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>Саморегуляция</span>
                </li>
                <li class="mb-2 flex items-center">
                    <svg class="w-4 h-4 fill-current text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>Понимание эмоций других людей</span>
                </li>
                <li class="mb-2 flex items-center">
                    <svg class="w-4 h-4 fill-current text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>Управление эмоциями других людей</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mt-6">
            <h1 class="text-xl font-semibold mb-2">Результаты диагностики</h1>
            <div class="mb-1 text-lg font-medium dark:text-white">Уровень эмоционального интеллекта</div>
            <div class="mb-1 text-base font-medium text-blue-700 dark:text-blue-500">{{ auth()->user()->EQ }}</div>
            <div class="w-full h-6 bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="h-6 bg-blue-600 rounded-full dark:bg-blue-500" style="{{ (auth()->user()->EQ / 105) * auth()->user()->EQ }}%"></div>
            </div>

            <hr class="my-6 border-gray-300 dark:border-gray-700">

            <div class="mb-1 text-base font-medium text-green-700 dark:text-green-500">Понимание чужих эмоций</div>
            <div class="mb-1 text-base font-medium text-green-700 dark:text-green-500">{{ auth()->user()->MP }}</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="{{ (auth()->user()->MP / 31) * auth()->user()->MP }}%"></div>
            </div>

            <hr class="my-6 border-gray-300 dark:border-gray-700">

            <div class="mb-1 text-base font-medium text-yellow-700 dark:text-yellow-500">Управление чужими эмоциями</div>
            <div class="mb-1 text-base font-medium text-yellow-700 dark:text-yellow-500">{{ auth()->user()->MY }}</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                <div class="bg-yellow-400 h-2.5 rounded-full" style="{{ (auth()->user()->MY / 25) * auth()->user()->MY }}%"></div>
            </div>

            <hr class="my-6 border-gray-300 dark:border-gray-700">

            <div class="mb-1 text-base font-medium text-purple-700 dark:text-purple-500">Понимание своих эмоций</div>
            <div class="mb-1 text-base font-medium text-purple-700 dark:text-purple-500">{{ auth()->user()->VP }}</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-purple-600 h-2.5 rounded-full dark:bg-purple-500" style="{{ (auth()->user()->VP / 26) * auth()->user()->VP }}%"></div>
            </div>

            <hr class="my-6 border-gray-300 dark:border-gray-700">

            <div class="mb-1 text-base font-medium text-indigo-700 dark:text-indigo-500">Управление своими эмоциями</div>
            <div class="mb-1 text-base font-medium text-indigo-700 dark:text-indigo-500">{{ auth()->user()->VY }}</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                <div class="bg-indigo-600 h-2.5 rounded-full dark:bg-indigo-500" style="{{ (auth()->user()->VY / 18) * auth()->user()->VY }}%"></div>
            </div>
        </div>
    </div>

@endsection
