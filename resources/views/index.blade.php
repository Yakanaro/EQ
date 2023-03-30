@extends('layouts.app')
@extends('layouts.columns')
@extends('layouts.footer')


@section('content')
    <div class=" place-self-center lg:col-span-7">
        <h1 class="max-w-2xl mb-5 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-black text-center">
            Тренажер по развитию эмоционального интеллекта
        </h1>
        <p class="max-w-2xl mb-4 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-black text-center">
            Этот тренажер разработан специально для подростков в рамках гранта Главы Республики Карелия, чтобы у каждого была возможность развить в себе данную способность.
        </p>
        <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4 place-content-center">
            <button
                    type="button"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                Подробнее
            </button>
        </div>
    </div>

    <div class="place-self-center lg:col-span-7 mt-10">
        <h1 class="lg:col-span-7 text-4xl font-bold text-center">Кому подойдет этот тренажер</h1>
        <p class="text-center mt-6">Курс подходит тем, кто хочет:</p>
    </div>
@endsection