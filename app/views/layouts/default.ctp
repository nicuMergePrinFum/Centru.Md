<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
		<?php __('- Centru.MD, ajută să faci internetul mai bun.'); ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<?php $session->flash(); ?>
<style>
.sectionDivider {
	border-top:1px dashed #999999;
	color:#FFFFFF;
	background-color: white;
	height:1px;
	margin:3px 0;
}
</style>
<div>
		<?php echo $html->link('Centru.Md',array('controller'=>'home','action'=>'index'))?> (beta) - un site liber si deschis ce poate fi ameliorat de tine. Începe acum.
	&nbsp;&nbsp;&nbsp;<?php echo $html->link('Subproiecte',array('controller'=>'pages','action'=>'display','subproiecte'))?>
<hr class="sectionDivider" size="1" noshade="true" style="max-width:40em;"/>
</div>
	<?php echo $content_for_layout; ?>
</body>
</html>