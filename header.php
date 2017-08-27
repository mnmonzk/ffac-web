<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="/style.css?version=0002" media="screen">
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Fight for artistic creativity</title>
    </head>
    <body>
    
    <div class="container">
<?php
    if(isset($_SESSION["error"]) && $_SESSION["error"] != []) {
?>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?= $_SESSION["error"]["title"] ?></h4>
            <p><?= $_SESSION["error"]["detail"] ?></p>
        </div>

<?php
        $_SESSION["error"] = [];
    }
?>
        <h1 class="page-header">Fight for artistic creativity</h1>
        <p class="lead">Twitterをディストピアにしないために、我々ができること。</p>
    </div>
