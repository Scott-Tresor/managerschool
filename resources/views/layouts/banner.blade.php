@if(Auth::user())
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="ti-layout-list-post menu-icon"></i>
                <span class="menu-title">Utilisateurs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.student.index') }}">
                <i class="ti-pie-chart menu-icon"></i>
                <span class="menu-title">Eleves</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.paiement.index') }}">
                <i class="ti-view-list-alt menu-icon"></i>
                <span class="menu-title">Paiements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="ti-star menu-icon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
    </ul>
    </nav>
@endif
