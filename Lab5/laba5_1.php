<?php
function Getter(){

    mysqli_report(MYSQLI_REPORT_OFF);
	$mysqli = @new mysqli('db', 'root', 'helloworld', 'web');

	if ($mysqli->connect_errno) {
		error_log('Connection error!' . $mysqli->connect_errno);
		exit();
	}
$response = array();
$i = 0;
$j = 0;

    if ($result = $mysqli->query('SELECT * from table_result')) { //table_result описана в laba5_2.php
        while ($row = $result->fetch_assoc()) {
            $response[$i][$j] = $row['Category'];
            $j = $j + 1;
            $response[$i][$j] = $row['Title'];
            $j = $j + 1;
            $response[$i][$j] = $row['Description'];
            $j = $j + 1;
            $response[$i][$j] = $row['Email'];
            $j = 0;
            $i = $i + 1;
        }
            $result->close();
        }
    $mysqli->close();
return($response);
}
?>

<!doctype html>
<html lang = "en">
    <meta charset = "UTF-8">
    <meta name = "viewport"
    content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<body>
     <div id="form">
      <form action ="laba5_2.php" method= "post">
        <label for = "Email">Email</label>
        <input type = "Email" name = "Email" required>
        <label for = "Category">Category</label>

<?php
$masq = array();
$masq[0] = 'comics';
$masq[1]= 'books';
$masq[2]= 'copybooks';
$masq[3]= 'notebooks';
$masq[4]= 'other';
?>

<select name = "Category" required>

    <?php foreach ($masq as $s): ?>
        <option value = <?php echo $s; ?>><?php echo $s; ?>
		</option>
    <?php endforeach; ?>
</select>
<form>
    <label for = "Title">Title</label>
  
    <input type = "Text" name = "Title" required>
   
    <label for = "Description">Description</label>
    
	<textarea rows = "3" name = "Description"></textarea>

    <input type = "Submit" value = "Save">
</form>

<div id = "table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
            <th>Description</th>
            <th>Email</th>
		</thead>


<?php  $errt = 0; $matrix = Getter();?>
<?php for($i = 0; $i < count ($matrix); $i++):?>
    <?php for($j = 0; $j < count ($matrix[$i]); $j = $j + 4):?>
<tbody>
    <tr>   
        <td><?php echo $matrix[$i][$j];?>
		</td>
        <td><?php echo $matrix[$i][$j+1];?>
		</td>
        <td><?php echo $matrix[$i][$j+2];?>
		</td>
        <td><?php echo $matrix[$i][$j+3];?>
		</td>
    <?php endfor;?>
	</tr>
</tbody>
	</table>
</div>
</body>
</html>