<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Nhom nhom</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Sua mãe</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Pessoas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" datalink="clientes" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>

            <!-- coloca no datalink o nome da área que será ativada no código, neste caso, funcionários e também é necessário colocar o linkMenu para poder achar onde raios está indo -->
            <li class="nav-item">
              <a href="#" datalink="funcionarios" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Funcionários</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Widgets
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li> -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Cardápio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item conteudo">
              <a href="#" datalink="menu" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu</p>
              </a>
            </li>
            <li class="nav-item conteudo">
              <a href="#" datalink="cardapio" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Cardápio</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Eventos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" datalink="tipodefestas" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Tipos de festas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Equipe
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item conteudo">
              <a href="#" datalink="redessociais" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Redes sociais</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" datalink="descricao" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Descrição</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Galeria
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" datalink="galeria" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Imagens</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Contato
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" datalink="dados" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Dados</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" datalink="mapas" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Mapas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Reserva
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" datalink="reserva" class="nav-link linkMenu">
                <i class="far fa-circle nav-icon"></i>
                <p>Solicitação</p>
              </a>
            </li>

          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <div>

  </div>
  <!-- /.sidebar -->
</aside>