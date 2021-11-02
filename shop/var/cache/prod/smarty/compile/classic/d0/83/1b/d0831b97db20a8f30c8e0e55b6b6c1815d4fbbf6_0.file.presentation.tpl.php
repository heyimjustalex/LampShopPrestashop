<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:55:38
  from '/var/www/html/modules/skrill/views/templates/admin/presentation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61815f7a2b53b7_76838190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0831b97db20a8f30c8e0e55b6b6c1815d4fbbf6' => 
    array (
      0 => '/var/www/html/modules/skrill/views/templates/admin/presentation.tpl',
      1 => 1635868533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61815f7a2b53b7_76838190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-presentation">
	<div class="pres-header-group">
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-3 pres-header-logo">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/skrill.jpg" alt="wlt" class="pres-logo">
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-6">
			<div class="pres-header-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['header'],'htmlall','UTF-8' ));?>
</div>
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="clear"></div>
	</div>
	<div class="pres-content-wrapper">
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-3 pres-content pres-content-img">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/skrill_widget.png" alt="transaction-flow" class="pres-about-image">
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-6 pres-content pres-content-text">
			<span class="pres-title">ABOUT SKRILL</span>
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['text1'],'htmlall','UTF-8' ));?>
</p>
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['text2'],'htmlall','UTF-8' ));?>
 <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['signUpUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" class="pres-signup"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['signup']['title'],'htmlall','UTF-8' ));?>
</a>.</p>
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['text3'],'htmlall','UTF-8' ));?>
</p>
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature'],'htmlall','UTF-8' ));?>
</p>
			<ul>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature1'],'htmlall','UTF-8' ));?>
</li>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature2'],'htmlall','UTF-8' ));?>
</li>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature3'],'htmlall','UTF-8' ));?>
</li>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature4'],'htmlall','UTF-8' ));?>
</li>
				<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['about']['feature5'],'htmlall','UTF-8' ));?>
</li>
			</ul>
			<br />
			<p>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['signUpUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" class="pres-btn-signup">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['signup']['title'],'htmlall','UTF-8' ));?>

				</a>
			</p>
		</div>
		<div class="col-lg-1">&nbsp;</div>
		<div class="clear"></div>
	</div>
	<div class="pres-content-wrapper pres-content-bottom">
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase">
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['signUpUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" >
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['signup']['title'],'htmlall','UTF-8' ));?>

				</a>
			</span>
			<div class="pres-circle">
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['signUpUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" >
					<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/signup.jpg" alt="step-1" class="pres-step-image">
				</a>
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['signup']['text'],'htmlall','UTF-8' ));?>
</i></p>
		</div>
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['verify']['title'],'htmlall','UTF-8' ));?>
</span>
			<div class="pres-circle">
				<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/verify.png" alt="step-2" class="pres-step-image">
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['verify']['text'],'htmlall','UTF-8' ));?>
</i></p>
		</div>
		<div class="col-lg-4 pres-content">
			<span class="step-title pres-firt-uppercase">
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['guideUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" >
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['guide']['title'],'htmlall','UTF-8' ));?>

				</a>
			</span>
			<div class="pres-circle">
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['guideUrl']->value,'htmlall','UTF-8' ));?>
" target="_blank" >
					<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisPath']->value,'htmlall','UTF-8' ));?>
views/img/guide.jpg" alt="step-3" class="pres-step-image">
				</a>
			</div>
			<div class="clear"></div>
			<p class="step-text"><i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['presentation']->value['guide']['text'],'htmlall','UTF-8' ));?>
</i></p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="panel-footer pres-footer">&nbsp;</div>
</div>
<div class="clear"></div>
<?php }
}
