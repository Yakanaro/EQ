@extends('layouts.app')
@section('content')

<div class="px-4 sm:px-6 md:px-8">
    <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl pb-3">Тренажер по развитию эмоционального интеллекта</h1>
    <h2 class="text-center text-lg sm:text-xl md:text-2xl lg:text-2xl px-2 sm:px-4 md:px-8 py-3">
        Этот тренажер разработан специально для подростков в рамках гранта Главы Республики Карелия, чтобы у каждого была возможность развить в себе данную способность
    </h2>
    <div class="text-center py-4">
        <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-base sm:text-lg px-4 sm:px-6 py-2.5 sm:py-3 text-center mb-2 sm:mb-3">Подробнее</button>
    </div>
</div>

<div class="mt-7">
    <h1 class="text-center text-3xl sm:text-4xl md:text-5xl lg:text-5xl mb-4 sm:mb-6">Кому подойдет этот тренажер</h1>
    <p class="text-center text-xl sm:text-2xl md:text-3xl lg:text-3xl mb-4 sm:mb-6">Курс подходит тем, кто хочет:</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 px-4 sm:px-6 md:px-8 py-4 sm:py-6 mx-2 sm:mx-4 md:mx-8 h-auto sm:h-[798]">
        <div class="bg-white text-black text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">1</p>
            <p class="text-lg sm:text-xl lg:text-2xl">Понимать свои эмоции и эмоции других, управлять эмоциональным состоянием</p>
        </div>
        <div class="bg-[#64b093] text-white text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">2</p>
            <p class="text-lg sm:text-xl lg:text-2xl mx-2">Узнать, как поддерживать себя и близких в стрессовых ситуациях</p>
        </div>
        <div class="bg-white text-black text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">3</p>
            <p class="text-lg sm:text-xl lg:text-2xl">Восстанавливаться быстрее: не переживать и не накручивать себя, столкнувшись с негативом.</p>
        </div>
        <div class="bg-[#283e54] text-white text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">4</p>
            <p class="text-lg sm:text-xl lg:text-2xl">Разряжать напряженную эмоциональную атмосферу, но делать это экологично</p>
        </div>
        <div class="bg-white text-black text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">5</p>
            <p class="text-lg sm:text-xl lg:text-2xl">Разрешать конфликты и достигать в них понимания</p>
        </div>
        <div class="bg-[#283e54] text-white text-center py-6 rounded-3xl">
            <p class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-4">6</p>
            <p class="text-lg sm:text-xl lg:text-2xl">Преодолеть страхи и начать развивать свой лидерский потенциал</p>
        </div>
    </div>
    <div class="text-center pt-6 sm:pt-8 mb-4 sm:mb-10">
        <a href="{{ route('diagnostic.diagnostics') }}" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-base sm:text-lg px-4 sm:px-6 py-2.5 sm:py-3.5 text-center mb-2 sm:mb-3 inline-block max-w-[200px]">
            Пройти диагностику
        </a>
    </div>
</div>
@endsection