@extends('layout.template')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">Postingan Terbaru</h3>
        <hr>
    </div>

    <div class="d-flex flex-wrap">
        @foreach ( $news as $n )
            <div class="card" style="width: 18rem;margin: 10px; cursor: pointer" onclick="location.href='{{url('/news', strval($n->id))}}'">
                <img src="{{ asset('images/'.$n->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $n->judul }}</p>
                </div>
            </div>
        @endforeach

        @foreach ( $handphone as $hp )
            <div class="card" style="width: 18rem;margin: 10px;cursor: pointer">
                <img src="{{ asset('images/'.$hp->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">{{ $hp->namaHp }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection