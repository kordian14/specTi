<?php
/* Smarty version 4.3.2, created on 2023-11-17 10:11:11
  from 'C:\xampp\htdocs\php_zadanie_5\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65572e2f829914_56004564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b130f05cbf10687f6897806ecbb453a1b98dec35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_zadanie_5\\templates\\main.html',
      1 => 1700211503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65572e2f829914_56004564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/styl.css">
<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

</head>

<div class ='header'>
<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>

</div>


<div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37185014265572e2f828984_72384828', 'content');
?>
   
</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1971309465572e2f829291_30414876', 'footer');
?>

	</p>
	<p>
		Widok oparty na stylach <a href="" target="_blank"></a>.Szymon Kozłowski
	</p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_37185014265572e2f828984_72384828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_37185014265572e2f828984_72384828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1971309465572e2f829291_30414876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1971309465572e2f829291_30414876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
