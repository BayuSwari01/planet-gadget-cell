@extends('layout.template')

@section('title', 'Handphone '.$handphone->namaHp)

@section('navbar')
@parent
@endsection

@section('content')
    <div>
        <h3 class="text-white" style="margin-top: 10px">Handphone {{ $handphone->namaHp }}</h3>
        <hr>
    </div>

    <div>
        <img src="{{ asset('images/'.$handphone->foto) }}" class="float-start" alt="" width="300" height="535">
        <div class="table-responsive" style="margin-left: 320px; margin-right: 350px">
            <table class="table text-white">
                <tbody>
                  <tr>
                    <th scope="row">Brand</th>
                    <td>{{ $handphone->brand }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Harga</th>
                    <td>{{ $handphone->harga }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Ram</th>
                    <td>{{ $handphone->ram }} GB</td>
                  </tr>
                  <tr>
                    <th scope="row">Rom</th>
                    <td>{{ $handphone->rom }} GB</td>
                  </tr>
                  <tr>
                    <th scope="row">Battery</th>
                    <td>{{ $handphone->battery }} mAh</td>
                  </tr>
                  <tr>
                    <th scope="row">Ukuran Layar</th>
                    <td>{{ $handphone['ukuran-layar'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Resolusi layar</th>
                    <td>{{ $handphone['resolusi-layar'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Anti air</th>
                    <td>{{ $handphone['anti air'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Teknologi layar</th>
                    <td>{{ $handphone['teknologi-layar'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Kamera utama</th>
                    <td>{{ $handphone['kamera-utama'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Kamera depan</th>
                    <td>{{ $handphone['kamera-depan'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">CPU type</th>
                    <td>{{ $handphone['cpu-type'] }} </td>
                  </tr>
                  <tr>
                    <th scope="row">Processor</th>
                    <td>{{ $handphone->processor }} </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection