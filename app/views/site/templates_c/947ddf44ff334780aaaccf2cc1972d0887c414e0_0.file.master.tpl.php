<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:43:23
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/site/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e3bb944505_14482311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947ddf44ff334780aaaccf2cc1972d0887c414e0' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/site/master.tpl',
      1 => 1662312903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e3bb944505_14482311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2599511966314e3bb9319c2_20724778', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17439410476314e3bb93ec62_08412045', 'body');
?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non laudantium, aliquid natus doloremque quis soluta! Inventore, minima.</p>    
</body>
<?php }
/* {block 'title'} */
class Block_2599511966314e3bb9319c2_20724778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2599511966314e3bb9319c2_20724778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17439410476314e3bb93ec62_08412045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17439410476314e3bb93ec62_08412045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
