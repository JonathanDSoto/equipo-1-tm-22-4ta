        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/logo-light.png')}}" alt="" height="17">
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
                            <a class="nav-link menu-link" href="widgets.html">
                                <i class="ri-team-fill"></i> <span data-key="t-widgets">Usuarios</span>
                            </a>
                        </li>
                        <!-- Clientes -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
                                <i class="ri-user-3-line"></i> <span data-key="t-widgets">Clientes</span>
                            </a>
                        </li>
                        <!-- Productos -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
                                <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-widgets">Productos</span>
                            </a>
                        </li>
                        <!-- Catalogos -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-price-tag-3-line"></i> <span data-key="t-maps">Catálogos</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="maps-google.html" class="nav-link" data-key="t-google">
                                            Categorías
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                            Marcas
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                            Etiquetas
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Cupones -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
                                <i class="ri-coupon-2-line"></i> <span data-key="t-widgets">Cupones</span>
                            </a>
                        </li>
                        <!-- Ordenes -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
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