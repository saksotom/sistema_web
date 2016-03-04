<nav class="navbar" role="navigation">
        <a class="navbar-brand regresar" href="<?=site_url($back);?>"><i class="fa fa-arrow-circle-left"></i></a>
    <?php
      if (is_array($sub_menu2)) {
        foreach ($sub_menu2 as $key => $value) {
    ?>
      <a class="navbar-brand" href="<?=site_url($value->subrec_controlador.'/'.$value->subrec_accion);?>"><i class="fa <?=$value->subrec_img?>"></i><span class="aside-text">&nbsp;<?=$value->subrec_etiqueta?></span></a>
    <?php 
      }
     }
    ?>
        <!--<a class="navbar-brand" href="<?=!isset($action) ? "" : $action; ?>"><i class="fa fa-plus-square"></i><span class="section-text"></span></a>-->
        <ul class="navbar-right breadcrumb">
            <li><a href="<?=site_url('formulacion/home');?>">Formulaci&oacute;n</a></li>

            <!--<li class="active"><?=!isset($new) ? "" : $new;?></li>-->
        </ul>   
</nav>
<section>
    <div class="panel panel-primary">
      <div class="panel-heading"><?=!isset($titulo) ? "" : strtoupper($titulo);?></div>
      <div class="panel-body">
        <?= $formulario; ?>
        <div id="boton_siguiente"></div>
        <?=validation_errors('<div id="msgError">', '</div>'); ?>       
      </div>
      <div class="panel-footer"></div>
    </div>
</section>
<script>
    $(document).ready(function() {
    //Inicializacion
        $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;;', 'Juv', 'Vie', 'S&aacute;b'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        //Navegadores que no soportan input type=date
        (navigator.userAgent.indexOf('MSIE') != -1 || navigator.userAgent.indexOf('Firefox') != -1 || navigator.userAgent.indexOf('Media Center PC') != -1) && $('input[type=date]').datepicker();
        //Cambiar el nombre del legend del form
        $('legend').html($(".tab-pane.active").data('name'));
                
        //variables globales
        var sitio = 1;
    });
</script>