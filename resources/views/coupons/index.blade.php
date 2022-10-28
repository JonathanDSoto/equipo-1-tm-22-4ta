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
                                            - El registro no se pudo completar, el cupón no se pudo agregar
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Cupón agregado
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

                                        <div div class="d-flex justify-content-sm-end">

                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCoupon">
                                                + Añadir un cupón nuevo
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
                                                                        <div class="input-group">
                                                                            <label class="input-group-text" for="inputGroupSelect01">Tipo de cupón</label>
                                                                            <select class="form-select" id="inputGroupSelect01">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Cupon de descuento</option>
                                                                                <option value="2">Cupon de descuento fijo</option>
                                                                            </select>
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
                                <table  id="dataTables-example" name="dataTables-example"  class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Código</th>
                                            <th scope="col">Válido hasta el</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>10% off</td>
                                            <td>10%off</td>
                                            <td>2023-09-01</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="{{ route('coupons.detailCoupon') }}" class="link-primary">
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
        <br>
        <br>
        @include('layouts.footer')
    </div>

    <!-- End Page-content -->
    

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