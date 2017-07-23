<?php 
$output= NULL;

	if(isset($_POST['submit']))
	{
		//Connect to Database
		$mysqli= NEW MySQLi("localhost","root","","parsonal");
		$search = $mysqli->real_escape_string($_POST['search']);
		
		//Query the database
		$resultset = $mysqli->query("SELECT * FROM accounting WHERE investing_date LIKE '$search%' ");
		if($resultset->num_rows > 0)
		{
			while($rows = $resultset->fetch_assoc())
			{				
				$investing_date = $rows['investing_date'];
				$fittings =  $rows['fittings'];
				$amount_of_money = $rows['amount_of_money'];

				$output .= "Investing Date: $investing_date =>Fitting is: $fittings =>Amount of Money is: $amount_of_money <br />";
			}
		}
		else
		{
			$output=  "No Result";
		}
	}
?>

<form method="POST">
	<input type="TEXT" name="search" />
	<input type="submit" name="submit" value="Search" />
</form>
<?php echo $output;?>