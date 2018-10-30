<?php
   
    $this->db->from('cdp_salida');
    $cdps = $this->db->count_all_results();
    $this->db->from('cdp_programa');
    $cdpp = $this->db->count_all_results();
    $this->db->from('cdp_grupo');
    $cdpg = $this->db->count_all_results();
    $this->db->from('cdp_medicamento');
    $cdpm = $this->db->count_all_results();
    $this->db->from('cdp_donante');
    $cdpd = $this->db->count_all_results();
    $this->db->from('cdp_usuario');
    $cdpu = $this->db->count_all_results();
    $this->db->from('cdp_proveedor');
    $cdppr = $this->db->count_all_results();
    $this->db->from('cdp_composicion');
    $cdpc = $this->db->count_all_results();
 ?>
<div class="row">
    <!-- SALIDAS -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/salida">
            <div class="tile-stats tile-white tile-white-primary">
                <div class="icon"><i class="fa fa-sign-out"></i></div>
                <div class="num" data-start="0" data-end=""
                     data-duration="1500" data-delay="0"><?php echo $cdps; ?> </div> <!--&pound;-->
                <h3><?php echo get_phrase('salida') ?></h3>
            </div>
        </a>
    </div>
    <!-- programa -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/programa">
            <div class="tile-stats tile-white tile-white-brown">
                <div class="icon"><i class="fa fa-hospital-o"></i></div>
                <div class="num" data-start="0" data-end=""
                     data-duration="1500" data-delay="0"><?php echo $cdpp; ?> </div> <!--&pound;-->
                <h3><?php echo get_phrase('programa') ?></h3>
            </div>
        </a>
    </div>
    <!-- grupo -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/grupo">
            <div class="tile-stats tile-white tile-white-brown">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="num" data-start="0" data-end=""
                     data-duration="1500" data-delay="0"><?php echo $cdpg; ?> </div> <!--&pound;-->
                <h3><?php echo get_phrase('grupo') ?></h3>
            </div>
        </a>
    </div>
    <!-- composicion -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/composicion">
            <div class="tile-stats tile-white tile-white-brown">
                <div class="icon"><i class="fa fa-filter"></i></div>
                <div class="num" data-start="0" data-end=""
                     data-duration="1500" data-delay="0"><?php echo $cdpc; ?> </div> <!--&pound;-->
                <h3><?php echo get_phrase('composicion') ?></h3>
            </div>
        </a>
    </div>
   
</div>

<br />

<div class="row">
 <!-- medicamento -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/medicamento">
            <div class="tile-stats tile-white-red">
                <div class="icon"><i class="fa fa-medkit"></i></div>
                <div class="num" data-start="0" data-end="" 
                     data-duration="1500" data-delay="0"><?php echo $cdpm; ?></div>
                <h3><?php echo get_phrase('medicamento') ?></h3>
            </div>
        </a>
    </div>

    <!-- donante -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/donante">
            <div class="tile-stats tile-white-cyan">
                <div class="icon"><i class="fa fa-magic"></i></div>
                <div class="num" data-start="0" data-end="" 
                     data-duration="1500" data-delay="0"><?php echo $cdpd; ?></div>
                <h3><?php echo get_phrase('donante') ?></h3>
            </div>
        </a>
    </div>
    
<!-- proveedores -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/proveedor">
            <div class="tile-stats tile-white-gray">
                <div class="icon"><i class="fa fa-truck"></i></div>
                <div class="num count" data-start="0" data-end="" 
                     data-duration="1500" data-delay="0"> <?php echo $cdppr;  ?> </div>
                <h3><?php echo get_phrase('proveedor') ?></h3>
            </div>
        </a>
    </div>

     <!-- USUARIOS -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/usuario">
            <div class="tile-stats tile-white-gray">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="num" data-start="0" data-end="" 
                     data-duration="1500" data-delay="0"><?php echo $cdpu;  ?></div>
                <h3><?php echo get_phrase('usuario') ?></h3>
            </div>
        </a>
    </div>
    
</div>

<br />

<div class="row">

   <!-- CUENTA -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/manage_profile">
            <div class="tile-stats tile-white-pink">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="num">&nbsp;</div>
                <h3><?php echo get_phrase('cuenta') ?></h3>
            </div>
        </a>
    </div>
    <!-- reporte -->
    <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/reporte">
            <div class="tile-stats tile-white-blue">
                <div class="icon"><i class="fa fa-bar-chart-o"></i></div>
                <div class="num">&nbsp;</div>
                <h3><?php echo get_phrase('reporte') ?></h3>
            </div>
        </a>
    </div>
    <!-- AJUSTES -->
      <div class="col-sm-3">
        <a href="<?php echo base_url(); ?>index.php?aselsi/system_settings">
            <div class="tile-stats tile-white">
                <div class="icon"><i class="fa fa-cog"></i></div>
                <div class="num">&nbsp;</div>
                <h3><?php echo get_phrase('settings') ?></h3>
            </div>
        </a>
    </div>
</div>