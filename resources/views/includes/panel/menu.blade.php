<ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="/home">
              <i class="ni ni-tv-2 text-primary"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Registro
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route ('logout') }}"
                onclick= "event.preventDefault(); document.getElementById('formLogout').submit();">
              <i class="fas fa-sign-in-alt"></i> Cerrar Sesion
            </a>
            <form action = "{{ route('logout') }}" method="POST" style ="display: none;" id="formLogout">
            @csrf

</form>