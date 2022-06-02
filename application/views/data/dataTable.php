
<table border=0 cellpadding=0 cellspacing=0 width=1216 class=xl63809
style='border-collapse:collapse;table-layout:fixed;width:912pt'>
<col class=xl63809 width=120 span=2 style='mso-width-source:userset;
mso-width-alt:4388;width:90pt'>
<col class=xl63809 width=64 span=2 style='width:48pt'>
<col class=xl63809 width=120 style='mso-width-source:userset;mso-width-alt:
4388;width:90pt'>
<col class=xl63809 width=64 span=2 style='width:48pt'>
<col class=xl63809 width=120 style='mso-width-source:userset;mso-width-alt:
4388;width:90pt'>
<col class=xl63809 width=60 span=2 style='mso-width-source:userset;mso-width-alt:
2194;width:45pt'>
<col class=xl63809 width=120 span=3 style='mso-width-source:userset;
mso-width-alt:4388;width:90pt'>
<tr height=20 style='height:15.0pt'>
<td colspan=13 height=20 class=xl67809 width=304 style='height:15.0pt;text-align:center;font-size:15pt;
width:228pt'><?php echo $showDate ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
<td colspan=3 height=20 class=xl67809 width=304 style='height:15.0pt;
width:228pt'>Unit Head: Anthony T De Leon</td>
<td colspan=6 class=xl67809 width=492 style='border-left:none;width:369pt'>Unit:
ICT</td>
<td colspan=4 class=xl67809 width=420 style='border-left:none;width:315pt'>Date: <?php echo date("Y-m-d H:i:s");?></span></td>
</tr>

<! Sorting Client Type >
<tr height=20 style='height:15.0pt'>
<td rowspan=2 height=40 class=xl77809 style='height:30.0pt;border-top:none'>Client
Type</td>
<td colspan=2 class=xl76809 style='border-left:none' id='student'><?php echo $CTarr[0] ?></td>
<td colspan=2 class=xl76809 style='border-left:none' id='parent'><?php echo $CTarr[1] ?></td>
<td colspan=3 class=xl76809 style='border-left:none' id='PSUFaculty'><?php echo $CTarr[2] ?>:</td>
<td colspan=3 class=xl76809 style='border-left:none' id='PSUStaff'><?php echo $CTarr[3] ?></td>
<td colspan=2 class=xl76809 style='border-left:none' id='others'><?php echo $CTarr[4] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
<td colspan=2 height=20 class=xl76809 style='height:15.0pt;border-left:none'><?php echo $CTarr[5] ?></td>
<td colspan=3 class=xl76809 style='border-left:none'><?php echo $CTarr[6] ?></td>
<td colspan=3 class=xl76809 style='border-left:none'><?php echo $CTarr[7] ?></td>
<td colspan=2 class=xl76809 style='border-left:none'><?php echo $CTarr[8] ?></td>
<td colspan=2 class=xl76809 style='border-left:none'>Total: <?php echo $CTarr[9] ?></td>
</tr>

<! SERVICES >
<tr height=20 style='height:15.0pt'>
    <td colspan=2 height=20 class=xl64809 style='height:15.0pt'>Services</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Very Poor</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Poor</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Fair</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Good</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Very Good</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Total</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Average</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Descriptive</td>
</tr>
<tr height=20 style='height:15.0pt'>
    <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Completeness</td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[0][0] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[0][1] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[0][2] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[0][3] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[0][4] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[0][5] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[0][6]?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[0][7]?></td>
