<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Treinaweb</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>

                <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();" >
                Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-circle-down"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-arrow-circle-down"></i>
                        <p>
                            Entrada
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('empresas.create') }}?tipo=fornecedor" class="nav-link">
                                <i class="fas fa-file nav-icon"></i>
                                <p>Novo Fornecedor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('empresas.index') }}?tipo=fornecedor" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Lista de Fornecedores</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                      <p>
                          Sa??da
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('empresas.create') }}?tipo=cliente" class="nav-link">
                              <i class="fas fa-file nav-icon"></i>
                              <p>Novo Cliente</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('empresas.index') }}?tipo=cliente" class="nav-link">
                              <i class="far fa-list-alt nav-icon"></i>
                              <p>Lista de Clientes</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Financeiro
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../index.html" class="nav-link">
                            <i class="fas fa-dollar-sign nav-icon"></i>
                            <p>Novo lan??amento</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Relat??rio financeiro</p>
                        </a>
                    </li>
                </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
