<?php

//include("hd/hd.php");

	// Inialize session
	session_start();
	include("includes/config.php");
	
	
	
	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['transid']))
		{
			header('Location: logins.php');
		}
	

//$_SESSION['transid']; 
//$result = mysql_query("SELECT transid  FROM login where transid = $transid");

?>
<style type="text/css">
<!--
.style1 {font-size: 14px}
body,td,th {
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
}
#form2 table tr td table tr td div p strong {
	color: #FF0;
}
.weee {
	color: #FFF;
}
-->
</style>



<table width="610" border="0" align="center">
  <tr bgcolor="#FFCC99">
    <td width="604" bgcolor="#000033"><div align="center" class="ter2">WELCOME: &nbsp;&nbsp;<span class="weee"><?php echo $_SESSION['nmstaff']; ?></span> </div>
      <form id="form2" name="form2" method="post" action="">
        <table width="638" height="235" border="0" align="center">
          <tr>
            <td width="632" bgcolor="#000033"><table width="595" border="0" align="center">
              <tr bgcolor="#FFFFFF">
                <td colspan="3" bgcolor="#000033"><div align="center">
                  <p>&nbsp;</p>
                  <p><strong>SELECT CATEGORY BELOW</strong></p>
                </div></td>
                </tr>
              <tr bgcolor="#FFFFCC">
                <td width="160" bgcolor="#FFFFFF"><div align="center"><strong>ADMIN MENU</strong></div></td>
                <td width="189" bgcolor="#FFFFFF"><div align="center"><strong>USER REGISTRATION   FORM MENU </strong></div></td>
                <td width="232" bgcolor="#FFFFFF"><div align="center"><strong>BALLOTTING  MENU </strong></div></td>
                </tr>
              <tr>
                <td height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <th bgcolor="#FFFFFF"><a href="employee_registration.php" class="style1"></a></th>
                </tr>
              <tr bgcolor="#FFFFFF">
                <th bgcolor="#FFFFCC"><a href="add_admin_id.php" class="style1">Add Admin ID</a></th>
                <td bgcolor="#FFFFCC"><div align="center"><strong><a href="registration_form.php" class="style1">Register Users</a></strong></div></td>
                <td bgcolor="#FFFFCC"><div align="center"><strong><a href="post_process.php">Ballot Here</a></strong></div></td>
                </tr>
              <tr>
                <th bgcolor="#FFFFCC"><a href="admin_id_view.php" class="style1">View Admin Record</a></th>
                <td bgcolor="#FFFFCC"><div align="center"><strong><a href="registration_form_view.php">View User Records</a></strong></div></td>
                <td bgcolor="#FFFFCC"><div align="center"><strong><a href="Posting_list.php">View Ballot Result</a></strong></div></td>
                </tr>
              <tr>
                <th bgcolor="#FFFFCC">&nbsp;</th>
                <td bgcolor="#FFFFCC"><div align="center"><strong><a href="logout.php">Log Out</a></strong></div></td>
                <td bgcolor="#FFFFCC"><div align="center">
                  <div align="center"><strong><a href="add_area_id.php">Ballot Status setting</a></strong></div>
                </div></td>
                </tr>
              <tr>
                <th bgcolor="#FFFFFF">&nbsp;</th>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF"><div align="center"></div></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <br />
    </form></td>
  </tr>
</table>
<?php
include("ft/ft.php");
?>