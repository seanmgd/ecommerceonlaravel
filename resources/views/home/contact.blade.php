@extends('layout.main')
@section('title') contact @endsection
@section('content')
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
@endsection
