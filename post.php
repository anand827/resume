<?php
if(isset($_POST['submit']))
{
	$enq_name=trim($_POST['name']);
	$enq_email=trim($_POST['email']);
	$enq_msg=trim($_POST['comment']);
	
	if($enq_name&&$enq_email&&$enq_mobile&&$enq_msg)
	{
		#Mail admin and user
		$to=$EXTRA_ARG['set_email'];
		$from=$enq_email;
		$fromname=SITE_NAME;
		$sub="Contact enquiry - ".$enq_email;
		
		$message='<table width="100%" bgcolor="#dfdfdf" border="0" cellspacing="10" cellpadding="0" style="padding-top:10px;">
  <tr>
    <td><table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff; margin-top:0px;">
        <tr>
          <td bgcolor="#2d2d2d" height="36" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#e4e4e4;	text-align:left;	font-weight:bold; padding-left:14px;">Contact Enquiry</td>
        </tr>
        <tr>
          <td bgcolor="#30B1F2" style="line-height:3px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="line-height:11px;"><img src="'.SITE_URL.'images/mail/mail-banner.jpg" /></td>
        </tr>
        <tr>
          <td style="padding-top:0px; padding-bottom:10px;"><table width="75%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #e8e9eb;  -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px; margin-top:18px">
              <tr>
                <td style="padding:3px;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#fbfbfb;">
                          <tr>
                            <td width="36%" height="33" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;	padding-left:15px;"> Name</td>
                            <td width="1%" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">:</td>
                            <td width="63%"  style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">'.$enq_name.'</td>
                          </tr>
                          <tr>
                            <td height="33" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;	padding-left:15px;">Email</td>
                            <td style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">:</td>
                            <td  style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">'.$enq_email.'</td>
                          </tr>
                          <tr>
                            <td height="33" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;	padding-left:15px;">Mobile</td>
                            <td style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">:</td>
                            <td  style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">'.$enq_mobile.'</td>
                          </tr>
                          <tr>
                            <td height="33" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;	padding-left:15px;">Message</td>
                            <td style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">:</td>
                            <td  style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#6d6d6d;	text-align:left;">'.$enq_msg.'</td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#3f3f3f; background:#fafafa; line-height:30px; text-align:center;"><div class="footer-con">
              <p><strong>Have a Great Day</strong>, Thanks &amp; Regards, <strong style="color:#0fb2e4;">Customer Care Team</strong></p>
            </div></td>
        </tr>
        <tr>
          <td bgcolor="#30B1F2" style="line-height:1px;">&nbsp;</td>
        </tr>


      </table></td>
  </tr>
</table>';

$message1='<table width="100%" bgcolor="#dfdfdf" border="0" cellspacing="10" cellpadding="0" style="padding-top:10px;">
  <tr>
    <td><table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff; margin-top:0px;">
        <tr>
          <td bgcolor="#2d2d2d" height="36" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#e4e4e4;	text-align:left;	font-weight:bold; padding-left:14px;">Thank you for your Enquiry.</td>
        </tr>
        <tr>
          <td bgcolor="#30B1F2" style="line-height:3px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="line-height:11px;"><img src="'.SITE_URL.'images/mail/mail-banner.jpg" /></td>
        </tr>
        <tr>
          <td style="padding-top:0px; padding-bottom:10px;"><table align="center" border="0" cellspacing="0" width="86%" style="margin-top:5px">
              <tbody>
                <tr>
                  <td height="30" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#3f3f3f;	text-align:left;">Dear <span style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#3f3f3f;	text-align:left; font-weight:bold; text-transform:uppercase;">'.$enq_name.',</span></td>
                </tr>
                <tr>
                  <td height="30" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif;	color:#3f3f3f; line-height:13pt;	text-align:justify; padding-bottom:5px;">Thanks for your Enquiry.We will contact you soon.</td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#3f3f3f; background:#fafafa; line-height:30px; text-align:center;"><div class="footer-con">
              <p><strong>Have a Great Day</strong>, Thanks &amp; Regards, <strong style="color:#0fb2e4;">Customer Care Team</strong></p>
            </div></td>
        </tr>
        <tr>
          <td bgcolor="#30B1F2" style="line-height:1px;">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>';
		
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
		$headers .= "From: $fromname <$from>" . "\r\n";
		//echo $to, $sub, $message,$headers; 
		@mail($to, $sub, $message, $headers);
		
		
		$successalert="Thanks for your Enquiry. We will contact you soon.";
		
		
	}else
	{
		$erroralert="Fill all required fields.";
		
	}
}
?>
