<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="assets/images/corazon-logo.png"  style="max-height:60px;"/>
            </a>
        </div>
        <!-- logo  -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
    <div class="sidebar-user-info">
        <div class="sui-normal">
            <a href="#" class="user-link">
                <img src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>" alt="" class="img-circle" style="height:44px;">

                <span><?php echo get_phrase('welcome'); ?>,</span>
         <strong><?php echo $this->session->userdata('name'); ?> </strong>
            </a>
        </div>

        <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profiles -->				
            <a href="<?php echo base_url(); ?>index.php?aselsi/manage_profile">
                <i class="fa fa-edit"></i>
                <?php echo get_phrase('edit_profile'); ?>
            </a>

            <a href="<?php echo base_url(); ?>index.php?aselsi/manage_profile">
                <i class="entypo-lock"></i>
                <?php echo get_phrase('change_password'); ?>
            </a>

            <span class="close-sui-popup">×</span><!-- this is mandatory -->			
        </div>
    </div>


    <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>	
    <ul id="main-menu" class="">
    
        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/dashboard">
                <i class="fa fa-dashboard"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>
        <!-- salida -->
        <li class="<?php if ($page_name == 'manage_salida') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/salida">
                <i class="fa fa-sign-out"></i>
                <span><?php echo get_phrase('salida'); ?></span>
            </a>
        </li>

        <!-- programas -->
        <li class="<?php if ($page_name == 'manage_programa') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/programa">
                <i class="fa fa-hospital-o"></i>
                <span><?php echo get_phrase('programa'); ?></span>
            </a>
        </li>
        
        
       
       <!-- productos -->
      <li class="<?php if ($page_name == 'manage_medicamento') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/medicamento">
                <i class="fa fa-medkit"></i>
                <span><?php echo get_phrase('Productos'); ?></span>
            </a>
            <ul>
                <!-- grupos -->
                <li class="<?php if ($page_name == 'manage_grupo') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/grupo">
                        <i class="fa fa-group"></i>
                        <span><?php echo get_phrase('grupo'); ?></span>
                    </a>
                </li>
                <!-- composicion  -->
                <li class="<?php if ($page_name == 'manage_composicion') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/composicion">
                        <i class="fa fa-filter"></i>
                        <span><?php echo get_phrase('composicion'); ?></span>
                    </a>
                </li>
                <!-- medicamento-->
                <li class="<?php if ($page_name == 'manage_medicamento') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/medicamento">
                        <i class="fa fa-medkit"></i>
                        <span><?php echo get_phrase('medicamento'); ?></span>
                    </a>
                </li>
                <!-- entradas-->
                <li class="<?php if ($page_name == 'manage_entradas') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/entradas">
                        <i class="fa fa-sign-in"></i>
                        <span><?php echo get_phrase('entradas'); ?></span>
                    </a>
                </li>

            </ul>
        </li>
    
    <!-- donante -->
        <li class="<?php if ($page_name == 'manage_donante') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/donante">
                <i class="fa fa-magic"></i>
                <span><?php echo get_phrase('donante'); ?></span>
            </a>
        </li>

    <!-- reportes -->
        <li class="<?php if ($page_name == 'manage_reporte') echo 'opened active';?> ">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span><?php echo get_phrase('reporte') ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'manage_reporte') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/reporte_grafico">
                    <i class="fa fa-report"></i>
                    <span><?php echo get_phrase('reporte'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- proveedores -->
        <li class="<?php if ($page_name == 'manage_proveedor') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/proveedor">
                <i class="fa fa-truck"></i>
                <span><?php echo get_phrase('proveedor'); ?></span>
            </a>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?aselsi/manage_profile">
                <i class="fa fa-user"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>
       
        <!-- SETTINGS CONFIGURACION-->
        <li class="<?php if ($page_name == 'system_settings' || $page_name == 'manage_language' || $page_name == 'manage_usuarios') echo 'opened active';?> ">
            <a href="#">
                <i class="fa fa-cog"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/system_settings">
                        <span><i class="entypo-tools"></i> <?php echo get_phrase('system_settings'); ?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if ($page_name == 'manage_usuarios') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/usuarios">
                        <span><i class="entypo-users"></i> <?php echo get_phrase('users'); ?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?aselsi/manage_language">
                        <span><i class="entypo-language"></i> <?php echo get_phrase('manage_language'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        
    </ul>

</div>