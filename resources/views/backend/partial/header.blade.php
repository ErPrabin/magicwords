<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="btn btn-danger" style="color: #fff" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                Logout&nbsp;&nbsp;<i class=" fas fa-sign-out-alt"></i>
            </a>

            {{-- logout --}}

            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
            </form> --}}
            
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> --}}
    </ul>
</nav>
<!-- /.navbar -->
