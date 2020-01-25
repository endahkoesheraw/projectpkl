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
	 tr:nth-of-type(odd) {
      background-color: #cccccc;
    }
    </style>
 <table border="1" width="100%">
 
      <thead>
			<tr>
				<th align="left" colspan="22"><h1><b><i>EOI REPORT - REKAPITULASI IDENTITAS PESERTA </i></b></h1></td>
			</tr>
			<tr>
				<th align="left" colspan="22"><b><i><?php echo "Print Date: ". date("d-m-Y H:i:s");?></i></b></td>
			</tr>
			<tr rowspan="2">
				<th colspan="8"><i>Participant Information</i></th>
				<th colspan="4"><i>Contact Person 1</i></th>
				<th colspan="4"><i>Contact Person 2</i></th>
				<th colspan="6"><i>Indonesia Representative</i></th>
			</tr>
           <tr>
				<!-- Participant Information-->
				<th>No</th>
                <th>Basic Company Code</th>
                <th>Basic Company Legal Entity Name</th>
                <th>Basic Company Address</th>
                <th>Basic Company Web Address</th>
                <th>Basic Company Year Established</th>
                <th>Basic Company Country Of Establishment</th>
                <th>Longlist Compatibility Legitimacy</th>
				
				<th>Contact Person 1 Name</th>
                <th>Contact Person 1 Position</th>
                <th>Contact Person 1 TelephoneNumber</th>
                <th>Contact Person 1 EmailAdress</th>
				
				<th>Contact Person 2 Name</th>
                <th>Contact Person 2 Position</th>
                <th>Contact Person 2 TelephoneNumber</th>
                <th>Contact Person 2 EmailAdress</th>
				
                <th>Company Legal Entity Name InIndonesia</th>
                <th>Compay Address In Indonesia</th>
                <th>Company Contact Person Indonesia Name</th>
                <th>Company Contact Person Indonesia Position</th>
                <th>Company Contact Person Indonesia Telephone Number</th>
                <th>Company Contact Person Indonesia Email Adress</th>
           </tr>
 
      </thead>
 
      <tbody>
           <?php $i=1;foreach ($data->result_object() as $lihat) { 
				 $BasicCompanyCode=$lihat->BasicCompanyCode;
				 $BasicCompanyLegalEntityName=$lihat->BasicCompanyLegalEntityName;
				 $BasicCompayAddress=$lihat->BasicCompayAddress;
				 $BasicCompanyWebAddress=$lihat->BasicCompanyWebAddress;
				 $BasicCompanyYearEstablished=$lihat->BasicCompanyYearEstablished;
				 $BasicCompanyCountryOfEstablishment=$lihat->BasicCompanyCountryOfEstablishment;
				 $LonglistCompatibilityLegitimacy=$lihat->LonglistCompatibilityLegitimacy;
				 
				 $BasicCompanyContactPerson1Name=$lihat->BasicCompanyContactPerson1Name;
				 $BasicCompanyContactPerson1Position=$lihat->BasicCompanyContactPerson1Position;
				 $BasicCompanyContactPerson1TelephoneNumber=$lihat->BasicCompanyContactPerson1TelephoneNumber;
				 $BasicCompanyContactPerson1EmailAdress=$lihat->BasicCompanyContactPerson1EmailAdress;
				 
				 $BasicCompanyContactPerson2Name=$lihat->BasicCompanyContactPerson2Name;
				 $BasicCompanyContactPerson2Position=$lihat->BasicCompanyContactPerson2Position;
				 $BasicCompanyContactPerson2TelephoneNumber=$lihat->BasicCompanyContactPerson2TelephoneNumber;
				 $BasicCompanyContactPerson2EmailAdress=$lihat->BasicCompanyContactPerson2EmailAdress;
				 
				 $BasicCompanyLegalEntityNameInIndonesia=$lihat->BasicCompanyLegalEntityNameInIndonesia;
				 $BasicCompayAddressInIndonesia=$lihat->BasicCompayAddressInIndonesia;
				 $BasicCompanyContactPersonIndonesiaName=$lihat->BasicCompanyContactPersonIndonesiaName;
				 $BasicCompanyContactPersonIndonesiaPosition=$lihat->BasicCompanyContactPersonIndonesiaPosition;
				 $BasicCompanyContactPersonIndonesiaTelephoneNumber=$lihat->BasicCompanyContactPersonIndonesiaTelephoneNumber;
				 $BasicCompanyContactPersonIndonesiaEmailAdress=$lihat->BasicCompanyContactPersonIndonesiaEmailAdress;
				
		   ?>
 
           <tr>
				<!-- Participant Information-->
				<td><?php echo $i; ?> </td>
                <td><?php echo $BasicCompanyCode ; ?></td>
                <td><?php echo $BasicCompanyLegalEntityName; ?></td>
                <td><?php echo $BasicCompayAddress; ?></td>
                <td><?php echo $BasicCompanyWebAddress; ?></td>
                <td><?php echo $BasicCompanyYearEstablished; ?></td>
                <td><?php echo $BasicCompanyCountryOfEstablishment; ?></td>
				<td>
					<?php 
						if($LonglistCompatibilityLegitimacy=="1"){echo "No Information";}
						else if($LonglistCompatibilityLegitimacy=="2"){echo "Individual Company";}
						else if($LonglistCompatibilityLegitimacy=="3"){echo "Private Company";}
						else if($LonglistCompatibilityLegitimacy=="4"){echo "Publicly Listed Company";}
						else if($LonglistCompatibilityLegitimacy=="5"){echo "State Owned Company";}
						else {echo "None";}
					?>
				</td>
				
				<!-- Contact Person 1-->
                <td><?php echo $BasicCompanyContactPerson1Name ; ?></td>
                <td><?php echo $BasicCompanyContactPerson1Position; ?></td>
                <td><?php echo $BasicCompanyContactPerson1TelephoneNumber; ?></td>
                <td><?php echo $BasicCompanyContactPerson1EmailAdress; ?></td>
				
				<!-- Contact Person 2-->
                <td><?php echo $BasicCompanyContactPerson2Name ; ?></td>
                <td><?php echo $BasicCompanyContactPerson2Position; ?></td>
                <td><?php echo $BasicCompanyContactPerson2TelephoneNumber; ?></td>
                <td><?php echo $BasicCompanyContactPerson2EmailAdress; ?></td>
				
				<!-- Indonesia Representative-->
                <td><?php echo $BasicCompanyLegalEntityNameInIndonesia ; ?></td>
                <td><?php echo $BasicCompayAddressInIndonesia; ?></td>
                <td><?php echo $BasicCompanyContactPersonIndonesiaName; ?></td>
                <td><?php echo $BasicCompanyContactPersonIndonesiaPosition; ?></td>
                <td><?php echo $BasicCompanyContactPersonIndonesiaTelephoneNumber; ?></td>
                <td><?php echo $BasicCompanyContactPersonIndonesiaEmailAdress; ?></td>
           </tr>
           <?php $i++; } ?>
      </tbody>
 
 </table>