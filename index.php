<?php defined( '_JEXEC' ) or die;
  include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?>

<!doctype html>
<html lang="<?php echo $this->language; ?>">

  <head>
    <jdoc:include type="head" />
  </head>

  <body class="site <?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?>">

    <nav id="second-nav" class="navbar navbar-expand-lg bg-primary d-none d-lg-flex">
      <jdoc:include type="modules" name="navbar-top" />
    </nav>

    <nav id="main-nav" class="navbar navbar-expand-lg bg-white sticky-top">
      <a class="navbar-brand p-0 d-xs-inline-block d-sm-none d-lg-inline-block d-xl-none" href="<?php echo $this->baseurl; ?>/">
        <img src="templates/alzprotect/img/alzprotect-simple-logo.svg" alt="<?php echo $app->getCfg('sitename'); ?>" />
      </a>
      <a class="navbar-brand p-0 d-none d-sm-inline-block d-lg-none d-xl-inline-block" href="<?php echo $this->baseurl; ?>/">
        <img src="templates/alzprotect/img/alzprotect-logo.svg" alt="<?php echo $app->getCfg('sitename'); ?>" />
      </a>

      <button class="navbar-toggler d-flex justify-content-center align-items-center text-primary d-lg-none" type="button" data-toggle="collapse" data-target="#nav-modules" aria-controls="nav-modules" aria-expanded="false" aria-label="Navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
      </button>

      <div id="nav-modules" class="collapse navbar-collapse">
        <jdoc:include type="modules" name="navbar" />
        <div class="d-lg-none">
          <jdoc:include type="modules" name="navbar-top" />
        </div>
      </div>
    </nav>


    <main id="main">
      <jdoc:include type="component" />
    </main>

    <footer id="footer">
      <div class="container-fluid main-footer">
        <div class="py-3">
          <jdoc:include type="modules" name="footer" />
        </div>
      </div>

      <div class="container-fluid second-footer">
        <jdoc:include type="modules" name="footer-below" />
      </div>
    </footer>

    <jdoc:include type="modules" name="debug" />

    <script src="templates/alzprotect/build/app.js"></script>
    <script src="templates/alzprotect/js/script-min.js"></script>
  </body>
</html>
