 <?php
 error_reporting(0);
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$title.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
 <style type="text/css">
    table {
           /*...all table attributes like fontsize etc*/
            font-size:12px;
            color:#333333;                
    }
    table th {
            /*...all th attributes like padding etc*/
            background-color:#d4e3e5;
            padding: 8px;
    }
    table td {
            /*...all td attributes like padding etc*/
            padding: 8px;
    }

    </style>
 
 
 <table border="1" width="100%">
      <thead>
			<tr>
				<th align="left" colspan="15"><h1><b><i>EOI REPORT - REKAPITULASI PENGALAMAN PESERTA </i></b></h1></td>
			</tr>
			<tr>
				<th align="left" colspan="15"><b><i><?php echo "Print Date: ". date("d-m-Y H:i:s");?></i></b></td>
			</tr>
			</tr>
			<tr >
				<th rowspan="2"><i>No</i></th>
				<th rowspan="2">Basic Company Legal Entity Name</th>
                <th rowspan="2"><i>Project Name</i></th>
				<th rowspan="2"><i>Location</i></th>
				<th rowspan="2"><i>Type</i></th>
				<th rowspan="2"><i>Capacity (MW)</i></th>
				<th rowspan="2"><i>Year COD</i></th>
				<th rowspan="2"><i>Tariff (USD cent / kWh)</i></th>
				<th rowspan="2"><i>Value (USD)</i></th>
				<th colspan="6"><i>Roles</i></th>
			</tr>
           <tr>
				<th><i>IPP / Equity Provider</i></th>
				<th><i>Financing Provider</i></th>
				<th><i>Technology Provider</i></th>
				<th><i>EPC Service Provider</i></th>
				<th><i>Consulting Provider</i></th>
				<th><i>O&M Service Provider</i></th>
           </tr>
 
      </thead>
 
      <tbody>
           <?php $i=1;foreach ($data->result_object() as $lihat) { 

				 $BasicCompanyLegalEntityName=$lihat->BasicCompanyLegalEntityName;
				
				$ProjectName = $lihat->ProjectName;
				$ProjectLocation = $lihat->ProjectLocation;
				$ProjectType = $lihat->ProjectType;
				$ProjectCapacity = $lihat->ProjectCapacity;
				$ProjectCOD = $lihat->ProjectCOD;
				$ProjectTariff = $lihat->ProjectTariff;
				$ProjectValue = $lihat->ProjectValue;
				$ProjectRoleConsultingServiceProvider = $lihat->ProjectRoleConsultingServiceProvider;
				$ProjectRoleEPCProvider = $lihat->ProjectRoleEPCProvider;
				$ProjectRoleFinancingProvider = $lihat->ProjectRoleFinancingProvider;
				$ProjectRoleIPP = $lihat->ProjectRoleIPP;
				$ProjectRoleOMServiceProvider = $lihat->ProjectRoleOMServiceProvider;
				$ProjectRoleTechnologyProvider = $lihat->ProjectRoleTechnologyProvider;
				
				$ProjectName =  json_decode(json_encode(json_decode($ProjectName)), True);
				$ProjectLocation = json_decode(json_encode(json_decode($ProjectLocation)), True);
				$ProjectType = json_decode(json_encode(json_decode($ProjectType)), True);
				$ProjectCapacity = json_decode(json_encode(json_decode($ProjectCapacity)), True);
				$ProjectCOD = json_decode(json_encode(json_decode($ProjectCOD)), True);
				$ProjectTariff = json_decode(json_encode(json_decode($ProjectTariff)), True);
				$ProjectValue =  json_decode(json_encode(json_decode($ProjectValue)), True);
				$ProjectRoleIPP =  json_decode(json_encode(json_decode($ProjectRoleIPP)), True);
				$ProjectRoleFinancingProvider = json_decode(json_encode(json_decode($ProjectRoleFinancingProvider)), True);
				$ProjectRoleTechnologyProvider = json_decode(json_encode(json_decode($ProjectRoleTechnologyProvider)), True);
				$ProjectRoleEPCProvider = json_decode(json_encode(json_decode($ProjectRoleEPCProvider)), True);
				$ProjectRoleConsultingServiceProvider =  json_decode(json_encode(json_decode($ProjectRoleConsultingServiceProvider)), True);
				$ProjectRoleOMServiceProvider =  json_decode(json_encode(json_decode($ProjectRoleOMServiceProvider)), True);
				$arrlength = count($ProjectName);
				$rowlength=	$arrlength+1;
		
										?>
										<tr>
											<td ><?php echo $i; ?> </td>
										    <td ><?php echo $BasicCompanyLegalEntityName; ?></td>
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectName[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectLocation[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectType[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectCapacity[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectCOD[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php echo htmlentities($ProjectTariff[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php  echo htmlentities($ProjectValue[$x]); ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php if(htmlentities($ProjectRoleIPP[$x])=="TRUE"){echo "1";}else{echo "0";} ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php  if(htmlentities($ProjectRoleFinancingProvider[$x])=="TRUE"){echo "1";}else{echo "0";}  ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php  if(htmlentities($ProjectRoleTechnologyProvider[$x])=="TRUE"){echo "1";}else{echo "0";} ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php if(htmlentities($ProjectRoleEPCProvider[$x])=="TRUE"){echo "1";}else{echo "0";}?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php if(htmlentities($ProjectRoleConsultingServiceProvider[$x])=="TRUE"){echo "1";}else{echo "0";} ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											
											<td >
											<table border="1" width="100%">
											<?php 	for($x = 0; $x < $arrlength; $x++) { 	?>		
											<tr>
											<td><?php if(htmlentities($ProjectRoleOMServiceProvider[$x])=="TRUE"){echo "1";}else{echo "0";}  ?></td>
											</tr>
											<?php } ?>
											</table>
											</td>
											

											
           </tr>
           <?php $i++; } ?>
      </tbody>
 
 </table>