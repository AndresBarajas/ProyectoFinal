<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">idFactura</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                    <tr>
                        <th scope="row">{{ $detalle['id'] }}</th>
                        <td>{{ $detalle['Cantidad'] }}</td>
                        <td>{{ $detalle['Descripcion'] }}</td>
                        <td>{{ $detalle['Precio'] }}</td>
                        <td>{{ $detalle['idFactura'] }}</td>
                        <td><button wire:click='confirmDelete("{{$detalle['id']}}")' type="button" class="btn btn-danger">Delete</button></td>
                        <td><a href='detalles/{{ $detalle['id'] }}/show' button type="button"
                            class="btn btn-primary">Mostrar</button></td>
                        <td><a href='detalles/{{ $detalle['id'] }}/edit' button type="button" class="btn btn-success">Editar</button></td>
                            </tr>
                    </tr>
                @endforeach
            </tbody>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Register Detalles</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent='save'>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Cantidad</label>
                            <input wire:model='data.Cantidad'type="numeric" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input wire:model='data.Descripcion'type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input wire:model='data.Precio'type="numeric" class="form-control">
                        </div>
                        <label>idFactura</label>
                        <input wire:model='data.idFactura'type="numeric" class="form-control">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
    </div>

</div>
