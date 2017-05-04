<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: groups.php 999 2008-07-03 17:51:49Z gryphon $
* $Rev: 999 $
* $LastChangedBy: gryphon $
* $Date: 2008-07-03 10:51:49 -0700 (Thu, 03 Jul 2008) $
*/
	include("./admin/db_inc.php");
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

	include("tpl_listing_top.php");

	if (empty($sort))
	{
		$sort = "clients_current";
	}

	if (isset($direction))
	{
		$pagedirection = $direction;
	}

	if (empty($pagedirection)) 
	{
		$pagedirection = "asc";
	}

	if (empty($direction)) 
	{
		$direction = "desc";
	}
	if (empty($page)) 
	{
		$page = 1;
		$pagestart = $page -1;
	}
	else 
	{
		$pagestart = (($page -1) * $setting["ispperpage"]);
	}

	$sqlcount = query("SELECT * FROM $dbtable4 ORDER BY group_users DESC, group_servers DESC, group_ispname");
	$servercount = number_format(mysql_num_rows($sqlcount));

	$sqlgs = mysql_query("SELECT sum(group_servers) FROM $dbtable4");
	$glists = mysql_fetch_row($sqlgs);
	$glistsd = number_format($glists[0]);

	$sqlgu = mysql_query("SELECT sum(group_users) FROM $dbtable4");
	$glistu = mysql_fetch_row($sqlgu);
	$glistud = number_format($glistu[0]);

	$sql = query("SELECT * FROM $dbtable4 ORDER BY group_users DESC, group_servers DESC, group_ispname LIMIT $pagestart,$setting[ispperpage]");

	if ($direction == "asc") 
	{
		$direction = "desc";
	}
	else if ($direction == "desc") 
	{
		$direction = "asc";
	}

	echo '      <br>
      <table align="center" border="0" cellpadding="3" cellspacing="1" width="100%" bgcolor="'.$setting["bordercolor"].'">
        <tr>
          <td align="center" bgcolor="'.$setting["catrowcolor1"].'" class="catagory" valign="middle" nowrap><b>'.$servercount.'</b></td>
          <td align="center" bgcolor="'.$setting["catrowcolor1"].'" class="catagory" valign="middle" nowrap><b>ISP Name</b></td>
          <td align="center" bgcolor="'.$setting["catrowcolor1"].'" class="catagory" valign="middle" nowrap><b>Servers</b></td>
          <td align="center" bgcolor="'.$setting["catrowcolor1"].'" colspan="2" class="catagory" valign="middle" nowrap><b>Users</b></td>
        </tr>';

	if (($page == '0') or ($page == '1')) 
	{
		echo '        <tr class="glistfont">
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting"><a href="listing.php">Show Group</a></td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting" nowrap>Show All</td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting">'.$glistsd.'</td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting">'.$glistud.'</td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting"><img src="images/'.$setting["imgbg"].'_open.gif" border="0" alt="Users Online" title="Users Online"></td>
      </tr class="listfont">';
	}

	if ($servercount > $setting["ispperpage"]) 
	{
		include("tpl_ispgroup_nav.php");
	}

	$rowcolor = $setting["rowcolor2"];

	while ($data = mysql_fetch_row($sql)) 
	{

		if ($rowcolor == $setting["rowcolor2"]) 
		{
			$rowcolor = $setting["rowcolor1"];
		}
		else 
		{
			$rowcolor = $setting["rowcolor2"];
		}

		$ispname = str_replace(" ", "+", $data[1]);
		
		if (($data[2]) and ($data[2] != 'na')) 
		{
			$linkit = '<img src="images/'.$setting["imgbg"].'_www.gif" border="0" alt="WWW" title="Visit '.$data[1].' website" align="absmiddle"> <a href="'.$data[2].'" title="Visit '.$data[1].'" target="_blank">';
		}
		else 
		{
			$linkit = '';
		}
		
		echo '        <tr class="glistfont">
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting"><a href="listing.php?showgroup='.$ispname.'">Show Group</a></td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting" nowrap>'.$linkit.''.$data[1].'</a></td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting">'.$data[3].'</td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting">'.$data[4].'</td>
        <td align="center" bgcolor="'.$rowcolor.'" class="glisting"><img src="images/'.$setting["imgbg"].'_open.gif" border="0" alt="Users Online" title="Users Online"></td>
      </tr class="listfont">';
	}

	if ($servercount > $setting["ispperpage"]) 
	{
		include("tpl_ispgroup_nav.php");
	}

	include("tpl_serverlist_bot.php");
?>