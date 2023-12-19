<div class="app-menu navbar-menu">
    {{-- LOGO --}}
    <div class="navbar-brand-box">
        {{-- Dark Logo --}}
        <a href="{{ route('home') }}" class="logo logo-dark d-block">
            Digital Storekeeper
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    {{-- Sidebar --}}
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="nav-item">
                    <a href="{{ route('products.index') }}"
                        class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" data-key="p-pages">
                        All Product
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.create') }}"
                        class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}" data-key="p-pages">
                        Add Product
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('sales.index') ? 'active' : '' }}"
                        href="{{ route('sales.index') }}">
                        Sale Product
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('transactions.index') ? 'active' : '' }}"
                        href="{{ route('transactions.index') }}">
                        Transactions
                    </a>
                </li>
            </ul>
        </div>
        <!--  -->
    </div>

    <div class="sidebar-background"></div>
</div>
