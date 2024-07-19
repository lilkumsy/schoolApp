<?php 
include 'connection.php';
session_start();
$paymntidd=$_SESSION['paymntid'];
		//paymntid, admsno, pmthod, amount, pto, pdat, ppurpose, pclass, status
        $query="SELECT * FROM payments WHERE paymntid='$paymntidd'";
        $result=  mysqli_query($conn,$query);
        while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){
			}			
//paymntid, admsno, pmthod, amount, pto, pdat, ppurpose, pclass, status
?>
		<table cellpadding="5" cellspacing="0" width="101%">
		<tbody><tr>
                <td align="left" valign="top">
                    <table width="630" border="0" cellpadding="2" align="center">
                        <tbody><tr>
                            <td width="124">&nbsp;</td>
                            <td width="171">&nbsp;</td>
                            <td width="219">&nbsp;</td>
                            <td width="90">&nbsp;</td>
                        </tr>                        
                        <tr>
                            <td colspan="4">

                                <table width="100%" border="2" bordercolor="#000000">
                                    <tbody><tr><td><table width="100%" border="0" cellpadding="2" 
									background=" ">
                                                <tbody><tr>
                                                    <td colspan="3" align="center" class="coperateBig">
													<table width="100%" border="0" cellspacing="0" cellpadding="3">
                                                            <tbody><tr>
                                                                <td width="15%" rowspan="3" align="left" valign="top">
																<img src="assets/img/logo.jpg" alt="LOGO" width="94" 
																height="104" style="float:left; padding-left:2%"></td>
                                                                <td width="66%" align="center" valign="top"><strong>ORIGINAL</strong></td>
                                                                <td width="19%" align="right" valign="top">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" valign="top"><span class="title1"><b>Redstars International College,<br>
                                                                         Taraba, Nigeria.</span></b><br>
                                                                    <span class="title3"></span> </td>
                                                                <td width="19%" align="left" valign="bottom">Date:<span class="title3"> <?php echo date('y:d:m'); ?> 
																</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" valign="middle"><span class="title2">PAYMENT RECEIPT </span></td>
                                                                <td width="19%" align="right" valign="top">&nbsp;</td>
                                                            </tr>
                                                        </tbody></table></td>
                                                </tr>
                                                <tr>
                                                    <td width="14%">&nbsp;</td>
                                                    <td width="32%">&nbsp;</td>
                                                    <td width="54%">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">ADMISSION NUMBER </td>
                                                    <td><?php echo $row['admsno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">FULL NAME </td>
                                                    <td>Not Needed</td>
                                                </tr>
                                   
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">LEVEL</td>
                                                    <td>Not Needed</td>
                                                </tr>
													<tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">PAYMENT TERM </td>
                                                    <td>Not Needed</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">SESSION </td>
                                                    <td>Not Needed</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">AMOUNT</td>
                                                    <td><strike>N</strike> Not Needed</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="bheader">PAYMENT OPTION </td>
                                                    <td>Not Needed</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>

                                                <tr>
                        <td colspan="3" class="coperateSmall">
						<div align="center" style="color:#FF0000">Note that this document is confidential </div></td>
                                             </tr>
							<tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                    </tr>
							<tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                     <td colspan="3"><div align="center"><a href="javascript:print();">[ Click to Print ]</a> 
					 [ <a onclick="window.close();">Close</a> ] </div></td>
							</tr>
				</tbody></table></td>
       </tr></tbody></table>
		</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
							<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                            </td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody></table>   
					</td>
				</tr>   
			</tbody></table>
		<script type="text/javascript">
            <!--
    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
            //-->
    </script>   
</body>