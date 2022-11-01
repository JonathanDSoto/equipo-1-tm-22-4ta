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
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategory">
                                                + Añadir una categoría
                                            </button>
                                            <div class="modal fade modal-lg" id="addCategory" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridClient">Categorías</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('catalogs.categories.store')}}" method="POST">
                                                                @csrf
                                                                <div class="row g-3">
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="firstName" class="form-label">Nombre Categoría</label>
                                                                            <input type="text" name="name" class="form-control" id="firstName" placeholder="Ingrese el nombre de la categoría" maxlength="50" onkeypress="return soloLetras(event)" required>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="lastName" class="form-label">Descripción</label>
                                                                            <input type="text" name="description" class="form-control" id="lastName" placeholder="Ingrese la decripción" maxlength="250" onkeypress="return soloLetrasynumeros(event)" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Slug</label>
                                                                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" onkeypress="return soloLetras(event)" required readonly>
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
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                                    <div class="modal fade modal-lg" id="editCategory{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalgridClient">Categorías</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('catalogs.categories.update', $category->id)}}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="row g-3">
                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label for="firstName" class="form-label">Nombre Categoría</label>
                                                                                    <input type="text" name="name" class="form-control" id="nameEdit" placeholder="Ingrese el nombre de la categoría" maxlength="50" value="{{$category->name}}" onkeypress="return soloLetras(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label for="lastName" class="form-label">Descripción</label>
                                                                                    <input type="text" name="description" class="form-control" id="lastName" placeholder="Ingrese la descripción" maxlength="250" value="{{$category->description}}" onkeypress="return soloLetrasynumeros(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Slug</label>
                                                                                    <input type="text" name="slug" id="slugEdit" class="form-control" placeholder="Slug" value="{{$category->slug}}" onkeypress="return soloLetras(event)" required>
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
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory{{$category->id}}" class="btn btn-secondary">
                                                        <i class="ri-edit-box-line"></i>
                                                    </button>
                                                    
                                                    <form class="form-eliminar" action="{{route('catalogs.categories.delete', $category->id)}}" method="post">
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
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>

    $(document).ready( function() {
    $("#firstName").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
    });

    </script>
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