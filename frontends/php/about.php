<?
	include "include/config.inc.php";
	$page["title"] = "Abbout Zabbix";
	$page["file"] = "about.php";
	show_header($page["title"],0,0);
?>

<?
	show_table_header("Information about Zabbix (v1.0beta5)");
?>

<TABLE BORDER=0 COLS=4 WIDTH=100% BGCOLOR="#CCCCCC" cellspacing=1 cellpadding=3>
<TR BGCOLOR=#EEEEEE>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://zabbix.sourceforge.net">Homepage of Zabbix</a></font><br>
</TD>
<TD ALIGN=LEFT>
	This is home page of Zabbix.
</TD>
</TR>
<TR BGCOLOR=#DDDDDD>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://sourceforge.net/project/showfiles.php?group_id=23494&release_id=40630">Downloads</a></font><br>
</TD>
<TD>
	Latest Zabbix release can be found here.
</TR>
<TR BGCOLOR=#EEEEEE>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://sourceforge.net/tracker/?atid=378686&group_id=23494&func=browse">Feature request</a></font><br>
</TD>
<TD>
	If you need additional functionality, go here.
</TD>
</TR>
<TR BGCOLOR=#EEEEEE>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://sourceforge.net/forum/?group_id=23494">Forums</a></font><br>
</TD>
<TD>
	Zabbix-related discussion.
</TD>
</TR>
<TR BGCOLOR=#DDDDDD>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://sourceforge.net/tracker/?group_id=23494&atid=378683">Bug reports</a></font><br>
</TD>
<TD>
	Bug in Zabbix ? Please, report it.
</TD>
</TR>
<TR BGCOLOR=#EEEEEE>
<TD ALIGN=LEFT>
	<font face="Helvetica"><a href="http://sourceforge.net/mail/?group_id=23494">Mailing lists</a></font><br>
</TD>
<TD>
	Very useful source of information (will be soon).
</TD>
</TR>
</TABLE>

<?
	show_footer();
?>
