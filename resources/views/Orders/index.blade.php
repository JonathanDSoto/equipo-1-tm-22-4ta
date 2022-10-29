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
                                            - El registro no se pudo completar, la orden no se pudo agregar
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Orden agregada
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

                                        <div div class="d-flex justify-content-sm-end">

                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addOrder">
                                                + Añadir una orden
                                            </button>
                                            <div class="modal fade modal-lg" id="addOrder" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridClient">Nueva orden</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="javascript:void(0);">
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Folio</label>
                                                                            <input type="" class="form-control" id="placeholderInput" placeholder="A55023422">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <label for="exampleDataList" class="form-label">Cliente</label>
                                                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Busca el cliente...">
                                                                        <datalist id="datalistOptions">
                                                                            <option value="Switzerland">
                                                                            <option value="New York">
                                                                            <option value="France">
                                                                            <option value="Spain">
                                                                            <option value="Chicago">
                                                                            <option value="Bulgaria">
                                                                            <option value="Hong Kong">
                                                                        </datalist>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <label for="exampleDataList" class="form-label">Dirección</label>
                                                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Busca la dirección...">
                                                                        <datalist id="datalistOptions">
                                                                            <option value="Switzerland">
                                                                            <option value="New York">
                                                                            <option value="France">
                                                                            <option value="Spain">
                                                                            <option value="Chicago">
                                                                            <option value="Bulgaria">
                                                                            <option value="Hong Kong">
                                                                        </datalist>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                    <label for="exampleDataList" class="form-label">Producto</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="inputGroupSelect01">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Producto 1</option>
                                                                                <option value="2">Producto 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                    <label for="exampleDataList" class="form-label">Presentación</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="inputGroupSelect01">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Producto 1</option>
                                                                                <option value="2">Producto 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Cantidad</label>
                                                                            <input type="" class="form-control" id="placeholderInput" placeholder="3">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <label for="exampleDataList" class="form-label">Cupón</label>
                                                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Busca el cupón...">
                                                                        <datalist id="datalistOptions">
                                                                            <option value="Switzerland">
                                                                            <option value="New York">
                                                                            <option value="France">
                                                                            <option value="Spain">
                                                                            <option value="Chicago">
                                                                            <option value="Bulgaria">
                                                                            <option value="Hong Kong">
                                                                        </datalist>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                    <label for="exampleDataList" class="form-label">Método de pago</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="inputGroupSelect01">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Producto 1</option>
                                                                                <option value="2">Producto 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <!-- Base Example -->
                                                                    <label for="formFile" class="form-label">Categorías</label>
                                                                    <div class="list-checkbox">

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
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                                        </div>
                                                                    </div>

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
                                <table id="dataTables-example" name="dataTables-example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Presentación</th>
                                            <th scope="col">Opciones</th>
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
                                                    <a href="{{ route('orders.detailOrder') }}" class="link-primary">
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
                                                    <a href="{{ route('orders.detailOrder') }}" class="link-primary">
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

<style>
    .list-checkbox {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }
</style>