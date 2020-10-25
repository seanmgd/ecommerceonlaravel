@extends('layout.main')
@section('title') shop @endsection
@section('content')
    <div class="container pt-2">
        <div class="main-content">
            <div class="grid">
                <ul class="flex justify-center items-center">
                    @foreach($products as $product)
                        <a class="cursor-pointer" href="{{ route('product', $product->slug) }}" class="cursor-pointer">
                            <li class="mx-3">
                                <div class="image-container">
                                    <div class="image-div"
                                         style="background-image: url('{{ Voyager::image($product->image) }}')">
                                    </div>
                                    <p>{{$product->name}}</p>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
