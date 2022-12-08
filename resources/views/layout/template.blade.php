<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .collapsible {
        margin-top: 10px;
        background-color: #3C4EA6;
        color: #444;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        border: none;
        text-align: left;
        outline-color: white;
        outline-style: solid;
        font-size: 15px;
        border-radius: 50px;
      }

      .noCollapsible {
        margin-top: 10px;
        background-color: #3C4EA6;
        color: #444;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        border: none;
        text-align: left;
        outline-color: white;
        outline-style: solid;
        font-size: 15px;
        border-radius: 50px;
      }
      
      .active, .collapsible:hover {
        background-color: #3C4EA6;
        outline-color: white;
        outline-style: solid;
      }
      
      .contentC {
        padding: 0px 0px;
        display: none;
        overflow: hidden;
        background-color: #25316D;
      }

      .hp {
        background-color: #25316D;
        margin-top: 10px;
        color: #444;
        cursor: pointer;
        width: 100%;
        border: none;
        text-align: left;
        font-size: 15px;
        border-radius: 50px;
      }

      .hp:hover {
        background-color: #3C4EA6;
      }

      .menu:hover {
        background-color: #25316D;
      }

      .card:hover {
        border: 3px solid white;
      }

      li{
        list-style: none;
      }

      ul {
        padding-left: 25px;
        padding-right: 5px;
      }
    </style>
  </head>
  <body style="background-color: #5F6F94;">
    {{-- Nav bar --}}
    @section('navbar')
    <nav class="navbar navbar-expand-lg " style="background-color: #97D2EC; position: fixed; width: 100%; z-index: 5; height: 55px">
      <div class="row container-fluid">
          <div class="col-3 text-start text-white" style="margin-left: 20px;font-size: 20px">
            Kategori
          </div>
          <div class="col-6 text-center text-white" style="font-size: 25px; font-weight: bolder; cursor: pointer" onclick="location.href='{{url('home')}}'">
            Planet Gadget Cell Surabaya
          </div>
          <div class="col-3 justify-content-end">
            <form class="d-flex" role="search" style="background-color: white; border-radius: 50px" action="/search" method="GET">
              <div>
                <img src="{{ asset('images/search.png') }}" width="25" height="25" style="margin:5px">
              </div>
              <input type="search" name="search" placeholder="Search" aria-label="Search" style="border: none; outline: none">
            </form>
          </div>
      </div>
    </nav>
    @show

    {{-- body page --}}
    <div class="container-fluid text-start">
      <div class="row align-items-start">
        <div class="col-2" style="background-color: #25316D; position: fixed; height: 100%; margin-top: 55px; width: 230px">
          <button type="button" class="collapsible text-white menu">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Hp Terbaru
          </button>
          <div class="contentC text-white">
            <ul>
              <li>
                  <button type="button" class="text-white hp" onclick="location.href='{{url('handphone/Apple')}}'">
                    <img src="{{ asset('images/panah.png') }}" width="25">
                    Iphone
                  </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('handphone/Xiaomi')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Xiaomi
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('handphone/Oppo')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Oppo
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('handphone/Samsung')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Samsung
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('handphone/Vivo')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Vivo
                </button>
              </li>
            </ul>
          </div>

          <button type="button" class="noCollapsible text-white menu" onclick="location.href='{{url('content')}}'">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Hp Terbaik
          </button>

          <button type="button" class="noCollapsible text-white menu" onclick="location.href='{{url('news')}}'">
            <img src="{{ asset('images/panah.png') }}" width="25">
            News
          </button>

          <button type="button" class="noCollapsible text-white menu">
            <img src="{{ asset('images/panah.png') }}" width="25">
            About
          </button>

          <button type="button" class="noCollapsible text-white menu">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Contact
          </button>

          <button type="button" class="noCollapsible text-white menu">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Desclaimer
          </button>
        </div>
        <div class="col" style="height: 100%; margin-top: 55px; margin-left: 230px">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;
    
      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var contentC = this.nextElementSibling;
          if (contentC.style.display === "block") {
            contentC.style.display = "none";
          } else {
            contentC.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>