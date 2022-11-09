<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice Page</title>
	<style>
		body{
			background-color: skyblue;
			box-sizing: border-box;
		}
		.wrapper{
			width: 1170px;
			margin: 0 auto;

		}
		header{
			
		}

		.heade_section{
			background-color: orange;
			width: 1170px;
			height: 120px;
		}

		.logo {
			float: left;
			width: 250px;
			height: 120px;
			background: aqua;
		}

		.logo img {
	width: 35%;
	height: 50px;
}
		.custom_info {
		  float: right;
		  width: 250px;
		  height: 120px;
		  background: antiquewhite;
		}
		.invoice_title {
	float: left;
	/* margin: 0 auto; */
	background: aliceblue;
	width: 580px;
	margin-left: 36px;
	margin-top: 13px;
	/* padding: 10px; */
	/* line-height: 23px; */
	height: 89px;
}
.invoice_title h2 {
	text-align: center;
	color: red;
	font-size: 30px;
	/* padding-top: 11px; */
	/* line-height: -40px; */
}

.address_area {
	height: 350px;
	background-color: blue;
	margin-top: 20px;
}

.to_address {
  float: left;
  width: 250px;
  height: 200px;
  background: aliceblue;
}
.from_address {
  float: right;
  width: 250px;
  height: 200px;
  background: antiquewhite;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
	</style>
</head>
<body>
	<header>
		
		<div class="wrapper">
		<div class="heade_section">
			<div class="logo">
			<h4><img src="img/logo.jpg" alt=""></h4>
		</div>
		<div class="invoice_title">
			<h2>Invoice Details</h2>
		</div>
		<div class="custom_info">
			InvoiceNo
		</div>
		</div>
		<div class="address_area">
			
			<div class="to_address">
				<h2>Billed To:</h2>
				John Smith
				1234 Main
				Apt. 4B
				Springfield, ST 54321 
			</div>

			<div class="from_address">
				<h2>Shipped To:</h2>
				Jane Smith
				1234 Main
				Apt. 4B
				Springfield, ST 54321
			</div>
		</div>

		<div class="item_list">
			
			<table id="customers">
			  <tr>
			    <th>Company</th>
			    <th>Contact</th>
			    <th>Country</th>
			  </tr>
			  <tr>
			    <td>Alfreds Futterkiste</td>
			    <td>Maria Anders</td>
			    <td>Germany</td>
			  </tr>
			   <tr>
			    <td>Alfreds Futterkiste</td>
			    <td>Maria Anders</td>
			    <td>Germany</td>
			  </tr>
  
		</table>
		</div>

	</div>
	</header>
</body>
</html>