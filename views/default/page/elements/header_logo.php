<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_description = $site->description;
?>

<h1 style="float:left;margin-top:10px;">
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src=<?php echo elgg_get_site_url(); ?>mod/pyp/graphics/logo3.png height="50" width="110" />
	</a>
</h1>
<div style="clear:left;"></div>
<p style="float:left;margin-left:20px;"><?php echo $site_description; ?></p>
