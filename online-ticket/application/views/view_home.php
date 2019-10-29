<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<form method="post">
<table cellpadding="10">
    <tr>
        <td>From</td>

        <td><input type="text" name="from"></td>
    </tr>

    <tr>
        <td>To</td></br>
        <td><input type="text" name="to"></td>
    </tr>

    <tr>
        <td>Journey Date</td></br>
        <td><input type="date" name="jdate"></td>
    </tr>

    <tr>
        <td><input type="submit" value="Search Bus" name="search"></td>

    </tr>
</table>

    <table border="1" cellpadding="5">
        <tr>
            <th>Bus Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Seats Available</th>
            <th>Fare</th>
            <th>Route</th>
        </tr>
        <?php foreach ($buses as $bus){ ?>
        <tr>
            <td><?php echo $bus['bus_name']; ?></td>
            <td><?php echo $bus['bus_des']; ?></td>
            <td><?php echo $bus['bus_type']; ?></td>
            <td><?php echo $bus['dept_time']; ?></td>
            <td><?php echo $bus['arr_time']; ?></td>
            <td><?php echo $bus['seats_avaiable']; ?></td>
            <td><?php echo $bus['fare']; ?></td>
            <td><?php echo $bus['route']; ?></td>
            <td> <a href="#">View Seats</a> </td>
        </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>


