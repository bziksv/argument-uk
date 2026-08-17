<?php
/* Smarty version 4.3.1, created on 2024-09-11 12:50:38
  from '/var/www/argument_uk__usr/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66e167ee0098f6_81073951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e61ed1f329f1a64d3010442ec4533de58b3a3a35' => 
    array (
      0 => '/var/www/argument_uk__usr/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/content.tpl',
      1 => 1684657864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e167ee0098f6_81073951 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

<form style="text-align: center">
    <select name="IBLOCKCOPIES">
        <option value="IBLOCK"><?php echo GetMessage('THEBRAINSE_COPYIBLOCK_ONLY_IBLOCK');?>
</option>
        <option value="SECTIONS"><?php echo GetMessage('THEBRAINSE_COPYIBLOCK_ONLY_SECTION');?>
</option>
        <option value="ELEMENTS"><?php echo GetMessage('THEBRAINSE_COPYIBLOCK_ALL_COPY');?>
</option>
    </select>

    <input type="hidden" name="IBLOCKCOPY_ACTION" value="COPY">
    <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">

    <h3 style="text-align: center"><?php echo GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_LIB_COPY_TYPE_IB');?>
</h3>

    <select name="TYPE">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['ID'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['type']->value['NAME'], ENT_QUOTES, 'UTF-8', true);?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</form>
<?php }
}
