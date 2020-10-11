<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// responsive meta tag (recommended in Bootstrap 4 doc)
$doc->setMetadata('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no');

// favicons
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/apple-touch-icon.png', 'apple-touch-icon', 'rel', array('sizes' => '180x180'));
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/favicon-32x32.png', 'icon', 'rel', array('sizes' => '32x32', 'type' => 'image/png'));
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/favicon-16x16.png', 'icon', 'rel', array('sizes' => '16x16', 'type' => 'image/png'));
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/site.webmanifest', 'manifest', 'rel');
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/safari-pinned-tab.svg', 'mask-icon', 'rel', array('color' => '#7b7b7b'));
JDocumentHTML::addHeadLink('/templates/horscadre/img/favicons/favicon.ico', 'shortcut icon', 'rel');
$doc->setMetadata('msapplication-TileColor', '#95c154');
$doc->setMetadata('msapplication-config', '/templates/horscadre/img/favicons/browserconfig.xml');

// Google fonts
$doc->addStyleSheet('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');

// css
$doc->addStyleSheet($tpath.'/build/main.css');

JHtml::_('jquery.framework');
$doc->addScript('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', '', array('integrity' => 'sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN', 'crossorigin' => 'anonymous', 'defer' => 'defer'));
$doc->addScript($tpath . '/js/bootstrap.min.js', '', array('defer' => 'defer'));

// unset
// unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/caption.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/core.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/tabs-state.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/validate.js']);

if (isset($doc->_script['text/javascript']))
{
    $doc->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $doc->_script['text/javascript']);
    $doc->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $doc->_script['text/javascript']);
    if (empty($doc->_script['text/javascript']))
    {
        unset($doc->_script['text/javascript']);
    }
}