</tr>
<tr height=20 style='height:15.0pt'>
    <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Accuracy</td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[1][0] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[1][1] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[1][2] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[1][3] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[1][4] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[1][5] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[1][6] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[1][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
    <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Speed</td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[2][0] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[2][1] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[2][2] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[2][3] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[2][4] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[2][5] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[2][6] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[2][7] ?></td>
</tr>
<tr height=36 style='mso-height-source:userset;height:27.0pt'>
    <td colspan=2 height=36 class=xl78809 width=240 style='height:27.0pt;
    width:180pt'>Considers the risk of COVID19 (Contact Tracing, Option for online transaction</td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[3][0] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[3][1] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[3][2] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[3][3] ?></td>
    <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Services[3][4] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[3][5] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[3][6] ?></td>
    <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Services[3][7] ?></td>
</tr>
<tr height=30 style='mso-height-source:userset;height:22.5pt'>
    <td colspan=8 height=30 class=xl70809 style='height:22.5pt'></td>
    <td colspan=2 class=xl81809 <?php echo "style='background:".$Services[4][3].";'>"?>Result</td>
    <td class=xl66809 <?php echo "style='background:".$Services[4][3].";'>" . $Services[4][0] ?></td>
    <td class=xl66809 <?php echo "style='background:".$Services[4][3].";'>" . $Services[4][1] ?></td>
    <td class=xl66809 <?php echo "style='background:".$Services[4][3].";'>" . $Services[4][2] ?></td>
</tr>

<! PERSONNEL >
<tr height=20 style='height:15.0pt'>
    <td colspan=2 height=20 class=xl64809 style='height:15.0pt'>Personnel</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Very Poor</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Poor</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Fair</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Good</td>
    <td colspan=2 class=xl64809 style='border-left:none'>Very Good</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Total</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Average</td>
    <td class=xl64809 style='border-top:none;border-left:none'>Descriptive</td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Knowledge</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[0][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[0][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[0][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[0][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[0][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[0][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[0][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[0][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Attitude</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[1][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[1][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[1][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[1][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[1][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[1][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[1][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[1][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl70809 style='height:15.0pt'>Grooming</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[2][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[2][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[2][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[2][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[2][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[2][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[2][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[2][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl80809 style='height:15.0pt'>Use of PPE for
  COVID19 (Mask,Shield, etc)</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[3][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[3][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[3][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[3][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Personnel[3][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[3][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[3][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Personnel[3][7] ?></td>
</tr>
<tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=8 height=30 class=xl70809 style='height:22.5pt'></td>
  <td colspan=2 class=xl81809 <?php echo "style='background:".$Personnel[4][3].";'>"?>Result</td>
  <td class=xl66809 <?php echo "style='background:".$Personnel[4][3].";'>" . $Personnel[4][0] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Personnel[4][3].";'>" . $Personnel[4][1] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Personnel[4][3].";'>" . $Personnel[4][2] ?></td>
</tr>

<! OFFICE >
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl64809 style='height:15.0pt'>Office</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Very Poor</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Poor</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Fair</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Good</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Very Good</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Total</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Average</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Descriptive</td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl87809 style='height:15.0pt'>Location</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[0][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[0][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[0][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[0][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[0][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[0][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[0][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[0][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl87809 style='height:15.0pt'>Work Space</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[1][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[1][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[1][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[1][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[1][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[1][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[1][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[1][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl85809 style='border-right:.5pt solid black;
  height:15.0pt'>Cleanliness</td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[2][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[2][1] ?></td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[2][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[2][3] ?></td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[2][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[2][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[2][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[2][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl87809 style='height:15.0pt'>Equipment and
  Furnishing</td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[3][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[3][1] ?></td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[3][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[3][3] ?></td>
  <td colspan=2 class=xl82809 style='border-right:.5pt solid black;border-left:
  none'><?php echo $Office[3][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[3][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[3][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[3][7] ?></td>
</tr>
<tr height=52 style='mso-height-source:userset;height:39.0pt'>
  <td colspan=2 height=52 class=xl84809 width=240 style='height:39.0pt;
  width:180pt'>COVID19 Prevention and Control (Disinfectant, Social Distancing,
  Barriers, Warning Signs)</td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[4][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[4][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[4][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[4][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Office[4][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[4][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[4][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Office[4][7] ?></td>
</tr>
<tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=8 height=30 class=xl70809 style='height:22.5pt'></td>
  <td colspan=2 class=xl81809 <?php echo "style='background:".$Office[5][3].";'>"?>Result</td>
  <td class=xl66809 <?php echo "style='background:".$Office[5][3].";'>" . $Office[5][0] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Office[5][3].";'>" . $Office[5][1] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Office[5][3].";'>" . $Office[5][2] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 rowspan=3 height=70 class=xl79809 style='height:52.5pt'>Overall
  Rating</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Very Poor</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Poor</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Fair</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Good</td>
  <td colspan=2 class=xl64809 style='border-left:none'>Very Good</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Total</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Average</td>
  <td class=xl64809 style='border-top:none;border-left:none'>Descriptive</td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl65809 style='height:15.0pt;border-left:none'><?php echo $Overall[0][0] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Overall[0][1] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Overall[0][2] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Overall[0][3] ?></td>
  <td colspan=2 class=xl65809 style='border-left:none'><?php echo $Overall[0][4] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Overall[0][5] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Overall[0][6] ?></td>
  <td class=xl65809 style='border-top:none;border-left:none'><?php echo $Overall[0][7] ?></td>
</tr>
<tr height=30 style='mso-height-source:userset;height:22.5pt'>
  <td colspan=2 height=30 class=xl66809 style='height:22.5pt;border-left:none'></td>
  <td class=xl66809 style='border-top:none;border-left:none'></td>
  <td colspan=2 class=xl66809 style='border-left:none'></td>
  <td class=xl66809 style='border-top:none;border-left:none'></td>
  <td colspan=2 class=xl81809 <?php echo "style='background:".$Overall[1][1].";'>"?>Result</td>
  <td class=xl66809 <?php echo "style='background:".$Overall[1][1].";'>" . $Overall[0][5] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Overall[1][1].";'>" . $Overall[0][6] ?></td>
  <td class=xl66809 <?php echo "style='background:".$Overall[1][1].";'>" . $Overall[0][7] ?></td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td height=20 class=xl67809 style='height:15.0pt;border-top:none'>Rating
  Scale</td>
  <td colspan=2 class=xl71809 style='border-left:none'>1.5 or below (very poor)</td>
  <td colspan=2 class=xl72809 style='border-left:none'>1.51 to 2.5 (poor)</td>
  <td colspan=3 class=xl73809 style='border-left:none'>2.51 to 3.5 (fair)</td>
  <td colspan=3 class=xl74809 style='border-left:none'>3.51 to 4.5 (good)</td>
  <td colspan=2 class=xl68809 style='border-left:none'>4.51 and above (very
  good)</td>
</tr>
<tr height=20 style='height:15.0pt'>
  <td colspan=13 height=20 class=xl69809 style='height:15.0pt'>Feedback,
  Comments and Suggestions</td>
</tr>
    <?php
    	$com = [];
    	$b=0;
    	foreach($Comments->result() as $c)
        {
    		if($c->comments != 'No Comment')
            {
    			$com[$b]= $c->comments;
    			$b++;
    		}
        
    	}
    	if(count($com)%3 == 2)
        {
    		$com[$b+1] = " ";
    		$com[$b+2] = " ";
    	}
    	elseif(count($com)%3 == 1)
        {
    		$com[$b+1] = " ";
    	}
    	$i=0;
    	while((count($com) - 1) > $i)
        {
    		echo "<tr height=20 style='height:15.0pt'>";
            if(array_key_exists($i,$com))
            {
                echo "<td colspan=3 height=20 class=xl70809 style='height:15.0pt'>".$com[$i]."</td>";
                
            }
            $i++;
            if(array_key_exists($i,$com))
            {
                echo "<td colspan=6 class=xl70809 style='border-left:none'>".$com[$i]."</td>";
            }
            else if(!array_key_exists($i,$com))
            {
                echo "<td colspan=6 class=xl70809 style='border-left:none'> </td>";
                echo "<td colspan=4 class=xl70809 style='border-left:none'> </td>";
            }
            $i++;
    		if(array_key_exists($i,$com))
            {
                echo "<td colspan=4 class=xl70809 style='border-left:none'>".$com[$i]."</td>";
            }
            if(!array_key_exists($i,$com))
            {
                echo "<td colspan=4 class=xl70809 style='border-left:none'> </td>";
            }
    		$i++;
    		echo "</tr>";
        };	
    ?>
</table>