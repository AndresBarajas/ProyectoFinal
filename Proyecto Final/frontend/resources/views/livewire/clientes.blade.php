<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Apellido 1</th>
                <th scope="col">Apellido 2</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row">{{ $cliente['id'] }}</th>
                    <td>{{ $cliente['Name'] }}</td>
                    <td>{{ $cliente['Ape1'] }}</td>
                    <td>{{ $cliente['Ape2'] }}</td>
                    <td><button wire:click='confirmDelete("{{$cliente['id']}}")' type="button" class="btn btn-danger">Delete</button></td>
                    <td><a href='clientes/{{ $cliente['id'] }}/show' button type="button"
                            class="btn btn-primary">Mostrar</button></td>
                    <td><a href='clientes/{{ $cliente['id'] }}/edit' button type="button" class="btn btn-success">Editar</button></td>
                </tr>
            @endforeach
        </tbody>

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Register Clientes</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form wire:submit.prevent='save'>
                <div class="card-body">

                    <div class="form-group">
                        <label>Name</label>
                        <input wire:model='data.Name'type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ape1</label>
                        <input wire:model='data.Ape1'type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ape2</label>
                        <input wire:model='data.Ape2'type="text" class="form-control">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
            </form>
        </div>
</div>
