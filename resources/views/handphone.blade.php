@extends('layout.template')

@section('title', 'Handphone '.$brand)

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">Handphone {{ $brand }} </h3>
        <hr>
    </div>

    <div class="d-flex flex-wrap">
        @foreach ( $handphone as $hp )
            <div class="card" style="width: 18rem;margin: 10px;cursor: pointer" onclick="location.href='{{url('/handphone/'.$brand.'/'.strval($hp->id))}}'">
                <img src="{{ asset('images/'.$hp->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $hp->namaHp }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection