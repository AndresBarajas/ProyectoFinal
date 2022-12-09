<div>
    <div class="card card-widget widget-user-2">
        <div class="card card-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2"
                        src="https://visualpharm.com/assets/30/User-595b40b85ba036ed117da56f.svg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Nombre: {{ $cliente['Name'] }}</h3>
                <h5 class="widget-user-desc"></h5>
            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="nav-link">
                            Apellido #1: {{ $cliente['Ape1'] }} <span class="float-right badge bg-primary"></span>
                            </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            Apellido #2: {{ $cliente['Ape2'] }}<span class="float-right badge bg-info"></span>
                    <li class="nav-item">
                        <div class="nav-link">
                            ID: {{ $cliente['id'] }}<span class="float-right badge bg-info"></span>
                            </a>
                    </li>
                    <a href='/clientes' button type="button"
                        class="btn btn-block btn-outline-success">Regresar</button>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
