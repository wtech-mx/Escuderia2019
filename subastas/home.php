<?php
session_start();
require_once('utilidades/Utilerias.php');
unregister_GLOBALS();

?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Escudería</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet" />
        <link href="css/materialize.css" rel="stylesheet"/>
        <link href="css/font-awesome.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/mediaQueries.css" rel="stylesheet"/>
        <script type="text/javascript" src="scripts/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui.js"></script>
        <script type="text/javascript" src="scripts/jssor.slider-22.2.8.debug.js" ></script>
        <script type="text/javascript" src="scripts/dobPicker.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.colorbox.js"></script>
        <script type="text/javascript" src="scripts/materialize.js"></script>
        <script type="text/javascript" src="scripts/index2.js"></script>
        <script type="text/javascript" src="scripts/utilidades.js"></script>
        <script type="text/javascript" src="scripts/request.js"></script>
        <script type="text/javascript" src="scripts/imgSlider.js"></script>
        <script type="text/javascript" src="scripts/entities.js"></script>
        <script type="text/javascript" src="scripts/CotizacionServicios.js"></script>

    <link href="views/main/Backend/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="views/main/Backend/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="views/main/Backend/html/dist/css/style.css" rel="stylesheet">
    <link href="views/main/Backend/html/dist/css/pages/dashboard1.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="views/main/Backend/html/dist/css/util.css">
    <link rel="stylesheet" type="text/css" href="views/main/Backend/html/dist/css/main.css">

    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="views/main/Backend/assets/node_modules/popper/popper.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--morris JavaScript -->
    <script src="views/main/Backend/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="views/main/Backend/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="views/main/Backend/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="views/main/Backend/assets/node_modules/d3/d3.min.js"></script>
    <script src="views/main/Backend/assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="views/main/Backend/html/dist/js/dashboard1.js"></script>

<!--============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });

            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--============================================================================================-->
    <script src="vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');
        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>

    </head>
    
  <body class="skin-default-dark fixed-layout">

        <!-- contenedor "absoluto"" del sitio -->
        <div class="mainContainer">
            <!-- contenedor del encabezado del sitio -->
            <div class="mainHeader"></div>
            <!-- contenedor del cuerpo principal del sitio -->
            <div class="mainMinusHeader">
                <div class="mainBody"></div>
            </div>
        </div>      

</body>