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

      li{
        list-style: none;
      }

      ul {
        padding-left: 25px;
        padding-right: 5px;
      }
    </style>
  </head>
  <body>
    {{-- Nav bar --}}
    @section('navbar')
    <nav class="navbar navbar-expand-lg " style="background-color: #97D2EC">
      <div class="row container-fluid">
          <div class="col-3 text-start text-white" style="margin-left: 20px;font-size: 20px">
            Kategori
          </div>
          <div class="col-6 text-center text-white" style="font-size: 25px; font-weight: bolder ">
            Planet Gadget Cell Surabaya
          </div>
          <div class="col-3 justify-content-end">
            <form class="d-flex" role="search" style="background-color: white; border-radius: 50px">
              <div>
                <img src="{{ asset('images/search.png') }}" width="25" height="25" style="margin:5px">
              </div>
              <input type="search" placeholder="Search" aria-label="Search" style="border: none; outline: none">
            </form>
          </div>
      </div>
    </nav>
    @show

    {{-- body page --}}
    <div class="container-fluid text-start">
      <div class="row align-items-start">
        <div class="col-2" style="background-color: #25316D; height: 1000px">
          <button type="button" class="collapsible text-white">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Hp Terbaru
          </button>
          <div class="contentC text-white">
            <ul>
              <li>
                  <button type="button" class="text-white hp" onclick="location.href='{{url('test')}}'">
                    <img src="{{ asset('images/panah.png') }}" width="25">
                    Iphone
                  </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('test')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Xiaomi
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('test')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Oppo
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('test')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Samsung
                </button>
              </li>
              <li>
                <button type="button" class="text-white hp" onclick="location.href='{{url('test')}}'">
                  <img src="{{ asset('images/panah.png') }}" width="25">
                  Vivo
                </button>
              </li>
            </ul>
          </div>

          <button type="button" class="collapsible text-white">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Hp Terbaik
          </button>
          <div class="contentC text-white">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button type="button" class="collapsible text-white">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Daftar Harga
          </button>
          <div class="contentC text-white">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <button type="button" class="collapsible text-white">
            <img src="{{ asset('images/panah.png') }}" width="25">
            Spesifikasi Hp
          </button>
          <div class="contentC text-white">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

        </div>
        <div class="col" style="background-color: #5F6F94; height: 1000px">
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