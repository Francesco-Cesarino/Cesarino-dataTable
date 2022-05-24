<?php


function postRequest($start, $lenght, $order){
    require('connessione.php.php');
    $query = "SELECT * FROM employees ORDER BY id $order LIMIT $first, $lenght";
    $result = $mysqli->query($query);
    $rows = array();
    while ($row= $result-> fetch_assoc()) {
        $rows[]=$row;
    }
    return $rows;
}

function deleteRequest($id){
    require('connessione.php.php');
    $query = "DELETE FROM employees
                WHERE employees.id=$id";
        $result = $mysqli->query($query);
    }

    function putRequest($id, $birth_date, $first_name, $last_name, $gender, $hire_date){
        require('connessione.php.php');
        $query = "UPDATE employees
                SET birth_date='$birth_date', first_name='$first_name', last_name='$last_name', gender='$gender', hire_date='$hire_date'
                WHERE employees.id=$id";
        $result = $mysqli->query($query);
    }

    function totalElements(){
        require('connessione.php.php');
        $query = "SELECT COUNT(*)  FROM employees";
        $result = $mysqli->query($query);
        $row= $result-> fetch_array();
        return intval($row[0]);
    }
