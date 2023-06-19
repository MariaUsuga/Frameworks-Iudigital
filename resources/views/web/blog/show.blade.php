@extends('web.layout')
@section('content')
    <x-alert class="mb-4" type='error' :message='$post->title' data-id='1' data-priority='medium' />
    <x-web.blog.post.show :post='$post' class="bg-gray-950" />
@endsection 
    