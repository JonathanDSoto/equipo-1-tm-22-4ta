<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    @include('layouts.head')

    <style>
        #droptxt {
    padding: 8px;
    width: 300px;
    cursor: pointer;
    box-sizing: border-box
}
.dropdown {
    position: relative;
    display: inline-block
}
.content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 200px;
    overflow: auto;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
    z-index: 1
}
.quantity {
    float: right;
    width: 40px
}
.content div {
    padding: 10px 15px
}
.content div:hover {
    background-color: #ddd
}
.show {
	display: block
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

                <div class="col-xl-12 col-lg-12">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">

                                    <div class="col-sm">
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
                                        <form action="{{route('orders.index.date')}}" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-sm-start" style="gap: 50px;">                                            
                                                <div div class="col-xxl-2 col-md-6">
                                                    <label class="form-label">Filtrar ordenes desde el</label>
                                                    <input type="date" name="date1" class="form-control">
                                                </div>
                                                <div class="col-xxl-2 col-md-6">
                                                    <label class="form-label">Filtrar ordenes hasta el</label>
                                                    <input type="date" name="date2" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Aplicar</button>
                                            </div>
                                        </form>
                                    

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
                                                            <form class="enviarPresentaciones" action="{{route('orders.store')}}" method="POST">
                                                                @csrf
                                                                <div class="row g-3">

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Folio</label>
                                                                            <input type="text" class="form-control" id="placeholderInput" name="folio" placeholder="A55023422">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Clientes</label>
                                                                            <select class="form-select" name="client_id" id="client_id" onchange="cargarPueblos();">

                                                                                <option value="">Seleccione un cliente...</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Cupón</label>
                                                                            <select class="form-select" id="inputGroupSelect01" name="coupon_id">
                                                                                <option selected disabled value="null">Seleccione un cupon</option>
                                                                                @foreach ($coupons as $coupon)
                                                                                    @if ($coupon->max_uses >= $coupon->count_uses)                                                                                    
                                                                                        <option value="{{$coupon->id}}">{{$coupon->name}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Direccion</label>
                                                                            <select class="form-select" name="address_id" id="pueblo">
                                                                                <option value="">Seleccione un Pueblo...</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <!--end col-->

                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <label for="exampleDataList" class="form-label">Método de pago</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="inputGroupSelect01" name="payment_type_id">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Efectivo</option>
                                                                                <option value="2">Tarjeta</option>
                                                                                <option value="3">Transferencia</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-3 col-md-6">
                                                                        <label for="exampleDataList" class="form-label">Estado de orden</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" id="inputGroupSelect01" name="order_status_id">
                                                                                <!-- <option selected>Nivel...</option> -->
                                                                                <option value="1">Pendiente de pago</option>
                                                                                <option value="2">Pagada</option>
                                                                                <option value="3">Enviada</option>
                                                                                <option value="4">Abandonado</option>
                                                                                <option value="5">Pendiente de Enviar</option>
                                                                                <option value="6">Cancelada</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->

                                                                    
                                                                    <p>Productos</p>
                                                                    <div class="dropdown">
                                                                    
                                                                    <textarea rows = "5" cols = "60" name = "test" class="list" id="droptxt" readonly>
                                                                     </textarea><br>
                                                                        <div id="content" class="content">
                                                                            @foreach ($products as $product)
                                                                                @foreach ($product->presentations as $presentation)
                                                                                    @if ($presentation->stock > $presentation->stock_min)
                                                                                        <div class="list">
                                                                                            <input type="checkbox" name="products[]" id="apple{{$presentation->id}}" class="list" value="{{$presentation->id}}"/>
                                                                                            <label for="apple{{$presentation->id}}" class="list presentation">{{$presentation->description}}</label>
                                                                                            <input type="hidden"  class="list quantity" min="1" value="1" max="{{$presentation->stock - $presentation->stock_min}}"/>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" id="nombres" name="nombres[]" class="list" hidden>
                                                                    <input type="text" id="vals" name="cantidades[]" class="list" hidden>
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
                                            <th scope="col">ID</th>
                                            <th scope="col">Folio</th>
                                            <th scope="col">Producto(s)</th>
                                            <th scope="col">Nombre del cliente</th>
                                            <th scope="col">Cantidad de productos</th>
                                            <th scope="col">Estado de la orden</th>
                                            <th scope="col">Total de la orden</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->folio}}</td>
                                            <td>@foreach ($order->presentations as $presentation)
                                                {{$presentation->description}} <br>
                                            @endforeach</td>
                                            <td> @if (isset($order->client->name)){{$order->client->name}}@else @endif</td>
                                            <td>@foreach ($order->presentations as $presentation)
                                                {{$presentation->pivot->quantity}} <br>
                                            @endforeach</td>
                                            <td>{{$order->order_status->name}}</td>
                                            <td>${{$order->total}}</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a href="{{route('orders.detailOrder', $order->id)}}" class="link-primary">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                    </a>
                                                    <form class="form-eliminar" action="{{route('orders.delete', $order->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger float-left">
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
    <script>
        
        function cargarProvincias() {
            var array = ["Cantabria", "Asturias", "Galicia", "Andalucia", "Extremadura"];
            var datos = @json($clients);
            var direcciones = @json($clients);
            console.log(datos);
            for (let i = 0; i < direcciones.length; i++) {
                //console.log(direcciones[i])
            }
            array.sort();
            addOptions("client_id", array, datos);
        }

        //Función para agregar opciones a un <select>.
        function addOptions(domElement, array, datos) {
            datos.forEach(dato => {
                //console.log(dato.addresses);
            });
            //console.log(datos[0].addresses);
            var selector = document.getElementsByName(domElement)[0];
            for (let i = 0; i < datos.length; i++) {
                var opcion = document.createElement("option");
                opcion.text = datos[i].name;
                opcion.value = datos[i].id;
                console.log(datos[i].id)
                selector.add(opcion);
            }
        }

        function cargarPueblos() {
            // Objeto de provincias con pueblos
            var direcciones = @json($clients);
            var client_idSelect = document.getElementById('client_id')
            //var provincias = document.getElementById('provincia')
            var pueblos = document.getElementById('pueblo')
            //var provinciaSeleccionada = provincias.value
            var clientSelected = client_idSelect.value;
            console.log('Cliente seleccionado: '+ clientSelected);
            // Se limpian los pueblos
            pueblos.innerHTML = '<option value="">Seleccione un Pueblo...</option>'
            if(clientSelected !== ''){
            var dirs;
            console.log(clientSelected)
            for (let index = 0; index < direcciones.length; index++) {
                if (direcciones[index].id == clientSelected) {
                    console.log('coincide')
                    dirs = direcciones[index].addresses
                }
            }
            for (let i = 0; i < dirs.length; i++) {
                console.log(dirs[i])
                
            }
            // Se seleccionan los pueblos y se ordenan
            
            //console.log(dir_selected);
            // console.log(direcciones[dir_selected].addresses);
            // let dirs = direcciones[dir_selected].addresses;
            for (let i = 0; i < dirs.length; i++) {
                let opcion = document.createElement('option')
                opcion.value = dirs[i].id;
                opcion.text = dirs[i].street_and_use_number;
                pueblos.add(opcion)
            }

            //provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
            // Insertamos los pueblos
            /*provinciaSeleccionada.forEach(function(pueblo){
                let opcion = document.createElement('option')
                opcion.value = pueblo
                opcion.text = pueblo
                pueblos.add(opcion)
            });*/
            }
            
        }
        
        // Iniciar la carga de provincias solo para comprobar que funciona
        cargarProvincias();
    </script>
    <script type="text/javascript">
    var txt = document.getElementById( 'droptxt' ),
    valss = document.getElementById( 'vals' )
    presentations = document.querySelectorAll( '.presentation' ),
    nombres = document.getElementById( 'nombres' ),
    content = document.getElementById( 'content' ),
    list = document.querySelectorAll( '.content input[type="checkbox"]' ),
    quantity = document.querySelectorAll( '.quantity' );

    txt.addEventListener( 'click', function() {
        content.classList.toggle( 'show' )
    } )

    // Close the dropdown if the user clicks outside of it
    window.onclick = function( e ) {
        if ( !e.target.matches( '.list' ) ) {
            if ( content.classList.contains( 'show' ) ) content.classList.remove( 'show' )
        }
    }

    list.forEach( function( item, index ) {
        item.addEventListener( 'click', function() {
            quantity[ index ].type = ( item.checked ) ? 'number' : 'hidden';
            calc()
        } )
    } )

    quantity.forEach( function( item ) {
        item.addEventListener( 'input', calc )
    } )

    function calc() {
        for ( var i = 0, arr = [], arr2 = [], arr3 = []; i < list.length; i++ ) {
            if ( list[ i ].checked ) {
                arr.push( 'Presentacion: '+ presentations[i].innerHTML +' cantidad: '+ quantity[ i ].value);
                arr2.push([quantity[ i ].value])
                arr3.push(list[ i ].value)
            }
        }
        txt.value = arr.join( '\n' )
        valss.value = arr2.join( ', ' )
        nombres.value = arr3.join( ', ' )

    }
    // $('.enviarPresentaciones').submit(function(e){
    //     e.preventDefault();
    //     // var test = $('input.quantity');
    //     // test.attr()
    //     // test = document.querySelectorAll( '.quantity' );
    //     // quantity.setAttribute("name", "cantidades[]");
    //     $(this).find("input").prop("name", "hola");

    //     console.log('test');
    // });
    
    </script>
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

<style>
    .list-checkbox {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
    }
</style>