@extends('layouts.app')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form method="POST" action="{{ route('block.update', $block) }}">
        @csrf
        @method('POST')

        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название блока</label>
        <input type="text" id="default-input" name="title" value="{{ old('title', $block->title) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Краткое описание блока</label>
        <input type="text" id="default-input" name="description" value="{{ old('description', $block->description) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

        @foreach($block->theories as $theory)
            <hr class="w-32 sm:w-48 h-1 mx-auto my-3 sm:my-4 bg-gray-100 border-0 rounded md:my-6 ">
            <label for="block_id_{{ $theory->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Выберите блок для теории {{ $loop->iteration }}</label>
            <select id="block_id_{{ $theory->id }}" name="block_id_{{ $theory->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($blocks as $blockOption)
                    <option value="{{ $blockOption->id }}" {{ $blockOption->id === $theory->block_id ? 'selected' : '' }}>{{ $blockOption->title }}</option>
                @endforeach
            </select>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Текст теории {{ $loop->iteration }}</label>
            <textarea id="message" name="theory_content_{{ $theory->id }}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('theory_content_' . $theory->id, $theory->theory_content) }}</textarea>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Текст задания {{ $loop->iteration }}</label>
            <textarea id="message" rows="4" name="assignment_{{ $theory->id }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('assignment_' . $theory->id, $theory->assignment) }}</textarea>
        @endforeach
        <hr class="w-32 sm:w-48 h-1 mx-auto my-3 sm:my-4 bg-gray-100 border-0 rounded md:my-6 ">

        <button type="submit" class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Сохранить</button>
    </form>
@endsection
