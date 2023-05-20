@extends('layouts.app')
@section('content')
<div style="background-color: #FFFFFF;">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit 
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                        occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Card con título y párrafo -->

                    <img src="{{ asset('images/race.jpg') }}" width="250" heigt="250" alt="Descripción de la imagen">
            </div>
        </div>
        <center>
    <div class="row">
        <div class="col-md-12" >
        <!-- Tabla con 3 columnas -->
                <table width="50%">
                    <tr>
                        <th>Carrera 1</th>
                        <th>Porcentajes Carrera 1</th>
                    </tr>
                    <tr>
                        <td>Corredor 1</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Corredor 2</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th>Carrera 2</th>
                        <th>Porcentajes Carrera 2</th>
                    </tr>
                    <tr>
                        <td>Corredor 1</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Corredor 2</td>
                        <td>50%</td>
                    </tr>
                    <!-- Agrega más filas si es necesario -->
                </table>
            </div>
        </div>
        </center>
    </div>
</div>


@endsection
