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
                    <div class="card">
                        <!-- Boton con el alert por error al iniciar sesion -->
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

                        <div>
                            <div class="container-fluid">
                                <div class="profile-foreground position-relative mx-n2 mt-n2">
                                    <div class="profile-wid-bg">
                                        <img src="{{asset('images/fondo-profile.jpg')}}" alt="" class="profile-wid-img" />
                                    </div>
                                </div>
                                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                                    <div class="row g-4">
                                        <!-- <div class="col-auto">
                                            <div class="avatar-lg">
                                                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle" />
                                            </div>
                                        </div> -->
                                        <!--end col -->
                                        <div class="col">
                                            <div class="p-2">
                                                <h3 class="text-white mb-1">{{$client->name}}</h3>
                                                <!-- <p class="text-white-75">Founder</p> -->
                                            </div>
                                        </div>

                                    </div>
                                    <!--end row-->

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <br>
                                            <div class="d-flex justify-content-sm-start">
                                                <div class="col-xxl-5">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Información Personal</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Nombre: </th>
                                                                            <td class="text-muted">{{$client->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Nivel de suscripción: </th>
                                                                            <td class="text-muted">{{$client->level->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">No. Celular:</th>
                                                                            <td class="text-muted">{{$client->phone_number}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Correo Electrónico: </th>
                                                                            <td class="text-muted">{{$client->email}}</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="d-flex justify-content-sm-center">
                                                                <div class="flex-shrink-0">
                                                                    <!-- <a href="pages-profile-settings.html" data-bs-toggle="modal" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a> -->
                                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#profileClientModal"><i class="ri-edit-box-line align-bottom"></i> Editar Perfil</button>
                                                                    <div class="modal fade modal-lg" id="profileClientModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="profileClientModal">Editar cliente</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{route('clientes.update',$client->id)}}" method="POST">
                                                                                        @method('put')
                                                                                        @csrf

                                                                                        <div class="row g-3">
                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="firstName" class="form-label">Nombre(s)</label>
                                                                                                    <input type="text" name="name" class="form-control" id="firstName" placeholder="Ingrese el nombre" maxlength="50" onkeypress="return soloLetras(event)" value="{{$client->name}}" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="emailInput" class="form-label">Correo</label>
                                                                                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Ingrese correo electrónico" maxlength="50" value="{{$client->email}}" onkeypress="return soloLetrascorreo(event)" required>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Número celular</label>
                                                                                                    <input type="text" name="phone_number" class="form-control" id="lastName" placeholder="Ingrese el numero celular" maxlength="10" onkeypress="return solonumeros(event)" value="{{$client->phone_number}}" required>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--end col-->

                                                                                            <!-- <div class="col-xxl-6">
                                                                                                <label for="formFile" class="form-label">Imagen Avatar</label>
                                                                                                <input name="cover" type="file" class="form-control">
                                                                                            </div> -->

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
                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">+ Añadir una nueva dirección</button>
                                                                    <div class="modal fade modal-lg" id="addAddressModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Añadir una nueva dirección</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="{{route('clientes.store.address')}}" method="POST">
                                                                                        @csrf
                                                                                        <div class="row g-3">
                                                                                            <input type="hidden" name="client_id" value="{{$client->id}}">
                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="firstname" class="form-label">Nombre(s)</label>
                                                                                                    <input type="text" name="first_name" class="form-control" id="firstname" placeholder="Ingrese el nombre" maxlength="50" onkeypress="return soloLetras(event)" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Apellidos</label>
                                                                                                    <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Ingrese los apellidos" maxlength="50" onkeypress="return soloLetras(event)" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Calle y No. #</label>
                                                                                                    <input type="text" name="street_and_use_number" class="form-control" id="lastName" placeholder="Ingrese la calle y su No." maxlength="50" onkeypress="return soloLetrasnumerosygato(event)">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Código postal</label>
                                                                                                    <input type="text" name="postal_code" class="form-control" id="lastName" placeholder="Ingrese el código postal" maxlength="5" onkeypress="return solonumeros(event)">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Ciudad</label>
                                                                                                    <input type="text" name="city" class="form-control" id="lastName" placeholder="Ingrese la ciudad" maxlength="25" onkeypress="return soloLetras(event)">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Estado</label>
                                                                                                    <input type="text" name="province" class="form-control" id="lastName" placeholder="Ingrese el estado" maxlength="25" onkeypress="return soloLetras(event)">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Número celular</label>
                                                                                                    <input type="text" name="phone_number" class="form-control" id="lastName" placeholder="Ingrese el numero celular" maxlength="10" onkeypress="return solonumeros(event)">
                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="hidden" name="is_billing_address" value="1">
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

                                                        </div><!-- end card body -->

                                                    </div><!-- end card -->



                                                </div><!-- end row -->
                                            </div>
                                            <!--end col-->

                                            <!-- end col -->
                                        </div>
                                        <!--end tab-content-->
                                    </div>
                                </div>

                                <!--end col-->
                            </div>

                            <!-- Mis Direcciones -->
                            <div class="col-lg-8" style="width: 95%; padding:2%">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Mis direcciones</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- Tables Without Borders -->
                                        <table class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Calle y No. #</th>
                                                    <th scope="col">Código postal</th>
                                                    <th scope="col">Ciudad</th>
                                                    <th scope="col">Estado</th>
                                                    <th scope="col">No. Cel.</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->addresses as $address)
                                                <tr>
                                                    <th scope="row">{{$address->id}}</th>
                                                    <td>{{$address->first_name}} {{$address->last_name}}</td>
                                                    <td>{{$address->street_and_use_number}}</td>
                                                    <td>{{$address->postal_code}}</td>
                                                    <td>{{$address->city}}</td>
                                                    <td>{{$address->province}}</td>
                                                    <td>{{$address->phone_number}}</td>

                                                    <td>
                                                        <div class="hstack gap-3 fs-15">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAddress{{$address->id}}"><i class="ri-edit-box-line"></i></button>
                                                            <div class="modal fade modal-lg" id="editAddress{{$address->id}}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalgridLabel">Editar direccion</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="{{route('clientes.update.address', $address->id)}}" method="POST">
                                                                                @method('PUT')
                                                                                @csrf
                                                                                <div class="row g-3">
                                                                                    <input type="hidden" name="client_id" value="{{$client->id}}">
                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="firstname" class="form-label">Nombre(s)</label>
                                                                                            <input type="text" name="first_name" class="form-control" id="firstname" placeholder="Ingrese el nombre" onkeypress="return soloLetras(event)" value="{{$address->first_name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Apellidos</label>
                                                                                            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Ingrese los apellidos" onkeypress="return soloLetras(event)" value="{{$address->last_name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Calle y No. #</label>
                                                                                            <input type="text" name="street_and_use_number" class="form-control" id="lastName" placeholder="Ingrese la calle y su No." onkeypress="return soloLetrasnumerosygato(event)" value="{{$address->street_and_use_number}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Código postal</label>
                                                                                            <input type="text" name="postal_code" class="form-control" id="lastName" placeholder="Ingrese el código postal" onkeypress="return solonumeros(event)" value="{{$address->postal_code}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Ciudad</label>
                                                                                            <input type="text" name="city" class="form-control" id="lastName" placeholder="Ingrese la ciudad" onkeypress="return soloLetras(event)" value="{{$address->city}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Estado</label>
                                                                                            <input type="text" name="province" class="form-control" id="lastName" placeholder="Ingrese el estado" onkeypress="return soloLetras(event)" value="{{$address->province}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end col-->

                                                                                    <div class="col-xxl-6">
                                                                                        <div>
                                                                                            <label for="lastName" class="form-label">Número celular</label>
                                                                                            <input type="text" name="phone_number" class="form-control" id="lastName" placeholder="Ingrese el numero celular" onkeypress="return solonumeros(event)" value="{{$address->phone_number}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="is_billing_address" value="1">
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
                                                            <form class="form-eliminar" action="{{route('clientes.delete.address', $address->id)}}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="ri-delete-bin-5-line"></i>
                                                                </button>
                                                            </form>
                                                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                        <!-- end tab content -->

                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                            <!-- widgets -->
                            <div class="d-flex align-items-center px-5 ms-xl-4">

                                <!-- card -->
                                <div class="card card-animate bg-info" style="margin-left: 30%;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="fw-medium text-white-50 mb-0">Ordenes Totales</p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                    <i class="bx bx-shopping-bag text-white"></i>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="10">0</span></h4>

                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card card-animate bg-success" style="margin-left: 5%;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <p class="fw-medium text-white-50 mb-0">Total en compras</p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-light rounded fs-3 shadow">
                                                    <i class="bx bx-shopping-bag text-white"></i>
                                                </span>
                                            </div>

                                        </div>
                                        @php
                                             $concat = 0;
                                            @endphp
                                                @foreach ($client->orders as $order)
                                                    @php
                                                        $concat = $concat + $order->total;
                                                    @endphp
                                                @endforeach
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="@isset($concat)
                                                    {{$concat}}
                                                @endisset">0</span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <!-- end col -->
                            </div>



                            <!-- Mis pedidos -->
                            <div class="col-lg-8" style="width: 95%; padding:2%">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Mis ordenes</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- Tables Without Borders -->
                                        <table class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Folio</th>
                                                    <th scope="col">Enviar a</th>
                                                    <th scope="col">Estado de la orden</th>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Precio</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($client->orders as $order)
                                                    
                                                
                                                <tr>
                                                    <th scope="row">{{$order->id}}</th>
                                                    <th>{{$order->folio}}</th>
                                                    <td>{{$client->name}} - @if (isset($order->address->street_and_use_number)) {{$order->address->street_and_use_number}} @endif</td>
                                                    <td>{{$order->order_status->name}}</td>
                                                    <td>@foreach ($order->presentations as $presentation)
                                                        {{$presentation->description}} <br>
                                                    @endforeach</td>
                                                    <td>@foreach ($order->presentations as $presentation)
                                                        {{$presentation->pivot->quantity}} <br>
                                                    @endforeach</td></td>
                                                    <td>@foreach ($order->presentations as $presentation)
                                                        {{$presentation->current_price->amount}} <br>
                                                    @endforeach</td></td>
                                                    <td>{{$order->total}}</td>

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

                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                            <!--end row-->
                        </div><!-- container-fluid -->
                    </div>
                </div>
            </div>

        </div>

        @include('layouts.footer')

    </div>


    </div><!-- End Page-content -->

    @include('layouts.scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/app.js"></script>

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