@extends('layouts.app')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mx-4 mb-4">
        @foreach($blocks as $block)
            <div class="max-w-fit bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ route('blocks.show', $block->id) }}">
                    <img class="rounded-t-lg" src="https://376727.selcdn.ru/robomarket/media/633273629f924dc1168f0b26/62fec3e3-9ae4-4137-8d6c-0328540e8751.jpg" alt="" />
                </a>

                <div class="p-5">
                    <a href="{{ route('blocks.show', $block->id) }}">
                        <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$block->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $block->description }}</p>
                    <div class="flex justify-between">
                        <a href="{{ route('blocks.show', $block->id) }}"
                           class="inline-flex items-center px-3 py-2 text-sm sm:text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Начать блок
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        @if(auth()->user()->blocks->where('block_id', $block->id)->where('status', true)->first())
                            <span class="mt-1.5 inline-flex items-center justify-center w-6 h-6 mr-2 text-xs sm:text-sm font-semibold text-gray-800 bg-green-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
