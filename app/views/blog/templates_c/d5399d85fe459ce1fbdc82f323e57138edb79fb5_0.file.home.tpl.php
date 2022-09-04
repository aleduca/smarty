<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:34:46
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e1b6b1c9a5_10489009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5399d85fe459ce1fbdc82f323e57138edb79fb5' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/home.tpl',
      1 => 1662312870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e1b6b1c9a5_10489009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8598651416314e1b6b12ac5_03914720', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8910111846314e1b6b189e1_66129031', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block 'title'} */
class Block_8598651416314e1b6b12ac5_03914720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8598651416314e1b6b12ac5_03914720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Home Page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8910111846314e1b6b189e1_66129031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8910111846314e1b6b189e1_66129031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Home with Smarty</h1>

<?php
}
}
/* {/block 'body'} */
}
