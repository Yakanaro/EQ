@extends('layouts.app')
@extends('layouts.columns')
@extends('layouts.footer')


@section('content')
    <div class="flex flex-col px-20">
        <h1 class="text-center text-6xl pb-5">Тренажер по развитию эмоционального интеллекта</h1>
        <h2 class="text-center text-2xl px-40">Этот тренажер разработан специально для подростков в рамках гранта Главы Республики Карелия, чтобы у каждого была возможность
        развить в себе данную способность
        </h2>
        <div class="text-center pt-6">
            <button type="button" class=" text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800 max-w-50">Подробнее</button>
        </div>
{{--        <div class="text-center pt-6">--}}
{{--            <div class="p-1 rounded bg-gradient-to-r from-green-500 to-purple-500">--}}
{{--                <button class="px-7 py-3.5 text-blue-800 bg-white">sdf</button>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>

@endsection