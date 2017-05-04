<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: listing.php 999 2008-07-03 17:51:49Z gryphon $
* $Rev: 999 $
* $LastChangedBy: gryphon $
* $Date: 2008-07-03 10:51:49 -0700 (Thu, 03 Jul 2008) $
*/
	include_once("./admin/db_inc.php");
	clearinactive();

	switch ($_GET['direction'])
	{
		case "desc":
			$sort = "desc";
			break;
		default:
			$direction = "asc";
			break;
	}

	if (isset($_GET["page"]))
	{
		$page = intval($_GET["page"]);
	}

	if (!isset($_GET["sort"]))
	{
		$version_direction = "void";
		$sort = "server_name";
	}
	else if ($_GET["sort"] == 'server_version')
	{
		$version_direction = "server_version";
		$sort = "server_version_major ".$direction.", server_version_minor ".$direction.", server_version_release ".$direction.", server_version_build";
	}
	else
	{
		$version_direction = "void";
		switch ($_GET['sort'])
		{
			case "server_password":
				$sort = "server_password";
				break;
			case "server_name":
				$sort = "server_name";
				break;
			case "server_ip":
				$sort = "server_ip";
				break;
			case "clients_current":
				$sort = "clients_current";
				break;
			case "clients_maximum":
				$sort = "clients_maximum";
				break;
			case "server_platform":
				$sort = "server_platform";
				break;
			default:
				$sort = "server_name";
				break;
		}
	}

	if ((!isset($_GET["showgroup"])) or ($_GET["showgroup"] == 'all'))
	{
		$showgroup = "all";
		$group = "WHERE 1";
	}
	else if ($_GET["showgroup"] == 'Private')
	{
		$group = "WHERE server_ispname='$showgroup' OR server_ispname=''";
	}
	else if ($_GET["showgroup"] != 'Private')
	{
		$group = "WHERE server_ispname='" . addslashes(htmlspecialchars($_GET['showgroup'])) . "'";
	}

	include("tpl_listing_top.php");

	if (empty($pagedirection))
	{
		$pagedirection = "asc";
	}

	if (empty($direction))
	{
		$direction = "asc";
	}
	if (empty($page))
	{
		$page = 1;
		$pagestart = $page -1;
	}
	else
	{
		$pagestart = (($page -1) * $setting["perpage"]);
	}

	$serverquery = query("SELECT * FROM $dbtable1 $group");
	$servercount = number_format(mysql_num_rows($serverquery));

	$request = query("SELECT * FROM $dbtable1 $group order by $sort $direction, server_name LIMIT $pagestart,$setting[perpage]");

	if ($direction == "asc")
	{
		$direction = "desc";
	}
	else if ($direction == "desc")
	{
		$direction = "asc";
	}

	if (!empty($_GET["detail"]))
	{
		$r = query("SELECT * FROM $dbtable1 WHERE server_ip='" . addslashes(htmlspecialchars($_GET['detail'])) . "' AND server_port='" . addslashes(htmlspecialchars($_GET['detailport'])) . "'");
		$row = mysql_fetch_object($r);

		include("tpl_serverdetail.php");
	}

	include("tpl_serverlist_top.php");

	if ($servercount > $setting["perpage"])
	{
		include("tpl_serverlist_nav.php");
	}
	while ($row = mysql_fetch_object($request))
	{

		if ($rowcolor == $setting["rowcolor2"])
		{
			$rowcolor = $setting["rowcolor1"];
		}
		else
		{
			$rowcolor = $setting["rowcolor2"];
		}

		include("tpl_serverlist.php");

	}

	if ($servercount > $setting["perpage"])
	{
		include("tpl_serverlist_nav.php");
	}

	include("tpl_serverlist_bot.php");
?>