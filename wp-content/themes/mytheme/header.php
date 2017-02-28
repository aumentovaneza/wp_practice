<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
            <?php if(wp_title('', false)) { echo ' :'; } ?>
                <?php bloginfo('name'); ?>
    </title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>../css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>../css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>../css/bootstrap.css">
    <?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>'
                , tests: {}
            });
        </script>
</head>

<body <?php body_class(); ?>>
    <div class="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand image-responsive" href="#home"><img src="<?php echo get_template_directory_uri(); ?>../image/logo.png"></a> </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#start">START</a></li>
                        <li><a href="#omsidebar">OM SIDEBAR</a></li>
                        <li><a href="#findforhandler">FIND FORHANDLER</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
