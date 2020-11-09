<?php

$query2 = "select * from ship where status=2 ";
$result2 = mysqli_query($con, $query2);
if ($result2)
{
    // it return number of rows in the table.
    $row2 = mysqli_num_rows($result2);

    if ($row2)
    {

    }
    // close the result.
    // mysqli_free_result($result);
}
