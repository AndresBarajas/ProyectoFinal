<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">idCliente</th>
                <th scope="col">Fecha</th>
                <th scope="col">Numero</th>
                <th scope="col">IVA</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <th scope="row">{{ $factura['id'] }}</th>
                    <td>{{ $factura['idCliente'] }}</td>
                    <td>{{ $factura['Fecha'] }}</td>
                    <td>{{ $factura['Numero'] }}</td>
                    <td>{{ $factura['IVA'] }}</td>
                    <td><button wire:click='confirmDelete("{{$factura['id']}}")' class="btn btn-danger">Delete</button></td>
                    <td><a href='facturas/{{ $factura['id'] }}/show' button type="button"
                        class="btn btn-primary">Mostrar</button></td>
                        <td><a href='facturas/{{ $factura['id'] }}/edit' button type="button" class="btn btn-success">Editar</button></td>
                </tr>
            @endforeach
        </tbody>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Register Facturas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form wire:submit.prevent='save'>
                <div class="card-body">

                    <div class="form-group">
                        <label>idCliente</label>
                        <input wire:model='data.idCliente'type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Fecha</label>
                        <input wire:model='data.Fecha'type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Numero</label>
                        <input wire:model='data.Numero'type="numeric" class="form-control">
                    </div>
                    <label>IVA</label>
                    <input wire:model='data.IVA'type="numeric" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
