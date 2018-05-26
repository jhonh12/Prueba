<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/logo series.ico" />
        <title>TV shows</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Sirve para Internet Explorer/-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"> <!--Se cargan los elementos del css-->
        <link href="css/estilos.css" rel="stylesheet">
        <script type="text/javascript">
                document.oncontextmenu = function(){return false;}
        </script>
    </head>   
    <body>
        <nav class="navbar navbar-default navbar-static-top"><!--Inicio de código para crear una barra de navegación-->
            <div class="container"> <!--Divisor y contenedor-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                        <span class="sr-only">Este botón despliega la barra de navegación</span><!--Sirve para colocar un texto horizontal corto--> <!--el sr-only sirve para las personas invidentes, para que puedan leer el codigo-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button> 
                    <img src="imagenes/logo series.jpg"/>
                    <a class="navbar-brand" href="index.html">Tv shows</a><!--Sirve para crear enlaces a otra pagina-->
                                                                <!--el href sirve para enlazar a otro html-->
                </div>
                <div id="navbar" class="navbar-collapse collapse"><!--Sirve para una pantalla mas estrecha que la barra de navegación; oculte la barra--> 
                </div> 
            </div>
        </nav><!--Fin del codigo de la barra de navegación-->
        <div class="col-md-6">
                        <div class="panel panel-default"> <!--Código para generar el contenido dentro del container-->
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Lo mas nuevo en series.
                                    </div>
                                    <div class="panel-body0">
                                        <?php
                                        $url = 'http://api.tvmaze.com/shows?page=1';    
                                        $json= file_get_contents($url);
                                        $retVal = json_decode($json, TRUE);
                                        //print'<pre>';
                                        //print_r($retVal);
                                        //print'</pre>';
                                        for($x=1;$x <=19;$x++){
                                        echo $retVal[$x]['name'].",";
                                        echo $retVal[$x]['premiered'].",";
                                        echo $retVal[$x]['officialSite'].",";
                                        //echo $retVal[$x]['medium']."/br";
                                        }
                                        
                                        ?>      
                                    </div>
                        </div> <!--Fin del Código-->  
        </div> 
        <div class="col-md-12">         
                        <div class="panel panel-default"> <!--Código para generar el contenido dentro del container-->
                                <div id="final">    
                                <div class="panel-body">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>Los mejores shows solo aquí.
                                       
                                         </div>        
                        </div> <!--Fin del Código-->  
                       </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


