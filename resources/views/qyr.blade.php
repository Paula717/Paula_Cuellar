@extends('layout.master')
    @section('content')

    <br>

    <div class="tit1ppal">

        <div class="media">
            <div class="media-left">
                <img src="data:image/png;base64,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" alt="Medicina preventiva">
            </div>
            
            <div class="media-body" style="text-align: justify;">
                <h2>Si presenta algun incomveniente por favor comunicate con nosotros</h2>
                
            </div>
        </div>
        <div class="media-left">
            <center><img src="https://escuelainfantil.net/wp-content/uploads/buzon.jpg" alt="Medicina preventiva"></center>
        </div>
        <br>

        <div class="form-group">
                <label for="exampleFormControlTextarea1">Dejanos aqui tu sugerencia o reclamo... ¡Gracias!</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Enviar</button>

    </div>

    

    <div>
        <footer style="background-color:#000000;">
                <div class="container pt-3 my-3 border">
                <div class="row">
                    
                    <div class="col-xs-12 col-md-6">
                        <h6 class="text-muted lead text-center">
                            <strong>DIRECCIÓN</strong>
                        </h6>

                        <h6 class="text-muted">
                        <img src="https://png.pngtree.com/png-clipart/20200710/original/pngtree-dog-cat-pet-hugs-logo-vector-icon-modern-animal-badge-for-png-image_4189879.jpg" class="rounded float-left" alt="..." width="150" height="150">
                            <br><br>&nbsp;&nbsp;&nbsp;Calle 18 # 127 - 115, 760001 Santiago de Cali<br>
                            &nbsp;&nbsp;&nbsp;Teléfonos: 3115988953 – 3112641818.<br>
                        </h6>
                        
                    </div>
                </div>  
            </div>
        </footer>
    </div> 

    @stop