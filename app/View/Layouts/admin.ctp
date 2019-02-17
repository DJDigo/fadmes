<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>F.A. De Mesa Elementary School</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('aos.css');
		echo $this->Html->css('bootstrap-datepicker/datepicker.css');
		echo $this->Html->css('../js/datatables/datatables.min.css');
		echo $this->Html->css('admin.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery-3.1.0.min.js');
		echo $this->Html->script('aos.js');
		echo $this->Html->script('bootstrap-datepicker/datepicker.js');
		echo $this->Html->script('datatables/datatables.min.js');
		echo $this->Html->script('chartjs.js');
		echo $this->Html->script('chartjs-plugin-labels.min.js');
	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
	<header>
		<?php echo $this->element('admin/header'); ?>
	</header>
	<main>
		<?php echo $this->element('admin/sidebar'); ?>
        <?php echo $this->fetch('content'); ?>
	</main>
</body>
</html>
