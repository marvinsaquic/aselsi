<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $system_name = $this->db->get_where('crg_settings', array('se_type' => 'system_name'))->row()->se_descripcion;
        $system_title = $this->db->get_where('crg_settings', array('se_type' => 'system_title'))->row()->se_descripcion;
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php echo get_phrase('forgot_password'); ?> | <?php echo $system_title; ?></title>


        <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/neon-core.css">
        <link rel="stylesheet" href="assets/css/neon-theme.css">
        <link rel="stylesheet" href="assets/css/neon-forms.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <script src="assets/js/jquery-1.11.0.min.js"></script>

        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="assets/images/corazon-logo.png">

    </head>
    <body class="page-body login-page login-form-fall" data-url="http://neon.dev">


        <div class="login-container">

            <div class="login-header login-caret">

                <div class="login-content" style="width:100%;">

                    <a href="<?php echo base_url(); ?>" class="logo">
                        <img src="assets/images/logo.png" height="70" alt="" />
                    </a>

                    <p class="description">
                    <h2 style="color:#cacaca; font-weight:100;">
                        <?php echo $system_name; ?>
                    </h2>
                    </p>
                </div>

            </div>

            <div class="login-form">

                <div class="login-content">

                    <form method="post" action="<?php echo base_url();?>index.php?login/reset_password">

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-mail"></i>
                                </div>

                                <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo get_phrase('email');?>" autocomplete="off" data-mask="email" 
                                	required autofocus/>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                <center><?php echo get_phrase('reset_password');?></center>
                            </button>
                        </div>


                    </form>

					<a href="<?php echo base_url();?>"><?php echo get_phrase('return_to_login_page');?></a>

                </div>

            </div>

        </div>


        <!-- Bottom Scripts -->
        <script src="assets/js/gsap/main-gsap.js"></script>
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/joinable.js"></script>
        <script src="assets/js/toastr.js"></script>
        <script src="assets/js/resizeable.js"></script>
        <script src="assets/js/neon-api.js"></script>
        <script src="assets/js/neon-login.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/neon-custom.js"></script>
        <script src="assets/js/neon-demo.js"></script>
        
        <?php if ($this->session->flashdata('password_reset') != ""){ ?>
    <script>
        toastr.info('<?php echo $this->session->flashdata('password_reset');?>');
    </script>>
<?php } ?>

<?php if ($this->session->flashdata('password_reset_error') != ""){ ?>
    <script>
        toastr.error('<?php echo $this->session->flashdata('password_reset_error');?>');
    </script>>
<?php } ?>

    </body>
</html>