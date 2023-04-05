@section('columns')
{{--    <div class="bg-white">--}}
{{--        <div class="mx-9">--}}
{{--            <div class="grid gap-4 lg:grid-cols-3 grid-rows-2 text-center h-15 pb-7 max-h-screen">--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-white">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">--}}
{{--                            01--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-black">--}}
{{--                            Понимать свои эмоции и эмоции других, управлять эмоциональным состоянием--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-gradient-to-r from-cyan-500 to-blue-500">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">--}}
{{--                            02--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-neutral-600">--}}
{{--                            Узнать, как поддерживать себя и близких в стрессовых ситуациях--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-white">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">--}}
{{--                            03--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-black">--}}
{{--                            Восстанавливаться быстрее: не переживать и не накручивать себя, столкнувшись с негативом.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-gradient-to-r from-cyan-500 to-blue-500">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">--}}
{{--                            04--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-neutral-600">--}}
{{--                            Разряжать напряженную эмоциональную атмосферу, но делать это экологично--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-white">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-black">--}}
{{--                            05--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-black">--}}
{{--                            Разрешать конфликты и достигать в них понимания--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex justify-center">--}}
{{--                    <div class="block max-w-sm rounded-lg p-6 bg-gradient-to-r from-cyan-500 to-blue-500">--}}
{{--                        <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">--}}
{{--                            06--}}
{{--                        </h5>--}}
{{--                        <p class="mb-4 text-base text-neutral-600">--}}
{{--                            Преодолеть страхи и начать развивать совй лидерский потенциал--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
    <div class="text-center pt-6">
        <a href="{{ route('register') }}" class="mb-7 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 max-w-50">
            Пройти диагностику
        </a>
{{--        <button type="button" class=" mb-7 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-3xl text-lg px-7 py-3.5 text-center mr-1 mb-1 max-w-50">Пройти диагностику</button>--}}
    </div>
@endsection