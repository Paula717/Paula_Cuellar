
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
    <div class="container" >
        <a class="navbar-brand" href="{{url('/')}}" style="color:#FFFDFD"><span style="font-size:15pt">&#128568;</span><font size=4 face="Comic Sans MS,arial,verdana"> Royal Pet</font></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        @if( true || Auth::check() )
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <body>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">&#128179; Tienda De Mascotas</font>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuBoton">
                                <a class="dropdown-item" href="{{url('/tienda/perros')}}"><font size=4 face="Comic Sans MS,arial,verdana">Perros</font></a>
                                <a class="dropdown-item" href="{{url('/tienda/gatos')}}"><font size=4 face="Comic Sans MS,arial,verdana">Gatos</font></a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">&#9986; Cuidados</font>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuBoton">
                                <a class="dropdown-item" href="{{url('/cuidados/peluqueria')}}"><font size=4 face="Comic Sans MS,arial,verdana">Peluqueria</font></a>
                                <a class="dropdown-item" href="{{url('/cuidados/servicios')}}"><font size=4 face="Comic Sans MS,arial,verdana">Servicios veterinarios</font></a>
                            </div>
                        </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/ubicacion')}}"><font size=4 face="Comic Sans MS,arial,verdana">&#128276; Ubicación</font> <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/qyr')}}"><font size=4 face="Comic Sans MS,arial,verdana">&#128221; Quejas Y Reclamos</font> <span class="sr-only">(current)</span></a>
                        </li>

                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </body>
                </ul>
            </div>

           
        @endif
        
    </div>
    
</nav>





