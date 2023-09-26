@extends('layouts.app')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-center mb-4 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{$block->title}}</h1>
    @if(auth()->user()->blocks->where('block_id', $block->id)->where('status', true)->first())
        <div class="flex items-center p-2 sm:p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Вы молодец!</span> Вы уже прошли данный блок
            </div>
        </div>
    @endif
    @foreach($block->theories as $theory)
        <div>
            {!! nl2br(e($theory->theory_content)) !!}
        </div>
        <p class="mt-2 sm:mt-3">
            <strong>Задание:</strong>
        </p>
        <label for="message" class="block mt-1 sm:mt-2 text-sm sm:text-base font-medium text-gray-900 dark:text-white">
            <strong>
                {!! nl2br(e($theory->assignment)) !!}
            </strong>
        </label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm sm:text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Напишите ваш ответ здесь ..." required></textarea>
        <hr class="w-32 sm:w-48 h-1 mx-auto my-3 sm:my-4 bg-gray-100 border-0 rounded md:my-6 ">
    @endforeach
    <form method="POST" action="{{ route('blocks.complete', $block) }}" onsubmit="return validateForm()">
        @csrf
        <button type="submit" class="mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm sm:text-base px-4 sm:px-5 py-2 sm:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Сохранить</button>
    </form>

    <script>
        function validateForm() {
            var message = document.getElementById("message").value;
            if (message.trim() === '') {
                alert("Пожалуйста, заполните поле.");
                return false;
            }
            return true;
        }
    </script>
@endsection

