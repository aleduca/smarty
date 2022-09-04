<?php
/* Smarty version 4.2.0, created on 2022-09-04 17:50:42
  from '/Users/alexandrexandecar/Desktop/smarty/app/views/site/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6314e5729cbcf8_09444204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b1ea3cb820cb89ccabfc7c9dd2f047ec60c69a' => 
    array (
      0 => '/Users/alexandrexandecar/Desktop/smarty/app/views/site/home.tpl',
      1 => 1662313840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6314e5729cbcf8_09444204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1191306656314e5729aea09_56828546', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12975881186314e5729b4166_24556606', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block 'title'} */
class Block_1191306656314e5729aea09_56828546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1191306656314e5729aea09_56828546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Home Page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12975881186314e5729b4166_24556606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12975881186314e5729b4166_24556606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Home with Smarty</h1>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            FirstName: <?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
<br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>

    <p>My name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 and my age is <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</p>
<?php
}
}
/* {/block 'body'} */
}
