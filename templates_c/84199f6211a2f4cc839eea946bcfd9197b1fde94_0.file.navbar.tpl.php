<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-15 12:07:34
  from 'F:\htdocs\core-php-boilerplate\templates\components\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6e0c769bf4e7_07620478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84199f6211a2f4cc839eea946bcfd9197b1fde94' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\navbar.tpl',
      1 => 1584270399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6e0c769bf4e7_07620478 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Navigation -->
<div id="hi-menu"> 
<div class="container"> 
 <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="<?php echo ASSETS_URL;?>
/img/logo.png" height="130" class="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">  
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo BASE_URL;?>
/app/registration.php#registration">Sign Up <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo BASE_URL;?>
/app/login.php#login">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">|</a>
		</li>
	</ul>
  </div>
</nav>
</div>
</div><?php }
}
