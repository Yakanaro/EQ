@extends('layouts.app')
@section('content')
    <h1 class="text-center text-6xl pb-5">Диагностика эмоционального интеллекта</h1>
    <div class="text-center pt-6">
        <div class="mb-6">
            <h1 class="mb-5">Вам предлагается заполнить опросник, состоящий из 46 утверждений. Читайте внимательно каждое утверждение и ставьте крестик (или галочку) в той графе, которая лучше всего отражает Ваше мнение.</h1>
            <a href="{{ route('diagnostic.diagnostics') }}"
               class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Начать
            </a>
        </div>
    </div>
@endsection