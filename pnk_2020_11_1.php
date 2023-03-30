<?php
    $db = mysqli_connect("localhost", "root", "", "Raspisanie") or die("Error!");
    $query1 = mysqli_query($db, "SELECT * FROM class_pnk_2020_11_1 WHERE `Day of week` = 'Понедельник'");
	$query2 = mysqli_query($db, "SELECT * FROM class_pnk_2020_11_1 WHERE `Day of week` = 'Вторник'");
	$query3 = mysqli_query($db, "SELECT * FROM class_pnk_2020_11_1 WHERE `Day of week` = 'Среда'");
	$query4 = mysqli_query($db, "SELECT * FROM class_pnk_2020_11_1 WHERE `Day of week` = 'Четверг'");
	$query5 = mysqli_query($db, "SELECT * FROM class_pnk_2020_11_1 WHERE `Day of week` = 'Пятница'");

	
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>ПНК-2022-11-1</title>
    <style>
		body{
		background-color:#69b5e6
	}
        table {
            margin: 0 auto;
            font-size: large;
			margin: 100px 10;
			padding: 15px;
        }
		
		
        h1 {
            text-align: center;
            color: #ffff;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
		
		caption{
			font-family: annabelle, cursive;
			font-weight: bold;
			font-size: 2em;
			padding: 10px; 
			border: 1px solid black;
			color: white;
		}
 
        th {
			font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
			font-weight: lighter;
			background-color: #d1d1d1;
            border: 1px solid black;
		}
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
			font-weight: lighter;
			background-color: #ffff;
			border-radius: 10px;
            border: 1px solid black;
        }
 
       
    </style>
</head>
 
<body> 
    <section>
        <h1>ПНК-2022-11-1</h1>
		<center>
        <caption>Понедельник</caption>
		<center>
		<table>
            <tr>
				<th>Number lesson</th>
				<th>Time</th>
				<th>Kab</th>
				<th>Subject</th>
				<th>Lecture/Practice</th>
				<th>Group</th>
				<th>Prepod(FIO)</th>
            </tr>
            <?php
                while ($data = $query1->fetch_assoc())
                {
                    echo "<tr>";
                    echo "
                    <td>".$data['Number lesson']."</td>
                    <td>".$data['Time']."</td>
                    <td>".$data['Kab']."</td>
                    <td>".$data['Subject']."</td>
                    <td>".$data['Lecture/Practice']."</td>
                    <td>".$data['Group']."</td>
                    <td>".$data['Prepod(FIO)']."</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </table>
		
		<center>
        <caption>Вторник</caption>
		<center>
		
		<table>
            <tr>
				<th>Number lesson</th>
				<th>Time</th>
				<th>Kab</th>
				<th>Subject</th>
				<th>Lecture/Practice</th>
				<th>Group</th>
				<th>Prepod(FIO)</th>
            </tr>
            <?php
                while ($data = $query2->fetch_assoc())
                {
                    echo "<tr>";
                    echo "
                    <td>".$data['Number lesson']."</td>
                    <td>".$data['Time']."</td>
                    <td>".$data['Kab']."</td>
                    <td>".$data['Subject']."</td>
                    <td>".$data['Lecture/Practice']."</td>
                    <td>".$data['Group']."</td>
                    <td>".$data['Prepod(FIO)']."</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </table>
		
		<center>
        <caption>Среда</caption>
		<center>
		
		<table>
            <tr>
				<th>Number lesson</th>
				<th>Time</th>
				<th>Kab</th>
				<th>Subject</th>
				<th>Lecture/Practice</th>
				<th>Group</th>
				<th>Prepod(FIO)</th>
            </tr>
            <?php
                while ($data = $query3->fetch_assoc())
                {
                    echo "<tr>";
                    echo "
                    <td>".$data['Number lesson']."</td>
                    <td>".$data['Time']."</td>
                    <td>".$data['Kab']."</td>
                    <td>".$data['Subject']."</td>
                    <td>".$data['Lecture/Practice']."</td>
                    <td>".$data['Group']."</td>
                    <td>".$data['Prepod(FIO)']."</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </table>
		
		<center>
        <caption>Четверг</caption>
		<center>
		
		<table>
            <tr>
				<th>Number lesson</th>
				<th>Time</th>
				<th>Kab</th>
				<th>Subject</th>
				<th>Lecture/Practice</th>
				<th>Group</th>
				<th>Prepod(FIO)</th>
            </tr>
            <?php
                while ($data = $query4->fetch_assoc())
                {
                    echo "<tr>";
                    echo "
                    <td>".$data['Number lesson']."</td>
                    <td>".$data['Time']."</td>
                    <td>".$data['Kab']."</td>
                    <td>".$data['Subject']."</td>
                    <td>".$data['Lecture/Practice']."</td>
                    <td>".$data['Group']."</td>
                    <td>".$data['Prepod(FIO)']."</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </table>
		
		<center>
        <caption>Пятница</caption>
		<center>
		
		<table>
            <tr>
				<th>Number lesson</th>
				<th>Time</th>
				<th>Kab</th>
				<th>Subject</th>
				<th>Lecture/Practice</th>
				<th>Group</th>
				<th>Prepod(FIO)</th>
            </tr>
            <?php
                while ($data = $query5->fetch_assoc())
                {
                    echo "<tr>";
                    echo "
                    <td>".$data['Number lesson']."</td>
                    <td>".$data['Time']."</td>
                    <td>".$data['Kab']."</td>
                    <td>".$data['Subject']."</td>
                    <td>".$data['Lecture/Practice']."</td>
                    <td>".$data['Group']."</td>
                    <td>".$data['Prepod(FIO)']."</td>
                    ";
                    echo "</tr>";
                }
            ?>
        </table>
		
        <h1><a href="/">На главную</a></h1>
    </section>
</body>
</html>