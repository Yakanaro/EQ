@extends('layouts.app')

@section('content')
    <h1 class="text-center text-5xl mb-7">Кому подойдет этот тренажер</h1>
    <p class="text-center text-3xl mb-7">Курс подходит тем, кто хочет:</p>
    <div class="bg-transparent p-1 grid grid-cols-3 gap-6 px-20 py-10 pt-1 mx-10 h-[798]">

        <div class="bg-white text-black text-center text-5xl py-10 rounded-3xl">
            1
            <p class="text-lg pt-5">Понимать свои эмоции и эмоции других, управлять эмоциональным состоянием</p>
        </div>
        <div class="bg-[#64b093] text-white text-center text-5xl py-10 rounded-3xl">
            2
            <p class="text-lg pt-5">Узнать, как поддерживать себя и близких в стрессовых ситуациях</p>
        </div>
        <div class="bg-white text-black text-center text-5xl py-10 rounded-3xl">
            3
            <p class="text-lg pt-5">Восстанавливаться быстрее: не переживать и не накручивать себя, столкнувшись с негативом.</p>
        </div>
        <div class="bg-[#283e54] text-white text-center text-5xl py-10 rounded-3xl">
            4
            <p class="text-lg pt-5">Разряжать напряженную эмоциональную атмосферу, но делать это экологично</p>
        </div>
        <div class="bg-white text-black text-center text-5xl py-10 rounded-3xl">
            5
            <p class="text-lg pt-5">Разрешать конфликты и достигать в них понимания</p>
        </div>
        <div class="bg-[#283e54] text-white text-center text-5xl py-10 rounded-3xl">
            6
            <p class="text-lg pt-5">Преодолеть страхи и начать развивать свой лидерский потенциал</p>
        </div>
    </div>
    <div class="text-center pt-6 mb-10">
        <a href="{{ route('register') }}" class="mb-7 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 max-w-50">
            Пройти диагностику
        </a>
{{--        <button type="button" class=" mb-7 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 max-w-50">Пройти диагностику</button>--}}
    </div>
@endsection