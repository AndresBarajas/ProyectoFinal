<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Facturas</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent='modify'>
            <div class="card-body">

                <div class="form-group">
                    <label>Fecha</label>
                    <input wire:model='data.Fecha'type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Numero</label>
                    <input wire:model='data.Numero'type="numeric" class="form-control">
                </div>
                <div class="form-group">
                    <label>IVA</label>
                    <input wire:model='data.IVA'type="numeric" class="form-control">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
        </form>
    </div>
</div>

</div>

