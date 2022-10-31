<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    @include('layouts.head')
    <style>
        .list-checkbox {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            gap: 10px;
        }
    </style>
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

                        @if (session('success'))
                            <!-- Success Alert -->
                            <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Actualización completada 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                - Los datos no se pudieron actualizar, datos incorrectos
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="product-thumbnail-slider p-2 rounded bg-light">
                                            <div>
                                                <div>
                                                    <img src="{{$product->cover}}" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4>{{$product->name}}</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div class="text-muted">Slug: <span class="text-body fw-medium">{{$product->slug}}</span></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Marca: <span class="text-body fw-medium">{{$product->brand->name}}</span></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Categorias: @foreach ($product->categories as $category)
                                                        <span class="fw-medium badge text-bg-primary">{{$category->name}}</span>
                                                    @endforeach</div>
                                                </div>
                                            </div>
                                            <!-- Boton editar -->
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editProductModal">
                                                        <i class="ri-add-line align-bottom me-1"></i>Editar producto
                                                    </button>
                                                    <div class="modal fade modal-lg" id="editProductModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editProductModal">Editar Producto</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('products.update', $product->id)}}" method="POST">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="row g-3">

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Nombre del producto</label>
                                                                                    <input type="text" name="name" class="form-control" placeholder="Nombre del producto" value="{{$product->name}}" onkeypress="return soloLetras(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Descripción</label>
                                                                                    <input type="text" name="description" class="form-control" placeholder="Descripción" value="{{$product->description}}" onkeypress="return soloLetras(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Slug</label>
                                                                                    <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{$product->slug}}" onkeypress="return soloLetras(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Marca</label>
                                                                                    <select class="form-select" id="inputGroupSelect01" name="brand_id" >
                                                                                        @foreach ($brands as $brand)
                                                                                            <option {{( $product->brand_id == $brand->id) ? 'selected' : '' }} value="{{$brand->id}}">{{$brand->name}}</option>
                                                                                        @endforeach
                                                                                    </select>                                                                                
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->

                                                                            <div class="col-xxl-6">
                                                                                <div>
                                                                                    <label class="form-label">Características</label>
                                                                                    <input type="text" name="features" class="form-control" placeholder="Características" value="{{$product->features}}" onkeypress="return soloLetrasynumeros(event)" required>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Base Example -->
                                                                            <label for="formFile" class="form-label">Categorías</label>
                                                                            <div class="list-checkbox">
                                                                                @foreach ($categories as $category)
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" @foreach ($product->categories as $categoryy)
                                                                                    {{( $category->id == $categoryy->id) ? 'checked' : '' }}
                                                                                @endforeach name="categories[]" type="checkbox" id="formCheck2{{$category->id}}" value="{{$category->id}}">
                                                                                    <label class="form-check-label" for="formCheck2{{$category->id}}">
                                                                                        {{$category->name}}
                                                                                    </label>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>

                                                                            <!-- Base Example -->
                                                                            <label for="formFile" class="form-label">Tags</label>
                                                                            <div class="list-checkbox">
                                                                                @foreach ($tags as $tag)
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" @foreach ($product->tags as $tagg)
                                                                                            {{( $tag->id == $tagg->id) ? 'checked' : '' }}
                                                                                        @endforeach  name="tags[]" value="{{$tag->id}}" type="checkbox" id="formCheck1{{$tag->id}}">
                                                                                        <label class="form-check-label" for="formCheck1{{$tag->id}}">
                                                                                            {{$tag->name}}
                                                                                        </label>
                                                                                    </div>
                                                                                @endforeach
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

                                        <div class="mt-4 text-muted">
                                            <h5 class="fs-14">Descripción:</h5>
                                            <p>{{$product->description}}</p>
                                        </div>
                                        <div class="row">
                                            <h5 class="fs-14">Etiquetas :</h5>
                                            <div class="list-checkbox">
                                                @foreach ($product->tags as $tag)
                                                    <p class="mdi mdi-circle-medium me-1 text-muted align-middle">{{$tag->name}}</p> 
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="product-content mt-5">

                                            <label>Presentaciones del producto</label>
                                            <div class="d-flex justify-content-sm-end">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createPresentationModal">
                                                    <i class="ri-add-line align-bottom me-1"></i>Añadir una presentación
                                                </button>
                                            </div>

                                            <div class="modal fade modal-lg" id="createPresentationModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="createPresentationModal">Nueva presentación</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('products.store.presentation')}}" method="POST" enctype='multipart/form-data'>
                                                                @csrf
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Código</label>
                                                                            <input type="text" name="code" class="form-control" placeholder="comi01" onkeypress="return soloLetrasynumeros(event)" required>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Descripción</label>
                                                                            <input type="text" name="description" class="form-control" placeholder="hermosa playera de color azul de la marca 21 forever" onkeypress="return soloLetrasynumeros(event)" required>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Peso en gramos</label>
                                                                            <input type="text" name="weight_in_grams" class="form-control" placeholder="5000" onkeypress="return solonumeros(event)" required>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <input type="hidden" name="status" value="activo">
                                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                    <div class="col-xxl-6">
                                                                        <label for="formFile" class="form-label">Imagen del producto</label>
                                                                        <input accept=".jpeg,.bmp,.png,.jpg,.gif" name="avatar" type="file" class="form-control">
                                                                    </div>
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock</label>
                                                                            <input type="text" name="stock" class="form-control" placeholder="10" onkeypress="return solonumeros(event)" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock mínimo</label>
                                                                            <input type="text" name="stock_min" class="form-control" placeholder="1" onkeypress="return solonumeros(event)" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Stock máximo</label>
                                                                            <input type="text" name="stock_max" class="form-control" placeholder="10" onkeypress="return solonumeros(event)" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label class="form-label">Precio</label>
                                                                            <input type="text" name="amount" class="form-control" placeholder="1000" onkeypress="return solonumeros(event)" required>
                                                                        </div>
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
                                            <nav>
                                                <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                                    @foreach ($product->presentations as $presentation)
                                                    <li class="nav-item">
                                                        <a class="nav-link @if($loop->first) active @endif" @if ($loop->first)
                                                            aria-selected="true"
                                                        @else
                                                            aria-selected="false"
                                                        @endif id="nav-{{$presentation->id}}-tab" data-bs-toggle="tab" href="#nav-{{$presentation->id}}" role="tab" aria-controls="nav-{{$presentation->id}}" >{{$presentation->description}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </nav>

                                            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                @foreach ($product->presentations as $presentation)
                                                <div class="tab-pane fade @if($loop->first) show active @endif" id="nav-{{$presentation->id}}" role="tabpanel" aria-labelledby="nav-{{$presentation->id}}-tab">

                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Id</th>
                                                                    <td>{{$presentation->id}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">Descripción</th>
                                                                    <td>{{$presentation->description}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Código</th>
                                                                    <td>{{$presentation->code}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Peso en gramos</th>
                                                                    <td>{{$presentation->weight_in_grams}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Estado</th>
                                                                    <td>{{$presentation->status}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Imagen del producto</th>
                                                                    <td>
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-sm bg-light rounded p-1"><img src="https://crud.jonathansoto.mx/storage/products/{{$presentation->cover}}" alt="" class="img-fluid d-block"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <th scope="row">Stock</th>
                                                                    <td>{{$presentation->stock}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock mínimo</th>
                                                                    <td>{{$presentation->stock_min}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Stock máximo</th>
                                                                    <td>{{$presentation->stock_max}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Precio</th>
                                                                    <td>@foreach ($presentation->price as $price)
                                                                        @if($price->is_current_price == 1)
                                                                            {{$price->amount}}
                                                                        @endif
                                                                    @endforeach</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <!-- modal editar presentación -->
                                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editPresentacionModal{{$presentation->id}}">
                                                                            <i class="ri-edit-box-line"></i> Editar presentación
                                                                        </button>


                                                                        <div class="modal fade modal-lg" id="editPresentacionModal{{$presentation->id}}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="editPresentacionModal{{$presentation->id}}">Editar presentación</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{route('products.update.presentation', $presentation->id)}}" method="POST">
                                                                                            @method('put')
                                                                                            @csrf
                                                                                            <div class="row g-3">

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Código</label>
                                                                                                        <input type="text" name="code" class="form-control" placeholder="comi01" value="{{$presentation->code}}" onkeypress="return soloLetrasynumeros(event)" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Descripción</label>
                                                                                                        <input type="text" name="description" class="form-control" placeholder="hermosa playera de color azul de la marca 21 forever" value="{{$presentation->description}}" onkeypress="return soloLetrasynumeros(event)" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Peso en gramos</label>
                                                                                                        <input type="text" name="weight_in_grams" class="form-control" placeholder="5000" value="{{$presentation->weight_in_grams}}" onkeypress="return solonumeros(event)" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                
                                                                                                <input type="hidden" name="status" value="activo">
                                                                                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock</label>
                                                                                                        <input type="text" name="stock" class="form-control" placeholder="10" value="{{$presentation->stock}}" onkeypress="return solonumeros(event)" required>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock mínimo</label>
                                                                                                        <input type="text" name="stock_min" class="form-control" placeholder="1" value="{{$presentation->stock_min}}" onkeypress="return solonumeros(event)" required>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Stock máximo</label>
                                                                                                        <input type="text" name="stock_max" class="form-control" placeholder="10" value="{{$presentation->stock_max}}" onkeypress="return solonumeros(event)" required>
                                                                                                    </div>
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
                                                                    </th>
                                                                    <td>
                                                                        <!-- modal editar precio presentación -->
                                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editPrecioModal{{$presentation->id}}">
                                                                            <i class="ri-edit-box-line"></i> Editar el precio de la presentación
                                                                        </button>
                                                                        <div class="modal fade modal-lg" id="editPrecioModal{{$presentation->id}}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="editPrecioModal{{$presentation->id}}">Editar precio presentación</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{route('products.update.presentation.price', $presentation->id)}}" method="POST">
                                                                                            @method('put')
                                                                                            @csrf
                                                                                            <div class="row g-3">
                                                                                                <input type="hidden" name="id" value="{{$presentation->id}}">
                                                                                                <div class="col-xxl-6">
                                                                                                    <div>
                                                                                                        <label class="form-label">Precio nuevo</label>
                                                                                                        <input type="text" name="amount" class="form-control" placeholder="10000" value="@foreach($presentation->price as $price)@if($price->is_current_price==1){{$price->amount}}@endif @endforeach" onkeypress="return solonumeros(event)">
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
                                                                        <br>
                                                                    </td>
                                                                    <td>
                                                                        <form class="form-eliminar" action="{{route('products.delete.presentation', $presentation->id)}}" method="post">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger float-left">
                                                                                <i class="ri-delete-bin-5-line"></i>
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- product-content -->
                                    </div>
                                    
                                    <div class="card-body">

                                        <!-- Tables Without Borders -->
                                        <table id="dataTables-example" name="dataTables-example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Folio</th>
                                                    <th scope="col">Presentación</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Total de la orden</th>
                                                    <th scope="col">Cliente</th>
                                                    <th scope="col">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product->presentations as $presentation)
                                                    @foreach ($presentation->orders as $order)
                                                        
                                                        <tr>
                                                            <th scope="row">{{$order->id}}</th>
                                                            <td>{{$order->folio}}</td>
                                                            <td data-column-id="product" class="">
                                                                <span>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-sm bg-light rounded p-1"><img src="https://crud.jonathansoto.mx/storage/products/{{$presentation->cover}}" alt="" class="img-fluid d-block"></div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-14 mb-1">{{$presentation->description}}</h5>
                                                                            @foreach ($product->tags as $tag)
                                                                                <span class="fw-medium badge text-bg-primary">{{$tag->name}}</span>
                                                                            @endforeach
                                                                            </p>
                                                                            <p class="text-muted mb-0">categories: 
                                                                            @foreach ($product->categories as $categories)
                                                                                <span class="fw-medium badge text-bg-info">{{$categories->name}}</span>
                                                                            @endforeach
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>
                                                            <td>{{$order->pivot->quantity}}</td>
                                                            <td>{{$order->total}}</td>
                                                            <td><a href="{{route('clientes.detailClient', $order->client_id)}}">Cliente {{$order->client_id}}</a></td>
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
                                                @endforeach
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->



        </div>
        <!-- end main content-->
        <br>
        <br>
        @include('layouts.footer')

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