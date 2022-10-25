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
                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                            - Los datos no se pudieron actualizar, datos incorrectos
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!-- Success Alert -->
                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Actualización completada
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

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
                                                <h3 class="text-white mb-1">Annette Adame González</h3>
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
                                                                            <td class="text-muted">Annette Adame González</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Nivel de suscripción: </th>
                                                                            <td class="text-muted">1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">No. Celular:</th>
                                                                            <td class="text-muted">6125085004</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Correo Electrónico: </th>
                                                                            <td class="text-muted">anttg@gmail.com</td>
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
                                                                                    <h5 class="modal-title" id="profileClientModal">Editar usuario</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form action="javascript:void(0);">
                                                                                        <div class="row g-3">
                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="firstName" class="form-label">Nombre(s)</label>
                                                                                                    <input type="text" class="form-control" id="firstName" placeholder="Ingrese el nombre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="emailInput" class="form-label">Correo</label>
                                                                                                    <input type="email" class="form-control" id="emailInput" placeholder="Ingrese correo electrónico">
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Número celular</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el numero celular">
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
                                                                                    <form action="javascript:void(0);">
                                                                                        <div class="row g-3">

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Nombre(s)</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el nombre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Apellidos</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese los apellidos">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Calle y No. #</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese la calle y su No.">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Código postal</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el código postal">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Ciudad</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese la ciudad">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Estado</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el estado">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->

                                                                                            <div class="col-xxl-6">
                                                                                                <div>
                                                                                                    <label for="lastName" class="form-label">Número celular</label>
                                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el numero celular">
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Annette González</td>
                                                    <td>Calle articulo 743, 123</td>
                                                    <td>23088</td>
                                                    <td>La Paz</td>
                                                    <td>Baja California Sur</td>
                                                    <td>6121369008</td>

                                                    <td>
                                                        <div class="hstack gap-3 fs-15">
                                                            <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#addAddressModal" class="btn btn-secondary">
                                                                <i class="ri-edit-box-line"></i>
                                                            </button>
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

                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

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
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="5000">0</span></h4>
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <th>82712</th>
                                                    <td>Annette González - CP 23088</td>
                                                    <td>Entregado</td>
                                                    <td>Comedor Miguel con 4 Sillas</td>
                                                    <td>1</td>
                                                    <td>$ 8999.98</td>
                                                    <td>$ 8999.98</td>

                                                    <td>
                                                        <div class="hstack gap-3 fs-15">
                                                            <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                            <button type="button" class="btn btn-primary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                        </div>
                                                    </td>
                                                </tr>

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

</body>

</html>