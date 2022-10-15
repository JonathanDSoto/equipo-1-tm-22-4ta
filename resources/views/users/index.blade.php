<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    @include('layouts.head')

    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{asset('libs/nouislider/nouislider.min.css')}}">

    <!-- gridjs css -->
    <link rel="stylesheet" href="{{asset('libs/gridjs/theme/mermaid.min.css')}}">
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

                                    <div class="col-sm">
                                        <!-- Boton con el alert por error al iniciar sesion -->
                                        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                            - El registro no se pudo completar, datos incorrectos
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <!-- Success Alert -->
                                        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Registro completado
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

                                        <div div class="d-flex justify-content-sm-end">


                                            <!-- Grids in modals -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                + Añadir un usuario
                                            </button>
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
                                                                    <div class="col-xxl-6">
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
                                </div>
                            </div>


                            <!-- end card header -->
                            <div class="card-body">



                                <!-- Tables Without Borders -->
                                <table class="table table-borderless table-nowrap align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Correo Electrónico</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette </td>
                                            <td>González</td>
                                            <td>anttg@gmail.com</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Lenora Sandoval</td>
                                            <td>Applications Engineer</td>
                                            <td>25, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette </td>
                                            <td>González</td>
                                            <td>anttg@gmail.com</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Lenora Sandoval</td>
                                            <td>Applications Engineer</td>
                                            <td>25, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette </td>
                                            <td>González</td>
                                            <td>anttg@gmail.com</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Lenora Sandoval</td>
                                            <td>Applications Engineer</td>
                                            <td>25, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette </td>
                                            <td>González</td>
                                            <td>anttg@gmail.com</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Lenora Sandoval</td>
                                            <td>Applications Engineer</td>
                                            <td>25, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Annette </td>
                                            <td>González</td>
                                            <td>anttg@gmail.com</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bessie Cooper</td>
                                            <td>Graphic Designer</td>
                                            <td>13, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Leslie Alexander</td>
                                            <td>Product Manager</td>
                                            <td>17, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="ri-delete-bin-5-line"></i>
                                                    </button>
                                                    <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Lenora Sandoval</td>
                                            <td>Applications Engineer</td>
                                            <td>25, Nov 2021</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                                                    <!-- Grids in modals -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        <i class="ri-edit-2-line"></i>
                                                    </button>

                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="ri-eye-line"></i>
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

    <!-- nouisliderribute js -->
    <script src="{{asset(('libs/nouislider/nouislider.min.js'))}}"></script>
    <script src="{{asset('libs/wnumb/wNumb.min.js')}}"></script>

    <!-- gridjs js -->
    <script src="{{asset('libs/gridjs/gridjs.umd.js')}}"></script>
    <script src="../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="{{asset('js/pages/ecommerce-product-list.init.js')}}"></script>


</body>


</html>