@extends('layout.template')

@section('title', 'Search')

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">News</h3>
        <hr>
    </div>

    @if (count($news) === 0)
        <h1 class="text-white text-center">-</h1>
    @else
        <div class="d-flex flex-wrap">
            @foreach ( $news as $n )
                <div class="card" style="width: 18rem;margin: 10px; cursor: pointer" onclick="location.href='{{url('/news', strval($n->id))}}'">
                    <img src="{{ asset('images/'.$n->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                    <div class="card-body">
                        <p class="card-text">{{ $n->judul }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    
    <div>
        <h3 class="text-white" style="margin-top: 10px">Handphone</h3>
        <hr>
    </div>

    @if (count($handphone) === 0)
        <h1 class="text-white text-center">-</h1>
    @else
        <div class="d-flex flex-wrap">
            @foreach ( $handphone as $hp )
                <div class="card" style="width: 18rem;margin: 10px;cursor: pointer">
                    <img src="{{ asset('images/'.$hp->foto) }}" class="card-img-top" alt="..." height="200" width="200">
                    <div class="card-body">
                        <p class="card-text">{{ $hp->namaHp }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    
@endsection