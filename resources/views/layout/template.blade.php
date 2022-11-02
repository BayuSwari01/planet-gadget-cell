<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    {{-- Nav bar --}}
    @section('navbar')
    <nav class="navbar navbar-expand-lg " style="background-color: #97D2EC">
      <div class="row container-fluid">
          <div class="col-3 text-start text-white">
            Kategori
          </div>
          <div class="col-6 text-center text-white">
            Planet Gadget Cell Surabaya
          </div>
          <div class="col-3 justify-content-end">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
      </div>
    </nav>
    @show

    {{-- body page --}}
    <div class="container-fluid text-start">
      @yield('content')
      <div class="row align-items-start">
        <div class="col-2" style="background-color: #25316D; height: 1000px">
          One of three columns
        </div>
        <div class="col" style="background-color: #5F6F94; height: 1000px">
          One of three columns
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>