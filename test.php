<?php
include_once('db.php');
$result = $con->query('select * from make');
?>
<select>


<?php
while ($row = $result->fetch_array()) {
    echo '<option value="'.$row['id'].'">'.$row['make'].'</option>';
}
?>

</select>
