<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <i class="fa fa-user-circle fa-3x" style="color: white;"></i>
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out text-success"></i> <strong>Keluar</strong>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Daftar Menu</li>
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-tachometer"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </section>
</aside>