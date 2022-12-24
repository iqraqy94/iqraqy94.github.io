<?php
/* Smarty version 3.1.33, created on 2022-12-23 20:06:24
  from 'C:\MAMP\htdocs\ww\templates\apollo\modal-user-register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63a60a403e8a11_61569372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597ed93e1508fb060b7bf68f1a90537c7e050b11' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ww\\templates\\apollo\\modal-user-register.tpl',
      1 => 1671819960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a60a403e8a11_61569372 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="modal-register-form">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['create_account'];?>
</h4>
			</div>
			<div class="modal-body">
				<a href="<?php echo @constant('_URL');?>
/register.<?php echo @constant('_FEXT');?>
" class="btn btn-success btn-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register_with_email'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value || $_smarty_tpl->tpl_vars['allow_twitter_login']->value || $_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
				<hr />
				<div class="pm-social-accounts">
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['register_with_social'];?>
</label>
					<?php if ($_smarty_tpl->tpl_vars['allow_facebook_login']->value) {?>
					<a href="<?php echo @constant('_URL');?>
/login.php?do=facebook" class="btn btn-facebook" rel="nofollow"><i class="fa fa-facebook-square"></i>Facebook</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['allow_twitter_login']->value) {?>
					<a href="<?php echo @constant('_URL');?>
/login.php?do=twitter" class="btn btn-twitter" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['allow_google_login']->value) {?>
					<a href="#" class="btn btn-google" id="google-register-btn" rel="nofollow"><i class="fa fa-google"></i> Google</a>
					<?php }?>
				</div>
				<div class="google-login-response mt-3"></div>
				<div class="clearfix"></div>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }
}
