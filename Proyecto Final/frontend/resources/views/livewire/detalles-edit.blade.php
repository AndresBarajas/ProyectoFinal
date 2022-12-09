<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Detalles</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent='modify'>
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
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
        </form>
    </div>
</div>

</div>


