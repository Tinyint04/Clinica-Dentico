@extends('Componentes.app')

@section('title', 'Ajustes de Reserva')

@section('content')
    <div class="container" style="">
        <!-- Barra de Navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Médicos</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Alexander Camacho Diaz</a>
                    </li>
                    <!--Boton que muestra los horarios que el Medico asigno-->
                    <!--<li class="nav-item">
                        <button type="button" onclick="mostrarDetallesHorarios">Ver Horarios</button>
                    </li>-->
                   
                </ul>
            </div>
        </nav>

        <!-- Horario individualizado de reserva -->
        <div class="container" style="width: 100%;">
            <form>
                <div class="form-group">
                    <!-- Aquí puedes agregar algún título o información si lo necesitas -->
                </div>

                <!-- Encabezado para Hora inicio y Hora fin -->
                <div class="row mb-2">
                <div class="col-md-2 d-flex align-items-center" style="padding-left: 0;">
                        <strong>Selecciona el día</strong>
                    </div>
                    <div class="col-md-3 text-center">
                        <strong>Hora inicio</strong>
                    </div>
                    <div class="col-md-1">
                        <!-- Espacio vacío para alinear con la hora fin -->
                    </div>
                    <div class="col-md-3 text-center">
                        <strong>Hora fin</strong>
                    </div>
                    <div class="col-md-3">
                        <!-- Espacio vacío para alinear con los botones de eliminar -->
                    </div>
                </div>

                <!-- Selección de días de la semana con casillas de verificación y horas -->
                @foreach (['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'] as $dia)
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="{{ strtolower($dia) }}" name="diasSeleccionados[]" value="{{ strtolower($dia) }}">
                            <label class="form-check-label" for="{{ strtolower($dia) }}">{{ $dia }}</label>
                        </div>
                        <div class="col-md-3">
                            <input type="time" class="form-control" style="border: 2px solid #36b3a6; " id="{{ strtolower($dia) }}De" name="{{ strtolower($dia) }}De">
                        </div>
                        <div class="col-md-1 text-center">
                            <div style="font-size: 0.9rem;">hasta las</div>
                        </div>
                        <div class="col-md-3">
                            <input type="time" class="form-control" style="border: 2px solid #36b3a6; " id="{{ strtolower($dia) }}Hasta" name="{{ strtolower($dia) }}Hasta">
                        </div>
                    </div>
                @endforeach

                <div class="form-group row">
                    <div class="col-md-6 pr-1">
                        <br>
                        <label for="sucursal">Seleccionar sucursal:</label>
                        <select id="sucursal" name="sucursal" class="form-control" style="max-width: 30%;">
                            <option value="sucursal1">Liberia</option>
                            <option value="sucursal2">Tamarindo</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                    </div>
                    <div class="col-md-6 mt-3 text-right">
                        <button type="submit" class="btn btn-primary mt-2"
                            style="max-width: 30%; margin-right: 320px; background-color: #36b3a6; color: #000000; border: none;">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
