<?php
// $Id: template.php,v 1.4.2.6 2011/02/18 05:26:30 andregriffin Exp $


/**
 * Override or insert variables into the page template.
 */
function wcspc_preprocess_page(&$variables) {

	// columns
	$page = $variables['page'];
	if /* ($_GET['q'] == ('youth')) {    
                $variables['main_classes'] = 'col-sm-12 col-md-4'; 
                $variables['sidebar_second_classes'] = 'col-sm-12 col-md-8';
	} elseif */ ($page['sidebar_first'] && $page['sidebar_second']) {
		$variables['main_classes'] = 'col-sm-12 col-md-4 col-md-push-4';
		$variables['sidebar_first_classes'] = 'col-sm-12 col-md-4 col-md-pull-4';
		$variables['sidebar_second_classes'] = 'col-sm-12 col-md-4';
	} elseif ($page['sidebar_first']) {
		$variables['main_classes'] = 'col-md-8';
		$variables['sidebar_first_classes'] = 'col-md-4';
	} elseif ($page['sidebar_second']) {
		$variables['main_classes'] = 'col-md-4';
		$variables['sidebar_second_classes'] = 'col-md-8';
	} /*elseif ($_GET['q'] == ('youth')) {   
                $variables['main_classes'] = 'col-sm-12 col-md-4';
                $variables['sidebar_second_classes'] = 'col-sm-12 col-md-8';
	}*/ else {
		$variables['main_classes'] = 'col-sm-12';
	}

}
