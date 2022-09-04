<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:41:49
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/blog/master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e35d2c8bf4_95890629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a22262422ee4331fa676dd13a0b8e82805a884' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/blog/master.tpl',
      1 => 1662313285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e35d2c8bf4_95890629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17134919696314e35d2c0820_87101443', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4502867806314e35d2c62d5_05695556', 'body');
?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum in dolore eaque suscipit neque aspernatur nam ratione saepe cumque amet non laudantium, aliquid natus doloremque quis soluta! Inventore, minima.</p>    
</body>
<?php }
/* {block 'title'} */
class Block_17134919696314e35d2c0820_87101443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17134919696314e35d2c0820_87101443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4502867806314e35d2c62d5_05695556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4502867806314e35d2c62d5_05695556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
