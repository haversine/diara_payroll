<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?=URL::base()?>dash?year=<?=date('Y')?>">Jolly</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <? if(!Auth::instance()->logged_in()) { ?>
                    <li><a href="<?=URL::base()?>login">Login</a></li>
                    <? } else { ?>
                    <li><a href="<?=URL::base()?>login/logout">Logout</a></li>
                    <? } ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>


<!-- content goes here -->
<div class="container">

    <?=Notify::render()?>

    <? if(Auth::instance()->logged_in()){?>
    <?=$content?>
    <?} ?>

    <? if(!Auth::instance()->logged_in()){?>
    <? echo('Log in to begin')?>
    <?} ?>







</div>
<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


</body>
</html>