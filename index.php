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
    <div class="container">
        <!-- header -->
        <div class="row">
            <div class="span4">
                <jdoc:include type="modules" name="top-left" style="xhtml" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="top-middle" style="xhtml" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="top-right" style="xhtml" />
            </div>
        </div>
        <!-- header -->
        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="header" />
            </div>
        </div>
        <!-- main content area -->
        <div class="row">
         <div class="span12">
             <jdoc:include type="component" />
             <jdoc:include type="modules" name="position-1" style="xhtml" />
             <jdoc:include type="modules" name="position-2" style="none" />
             <jdoc:include type="message" />
         </div>
        </div>

        <!-- footer -->
        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="footer" style="none" />
            </div>
        </div>

    </div>
</body>
</html>
