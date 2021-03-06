<?php
session_start();

if(isset($_SESSION['token'])){
    unset($_SESSION['token']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Login</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/material.min.js"></script>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!-- <link rel="canonical" href="http://www.example.com/"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/additional.css">
    <link rel="stylesheet" href="css/beautifier.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="mdl-layout">
    <header class="docs-layout-header mdl-layout__header is-casting-shadow custom-header">
        <h3>SOEN341-G4</h3>
    </header>
    <div class="content-grid mdl-grid">
        <div class="mdl-cell  mdl-cell--6-col" style="padding: 5em; margin-bottom: 1em;">
            <p  id="project-desc">
                The <strong>GitHub repository monitoring tool</strong> will help the <strong>teaching assistants</strong> to monitor and grade each groups and students; by analyzing a repository and showing useful information in an easy-to-use and easy-to-understand way. In summary, this will show the contributions of each students and the progress of the project.
            </p>
        </div>
        <div class="mdl-cell mdl-cell--6-col" style="padding:2em; ">
            <div class="login-box">
                <div class="mdl-card mdl-shadow--6dp">
                    <div class="mdl-card__title mdl-color--primary mdl-color-text--white login_mdl">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--12-col">
                                <h4 style="text-align: center">GitHub Repo Monitoring tool sign in</h4>
                                <a href="https://github.com/login/oauth/authorize?client_id=7e84f9e2e7d65f484caa&scope=user public_repo repo repo_deployment gist read write admin&redirect_uri=http://debiancp.local/SOEN341/Integration/admin.php">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                            id="login_btn">
                                        SIGN IN WITH GITHUB
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--12-col">
        </div>
    </div>
    <div class="docs-text-styling docs-footer mdl-mini-footer mdl-color--grey-900" id="footer">
        <p>Aman Bhandal&nbsp;&nbsp;•&nbsp;&nbsp;
            Charles-Phillippe Labbé&nbsp;&nbsp;•&nbsp;&nbsp;
            Dmitry Kryukov&nbsp;&nbsp;•&nbsp;&nbsp;
            Ksenia Popova&nbsp;&nbsp;•&nbsp;&nbsp;
            Nikita Baranov&nbsp;&nbsp;•&nbsp;&nbsp;
            Batoul Yehia&nbsp;&nbsp;•&nbsp;&nbsp;
            Raymart De Guzman&nbsp;&nbsp;•&nbsp;&nbsp;
            Andy Pham</p>
    </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
