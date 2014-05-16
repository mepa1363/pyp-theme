<?php
elgg_register_event_handler('init', 'system', 'pyp_init');

function pyp_init() {
	
	elgg_unregister_menu_item('topbar', 'elgg_logo');	
	elgg_unregister_menu_item('topbar', 'dashboard');
	
	elgg_unregister_menu_item('site', 'blog');
	elgg_unregister_menu_item('site', 'bookmarks');
	elgg_unregister_menu_item('site', 'activity');
	elgg_unregister_menu_item('site', 'thewire');
	elgg_unregister_menu_item('site', 'file');
	//elgg_unregister_menu_item('site', 'groups');
	elgg_unregister_menu_item('site', 'pages');
	elgg_unregister_menu_item('site', 'members');
	elgg_unregister_menu_item('pg', 'events');
	elgg_unregister_menu_item('site', 'photos');
		
	//elgg_register_menu_item('site', array('name' => 'explorecalgary', 'text' => elgg_echo('Explore Calgary'),'href' => 'http://planyourplace.ca/explorecalgary.html'));
	//elgg_register_menu_item('site', array('name' => 'mapcomment', 'text' => elgg_echo('Map Comment'),'href' => 'http://www.planyourplace.ca/OpenLayers/MarkIssue.php'));
	elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'groups_owner_block_menu');
}

function groups_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "groups/all";
		$item = new ElggMenuItem('groups', elgg_echo('Groups'), $url);
		$return[] = $item;
	}
	return $return;
}
?>