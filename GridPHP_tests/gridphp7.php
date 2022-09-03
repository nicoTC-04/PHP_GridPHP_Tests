<?php
/**
 * PHP Grid Component
 *
 * @author Abu Ghufran <gridphp@gmail.com> - http://www.phpgrid.org
 * @version 2.0.0
 * @license: see license.txt included in package
 */

include_once("gridphp/config.php");

include("gridphp/lib/inc/jqgrid_dist.php");

// Database config file to be passed in phpgrid constructor
$db_conf = array(
					"type" 		=> PHPGRID_DBTYPE,
					"server" 	=> PHPGRID_DBHOST,
					"user" 		=> PHPGRID_DBUSER,
					"password" 	=> PHPGRID_DBPASS,
					"database" 	=> PHPGRID_DBNAME
				);

$g = new jqgrid($db_conf);

$grid["caption"] = "Patrons";
$g->set_options($grid);
$g->table = "patrons";

//columna de patronID
$col = array();
$col["position"] = 0;
$col["title"] = "PatronID";
$col["name"] = "PatronID"; 
$col["editable"] = false;
$col["visible"] = "xs+";
$col["editoptions"] = array("rows"=>5, "cols"=>80);
$cols[] = $col;

//columna de FirstName
$col = array();
$col["title"] = "FirstName";
$col["name"] = "FirstName"; 
$col["editable"] = true;
$col["visible"] = "xs+";
$col["editoptions"] = array("rows"=>5, "cols"=>80);
$cols[] = $col;

//columna de LastName
$col = array();
$col["title"] = "LastName";
$col["name"] = "LastName"; 
$col["editable"] = true;
$col["visible"] = "xs+";
$col["editoptions"] = array("rows"=>5, "cols"=>80);
$cols[] = $col;

//columna de Email
$col = array();
$col["title"] = "Email";
$col["name"] = "Email"; 
$col["editable"] = true;
$col["visible"] = "xs+";
$col["editoptions"] = array("rows"=>5, "cols"=>80);
$cols[] = $col;

//columna de Activo
$col = array();
$col["title"] = "Activo";
$col["name"] = "Activo"; 
$col["editable"] = true;
$col["sortable"] = true;
$col["edittype"] = "select";
$col["editoptions"] = array("value"=>'1:Activo;0:No Activo');
$col["formatter"] = "select";
$cols[] = $col;


$g->set_columns($cols,true);

$out = $g->render("list1");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="gridphp/lib/js/themes/redmond/jquery-ui.custom.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="gridphp/lib/js/jqgrid/css/ui.jqgrid.css" />

	<script src="gridphp/lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="gridphp/lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="gridphp/lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
	<script src="gridphp/lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>

</head>
<body>
	<div>
	<?php echo $out?>
	</div>
</body>
</html>