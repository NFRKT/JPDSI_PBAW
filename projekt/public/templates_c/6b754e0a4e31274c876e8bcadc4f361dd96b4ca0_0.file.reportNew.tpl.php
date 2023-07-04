<?php
/* Smarty version 4.3.1, created on 2023-07-04 00:15:41
  from 'D:\Xampp\htdocs\projekt\app\views\reportNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a3488d292f55_41582625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b754e0a4e31274c876e8bcadc4f361dd96b4ca0' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\projekt\\app\\views\\reportNew.tpl',
      1 => 1688301433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a3488d292f55_41582625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90926364064a3488d283587_51018276', 'login');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189391566564a3488d28f994_36512273', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'login'} */
class Block_90926364064a3488d283587_51018276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_90926364064a3488d283587_51018276',
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
/* {block 'top'} */
class Block_189391566564a3488d28f994_36512273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_189391566564a3488d28f994_36512273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newReport" method="post">
            <fieldset>
                <legend>Tworzenie nowego zlecenia</legend>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">

                        <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="phone" type="text" placeholder="numer telefonu" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="description" type="text" placeholder="Krótki Opis problemu" name="description"
                               value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="model" type="text" placeholder="model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
                    </div>


                    <div class="col-12">
                        <select name="id_repair" id="id_repair">
                            <option value="">Rodzaj naprawy</option>
                            <option value="3">Diagnostyka</option>
                            <option value="4">Czyszczenie</option>
                            <option value="5">Naprawa</option>
                            <option value="6">Reklamacja</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select name="id_device" id="id_device">
                            <option value="">Rodzaj sprzętu</option>
                            <option value="3">Karta Graficzna</option>
                            <option value="4">Monitor</option>
                            <option value="5">Procesor</option>
                            <option value="6">Zasilacz</option>
                            <option value="7">Laptop</option>
                            <option value="8">Komputer Stacjonarny</option>
                            <option value="9">Telefon</option>
                            <option value="10">Telewizor</option>
                        </select>
                    </div>

                </div>

<br>

                    <input type="submit" class="small button primary" value="Wyślij"/>

    </div>
    </fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
    </form>

    </div>

<?php
}
}
/* {/block 'top'} */
}
