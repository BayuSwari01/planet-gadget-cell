@extends('layout.template')

@section('title', 'News'.$news->judul)

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">{{ $news->judul }}</h3>
        <hr>
        <p class="text-white"> {{$news->tanggal}} </p>
    </div>

    <div class="rounded text-center">
        <img class="rounded" style="margin-bottom: 20px" src="{{ asset('images/'.$news->foto) }}" alt="..." height="300" width="500">
    </div>

    <div>
        @foreach ($pecah as $paragraf)
        <p class="text-white" style="text-align: justify; margin-left: 15px; margin-right: 15px">{{ $paragraf }}</p>            
        @endforeach
    </div>
@endsection