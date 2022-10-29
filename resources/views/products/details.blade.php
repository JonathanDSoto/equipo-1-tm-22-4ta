<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    @include('layouts.head')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.nav')

        <!-- ========== App Menu ========== -->
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @include('layouts.bread')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <!-- Boton con el alert por error al iniciar sesion -->
                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                            - El registro no se pudo completar, el producto no se pudo actualizar
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Producto actualizado
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- Boton con el alert por error al iniciar sesion -->
                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                            - El registro no se pudo completar, la presentación no se pudo actualizar
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Presentación actualizada
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- Boton con el alert por error al iniciar sesion -->
                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                            - El registro no se pudo completar, la presentación no se pudo añadir
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Presentación añadida
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="product-thumbnail-slider p-2 rounded bg-light">
                                            <div>
                                                <div>
                                                    <img src="{{asset('images/products/img-8.png')}}" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4>Comedor Miguel con 4 Sillas</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div class="text-muted">Slug: <span class="text-body fw-medium">comedor-miguel-con-4-sillas</span></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Marca: <span class="text-body fw-medium">Zoetic Fashion</span></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Categorias: <span class="text-body fw-medium">Hogar y Muebles</span></div>
                                                </div>
                                            </div>
                                            <!-- Boton editar -->
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editProductModal">
                                                        <i class="ri-add-line align-bottom me-1"></i>Editar producto
                                                    </button>
                                                    <div class="modal fade modal-lg" id="editProductModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editProductModal">Editar Producto</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="javascript:void(0);">
                                                                        <div class="row g-3">

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Nombre del producto</label>
                                                                                    <input type="email" class="form-control" placeholder="Nombre del producto">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Descripción</label>
                                                                                    <input type="text" class="form-control" placeholder="Descripción">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Slug</label>
                                                                                    <input type="text" class="form-control" placeholder="Slug">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Marca</label>
                                                                                    <input type="text" class="form-control" placeholder="Marca">
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Características</label>
                                                                                    <input type="text" class="form-control" placeholder="Características">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-xxl-6">
                                                                                <label for="formFile" class="form-label">Imagen del producto</label>
                                                                                <input name="cover" type="file" class="form-control">
                                                                            </div>

                                                                            <!-- Base Example -->
                                                                            <label for="formFile" class="form-label">Categorías</label>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label" for="formCheck1">
                                                                                    Hogar y Muebles
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label" for="formCheck1">
                                                                                    Línea blanca
                                                                                </label>
                                                                            </div>

                                                                            <!-- Base Example -->
                                                                            <label for="formFile" class="form-label">Tags</label>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label" for="formCheck1">
                                                                                    Muebles
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label" for="formCheck1">
                                                                                    Hogar
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label" for="formCheck1">
                                                                                    Baño
                                                                                </label>
                                                                            </div>


                                                                            <div class="col-lg-12">
                                                                                <div class="hstack gap-2 justify-content-end">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-success">Guardar</button>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                        <!--end row-->
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mt-4">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-money-dollar-circle-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Precio:</p>
                                                            <h5 class="mb-0">$120.40</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <!-- end col -->
                                        <!-- <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-file-copy-2-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">No. de ordenes:</p>
                                                            <h5 class="mb-0">2,234</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <!-- end col -->
                                        <!-- <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-stack-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Nímero de stocks:</p>
                                                            <h5 class="mb-0">1,230</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <!-- end col -->
                                        <!-- <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                <i class="ri-inbox-archive-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Peso en gramos:</p>
                                                            <h5 class="mb-0">645g</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <!-- end col -->
                                        <!-- </div> -->

                                        <div class="mt-4 text-muted">
                                            <h5 class="fs-14">Descripción:</h5>
                                            <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material composition is 100% organic cotton. This is one of the world’s leading designer lifestyle brands and is internationally recognized for celebrating the essence of classic American cool style, featuring preppy with a twist designs.</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Etiquetas :</h5>
                                                    <ul class="list-unstyled">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Muebles</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Hogar</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Services :</h5>
                                                    <ul class="list-unstyled product-desc-list">
                                                        <li class="py-1">10 Days Replacement</li>
                                                        <li class="py-1">Cash on Delivery available</li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="product-content mt-5">

                                            <label>Presentaciones del producto</label>
                                            <div class="d-flex justify-content-sm-end">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createPresentationModal">
                                                    <i class="ri-add-line align-bottom me-1"></i>Añadir una presentación
                                                </button>
                                            </div>

                                            <div class="modal fade modal-lg" id="createPresentationModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="createPresentationModal">Nueva presentación</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="javascript:void(0);">
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Código</label>
                                                                            <input type="email" class="form-control" placeholder="comi01">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Descripción</label>
                                                                            <input type="text" class="form-control" placeholder="hermosa playera de color azul de la marca 21 forever">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Peso en gramos</label>
                                                                            <input type="text" class="form-control" placeholder="5000">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <label for="formFile" class="form-label">Imagen del producto</label>
                                                                        <input name="cover" type="file" class="form-control">
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock</label>
                                                                            <input type="text" class="form-control" placeholder="10">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock mínimo</label>
                                                                            <input type="text" class="form-control" placeholder="1">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock máximo</label>
                                                                            <input type="text" class="form-control" placeholder="10">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Precio</label>
                                                                            <input type="text" class="form-control" placeholder="1000">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <nav>
                                                <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="false">Presentación 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Presentación 2</a>
                                                    </li>

                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Id</th>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Descripción</th>
                                                                    <td>Comedor Miguel con 4 Sillas</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Código</th>
                                                                    <td>comi01</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Peso en gramos</th>
                                                                    <td>5000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Estado</th>
                                                                    <td>Activo</td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th scope="row">Imagen del producto</th>
                                                                    <td>
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <th scope="row">Stock</th>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock mínimo</th>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock máximo</th>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Precio</th>
                                                                    <td>5699.98</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <!-- modal editar presentación -->
                                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editPresentacionModal">
                                                                            <i class="ri-edit-box-line"></i> Editar presentación
                                                                        </button>


                                                                        <div class="modal fade modal-lg" id="editPresentacionModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="editPresentacionModal">Editar presentación</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row g-3">

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Código</label>
                                                                                                        <input type="email" class="form-control" placeholder="comi01">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Descripción</label>
                                                                                                        <input type="text" class="form-control" placeholder="hermosa playera de color azul de la marca 21 forever">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Peso en gramos</label>
                                                                                                        <input type="text" class="form-control" placeholder="5000">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <!-- <div class="col-xxl-6">
                                                                                                    <label for="formFile" class="form-label">Imagen del producto</label>
                                                                                                    <input name="cover" type="file" class="form-control">
                                                                                                </div> -->

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock</label>
                                                                                                        <input type="text" class="form-control" placeholder="10">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock mínimo</label>
                                                                                                        <input type="text" class="form-control" placeholder="1">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock máximo</label>
                                                                                                        <input type="text" class="form-control" placeholder="10">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack gap-2 justify-content-end">
                                                                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        <!-- modal editar precio presentación -->
                                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editPrecioModal">
                                                                            <i class="ri-edit-box-line"></i> Editar el precio de la presentación
                                                                        </button>
                                                                        <div class="modal fade modal-lg" id="editPrecioModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="editPrecioModal">Editar presentación</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="javascript:void(0);">
                                                                                            <div class="row g-3">

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Precio nuevo</label>
                                                                                                        <input type="email" class="form-control" placeholder="10000">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <div class="col-lg-12">
                                                                                                    <div class="hstack gap-2 justify-content-end">
                                                                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                            </div>
                                                                                            <!--end row-->
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Id</th>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Descripción</th>
                                                                    <td>Comedor Miguel con 4 Sillas</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Código</th>
                                                                    <td>comi01</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Peso en gramos</th>
                                                                    <td>5000</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Estado</th>
                                                                    <td>Activo</td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th scope="row">Imagen del producto</th>
                                                                    <td>
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <th scope="row">Stock</th>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock mínimo</th>
                                                                    <td>1</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock máximo</th>
                                                                    <td>10</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Precio</th>
                                                                    <td>5699.98</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-content -->
                                    </div>
                                    
                                    <div class="card-body">

                                        <!-- Tables Without Borders -->
                                        <table id="dataTables-example" name="dataTables-example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Folio</th>
                                                    <th scope="col">Presentación</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Total de la orden</th>
                                                    <th scope="col">Cliente</th>
                                                    <th scope="col">Estado de la oden</th>
                                                    <th scope="col">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>82713</td>
                                                    <td data-column-id="product" class="">
                                                        <span>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-14 mb-1">Comedor Miguel con 4 Sillas</h5>
                                                                    <p class="text-muted mb-0">Categoria: <span class="fw-medium">Hogar y Muebles</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td>5</td>
                                                    <td>$ 899.98 </td>
                                                    <td>Cliente</td>
                                                    <td>Estado de la orden</td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-15">
                                                            <a href="" class="link-primary">
                                                                <button type="button" class="btn btn-primary">
                                                                    <i class="ri-eye-line"></i>
                                                                </button>
                                                            </a>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>82713</td>
                                                    <td data-column-id="product" class="">
                                                        <span>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-14 mb-1">Comedor Miguel con 4 Sillas</h5>
                                                                    <p class="text-muted mb-0">Categoria: <span class="fw-medium">Hogar y Muebles</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td>5</td>
                                                    <td>$ 899.98 </td>
                                                    <td>Cliente</td>
                                                    <td>Estado de la orden</td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-15">
                                                            <a href="" class="link-primary">
                                                                <button type="button" class="btn btn-primary">
                                                                    <i class="ri-eye-line"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->



        </div>
        <!-- end main content-->
        <br>
        <br>
        @include('layouts.footer')

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>



    @include('layouts.scripts')
    <!-- data table -->
    <script>
        $('#dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },

                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },

        });
    </script>




</body>


</html>