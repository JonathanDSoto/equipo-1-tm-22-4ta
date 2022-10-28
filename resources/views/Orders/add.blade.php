<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    @include('layouts.head')
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"> -->

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Añadir una orden</h4>
                        </div>
                        <div class="card-body">

                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Nombre del cliente
                                                Placeholder</label>
                                            <input type="" class="form-control" id="placeholderInput" placeholder="Juan Perez">
                                        </div>
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
                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Busca el producto...">
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
                                        
                                        <!-- Base Example -->
                                    <label for="formFile" class="form-label">Tags</label>
                                    <div class="list-checkbox">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Muebles
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Hogar
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Baño
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Muebles
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Hogar
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Baño
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Muebles
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Hogar
                                            </label>
                                        </div>
    
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Baño
                                            </label>
                                        </div>

                                    </div>

                                    <!-- <div class="col-xxl-3 col-md-6">
                                        <div class="form-floating"> <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                                                <option value="HTML">HTML</option>
                                                <option value="Jquery">Jquery</option>
                                                <option value="CSS">CSS</option>
                                                <option value="Bootstrap 3">Bootstrap 3</option>
                                                <option value="Bootstrap 4">Bootstrap 4</option>
                                                <option value="Java">Java</option>
                                                <option value="Javascript">Javascript</option>
                                                <option value="Angular">Angular</option>
                                                <option value="Python">Python</option>
                                                <option value="Hybris">Hybris</option>
                                                <option value="SQL">SQL</option>
                                                <option value="NOSQL">NOSQL</option>
                                                <option value="NodeJS">NodeJS</option>
                                            </select>
                                        </div>
                                    </div> -->

                                </div>
                                <!--end row-->

                            </div>

                            <!-- <div class="row d-flex justify-content-center mt-100">
                                <div class="col-md-6"> <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>

                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });


        });
    </script> -->
</body>

</html>

<style>
    .list-checkbox{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }
</style>