<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:55:38
  from '/var/www/html/modules/skrill/views/templates/admin/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61815f7a3782d3_77501893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658256953d6cf71aeb7ac95e0edea3c668be8883' => 
    array (
      0 => '/var/www/html/modules/skrill/views/templates/admin/tabs.tpl',
      1 => 1635868533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61815f7a3782d3_77501893 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript' src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['backOfficeJsUrl']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['backOfficeCssUrl']->value,'htmlall','UTF-8' ));?>
" rel="stylesheet" type="text/css">

<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['message']->value['success']) {?>
		<?php $_smarty_tpl->_assignInScope('alert', "alert-success");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('alert', "alert-danger");?>
	<?php }?>
	<div class="bootstrap">
		<div class="module_confirmation conf confirm alert <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alert']->value,'htmlall','UTF-8' ));?>
">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['text'],'htmlall','UTF-8' ));?>

		</div>
	</div>
<?php }?>

<div class="skrill-tabs">
	<?php if ($_smarty_tpl->tpl_vars['tabs']->value) {?>
		<nav>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
			<a class="tab-title <?php if ((isset($_smarty_tpl->tpl_vars['selectedTab']->value)) && $_smarty_tpl->tpl_vars['tab']->value['id'] == $_smarty_tpl->tpl_vars['selectedTab']->value) {?>active<?php }?>" href="#" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'htmlall','UTF-8' ));?>
" data-target="#skrill-tabs-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['title'],'htmlall','UTF-8' ));?>
</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</nav>
		<div class="content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
			<div class="tab-content" id="skrill-tabs-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'htmlall','UTF-8' ));?>
" style="display:<?php if ((isset($_smarty_tpl->tpl_vars['selectedTab']->value)) && $_smarty_tpl->tpl_vars['tab']->value['id'] == $_smarty_tpl->tpl_vars['selectedTab']->value) {?>block<?php } else { ?>none<?php }?>">
                <?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['content'],'htmlall','UTF-8' )));?>

			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>
</div>
<?php }
}
