<!DOCTYPE html>
<html>
<head>
	<title>Table FIXED</title>
	<style>
		.fixed_headers {
		    width: 635px;
		    table-layout: fixed;
		    border-collapse: collapse;
		}
		.fixed_headers thead {
		    background-color: #333;
		    color: #FDFDFD;
		}
		.fixed_headers thead tr {
		    display: block;
		    position: relative;
		}
		.fixed_headers th, .fixed_headers td {
		    padding: 5px;
		    text-align: left;
		}
		.fixed_headers td, .fixed_headers th{
		    min-width: 200px;
		}
		.fixed_headers th {
		    text-decoration: underline;
		}
		.fixed_headers tbody {
		    display: block;
		    overflow: auto;
		    width: 100%;
		    height: 500px;
		}
	</style>
</head>
<body>
	<table align="center" border="1" class="fixed_headers">
		<thead>
			<tr>
				<th>Número</th>
				<th>Nombre</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>
			<?for( $i = 0; $i < 100; $i++ ):?>
				<tr>
					<th>1</th>
					<th>Ronaldo</th>
					<th>Ixtapaluca</th>
				</tr>
			<?
			endfor;?>
		</tbody>
	</table>
</body>
</html>