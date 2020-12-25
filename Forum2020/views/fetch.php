<?php

//fetch.php

include('database_connection.php');

$column = array('id_post', 'nomp', 'topic', 'commentaire', 'ask');

$query = "SELECT * FROM serv ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE id_post LIKE "%'.$_POST['search']['value'].'%" 
 OR nomp LIKE "%'.$_POST['search']['value'].'%" 
 OR topic LIKE "%'.$_POST['search']['value'].'%" 
 OR commentaire LIKE "%'.$_POST['search']['value'].'%" 
 OR ask LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_post DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id_post'];
 $sub_array[] = $row['nomp'];
 $sub_array[] = $row['topic'];
 $sub_array[] = $row['commentaire'];
 $sub_array[] = $row['ask'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM serv";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>