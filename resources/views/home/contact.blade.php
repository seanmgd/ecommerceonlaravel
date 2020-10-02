@extends('layout.main')
@section('title') contact @endsection
@section('content')
    <section class="text-custom-grey body-font h-screen flex items-center justify-center flex-col">
        <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded">
            <a class="back" href="{{ route('home') }}">< back</a>
            <div class="contact">
                <form id="contact" action="" method="post" class="flex justify-center content-center flex-col">
                    <input type="text" name="email" placeholder="email adress">
                    <div class="flex flex-row justify-between w-full">
                        <textarea name="message" placeholder="message" rows="4"></textarea>
                    </div>
                    <button id="submit-btn">send</button>
                    <div class="alert alert-success">message successfuly sent</div>
                    <div class="alert alert-danger">message not sent, try again</div>
                </form>
            </div>
        </div>
    </section>
@endsection
