<?php
// $frontleft=elgg_get_plugin_setting('frontleft','community3_theme');
// if (!$frontleft) $frontleft = '<h2>You can edit this information in the admin section of this theme.</h2>';
// $frontright=elgg_get_plugin_setting('frontright','community3_theme');
// if (!$frontright) $frontright = '<h2>You can edit this information in the admin section of this theme.</h2>';
if (elgg_get_config('allow_registration') != false) {
	$friend_guid = (int) get_input('friend_guid', 0);
	$invitecode = get_input('invitecode');
	$register_url = elgg_get_site_url() . 'action/register';
	if (elgg_get_config('https_login')) {
		$register_url = str_replace("http:", "https:", $register_url);
	}
	$form_params = array(
		'action' => $register_url,
		'class' => 'elgg-form-account float',
	);
	$body_params = array(
		'friend_guid' => $friend_guid,
		'invitecode' => $invitecode
	);
	$content = elgg_view_form('register', $form_params, $body_params);
	$content .= elgg_view('help/register');
} else {
	$content = '';
}

// Recent discussions plugin
// if (elgg_is_active_plugin('recentdiscussions')) {
  // $html = elgg_view('index/recentdiscussions');
  // echo elgg_view_module('featured',  elgg_echo('recentdiscussions:title'), $html, $mod_params);
// }
?>
<style>
.elgg-page-body {
	background:#ffffff;
	min-height:591px;
	margin-top:50px;
	}
</style>
<div class="custom-index elgg-main elgg-grid clearfix">
	<div class="index_left">
		<?php echo $frontleft; ?>
		<?php echo elgg_view("pyp/front"); ?>
		<?php echo elgg_view("index/lefthandside"); ?>
	</div>
</div>

