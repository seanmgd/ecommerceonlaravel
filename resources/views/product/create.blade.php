@extends('layout.main')

@section('content')
create product

<form action="{{ route('store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="text" name="slug">
    <input type="text" name="description">
    <input type="text" name="price">
    <button type="submit">Submit</button>
</form>
@endsection
