<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="site <?php echo $active->alias . ' ' . $pageclass; ?>">
    <header class="header navbar-expand-lg">
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
            <div class="site-name d-flex d-lg-none">
                <a class="navbar-brand" href="/">
                    <img src="templates/horscadre/img/hors-cadre-logo.png" alt="logo de l'Association Hors Cadre" />
                </a>

                <jdoc:include type="modules" name="slogan" />
            </div>
        </div>

        <div class="navbar-collapse offcanvas-collapse">
            <div class="fullwidth">
                <div class="container">
                    <div class="navbar navbar-above">
                        <jdoc:include type="modules" name="navbar-above" />
                    </div>

                    <div class="site-name d-none d-lg-flex">
                        <a class="navbar-brand" href="/">
                            <img src="templates/horscadre/img/hors-cadre-logo.png" alt="logo de l'Association Hors Cadre" />
                        </a>

                        <jdoc:include type="modules" name="slogan" />
                    </div>
                </div>
            </div>

            <div class="navbar-main fullwidth">
                <div class="container">
                    <jdoc:include type="modules" name="navbar" />
                </div>
            </div>
        </div>
    </header>
    
    <main class="container">
        <div class="row">
            <div class="col-12">
                <jdoc:include type="component" />
                <i class="fas fa-user"></i>
                <i class="far fa-user"></i>
                <i class="fab fa-github-square"></i>
            </div>
        </div>
    </main>

    <jdoc:include type="modules" name="debug" />
    <script src="templates/horscadre/build/app.js"></script>
    <script src="templates/horscadre/js/script.js"></script>
    <script src="templates/horscadre/js/offcanvas.js"></script>
</body>

</html>
