<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- main container -->
    <div class='container'>
        <!-- header -->
        <div class='header'>Header</div>
        <!-- mid container - includes main content area and right sidebar -->
        <div class='mid_container'>
          <!-- main content area -->
         <div class='main_content_area'>
             <jdoc:include type="modules" name="position-3" style="xhtml" />
             <jdoc:include type="message" />
             <jdoc:include type="component" />
             <jdoc:include type="modules" name="position-2" style="none" />
         </div>
        </div>

        <!-- footer -->
        <div class='footer'>
            Footer
        </div>

    </div>
</body>
</html>
