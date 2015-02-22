
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;
    background-color: #f1f1c1;
}
</style>

<br>

<table id="t01">
  <tr>
    <th>#</th>
    <th>Full Name</th>
    <th>University</th>
    <th>Faculty</th>
    <th>Department</th>
  </tr>
  <?php
  $i = 1;
	foreach($all as $row){
		echo "<tr>";
    echo "<td>" . $i . "</td>";
		echo "<td>" . $row->full_name . "</td>";
		echo "<td>" . $row->university . "</td>";
		echo "<td>" . $row->faculty . "</td>";
		echo "<td>" . $row->department . "</td>";
		echo "</tr>";
    $i= $i+1;
	}
  ?>
</table>
