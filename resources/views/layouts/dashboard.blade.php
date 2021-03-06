<!doctype html>
<html lang="pt-br">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand navbar-dark bg-primary">

        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>

        <a class="navbar-brand" href="">{{Auth::user()->roles()->first()->nome}}</a>

        <form action="{{route('logout')}}" method="post" class="ml-auto">
            @csrf
            <button class="btn btn-outline-light btn-sm px-2">Logout
              <div class="material-icons float-left">logout</div>
            </button>
        </form>
    </nav>
  
      <div class="d-flex">
          <nav class="sidebar bg-terciary">
              <ul class="list-unstyled">
                  <li class="p-3 text-center text-white">
                    Usuario:
                    {{Auth::user()->name}}
                  </li>
                  
                    <li><a href="{{route('dashboard')}}">Home</a></li>
                  @can('acesso-administrador')
                    <li>
                      <a href="#alunos" data-toggle="collapse">
                        Alunos
                      </a>

                      <ul class="collapse pl-0" id="alunos">
                          <li>
                            <a href="{{ route('admin.alunos.create') }}">
                              Cadastrar
                              <div class="material-icons float-left">add</div>
                            </a>
                          </li>

                          <li>
                            <a href="{{ route('admin.matriculas.create') }}">
                              Matricular
                              <div class="material-icons float-left">book</div>
                            </a>
                          </li>

                          <li>
                            <a href="{{ route('admin.alunos.index') }}">
                              Listar Todos
                              <div class="material-icons float-left">list</div>
                            </a>
                          </li>
                      </ul>
                    </li> 

                    <li>
                      <a href="#olimpiadas" data-toggle="collapse">
                        Olimpiadas
                      </a>

                      <ul class="collapse pl-0" id="olimpiadas">
                          <li>
                            <a href="{{ route('admin.olimpiadas.create') }}">
                              Adicionar
                              <div class="material-icons float-left">add</div>
                            </a>
                          </li>

                          <li>
                            <a href="{{ route('admin.olimpiadas.index') }}">
                              Listar Todas
                              <div class="material-icons float-left">list</div>
                            </a>
                          </li>
                      </ul>
                    </li> 

                    <li>
                      <a href="#usuarios" data-toggle="collapse">
                        Usuarios
                      </a>

                      <ul class="collapse pl-0" id="usuarios">
                          <li>
                            <a href="{{ route('admin.users.create') }}">
                              Adicionar
                              <div class="material-icons float-left">add</div>
                            </a>
                          </li>

                          <li>
                            <a href="{{ route('admin.users.index') }}">
                              Listar Todos
                              <div class="material-icons float-left">list</div>
                            </a>
                          </li>
                      </ul>
                    </li> 
                  @endcan
              </ul>
          </nav>
  
          <div class="content p-1 w-100">
              <div class="list-group-item">
                  
                @yield('content')
                  
              </div>
          </div>
      </div>
    
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
  </body>
</html>