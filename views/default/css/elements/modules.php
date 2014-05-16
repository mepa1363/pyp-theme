/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #CCC;
	
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	padding: 5px;
	margin-bottom: 10px;
}
.elgg-module-info > .elgg-head * {
	color: #333;
}

/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #333333;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	display:none;
	
	width: 210px;
	padding: 11px;
	margin-right: 0px;
	z-index:100;
	
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
}
.elgg-module-featured > .elgg-head * {
	color: #333333;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 1px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 1px 10px;
	width: 200px;
	padding: 4px;
	background-color: #ccc;
	border: 1px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #888;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #00CC00;
	color: #ffffff;
	border: 1px solid #00CC00;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #ffffff;
	border: 1px solid #8DC63F;
	background-color: #8DC63F;
}

.elgg-module-widget {
	background-color: #dedede;
	padding: 1px;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #eeeeee;
	height: 26px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 45px 0 20px;
	color: #666;
}
.elgg-module-widget.elgg-state-draggable > .elgg-head {
	cursor: move;
}
.elgg-module-widget > .elgg-head a {
	position: relative;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 1px 1px 0 0;
}
a.elgg-widget-collapse-button {
	/*left: 5px;*/
	color: #c5c5c5;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #9d9d9d;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
a.elgg-widget-delete-button {
	/*right: 5px;*/
}
a.elgg-widget-edit-button {
	/*right: 25px;*/
}
.elgg-module-widget > .elgg-body {
	background-color: white;
	width: 100%;
	overflow: hidden;
	border-top: 1px solid #dedede;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
	border-bottom: 1px solid #dedede;
	background-color: #f9f9f9;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 1px dashed #dedede;
	margin-bottom: 15px;
}