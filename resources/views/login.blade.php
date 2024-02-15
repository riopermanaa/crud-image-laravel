<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa-App | Login</title>

    {{-- Link css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- Akhir link css bootstrap --}}

  </head>
  <body>

    <div class="container">

        {{-- Pesan error --}}
        @if ($errors->any())
            <div class="alert alert-danger my-3 col-5 mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Akhir pesan error --}}
        
        {{-- Pesan error --}}
        @if (Session::has('status')))
            <div class="alert alert-danger my-3 col-5 mx-auto">
               {{ Session::get('pesan'); }}
            </div>
        @endif
        {{-- Akhir pesan error --}}

        {{-- Login --}}
        <div class="col-5 mx-auto shadow-sm card my-3">
            <div class="card-body">
                <h4> Login Form</h4>
                <form action="/autentikasi" method="post">

                    @csrf

                    {{-- Username --}}
                    <div class="my-3">
                        <label for="email" class="form-label">Username : </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan username anda...">
                    </div>
                    {{-- Akhir username --}}

                    {{-- Password --}}
                    <div class="my-3">
                        <label for="" class="form-label">Password : </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password anda...">
                    </div>
                    {{-- Akhir password --}}

                    {{-- Button --}}
                    <div class="my-3 row">
                        <div class="col-6">
                            <button class="btn btn-primary w-100">Login</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-dark w-100">Register</button>
                        </div>
                    </div>
                    {{-- Akhir button --}}
                </form>
            </div>
        </div>
        {{-- Akhir login --}}

    </div>

   

    {{-- Link js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    {{-- Akhir link js bootstrap --}}

  </body>
</html>