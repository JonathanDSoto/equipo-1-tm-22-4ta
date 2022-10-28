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
                                <!-- Boton con el alert por error al iniciar sesion -->
                                <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                    <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                    - El registro no se pudo completar, el producto no se pudo agregar
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <!-- Success Alert -->
                                <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                    <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Producto agregado
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="row g-4">

                                    <div class="d-flex justify-content-sm-end">
                                        <div>
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

                                <!-- Tables Without Borders -->
                                <table id="dataTables-example" name="dataTables-example"  class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Ordenes de este producto</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td data-column-id="product" class="">
                                                <span>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-14 mb-1">Comedor Miguel con 4 Sillas</h5>
                                                            <p class="text-muted mb-0">Categoria : <span class="fw-medium">Hogar y Muebles</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </td>
                                            <td>$ 8999.98 </td>
                                            <td>50</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="{{ route('products.details') }}" class="link-primary">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td data-column-id="product" class="">
                                                <span>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded p-1"><img src="{{asset('images/bardotTable.png')}}" alt="" class="img-fluid d-block"></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-14 mb-1">Comedor Miguel con 4 Sillas</h5>
                                                            <p class="text-muted mb-0">Categoria : <span class="fw-medium">Hogar y Muebles</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </td>
                                            <td>$ 8999.98 </td>
                                            <td>50</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="{{ route('products.details') }}" class="link-primary">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- End Page-content -->

            

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
