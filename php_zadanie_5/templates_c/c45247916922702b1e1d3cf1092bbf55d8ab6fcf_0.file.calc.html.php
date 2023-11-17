<?php
/* Smarty version 4.3.2, created on 2023-11-17 10:11:11
  from 'C:\xampp\htdocs\php_zadanie_5\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65572e2f5af448_07958327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c45247916922702b1e1d3cf1092bbf55d8ab6fcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_zadanie_5\\app\\calc.html',
      1 => 1700211981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65572e2f5af448_07958327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185454915065572e2f495285_74159280', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31512438565572e2f4981e1_46917828', 'content');
?>
><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_185454915065572e2f495285_74159280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_185454915065572e2f495285_74159280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_31512438565572e2f4981e1_46917828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31512438565572e2f4981e1_46917828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<label for="id_kwota">Podaj kwotę kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['id_kwota'];?>
"  <?php echo '?>'; ?>
" />
	<br />
	<label for="id_procent">Podaj procent kredytu: </label>
	<input id="id_procent" type="text" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['procent'];?>
" <?php echo '?>'; ?>
" /><br />
	<label for="id_rata">Podaj ile rat ma kredyt: </label>
	<input id="id_rata" type="text" name="rata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rata'];?>
" <?php echo '?>'; ?>
" /><br />
	<input type="submit" value="Oblicz" />
</form>	



<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy:</h4>
		<ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
	
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
