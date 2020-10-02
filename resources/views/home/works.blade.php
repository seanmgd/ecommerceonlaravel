@extends('layout.main')
@section('title') works @endsection
@section('content')
    <section class="text-custom-grey body-font h-screen flex items-center justify-center flex-col">
      <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded">
        <a class="back" href="{{ route('home') }}">< back</a>
        <iframe width="420" height="315"
                src="https://www.youtube.com/embed/eOO6f7EDBxk?autoplay=1&showinfo=0"
                frameborder="0"></iframe>
      </div>
    </section>
@endsection
