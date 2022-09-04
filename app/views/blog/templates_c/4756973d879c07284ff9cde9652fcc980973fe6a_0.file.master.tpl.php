<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:36:46
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e22e015424_75181069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4756973d879c07284ff9cde9652fcc980973fe6a' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/master.tpl',
      1 => 1662312903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e22e015424_75181069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4659453646314e22e009f39_61100361', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6542196736314e22e010599_56723622', 'body');
?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non laudantium, aliquid natus doloremque quis soluta! Inventore, minima.</p>    
</body>
<?php }
/* {block 'title'} */
class Block_4659453646314e22e009f39_61100361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4659453646314e22e009f39_61100361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6542196736314e22e010599_56723622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6542196736314e22e010599_56723622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
