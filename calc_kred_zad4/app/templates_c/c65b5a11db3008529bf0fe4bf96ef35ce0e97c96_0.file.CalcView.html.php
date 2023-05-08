<?php
/* Smarty version 4.3.1, created on 2023-04-24 22:34:56
  from 'D:\Xampp\htdocs\calc_kred_zad4\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6446e7f0a91440_16709337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65b5a11db3008529bf0fe4bf96ef35ce0e97c96' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\calc_kred_zad4\\app\\calc\\CalcView.html',
      1 => 1682366706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6446e7f0a91440_16709337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2827478126446e7f0a7d299_22527575', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5482787796446e7f0a7dd58_96768317', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_2827478126446e7f0a7d299_22527575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2827478126446e7f0a7d299_22527575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Miłego obliczania<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_5482787796446e7f0a7dd58_96768317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5482787796446e7f0a7dd58_96768317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>

			<label for="x">Kwota kredytu: </label>
			<input id="x" type="text" placeholder="kwota" name="x" value="">

			<label for="y">Liczba lat spłaty: </label>
			<input id="y" type="text" placeholder="lata" name="y" value="">

			<label for="z">Oprocentowanie: </label>
			<input id="z" type="text" placeholder="%" name="z" value="">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>

<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
