<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:55:38
  from '/var/www/html/modules/skrill/views/templates/admin/paymentConfiguration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61815f7a36e1e8_05457383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a770a362011a91bbcea8b39914f2d4c9723fa1' => 
    array (
      0 => '/var/www/html/modules/skrill/views/templates/admin/paymentConfiguration.tpl',
      1 => 1635868533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61815f7a36e1e8_05457383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="module_form" class="defaultForm form-horizontal" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'htmlall','UTF-8' ));?>
" method="post" enctype="multipart/form-data">
<div class="panel">
	<div class="form-group border-none">
		<div class="col-lg-2 logo-wrapper">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['type'],'htmlall','UTF-8' ));?>
.jpg" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['type'],'htmlall','UTF-8' ));?>
" class="payment-config-logo">
		</div>
		<label class="payment-label col-lg-3">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['title'],'htmlall','UTF-8' ));?>

		</label>
		<div class="col-lg-3">
			<div class="col-lg-4 control-label switch-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value['active'],'htmlall','UTF-8' ));?>
</div>
			<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
				<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_on" value="1"  <?php if (($_smarty_tpl->tpl_vars['payments']->value[0]['active'] == 1)) {?>checked="checked"<?php }?>">
				<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_on"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['yes'],'htmlall','UTF-8' ));?>
</label>
				<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payments']->value[0]['active'])) {?>checked="checked"<?php }?>>
				<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_off"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['no'],'htmlall','UTF-8' ));?>
</label>
				<a class="slide-button btn"></a>
			</div>
		</div>
		<div class="col-lg-4">
			<label class="general-tooltip">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payments']->value[0]['tooltips'],'htmlall','UTF-8' ));?>

			</label>
		</div>
		<div style="clear: both"></div>
	</div>
	<div style="clear: both"></div>
</div>
<div class="panel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment', false, 'sort');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
			<?php if (($_smarty_tpl->tpl_vars['sort']->value != 0)) {?>
			<div class="form-group">
				<?php if ($_smarty_tpl->tpl_vars['payment']->value['type'] == 'adb') {?>
					<div class="col-lg-2 logo-wrapper">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/adb_.jpg" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
" class="payment-config-logo">
					</div>
				<?php } else { ?>
					<div class="col-lg-2 logo-wrapper">
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
.jpg" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
" class="payment-config-logo">
					</div>
				<?php }?>
				<label class="payment-label col-lg-3">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['title'],'htmlall','UTF-8' ));?>

					<?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['tooltips'])) {?>
						<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/questionmark.jpg" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
" data-toggle="tooltip" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['tooltips'],'htmlall','UTF-8' ));?>
" class="payment-config-tooltip skrill-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
-tooltip">
					<?php }?>
				</label>
				<div class="col-lg-3">
					<div class="col-lg-4 control-label switch-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value['active'],'htmlall','UTF-8' ));?>
</div>
					<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
						<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_on" value="1" <?php if (($_smarty_tpl->tpl_vars['payment']->value['active'] == 1)) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_on"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['yes'],'htmlall','UTF-8' ));?>
</label>
						<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payment']->value['active'])) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_ACTIVE_off"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['no'],'htmlall','UTF-8' ));?>
</label>
						<a class="slide-button btn"></a>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['payment']->value['brand'] == 'ACC') {?>
				<div class="col-lg-3">
					<div class="col-lg-4 control-label switch-label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value['mode'],'htmlall','UTF-8' ));?>
</div>
					<div class="col-lg-6 switch prestashop-switch fixed-width-lg">
						<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE_on" value="1" <?php if (($_smarty_tpl->tpl_vars['payment']->value['mode'] == 1)) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE_on"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['yes'],'htmlall','UTF-8' ));?>
</label>
						<input type="radio" name="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE" id="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE_off" value="0" <?php if (empty($_smarty_tpl->tpl_vars['payment']->value['mode'])) {?>checked="checked"<?php }?>>
						<label for="SKRILL_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['brand'],'htmlall','UTF-8' ));?>
_MODE_off"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['no'],'htmlall','UTF-8' ));?>
</label>
						<a class="slide-button btn"></a>
					</div>
				</div>
				<?php }?>
				<div style="clear: both"></div>
				<?php if (!empty($_smarty_tpl->tpl_vars['payment']->value['banks'])) {?>
					<div class="col-lg-12 well skrill-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['type'],'htmlall','UTF-8' ));?>
-logos" style="display: none;">
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment']->value['banks'], 'bank', false, 'i');
$_smarty_tpl->tpl_vars['bank']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->do_else = false;
?>
								<li>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bank']->value,'htmlall','UTF-8' ));?>

								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				<?php }?>
			</div>
			<div style="clear: both"></div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<div class="panel-footer">
		<button type="submit" value="1" name="btnSubmitPaymentConfig" class="btn btn-default pull-right">
			<i class="process-icon-save"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value['save'],'htmlall','UTF-8' ));?>

		</button>
	</div>

</div>
</form>
<?php }
}
