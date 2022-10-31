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

                    @if (session('success'))
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                        <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Orden actualizada
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                            - No se pudo actualizar la orden
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div>

                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">

                                    <div class="col-sm">
                                        <h1>
                                            Estado de la orden: <span class="badge bg-primary">{{$order->order_status->name}}</span>
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
                                                            <form action="{{route('orders.update', $order->id)}}" method="POST">
                                                                @method('put')
                                                                @csrf
                                                                <div class="row g-3">

                                                                    <!-- Select -->
                                                                    <div class="input-group">
                                                                        <label class="input-group-text" for="inputGroupSelect01">Estado orden</label>
                                                                        <select class="form-select" id="inputGroupSelect01" name="order_status_id">
                                                                            <option @if ($order->order_status->id == 1) selected @endif value="1">Pendiente de pago</option>
                                                                            <option @if ($order->order_status->id == 2) selected @endif value="2">Pagada</option>
                                                                            <option @if ($order->order_status->id == 3) selected @endif value="3">Enviada</option>
                                                                            <option @if ($order->order_status->id == 4) selected @endif value="4">Abandonado</option>
                                                                            <option @if ($order->order_status->id == 5) selected @endif value="5">Pendiente de Enviar</option>
                                                                            <option @if ($order->order_status->id == 6) selected @endif value="6">Cancelada</option>
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
                                <table id="dataTables-example" name="dataTables-example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto(s)</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->presentations as $presentation)
                                        <tr>
                                            <td>
                                                <span>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded p-1"><img src="https://crud.jonathansoto.mx/storage/products/{{$presentation->cover}}" alt="" class="img-fluid d-block"></div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-14 mb-1">{{$presentation->description}}</h5>
                                                        </div>
                                                    </div>
                                                </span>
                                            </td>
                                            <td>${{$presentation->current_price->amount}}</td>
                                            <td>{{$presentation->pivot->quantity}}</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    @if (isset($presentation->product->id))
                                                        <a href="{{route('products.details', $presentation->product->id)}}" class="link-primary">
                                                            <button type="button" class="btn btn-primary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>
                            <div class="d-flex justify-content-sm-end">
                                <h3>
                                    Monto total: ${{$order->total}}
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
                                            <td>{{$order->folio}}</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Datos del cliente</th>
                                            
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Nombre del cliente</th>
                                            <td>@if (isset($order->client->name))
                                                {{$order->client->name}}
                                            @endif </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Correo electrónico</th>
                                            <td>@if (isset($order->client->email))
                                                {{$order->client->email}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número de teléfono</th>
                                            <td>@if (isset($order->client->phone_number))
                                                {{$order->client->phone_number}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nivel</th>
                                            <td>@if (isset($order->client->phone_number))
                                                {{$order->client->level_id}}
                                            @endif</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Dirección</th>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">A nombre de</th>
                                            <td>@if (isset($order->address->first_name))
                                                {{$order->address->first_name}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Calle y número</th>
                                            <td>@if (isset($order->address->street_and_use_number))
                                                {{$order->address->street_and_use_number}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código postal</th>
                                            <td>@if (isset($order->address->postal_code))
                                                {{$order->address->postal_code}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estado</th>
                                            <td>@if (isset($order->address->first_name))
                                                {{$order->address->first_name}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ciudad</th>
                                            <td>@if (isset($order->address->city))
                                                {{$order->address->city}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número celular</th>
                                            <td>@if (isset($order->address->phone_number))
                                                {{$order->address->phone_number}}
                                            @endif</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th scope="row">Total de la orden</th>
                                            <td>{{$order->total}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cupón utilizado</th>
                                            <td>@if (isset($order->coupon))
                                                {{$order->coupon->code}}
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estado de pago</th>
                                            <td>@if (isset($order->order_status))
                                                {{$order->order_status->name}}
                                            @endif</td>
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