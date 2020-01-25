 <?php
 
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
				<th align="left" colspan="10"><h1><b><i>EOI REPORT - USERS </i></b></h1></td>
			</tr>
			<tr>
				<th align="left" colspan="10"><b><i><?php echo "Print Date: ". date("d-m-Y H:i:s");?></i></b></td>
			</tr>
			<tr>
				<th><i>No</i></th>
				<th><i>Name</i></th>
				<th><i>Phone</i></th>
				<th><i>Email</i></th>
				<th><i>Position</i></th>
				<th><i>Company</i></th>
				<th><i>Created Date</i></th>
				<th><i>Updated Date </i></th>
				<th><i>Roles</i></th>
				<th><i>Status</i></th>
           </tr>
 
      </thead>
 
      <tbody>
           <?php $i=1;foreach ($data->result_object() as $lihat) { 
				 $name=$lihat->name;
				 $phone=$lihat->phone;
				 $email=$lihat->email;
				 $position=$lihat->position;
				 $company=$lihat->company;
				 $created_date=$lihat->created_date;
				 $updated_date=$lihat->updated_date;
				 $roles=$lihat->roles;
				 $status=$lihat->status;	
		   ?>
 
           <tr>
				<!-- Participant Information-->
				<td><?php echo $i; ?> </td>
                <td><?php echo $name ; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $position; ?></td>
                <td><?php echo $company; ?></td>
                <td><?php echo $created_date; ?></td>
                <td><?php echo $updated_date; ?></td>
                <td><?php echo $roles; ?></td>
                <td><?php echo $status; ?></td>
           </tr>
           <?php $i++; } ?>
      </tbody>
 
 </table>