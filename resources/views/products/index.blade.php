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

            <!-- End Page-content -->

            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-end">
                                        <div div class="d-flex justify-content-sm-end">

                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProductModal">
                                                <i class="ri-add-line align-bottom me-1"></i>Añadir un producto
                                            </button>
                                            <div class="modal fade modal-lg" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="createProductModal">Nuevo Producto</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="javascript:void(0);">
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Nombre del producto</label>
                                                                            <input type="email" class="form-control" placeholder="playera azul">
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
                                                                            <label class="form-label">Slug</label>
                                                                            <input type="text" class="form-control" placeholder="Slug">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Características</label>
                                                                            <input type="text" class="form-control" placeholder="La lavadora cuenta con capacidad de lavado de 18 kg...">
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
                            </div>




                            <!-- end card header -->
                            <div class="card-body">

                                <div class="col-10">
                                    <div class="row">
                                        <div class="card col-4" style="padding-left: 2%;">
                                            <img class="card-img-top" src="{{asset('images/logIslandSofa.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProductModal">Editar</button>
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                                <button type="button" class="btn btn-secondary">Ver detalles</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <!-- End Page-content -->


            @include('layouts.footer')

        </div>
        <!-- end main content-->

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




</body>


</html>