<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	
	padding: 2px 6px;
	color: #CCC;
	border: 1px solid #CCC;
	font-size: 12px;
}
.elgg-pagination a:hover {
	background: #00CC00 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;;
	color: white;
	text-decoration: none;
	border-color: #00CC00;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #ffffff;
	background: #8DC63F;
	border-color: #8DC63F;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #cccccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
	
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
	color: #999;
}
.elgg-tabs a:hover {
	background: #dedede;
	color: #3B5998;
}
.elgg-tabs .elgg-state-selected {
	border-color: #ccc;
	background: white;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 2px;
	background: white;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after{
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999;
}
.elgg-breadcrumbs > li > a:hover {
	color: #333333;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
	padding: 2px 15px 0;
	color: #7C7C7C;
	margin-top: 1px;
}

.elgg-menu-topbar > li > a:hover {
	color: #8DC63F;
	text-decoration:none;
}

.elgg-menu-topbar-alt {
	float: right;
}
.elgg-menu-topbar-alt a {
	color:#ffffff;
	}
.elgg-menu-topbar-alt a:hover {
	text-decoration:underline;
	color:#ffffff;
	}

.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
	border:1px solid #EFEFF0;
}

.elgg-menu-site > li > a {
	padding: 3px 13px 0px 13px;
	height: 20px;
	background:#EFEFF0;
	border-radius: 5px;
}

.elgg-menu-site > li > a:hover {
	text-decoration: none;
	background:#8DC63F;
}


.elgg-menu-site-default {
	position: absolute;
	bottom: 0;
	left: 0;
	height: 23px;
}

.elgg-menu-site-default > li {
	float: left;
}

.elgg-menu-site-default > li > a {color: #939598;
font-weight:bold;}


.elgg-menu-site-default > .elgg-state-selected > a {
	color: #ffffff;
	background:#8DC63F;
}

.elgg-menu-site-default > li:hover > a {
	color: #ffffff;
	background: #00CC00 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-menu-site-more {
	display: none;
	position: relative;
	left: -1px;
	width: 100%;
	z-index: 1;
	min-width: 150px;
}

li:hover > .elgg-menu-site-more {
	display: block;
}

.elgg-menu-site-more > li > a {
	color: #ffffff;
	font-weight:bold;
	
}
.elgg-menu-site-more > li > a:hover {
}
.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
}

.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}

/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
	
}
.elgg-menu-filter > li:hover {
	background: #dedede;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0;
	text-align: center;
	height: 21px;
	color: #999;
}
.elgg-menu-filter > li > a:hover {
	background: #8DC63F;
	color: #ffffff;
}
.elgg-menu-filter > .elgg-state-selected {
	border-color: #ccc;
	background: white;
}
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	top: 2px;
	background: white;
}

/* ***************************************
	PAGE MENU (right side menu pages e.g., in Setting page)
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}

.elgg-menu-page a {
	display: block;
	background-color: white;
	margin: 0 0 3px;
	padding: 2px 4px 2px 8px;
	color: #939598;
}
.elgg-menu-page a:hover {
	background-color: #7C7C7C;
	color: white;
	text-decoration: none;
}

.elgg-menu-page li.elgg-state-selected > a {
	background-color: #8DC63F;
	color: white;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;
	background:#ffffff;
	width: 165px;
	
}
.elgg-menu-hover > li {
}
.elgg-menu-hover > li:last-child {
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color:#999;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
	color: #333333;;
}
.elgg-menu-owner-block li a:hover {
	background-color: #8DC63F;;
	color: white;
	text-decoration: none;
}
.elgg-menu-owner-block li.elgg-state-selected > a {
	background-color: #8DC63F;
	color: white;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #aaa;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
	display: none; /**hide extras**/
}