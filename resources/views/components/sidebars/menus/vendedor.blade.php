<h6 class="navbar-heading text-muted">Vendedor</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>
    </li>

    {{-- Clientes --}}
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">
                Clientes    
            </span>
        </a>

        <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendedor.clientes.create') }}">
                        Cadastrar Cliente
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendedor.clientes.index') }}">
                        Clientes Cadastrados
                    </a>
                </li>
            </ul>
        </div>
    </li>

    {{-- Orcamentos --}}
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">
                Gerar Propostas    
            </span>
        </a>

        <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendedor.orcamentos.convencional') }}">
                        Sistema Convencional
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendedor.orcamentos.demanda') }}">
                        Sistema com Demanda
                    </a>
                </li>
            </ul>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link" href="">
          <i class="ni ni-bullet-list-67 text-default"></i>
          <span class="nav-link-text">Tables</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
        </a>
    </li>
    {{-- <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
        <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
            <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
        </a>
    </li> --}}
</ul>
            