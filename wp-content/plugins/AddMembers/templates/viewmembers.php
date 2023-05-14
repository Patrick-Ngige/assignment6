<?php

global $wpdb;

$table_name = $wpdb->prefix . 'members';


$results = $wpdb->get_results("SELECT * FROM $table_name");


if ($results) {
    echo '<table style="margin: 0 auto; width: 80%; background-color:#a2a8d3; border-collapse: collapse;color:  ;">';
    echo '<thead>
            <tr>
              <th style="border: 1px solid black; padding: 10px;">Name</th>
              <th style="border: 1px solid black; padding: 10px;">Phone Number</th>
              <th style="border: 1px solid black; padding: 10px;">Email</th>
            </tr>
          </thead>';
    echo '<tbody>';
  
    foreach ($results as $result) {
      echo '<tr>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->name . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->phone_number . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->email . '</td>';
      echo '</tr>';
    }
  
    echo  '</tbody>';
    echo  '</table>';
  } else {
    echo 'No members found.';
  }
  

    ?>