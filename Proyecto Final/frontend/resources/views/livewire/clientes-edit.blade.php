<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Clientes</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent='modify'>
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
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
        </form>
    </div>
</div>

</div>
