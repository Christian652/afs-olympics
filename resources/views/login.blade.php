<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        body{
            height: 100vh;
            background: rgb(152,250,140);
            background: linear-gradient(120deg, rgba(152,250,140,1) 0%, rgba(93,170,106,1) 0%, rgba(255,255,255,1) 65%, rgba(249,249,249,1) 100%);
        }
    </style>
    </head>
  <body class="bg-light pb-5 d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            
            <img src="{{ asset('img/logoafs.png') }}" class="img-fluid w-50 d-none d-lg-block">
            
            <div class="col-lg-5 col-sm-12 col-md-10">
                <div class="card bg-white shadow-lg pt-4 pb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/logoafs.png') }}" class="img-fluid w-50 d-sm-block d-lg-none">
                        </div>
                        <h3 class="text-center">Login Olimpiadas Afs</h3>
                        <hr class="bg-white">
        
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <input type="email" required maxlength="255" class="form-control py-4" name="email" placeholder="Digite Aqui Seu Email:">
                            </div>
        
                            <div class="form-group">
                                <input type="text" required maxlength="255" class="form-control py-4" name="password" placeholder="Digite Aqui Sua Senha:">
                            </div>
        
                            <button class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery.js')}}" ></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
  </body>
</html>