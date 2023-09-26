@extends('layouts.app')
@section('content')
    <h1 class="text-center text-6xl pb-5">Диагностика эмоционального интеллекта</h1>
    <h2 class="text-center text-2xl px-40">Данная диагностика основана на Тесте..
    </h2>
    <div class="text-center pt-6">
        <button type="button" onclick="window.location.href='{{route('diagnostic.sectionA')}}';"
                class=" text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 max-w-50">
            Начать
        </button>
    </div>
@endsection