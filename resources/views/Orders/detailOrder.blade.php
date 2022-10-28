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

                    <!-- Boton con el alert por error al iniciar sesion -->
                    <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                        <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                        - No se pudo actualizar la orden
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!-- Success Alert -->
                    <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                        <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - orden actualizada
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div>

                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">

                                    <div class="col-sm">

                                        <h1>
                                            Estado de la orden: <span class="badge bg-danger">Cancelada</span>
                                        </h1>
                                        <h1>
                                            Estado de la orden: <span class="badge bg-success">Pagada</span>
                                        </h1>
                                        <h1>
                                            Estado de la orden: <span class="badge bg-success">Enviada</span>
                                        </h1>
                                        <h1>
                                            Estado de la orden: <span class="badge bg-danger">Abandonada</span>
                                        </h1>
                                        <h1>
                                            Estado de la orden: <span class="badge bg-warning">Pendiente de enviar</span>
                                        </h1>
                                        <h1>
                                            Estado de la orden: <span class="badge bg-warning">Pendiente de pago</span>
                                        </h1>

                                        <div class="d-flex justify-content-sm-end">

                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editarOrden">
                                                <i class="ri-edit-box-line"></i> Editar estado de la orden
                                            </button>
                                            <div class="modal fade modal-lg" id="editarOrden" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridClient">Estado de la orden</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="javascript:void(0);">
                                                                <div class="row g-3">

                                                                    <!-- Select -->
                                                                    <div class="input-group">
                                                                        <label class="input-group-text" for="inputGroupSelect01">Estado orden</label>
                                                                        <select class="form-select" id="inputGroupSelect01">
                                                                            <!-- <option selected>Nivel...</option> -->
                                                                            <option value="1">Completado</option>
                                                                            <option value="2">Pendiente de pago</option>
                                                                        </select>
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
                                            <th scope="col">Producto(s)</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Presentación</th>
                                            <th scope="col"><a href="#">Más detalles</a></th>
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
                                            <td>Presentación 1</td>

                                        </tr>

                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>
                            <div class="d-flex justify-content-sm-end">
                                <h3>
                                    Monto total: $10000
                                </h3>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12">

                    <div>

                        <div class="card">

                            <div class="card-body">
                                <!-- Tables Without Borders -->
                                <table class="table table-borderless table-nowrap align-middle">
                                    <tbody>
                                        <tr class="border-top">
                                            <th scope="row">Folio</th>
                                            <td>12345</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Datos del cliente</th>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Nombre del cliente</th>
                                            <td>Juan Perez</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Correo electrónico</th>
                                            <td>jp@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número de teléfono</th>
                                            <td>6121286621</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nivel</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Dirección</th>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">A nombre de</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Calle y número</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código postal</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estado</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ciudad</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número celular</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Total de la orden</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cupón utilizado</th>
                                            <td>$ 5000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estado de pago</th>
                                            <td>$ 5000</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
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