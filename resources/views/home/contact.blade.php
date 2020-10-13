@extends('layout.main')
@section('title') contact @endsection
@section('content')
    <section class="text-custom-grey body-font h-screen flex items-center justify-center flex-col">
        <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded">
            <a class="back" href="{{ route('home') }}"><span class="back-button"><</span>back</a>
            <div class="contact">
                @if($message = Session::get('success'))
                    <div class="px-4 py-3 alert" role="alert" style="bottom:20px">
                        <p class="font-bold text-white">{{$message}}</p>
                    </div>
                @endif
                <form id="contact" action="{{ route('contact') }}" method="post" class="flex justify-center content-center flex-col">
                    {{csrf_field()}}
                    <input type="text" name="email" placeholder="email adress">
                    <div class="flex flex-row justify-between w-full">
                        <textarea name="message" placeholder="message" rows="4"></textarea>
                    </div>
                    <button id="submit-btn">send</button>
                </form>
            </div>
        </div>
    </section>
@endsection
