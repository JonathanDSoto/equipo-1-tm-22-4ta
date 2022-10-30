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
                                        @if (session('success'))
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Registro completado
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @elseif (session('error'))
                                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                            - El registro no se pudo completar, datos incorrectos
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
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
                                                                            <input type="text" class="form-control" id="firstName" placeholder="10% off" value="{{$coupon->name}}" required>
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
                                            <td>{{$coupon->id}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nombre</th>
                                            <td>{{$coupon->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>{{$coupon->code}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Porcentaje descontado</th>
                                            <td>{{$coupon->percentage_discount}}%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Monto mínimo</th>
                                            <td>${{$coupon->min_amount_required}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cantidad mínima de productos</th>
                                            <td>{{$coupon->min_product_required}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido desde el</th>
                                            <td>{{$coupon->start_date}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido hasta el</th>
                                            <td>{{$coupon->end_date}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Usos máximos</th>
                                            <td>{{$coupon->max_uses}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Número de veces usado</th>
                                            <td>{{$coupon->count_uses}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Válido solo en la primer compra</th>
                                            <td>@if ($coupon->valid_only_first_purchase == 1)
                                                Si
                                            @else
                                                No
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tipo de cupón</th>
                                            <td>{{$coupon->couponable_type}}</td>
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
                                <table class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Folio</th>
                                            <th scope="col">Descuento aplicado</th>
                                            <th scope="col">Total sin descuento</th>
                                            <th scope="col">Total con descuento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupon->orders as $order)

                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->folio}}</td>
                                            <td>{{ ($order->total/ ((100-$coupon->percentage_discount)/100)) - $order->total}}</td>
                                            <td>{{ $order->total/ ((100-$coupon->percentage_discount)/100) }}</td>
                                            <td>${{$order->total}}</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="{{route('orders.detailOrder', $order->id)}}" class="link-primary">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->

                            <!-- Cupones -->
                            <div class="d-flex align-items-center px-5 ms-xl-4">

                                <!-- card -->
                                <div class="card card-animate bg-info" style="margin-left: 30%;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="fw-medium text-white-50 mb-0">Usos Totales</p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                    <i class="bx bx-shopping-bag text-white"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{$coupon->count_uses}}">0</span></h4>

                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card card-animate bg-success" style="margin-left: 5%;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="fw-medium text-white-50 mb-0">Cantidad descontada en compras</p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                    <i class="bx bx-shopping-bag text-white"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="5000">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="card card-animate bg-primary" style="margin-left: 5%;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="fw-medium text-white-50 mb-0">Usos restantes</p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                    <i class="bx bx-shopping-bag text-white"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{$coupon->max_uses - $coupon->count_uses}}">0</span></h4>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!-- end card -->

                                <!-- end col -->
                            </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        //delete
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Estas seguro de eliminar?',
                text: "No podras revertir la accion!",
                icon: 'warning',
                showCancelButton: true, 
                confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'El registro ha sido eliminado.',
                        'success'
                        )
                    this.submit();
                    
                }
                
            })
        });
    </script>

</body>

</html>