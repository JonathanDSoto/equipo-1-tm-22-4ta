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

            <div class="">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n2 mt-n2">
                        <div class="profile-wid-bg">
                            <img src="{{asset('images/fondo-profile.jpg')}}" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="{{asset('images/users/avatar-1.jpg')}}" alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col -->
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">Annette Adame González</h3>
                                    <p class="text-white-75">Founder</p>
                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="d-flex justify-content-sm-center">
                                        <div class="col-xxl-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">Información Personal</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Nombre(s): </th>
                                                                    <td class="text-muted">Annette</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Apellidos: </th>
                                                                    <td class="text-muted">Adame González</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">No. Celular:</th>
                                                                    <td class="text-muted">6125085004</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Correo Electrónico: </th>
                                                                    <td class="text-muted">anttg@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Se unió en: </th>
                                                                    <td class="text-muted">24 Nov 2021</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                            <div class="d-flex justify-content-sm-center">
                                                <div class="flex-shrink-0">
                                                    <!-- <a href="pages-profile-settings.html" data-bs-toggle="modal" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a> -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</button>
                                                    <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Formulario usuario</h5>
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
                                                                                    <label for="lastName" class="form-label">Apellidos</label>
                                                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese los apellidos">
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
                                                                                    <label for="passwordInput" class="form-label">Contraseña</label>
                                                                                    <input type="password" class="form-control" id="passwordInput" placeholder="************">
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
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeImgModal"><i class="ri-edit-box-line align-bottom"></i> Cambiar foto de perfil</button>
                                                    <div class="modal fade modal-lg" id="changeImgModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalgridLabel">Cambiar imagen de usuario</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="javascript:void(0);">
                                                                        <div class="row g-3">

                                                                            <div class="col-xxl-15">
                                                                                <label for="formFile" class="form-label">Imagen Avatar</label>
                                                                                <input name="cover" type="file" class="form-control">
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
                                        </div><!-- end row -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- container-fluid -->
                @include('layouts.footer')
            </div>

        </div>
        @include('layouts.scripts')
    </div><!-- End Page-content -->


</body>

</html>