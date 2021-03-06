<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Principal <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('beneficiario*') ? 'active' : '' }}" href="{{ route('beneficiario.index')}}">
              <span data-feather="file"></span>
              Beneficiarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('fornecedor*') ? 'active' : '' }}" href="{{ route('fornecedor.index')}}">
              <span data-feather="shopping-cart"></span>
              Fornecedores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('lancamento*') ? 'active' : '' }}" href="{{ route('lancamento.index')}}">
              <span data-feather="users"></span>
              Lançamentos
            </a>
          </li>
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Relatórios</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Listagem por mês
            </a>
    
        </ul>
      </div>
    </nav>