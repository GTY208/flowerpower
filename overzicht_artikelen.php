<?PHP
include_once "database2.php";

$artikelen = $conn->query("SELECT * FROM artikel ORDER BY artikelcode DESC"); 

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>ARTIKELEN</h2>

 <table>
<thead>
    <tr>
            <th scope="col">artikelcode</th>
            <th scope="col">artikel</th>
            <th scope="col">prijs</th>
    </tr>
    
</thead>
<tbody>

<?php 
  while($info = $artikelen->fetch(PDO::FETCH_ASSOC)){ 
      echo "<tr>";
      echo "<td>".$info['artikelcode']."</td>";
      echo "<td>".$info['artikel']."</td>";
      echo "<td>".$info['prijs']."</td>";
      echo "<td><a href=\"delete_artikelen.php?id=$info[artikelcode]\" class='btn btn-warning'>Edit</a> | <a href=\"delete_artikelen.php?id=$info[artikelcode]\" onClick=\"return confirm('Weet je zeker dat je wilt verwijderen?')\"class='btn btn-danger'>Delete</a></td>";
  }

   ?>
    
</tbody>
 </table>

</body>
</html>
