<?php
/* Smarty version 4.3.1, created on 2023-07-04 00:34:40
  from 'D:\Xampp\htdocs\projekt\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a34d009654c0_07212644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dae507c0395ab6ed324455f6a2147672c850c2d' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\projekt\\app\\views\\RegisterView.tpl',
      1 => 1688301412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a34d009654c0_07212644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36523898164a34d0095e177_51078849', 'register');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'register'} */
class Block_36523898164a34d0095e177_51078849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_36523898164a34d0095e177_51078849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newUser" method="post">
            <fieldset>

                <label for="formGroupExampleInput" class="form-label">Tworzenie nowego użytkownika</label>

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">

                        <input id="name" type="text" placeholder="imię" name="name">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="surname" type="text" placeholder="nazwisko" name="surname" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="login" type="text" placeholder="login" name="login" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="inputPassword5" type="password" placeholder="hasło" name="password">
                    </div>


                </div>


                <div class="pure-controls">
                    <input type="submit" class="small button" value="Wyślij"/>
                    <br>
                    <br>
                    <a class="small button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Powrót</a>
                </div>
    </div>
    </fieldset>

    </form>
    </div>

<?php
}
}
/* {/block 'register'} */
}
