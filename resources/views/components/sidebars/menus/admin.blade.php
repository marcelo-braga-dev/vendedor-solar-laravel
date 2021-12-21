<h6 class="navbar-heading text-muted">Admin</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true"
            aria-controls="navbar-examples">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">Produtos</span>
        </a>

        <div class="collapse show" id="navbar-examples">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link pl-5" href="{{ route('admin.kits.create') }}">
                        Cadastrar Kit FV
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-5" href="{{ route('admin.kits.index') }}">
                        Kits FV Cadastrados
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('table') }}">
            <i class="ni ni-bullet-list-67 text-default"></i>
            <span class="nav-link-text">Tables</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
        </a>
    </li>
</ul>
