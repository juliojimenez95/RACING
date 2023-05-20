@extends('layouts.app')
@section('content')
<nav>
    <div class="navbar">
        <!-- Logo o título del sitio -->
        <a href="#" class="logo">Mi Sitio</a>

        <!-- Buscador -->
        <form class="search-form">
            <input type="text" placeholder="Buscar..." class="search-input">
            <button type="submit" class="search-button">Buscar</button>
        </form>

        <!-- Opciones del lado derecho -->
        <div class="options">
            <a href="#">Opción 1</a>
            <a href="#">Opción 2</a>
            <a href="#">Opción 3</a>
        </div>
    </div>
</nav>


<!-- Contenido principal -->
<div class="container">
    <!-- División de pantalla en dos partes -->
    <div class="row">
        <div class="col-md-6">
            <!-- Card con título y párrafo -->
            <div>
                <h2>Título del card</h2>
                <p>Contenido del párrafo</p>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Card con título y párrafo -->

                <img src="ruta_de_la_imagen.jpg" alt="Descripción de la imagen">
        </div>
    </div>
    <center>
  <div class="row">
    <div class="col-md-12">
    <!-- Tabla con 3 columnas -->
            <table>
                <tr>
                    <th>Columna 1</th>
                    <th>Columna 2</th>
                    <th>Columna 3</th>
                </tr>
                <tr>
                    <td>Dato 1</td>
                    <td>Dato 2</td>
                    <td>Dato 3</td>
                </tr>
                <!-- Agrega más filas si es necesario -->
            </table>
        </div>
    </div>
    </center>
</div>



@endsection
