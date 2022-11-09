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
        @for ($i = 0; $i < 3; $i++)
            <div class="card" style="width: 18rem;margin: 10px">
                <img src="https://images.samsung.com/is/image/samsung/p6pim/id/feature/142571366/id-feature---470701928?$FB_TYPE_A_MO_JPG$" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;margin: 10px">
                <img src="https://images.samsung.com/is/image/samsung/assets/id/2201/preorder/1_image_carousel/2_group_kv2/S21FE_Carousel_GroupKV2_MO.jpg" class="card-img-top" alt="..." height="200" width="200">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        @endfor
    </div>
@endsection