<?php
/* Smarty version 4.3.1, created on 2023-07-04 00:10:41
  from 'D:\Xampp\htdocs\projekt\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a34761622526_33516067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb3e77bee969266bd2855776088d1b0d47fad0a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\projekt\\app\\views\\LoginView.tpl',
      1 => 1688301408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a34761622526_33516067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61719218564a34761594780_22300994', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_61719218564a34761594780_22300994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_61719218564a34761594780_22300994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row gtr-uniform">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                <legend><b>Logowanie do systemu</b></legend>


                    <div class="col-6 col-12-xsmall">
                        <input id="id_login" type="text" name="login" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
                    </div>

                    <div class="col-6 col-12-xsmall">
                        <input id="id_pass" type="password" placeholder="hasło" name="pass"/><br/>
                    </div>

                    <input type="submit" value="zaloguj" class="button primary small"/>


            </form>

</div>
    <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Zarejestruj sie</a>
<?php
}
}
/* {/block 'top'} */
}
