@extends('layout.main')
@section('title') videos @endsection
@section('extra-css')
    <link rel="stylesheet" href="/css/modal.css">
@endsection
@section('content')
    <div class="container pt-2">
        <div class="main-content">
            <div class="grid">
                <ul class="flex justify-center items-center">
                    {{--                    <!-- Trigger/Open The Modal -->--}}
                    {{--                    <button id="myBtn">Open Modal</button>--}}

                    {{--                    <!-- The Modal -->--}}
                    <div id="videoModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div style="width: 100%;height: 78vh;">
                                <iframe
                                    style="width: 100%;height: 92%;" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <p class="text-center"><a href="https://vimeo.com/452865470">Mentlec - Difficile Parfois</a>
                                from <a
                                    href="https://vimeo.com/sinistrevj">Sinisᚾre</a> on <a href="https://vimeo.com">Vimeo</a>.
                            </p>
                        </div>

                    </div>
                    @foreach($videos as $video)
                        <a class="cursor-pointer video-link">
                            <li class="mx-3">
                                <div class="image-container">
                                    <div class="image-div"
                                         style="background-image: url('{{ Voyager::image($video->image) }}')"
                                         id="{{$video->link}}">
                                    </div>
                                    <p>{{$video->name}}</p>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
