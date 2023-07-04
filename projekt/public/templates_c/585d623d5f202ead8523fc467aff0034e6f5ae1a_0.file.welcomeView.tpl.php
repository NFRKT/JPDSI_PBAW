<?php
/* Smarty version 4.3.1, created on 2023-07-04 00:10:48
  from 'D:\Xampp\htdocs\projekt\app\views\welcomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a347683f1a07_52104705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '585d623d5f202ead8523fc467aff0034e6f5ae1a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\projekt\\app\\views\\welcomeView.tpl',
      1 => 1688301438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a347683f1a07_52104705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103004018864a347683da762_42389272', 'login');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133626951064a347683e6b49_07685617', 'welcome');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'login'} */
class Block_103004018864a347683da762_42389272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_103004018864a347683da762_42389272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button small">Wyloguj</a>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button small">Zaloguj</a>
<?php }
}
}
/* {/block 'login'} */
/* {block 'welcome'} */
class Block_133626951064a347683e6b49_07685617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'welcome' => 
  array (
    0 => 'Block_133626951064a347683e6b49_07685617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['id']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <h1>Witaj <?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 </h1><br><br><h4>Wybierz co chcesz zrobić</h4><br><br><br><tr><td><ul class="actions"><li><a class="button primary name="sf_id_user" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList">Moje Zlecenia</a></li><li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportNew">Nowe zlecenie</a></li><br></ul></td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </section>
<?php
}
}
/* {/block 'welcome'} */
}
