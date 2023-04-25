<?php
include("includes/config.php");
//include("hd/hd.php");
?>
<table width="800" border="1" align="center">
  <tr>
    <td height="80" bgcolor="#FFFFCC"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      </p>
      <form id="form2" name="form2" method="post" action="">
        <p align="center">
          <?php
	session_start();
	//include("includes/config.php");
	
	$login = mysql_query("SELECT nmstaff, transid FROM loginadm WHERE  (transid = '" . mysql_real_escape_string($_POST['pword']) . "')");
	// Check username and password match
	if (mysql_num_rows($login) == 1)
		{
			// Set username session variable
//			$_SESSION['nmstaff'] = $_POST['uname'];
//$result = mysql_query("SELECT * FROM sanction ORDER BY id ASC");
$_SESSION['transid'] = $_POST['pword'];
//$row = mysql_fetch_array($login);
//$_SESSION['transid']=$row['transid'];		
//$_SESSION['nmstaff'] = $row['nmstaff'];	
			  
			///$transid = $_SESSION['transid']; 
			// Jump to secured page
			//header('Location:menu_select_transaction.php');
			header('Location: menu_select_transaction.php');
			
		}
	else 
		{
		echo "<font color='Red' size = 3>***....	WRONG PASSWORD! Password Not Acceptable!....Please wait....***</font>";
		echo "<meta http-equiv=Refresh content=3;url=staff_login_menu.php>";// Jump to login page
			//echo "WRONG PASSWORD!!!";
			//header('Location:norec.php');
		}
		
?>

          <br />
        </p>
    </form></td>
  </tr>
</table>
<?php
//include("ft/ft.php");
?>
