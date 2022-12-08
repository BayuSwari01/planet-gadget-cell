@extends('layout.template')

@section('title', 'News')

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

    {{-- <div class="d-flex flex-wrap">
        @foreach ( $news as $n )
            <div class="card" style="width: 18rem;margin: 10px">
                <img src="{{ asset('images/'.$n->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $n->judul }}</p>
                </div>
            </div>
        @endforeach
    </div> --}}
@endsection