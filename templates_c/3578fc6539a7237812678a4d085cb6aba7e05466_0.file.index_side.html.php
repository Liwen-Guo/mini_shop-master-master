<?php
/* Smarty version 3.1.29, created on 2020-11-25 15:37:18
  from "C:\UniServerZ\www\mini_shop-master\templates\index_side.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fbe7a2ea54a07_59526057',
  'file_dependency' => 
  array (
    '3578fc6539a7237812678a4d085cb6aba7e05466' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop-master\\templates\\index_side.html',
      1 => 1606318632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tools.html' => 1,
    'file:side_login.html' => 1,
    'file:side_cart.html' => 1,
  ),
),false)) {
function content_5fbe7a2ea54a07_59526057 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
  <div class="panel-heading">歡迎光臨abc甜點店</div>
  <div class="panel-body">
    <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tools.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
   </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['cart']->value) && $_smarty_tpl->tpl_vars['cart']->value != '' && $_smarty_tpl->tpl_vars['op']->value != 'check_out') {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
