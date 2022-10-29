        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-eshop.png')}}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/online-shop-ecommerce-eshop.png')}}" alt="" height="50">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ route('products.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-eshop.png')}}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/online-shop-ecommerce-eshop.png')}}" alt="" height="50">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <!-- Usuarios -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('users.index') }}">
                                <i class="ri-team-fill"></i> <span data-key="t-widgets">Usuarios</span>
                            </a>
                        </li>
                        <!-- Clientes -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('clientes.index') }}">
                                <i class="ri-user-3-line"></i> <span data-key="t-widgets">Clientes</span>
                            </a> 
                        </li>
                        <!-- Productos -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('products.index') }}">
                                <i class="ri-shopping-bag-3-line"></i> <span data-key="t-widgets">Productos</span>
                            </a>
                        </li>
                        <!-- Catalogos -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="bx bxs-layer"></i> <span data-key="t-maps">Catálogos</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul>
                                    <li class="nav-item">
                                        <a href="{{ route('catalogs.categories.index') }}" class="nav-link" data-key="t-leaflet">
                                            <i class="bx bx-category"></i> Categorías
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('catalogs.brands.index') }}" class="nav-link" data-key="t-vector">
                                        <i class="bx bxl-dribbble"></i> Marcas
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('catalogs.tags.index') }}" class="nav-link" data-key="t-leaflet">
                                            <i class="ri-price-tag-3-line"></i> Etiquetas
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Cupones -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('coupons.index') }}">
                                <i class="ri-pantone-line"></i> <span data-key="t-widgets">Cupones</span>
                            </a>
                        </li>
                        <!-- Ordenes -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('orders.index') }}">
                                <i class="ri-order-play-line"></i> <span data-key="t-widgets">Ordenes</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>