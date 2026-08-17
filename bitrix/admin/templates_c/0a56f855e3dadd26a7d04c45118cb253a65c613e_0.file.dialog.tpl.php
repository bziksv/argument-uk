<?php
/* Smarty version 4.3.1, created on 2024-09-11 12:50:37
  from '/var/www/argument_uk__usr/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/dialog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66e167edf38186_27809110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a56f855e3dadd26a7d04c45118cb253a65c613e' => 
    array (
      0 => '/var/www/argument_uk__usr/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/dialog.tpl',
      1 => 1684657864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:content.tpl' => 1,
  ),
),false)) {
function content_66e167edf38186_27809110 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('content', ob_get_clean());
?>
javascript:(
    new BX.CDialog({
    content_url: "<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
",
    width: 500,
    head: "",
    height: 260,
    resizable: false,
    draggable: true,
    content: "<?php echo strtr((string)$_smarty_tpl->tpl_vars['content']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    buttons: [BX.CDialog.btnSave, BX.CDialog.btnCancel]})
).Show();
<?php }
}
