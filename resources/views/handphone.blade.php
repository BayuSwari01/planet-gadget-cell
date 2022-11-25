@extends('layout.template')

@section('title', 'Handphone')

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">Handphone Iphone</h3>
        <hr>
    </div>

    <div class="d-flex flex-wrap">
        @foreach ( $handphone as $hp )
            <div class="card" style="width: 18rem;margin: 10px">
                <img src="{{ asset('images/'.$hp->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $hp->id }} {{ $hp->foto }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection