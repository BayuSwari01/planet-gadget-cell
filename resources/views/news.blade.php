@extends('layout.template')

@section('title', 'News')

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">News</h3>
        <hr>
    </div>

    <div class="d-flex flex-wrap">
        @foreach ( $news as $n )
            <div class="card" style="width: 18rem;margin: 10px">
                <img src="{{ asset('images/'.$n->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $n->id }} {{ $n->foto }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection