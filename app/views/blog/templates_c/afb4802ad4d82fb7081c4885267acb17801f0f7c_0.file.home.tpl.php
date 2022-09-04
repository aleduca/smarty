<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:41:49
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/blog/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e35d2ae5a7_08681652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afb4802ad4d82fb7081c4885267acb17801f0f7c' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/blog/home.tpl',
      1 => 1662313306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e35d2ae5a7_08681652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2288649176314e35d2a6c90_79951143', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14770454326314e35d2aaf39_75883119', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_2288649176314e35d2a6c90_79951143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2288649176314e35d2a6c90_79951143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Blog Home Page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14770454326314e35d2aaf39_75883119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14770454326314e35d2aaf39_75883119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Home Blog with Smarty</h1>
<?php
}
}
/* {/block 'body'} */
}
