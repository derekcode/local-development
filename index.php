<?php require('_hidden/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $app_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Local development">
        <meta name="author" content="Derek Nutile">

        <!-- Le styles -->
        <link href="<?php echo $asset_url; ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $asset_url; ?>css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $asset_url; ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $asset_url; ?>css/custom.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo $asset_url; ?>js/html5shiv.js"></script>
        <![endif]-->

        <!-- Le fav icons -->
        <link rel="shortcut icon" href="<?php echo $asset_url; ?>ico/favicon.ico">
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" id="top-navigation">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">Local Development Environment</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> Tools <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $tools_path; ?>phpliteadmin.php" target="_blank" title="SQLLite Admin">SQLLite Admin</a></li>
                                <li><a href="<?php echo $tools_path; ?>sqlbuddy/" target="_blank" title="SQLBuddy">SQLBuddy</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $tools_path; ?>phpinfo.php" target="_blank" title="PHPInfo">PHPInfo</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.navbar-inner -->
        </div><!-- /#top-navigation -->

        <div class="container">
            <div class="page-header">
                <h1 id="page_header_callout"><?php echo $page_header; ?> <small><?php echo strtolower($page_header_small); ?></small></h1>
            </div><!-- /.page-header -->

            <div>
                <?php echo $applications_tables; ?>
            </div><!-- /the table -->
        </div> <!-- /container -->

        <div id="footer">
            <div class="navbar navbar navbar-fixed-bottom">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span6">
                            <p class="muted">&nbsp;</p>
                        </div>
                        <div class="span6 muted">
                            <div class="pull-right muted">
                                Derek Nutile, 2013 &nbsp;
                                <a href="http://dereknutile.com/" target="_blank"><i class="icon-globe icon-large"></i></a>
                                <a href="http://twitter.com/dereknutile" target="_blank"><i class="icon-twitter icon-large"></i></a>
                                <a href="https://plus.google.com/102452877051577515671" target="_blank"><i class="icon-google-plus-sign icon-large"></i></a>
                                <a href="https://github.com/dereknutile" target="_blank"><i class="icon-github icon-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /footer -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo $asset_url; ?>js/jquery.min.js"></script>
        <script src="<?php echo $asset_url; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo $asset_url; ?>js/jquery.datatables.min.js"></script>
        <script src="<?php echo $asset_url; ?>js/jquery.datatables.custom.js"></script>
        <script src="<?php echo $asset_url; ?>js/project.table.js"></script>

    </body>
</html>
