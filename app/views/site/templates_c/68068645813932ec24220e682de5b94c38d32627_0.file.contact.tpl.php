<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:36:45
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e22df36ff2_59809050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68068645813932ec24220e682de5b94c38d32627' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/contact.tpl',
      1 => 1662313004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e22df36ff2_59809050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15132404366314e22df2e099_97610811', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11767199906314e22df34194_69137558', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_15132404366314e22df2e099_97610811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15132404366314e22df2e099_97610811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Contact Page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11767199906314e22df34194_69137558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11767199906314e22df34194_69137558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Contact with Smarty</h1>

<?php
}
}
/* {/block 'body'} */
}
