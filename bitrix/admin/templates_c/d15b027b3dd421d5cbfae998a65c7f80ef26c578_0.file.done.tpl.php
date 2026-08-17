<?php
/* Smarty version 4.3.1, created on 2023-05-21 11:31:42
  from '/var/www/argument-uk.ru/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/done.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6469d6ee77aee4_88313809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15b027b3dd421d5cbfae998a65c7f80ef26c578' => 
    array (
      0 => '/var/www/argument-uk.ru/data/www/argument-uk.ru/bitrix/modules/thebrainstech.copyiblock/templates/done.tpl',
      1 => 1684657864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469d6ee77aee4_88313809 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="text-align:center">
    <p style="font-size: 16px"><?php echo GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_LIB_COPY_END');?>
</p>

    <a style="font-size: 20px" href="/bitrix/admin/iblock_edit.php?ID=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&lang=ru&admin=Y">
        <?php echo GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_LIB_GO_TO_IB');?>

    </a>
</div>
<?php }
}
