<?php

if (!empty($_POST['search'])) {
        $Search_Query = $conn->real_escape_string($_POST['search']);
        $query = "SELECT * FROM employees
        WHERE name LIKE '%{$Search_Query}%' OR type LIKE '%{$Search_Query}%' LIMIT 6 OFFSET 0; ";
        $result = $conn->query($query) ;
        $html = "<table class='table'>";
        $html .= "
        <tr >
          <th>Redni broj</th>
          <th>Ime </th>
          <th>Prezime</th>
          <th>Datum rođenja</th> 
          <th>Datum zaposlenja</th> 
          <th>Neto plata</th> 
          <th>Dani godišnjeg odmora</th> 
          <th>Odsek</th> 
          <th>Stručna sprema</th> 
        </tr>
     ";
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= "<tr><td>" . $row['id'] . "</td>";
                $html .= "<td>" . $row['name'] . "</td>";
                $html  .= "<td>" . $row['surname'] . "</td>";
                $html  .= "<td>" . $row['birthday'] . "</td>";
                $html  .= "<td>" . $row['employmentDate'] . "</td>";
                $html  .= "<td>" . $row['netoSallary'] . "</td>";
                $html  .= "<td>" . $row['vacation'] . "</td>";
                $html  .= "<td>" . $row['department'] . "</td>";
                $html  .= "<td>" . $row['education'] ."</td></tr>";
            }
            
            $html .= "</table>";
            echo $html;
        } else {
            echo "Nema rezultata";
        }
    } else {
        echo "Unesite pretragu!";
    }
    ?>S