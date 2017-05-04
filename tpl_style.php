<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Gryphon, LLC (www.gryphonllc.com ) *
****************************************************************
*
* $Id: tpl_style.php 5 2005-10-26 23:19:04Z gryphon $
* $Rev: 5 $
* $LastChangedBy: gryphon $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/
?>
<html>
<head>
<title><?php echo ''.$setting["pagetitle"] ?> - TeamSpeak2 Serverlist</title>
<meta name="keywords" content="teamspeak, serverlist, webpost, <?php echo ''.$setting["pagetitle"].''; ?>">
<meta name="description" content="gllcTS2 v<?php echo ''.$wpost2version.''; ?> for TeamSpeak 2 (c) Gryphon, LLC www.gryphonllc.com">
<meta name="robots" content="all">
<style type="text/css">
body { scrollbar-base-color: <?php echo ''.$setting["catrowcolor1"].''; ?>; scrollbar-arrow-color: <?php echo ''.$setting["cattxtcolor"].''; ?>; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px }
input, textarea { background-color: <?php echo ''.$setting["rowcolor1"].''; ?>; color: <?php echo ''.$setting["lsttxtcolor"].''; ?>; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold}
.button { background-color: <?php echo ''.$setting["rowcolor1"].''; ?>; color: <?php echo ''.$setting["lsttxtcolor"].''; ?>; font-family: verdana,arial,helvetica,sans-serif; font-size:10px; }
.listing { color: <?php echo ''.$setting["lsttxtcolor"].''; ?>; }
.listing a:link { color: <?php echo ''.$setting["lstlnkcolor"].''; ?>; text-decoration: none; }
.listing a:visited { color: <?php echo ''.$setting["lstvlnkcolor"].''; ?>; text-decoration: none; }
.listing a:active { color: <?php echo ''.$setting["lstalnkcolor"].''; ?>; text-decoration: none; }
.listing a:hover { color: <?php echo ''.$setting["lsthvrcolor"].''; ?>; text-decoration: underline; }
.glisting { color: <?php echo ''.$setting["lsttxtcolor"].''; ?>; }
.glisting a:link { color: <?php echo ''.$setting["lstlnkcolor"].''; ?>; text-decoration: none; }
.glisting a:visited { color: <?php echo ''.$setting["lstvlnkcolor"].''; ?>; text-decoration: none; }
.glisting a:active { color: <?php echo ''.$setting["lstalnkcolor"].''; ?>; text-decoration: none; }
.glisting a:hover { color: <?php echo ''.$setting["lsthvrcolor"].''; ?>; text-decoration: underline; }
.catagory { color: <?php echo ''.$setting["cattxtcolor"].''; ?>; }
.catagory a:link, .catagory a:visited, .catagory a:active { color: <?php echo ''.$setting["catlnkcolor"].''; ?>; text-decoration: none; }
.catagory a:hover { color: <?php echo ''.$setting["cathvrcolor"].''; ?>; text-decoration: underline; }
.listfont tr, .listfont td { font-size: 10px; font-family: verdana,arial,helvetica,sans-serif; }
.glistfont tr, .glistfont td { font-size: 12px; font-family: verdana,arial,helvetica,sans-serif; }
</style>
<script language="javascript" type="text/javascript">
var win = null;
function NewWindow(mypage,myname,w,h) {
  LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
  TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
  settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+'';
  win = window.open(mypage,myname,settings);
}
function upc(preview,newvalue,findword) {
  preview.style.backgroundColor = newvalue;
}
</script>
<?php if ($setting["refresh"] == 'on') { echo '<meta http-equiv="refresh" content="'.$setting["refreshtime"].'">'; } ?>
<?php if (isset($tickerrefresh)) { echo ''.$tickerrefresh.''; } ?>

</head>

<body bgcolor="<?php echo ''.$setting["bodybgcolor"].''; ?>" text="<?php echo ''.$setting["bodytxtcolor"].''; ?>" link="<?php echo ''.$setting["bodylnkcolor"].''; ?>" vlink="<?php echo ''.$setting["bodyvlnkcolor"].''; ?>" alink="<?php echo ''.$setting["bodyalnkcolor"].''; ?>" <?php if (isset($tickermarg)) { echo ''.$tickermarg.''; } ?>>
