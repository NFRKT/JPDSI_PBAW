<?php
/* Smarty version 4.3.1, created on 2023-07-04 12:57:44
  from 'D:\Xampp\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a3fb285bbf35_47740109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f641affa89b7af529983c3e19895480fd90ba69a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1688468263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a3fb285bbf35_47740109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Serwis </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<style>
		.messages { }
		.messages ul { list-style-type: none; padding: 0; }
		.msg{
			border-radius: 0.5em;
			padding: 1em;
			margin-bottom: 0.5em;
			box-shadow: 0.2em 0.2em 0.4em #ccc;
		}
		.error{	background-color: #f88; }
		.warning{ background-color: #fd2; }
		.info{ background-color: #afa; }

	</style>
	<body class="is-preload">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183144741764a3fb2855fc34_92554884', 'login');
?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="reportList" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">JDSERVICE</span>
								</a>
						</div>
					</header>



				<!-- Main -->
					<div id="main">
						<div class="inner">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140863968664a3fb28563f97_15256879', 'top');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87955262064a3fb28564ef8_72703406', 'welcome');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91899641164a3fb28565695_49045047', 'bot');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152468357664a3fb28566735_75808848', 'search');
?>



                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28368230064a3fb28567188_24652296', 'bottom');
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149359114964a3fb28567937_51104900', 'register');
?>

						 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45082203864a3fb28568199_50831474', 'messages');
?>

					</div>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/functions.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'login'} */
class Block_183144741764a3fb2855fc34_92554884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_183144741764a3fb2855fc34_92554884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'login'} */
/* {block 'top'} */
class Block_140863968664a3fb28563f97_15256879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_140863968664a3fb28563f97_15256879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'welcome'} */
class Block_87955262064a3fb28564ef8_72703406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'welcome' => 
  array (
    0 => 'Block_87955262064a3fb28564ef8_72703406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'welcome'} */
/* {block 'bot'} */
class Block_91899641164a3fb28565695_49045047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bot' => 
  array (
    0 => 'Block_91899641164a3fb28565695_49045047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bot'} */
/* {block 'search'} */
class Block_152468357664a3fb28566735_75808848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_152468357664a3fb28566735_75808848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'search'} */
/* {block 'bottom'} */
class Block_28368230064a3fb28567188_24652296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_28368230064a3fb28567188_24652296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
/* {block 'register'} */
class Block_149359114964a3fb28567937_51104900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_149359114964a3fb28567937_51104900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'register'} */
/* {block 'messages'} */
class Block_45082203864a3fb28568199_50831474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_45082203864a3fb28568199_50831474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <br>

							 <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
								 <div class="messagess">
									 <ul>
										 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
											 <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
										 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									 </ul>
								 </div>
							 <?php }?>
							<?php
}
}
/* {/block 'messages'} */
}
