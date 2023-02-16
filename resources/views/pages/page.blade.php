@extends('layout.scaffold')
@push('title')
{{ $page->title }}
@endpush
@section('content')

<div class="container">
    <h3 class="text-center">{{ $page->title }}</h3>
    {!! $page->description !!}
</div>

@endsection