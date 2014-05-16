<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: 12px;
	width: auto;
	padding: 1px 2px;
	cursor: pointer;
	outline: none;
	border-radius: 5px;
	
}
a.elgg-button {
	padding: 3px 6px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: #ffffff;
	text-decoration: none;
	border: 1px solid #D2D2D2;
	height: 25px;
	min-width: 60px;
	background: #8DC63F url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-button-submit:hover {
	border-color: #D2D2D2;
	text-decoration: none;
	color: white;
	background: #00CC00 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #333;
	background: #ddd url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	border: 1px solid #999;
}
.elgg-button-cancel:hover {
	color: #444;
	background-color: #999;
	background-position: left 10px;
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	background: #8DC63F;
	border:1px solid #8DC63F;
	color: #ffffff;
	padding: 1px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: #00CC00 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	color: #ffffff;
	text-decoration: none;
	border: 1px solid #00CC00;
}

.elgg-button-action.elgg-state-active {
	background: #00CC00;
	color: #ffffff;
	text-decoration: none;
	border: 1px solid #00CC00;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	color: #bbb;
	text-decoration: none;
	border: 1px solid #333;
	background: #555 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}
.elgg-button-delete:hover {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:0px;
	text-decoration:none;
	display:block;
	font-weight:normal;
	position:relative;
	margin-left:0;
	color: #ffffff;
	border:1px solid #D2D2D2;
	background:#8DC63F;
	font-size:10px;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background: #00CC00 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-decoration:none;
	color: #ffffff;
}

.elgg-button-dropdown.elgg-state-active {
	background: #00CC00;
	outline: none;
	color: #ffffff;
	border:1px solid #ccc;
}
