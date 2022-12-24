<?php
/* Smarty version 3.1.33, created on 2022-12-23 20:06:24
  from 'C:\MAMP\htdocs\ww\templates\apollo\modal-addvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63a60a40496fa0_92575702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79357179cd1481c437bea1ded09b422adda135a9' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ww\\templates\\apollo\\modal-addvideo.tpl',
      1 => 1671819960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a60a40496fa0_92575702 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-addvideo">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_video'];?>
</h4>
			</div>
			<div class="modal-body">
			<ul class="pm-addvideo-modal list-unstyled">
				<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
				<li>
				<a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
"><i class="mico mico-insert_link"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</span></a>
				</li>
				<?php }?>
				<?php if (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
				<li><a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
"><i class="mico mico-cloud_upload"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</span></a></li>
				<?php }?>
			</ul>
			</div>
		</div>
	</div>
</div><?php }
}
