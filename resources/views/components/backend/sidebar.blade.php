<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
    <span>
      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
          <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
      </button>
    </span>
    </div>
    @php
        function listActive($activeRoute){
            $routeName = Route::currentRouteName();
            if ($routeName  === $activeRoute.'.index' || $routeName  === $activeRoute.'.create' || $routeName  === $activeRoute.'.edit'){
                return true;
            }
            return false;
        }
        function linkActive($activeRoute){
            $routeName = Route::currentRouteName();
            if ($routeName  === $activeRoute){
                return true;
            }
            return false;
        }
     @endphp
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" {{ linkActive('admin.dashbaord') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-monitor"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}" class=" {{ linkActive('categories.index') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-leaf"></i>
                        Categories
                    </a>
                </li>
                <li class=" {{listActive('product') ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-paint-bucket"></i>
                        Products Manage
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('product.index') }}" class=" {{ linkActive('product.index') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Product & Design list
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product.create') }}" class=" {{linkActive('product.create') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Add Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{listActive('services') ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-server"></i>
                        Service Manage
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('services.index') }}" class=" {{ linkActive('services.index') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Repairing List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{listActive('booking') ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Booking Manage
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('booking.index') }}">
                                <i class="metismenu-icon"></i>
                                Booking list
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" {{listActive('orders') ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-box1"></i>
                        Orders Manage
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('orders.index') }}" class=" {{ linkActive('orders.index') ? 'mm-active' : '' }}">
                                <i class="metismenu-icon"></i>
                                Order list
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}" class=" {{ linkActive('customers.index') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="{{ route('payments.index') }}" class=" {{ linkActive('payments.index') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paper-plane"></i>
                        Payments
                    </a>
                </li>
                <li>
                    <a href="{{ route('carpenter.index') }}" class=" {{ linkActive('carpenter.index') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                        Carpenters
                    </a>
                </li>
                <li>
                    <a href="{{route("site-settings")}}" class=" {{ linkActive('site-settings') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Site Settings
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
