@extends('layout.main')
@section('title') home @endsection
@section('content')
    <img alt="logob" src="/img/logo2.gif">
    <div class="text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white"></h1>
        <p class="leading-relaxed mb-8 sm:text-base text-sm">vj collective based on paris</p>
        <div class="flex justify-center">
            <a href="{{ route('works') }}"
               class="inline-flex sm:px-3 px-2 focus:outline-none hover:bg-black-700 hover:text-white text-base cursor-pointer">
                works
            </a>
            <a href="https://www.instagram.com/sinistre.vj/"
               class="inline-flex sm:px-3 px-2 focus:outline-none hover:bg-black-700 hover:text-white text-base cursor-pointer">
                instagram
            </a>
            <a href="https://vimeo.com/sinistrevj"
               class="md:ml-4 inline-flex sm:px-3 px-2 focus:outline-none hover:bg-black-700 hover:text-white text-base cursor-pointer">
                vimeo
            </a>
            <a href="{{ route('shop') }}"
               class="md:ml-4 inline-flex sm:px-3 px-2 focus:outline-none hover:bg-black-700 hover:text-white text-base cursor-pointer">
                shop
            </a>
            <a href="{{ route('contact') }}"
               class="md:ml-4 inline-flex sm:px-3 px-2 focus:outline-none hover:bg-black-700 hover:text-white text-base cursor-pointer">
                contact
            </a>
        </div>
    </div>
@endsection
