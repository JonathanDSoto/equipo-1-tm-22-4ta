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

                <div class="col-xl-12 col-lg-12">

                    <div>

                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">

                                    <div class="col-sm">
                                        <!-- Boton con el alert por error al iniciar sesion -->
                                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                            - El registro no se pudo completar, el cupón no se pudo actualizar
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Cupón actualizado
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

                                        <div div class="d-flex justify-content-sm-end">

                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCoupon">
                                                <i class="ri-edit-box-line"></i> Editar cupón
                                            </button>
                                            <div class="modal fade modal-lg" id="addCoupon" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridClient">Cupones</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="javascript:void(0);">
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="firstName" class="form-label">Nombre Cupón</label>
                                                                            <input type="text" class="form-control" id="firstName" placeholder="10% off">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->


                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="lastName" class="form-label">Código del cupón</label>
                                                                            <input type="text" class="form-control" id="lastName" placeholder="10off">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Porcentaje a descontar</label>
                                                                            <input type="text" class="form-control" placeholder="10">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Monto minimo requerido</label>
                                                                            <input type="text" class="form-control" placeholder="200">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Productos minimos requeridos</label>
                                                                            <input type="text" class="form-control" placeholder="1">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Usos máximos</label>
                                                                            <input type="text" class="form-control" placeholder="30">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Válido desde el</label>
                                                                            <input type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Válido hasta el</label>
                                                                            <input type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Válido sólo en la primer compra</label>
                                                                            <div>
                                                                                <input type="radio" id="si" name="primerCompra" value="si">
                                                                                <label for="si">Sí</label>
                                                                            </div>
                                                                            <div>
                                                                                <input type="radio" id="no" name="primerCompra" value="no">
                                                                                <label for="no">No</label>
                                                                            </div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <!-- Tables Without Borders -->
                                <table class="table table-borderless table-nowrap align-middle">
                                    <tbody>
                                        <tr class="border-top">
                                            <th scope="row">Datos del cupón</th>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Id</th>
                                            <td>12345</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre</th>
                                            <td>10% off</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>10off</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Porcentaje descontado</th>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Monto mínimo</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cantidad mínima de productos</th>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido desde el</th>
                                            <td>2022-09-01</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido hasta el</th>
                                            <td>2022-12-01</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Usos máximos</th>
                                            <td>5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número de veces usado</th>
                                            <td>50
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido solo en la primer compra</th>
                                            <td>Si</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipo de cupón</th>
                                            <td>Cupón de descuento</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <h3>Ordenes en las que se usó este cupón</h3>
                                <!-- Tables Without Borders -->
                                <table class="table table-borderless table-nowrap align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Presentación</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Producto 1</td>
                                            <td>
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                </div>
                                            </td>
                                            <td>$ 5000</td>
                                            <td>5</td>
                                            <td>Presentación 1</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Producto 2</td>
                                            <td>
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                </div>
                                            </td>
                                            <td>$ 5000</td>
                                            <td>5</td>
                                            <td>Presentación 2</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>

    <!-- End Page-content -->
    @include('layouts.footer')

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

</body>

</html>