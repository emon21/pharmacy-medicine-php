 <?php  
 $connect = mysqli_connect("localhost", "root", "", "payslip");  
 $sql = "SELECT employee.id,employee.name,employee.fname,employee.address,employee.grade,paygrade.paystructure,overtime.date,overtime.hour,leavehistory.leavetype
	FROM employee,paygrade,overtime,leavehistory
	WHERE employee.grade=paygrade.grade ";  


 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial</title>  
          
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           
		   
		   <style>
		   
		   	h3 {
			padding: 20px;
			border-bottom: 2px solid black;
			width: 200px;
			margin-bottom: 20px;
			color: black;
			
		   }

		 td,th {
				border: 1px solid #ddd;
				padding: 8px;
			}
         th {
		        padding-top: 12px;
				padding-bottom: 12px;
				text-align: left;
				background-color: #4CAF50;
				color: white;
			}
</style>
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="">Fetch Data</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Employee ID</th>
                               <th>Employee Name</th>
							   <th>Father's Name</th>
							   <th>Address</th>
							   <th>Grade</th>
							   <th>Pay Structure</th>
                               <th>Date</th>
                               <th>Hour</th>
							   <th>Leave Type</th>
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr> 
							   <td><?php echo $row["id"];?></td> 
                               <td><?php echo $row["name"];?></td> 
                               <td><?php echo $row["fname"];?></td> 
							   <td><?php echo $row["address"];?></td> 
							   <td><?php echo $row["grade"];?></td>
							   <td><?php echo $row["paystructure"];?></td>
                               <td><?php echo $row["date"];?></td>
							   <td><?php echo $row["hour"];?></td>
							   <td><?php echo $row["leavetype"];?></td>
                              
                              							   
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  