<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head" />
</head>

<body class="<?php echo $active->alias . ' ' . $pageclass; ?>">
    <header>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse">
                <jdoc:include type="modules" name="navbar" />
            </div>
        </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <jdoc:include type="component" />
                <i class="fas fa-user"></i>
                <i class="far fa-user"></i>
                <i class="fab fa-github-square"></i>
            </div>
        </div>
    </div>

    <jdoc:include type="modules" name="debug" />
    <script src="templates/horscadre/build/app.js"></script>
    <script src="templates/horscadre/js/script.js"></script>
    <script src="templates/horscadre/js/offcanvas.js"></script>
</body>

</html>
