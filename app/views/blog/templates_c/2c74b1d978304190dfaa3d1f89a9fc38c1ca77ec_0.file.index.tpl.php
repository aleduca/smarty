<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:34:58
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e1c2be0309_17402431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c74b1d978304190dfaa3d1f89a9fc38c1ca77ec' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/index.tpl',
      1 => 1662312897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e1c2be0309_17402431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7896820726314e1c2bd8041_47941049', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15135301626314e1c2bdd734_30871958', 'body');
?>



<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non laudantium, aliquid natus doloremque quis soluta! Inventore, minima.</p>    
</body>
<?php }
/* {block 'title'} */
class Block_7896820726314e1c2bd8041_47941049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7896820726314e1c2bd8041_47941049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15135301626314e1c2bdd734_30871958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15135301626314e1c2bdd734_30871958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
