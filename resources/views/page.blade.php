@extends('main-layout')

@section('title')
  {{ $page_title ?? 'No Title'}}
@endsection

@section('content')
  <h1>{{ $content_text }}</h1>
@endsection

@if($hasFooter)
  @section('footer')
    <footer>
      Powered By Me
    </footer>
  @endsection
@endif