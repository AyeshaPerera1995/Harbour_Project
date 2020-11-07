
<?php
//Include database connection
include_once 'build/PHP/DB.php';

if($_POST['cargo_id']) {
    $id = $_POST['cargo_id']; //escape string

    $get_cargo = "SELECT * from cargo_details where consignment_details_idconsignment_details='$id'";
    $run_cargo = mysqli_query($con, $get_cargo);
    $count = mysqli_num_rows($run_cargo);
    if ($count != 0) {
        
    
            echo "<table id='example1' class='table table-bordered table-striped'>";
            echo "<thead>
            <tr>
                <th>Name</th>
                <th>Nb. of packages</th>
                <th>Kind of packages</th>
                <th>Description of goods</th>
                <th>Textual reference</th>
                <th>IMO class</th>
                <th>Gross qty</th>
                <th>Net qty</th>                                             
            </tr>
            </thead><tbody>";

            while ($cargo_row = mysqli_fetch_assoc($run_cargo)) {                                     
                $name = $cargo_row['name'];
                $n_pack = $cargo_row['nb_of_packages'];
                $k_pack = $cargo_row['kind_of_packages'];
                $desc = $cargo_row['desc_of_goods'];
                $t_ref = $cargo_row['textual_reference'];
                $imo = $cargo_row['IMO_class'];
                $g_qty = $cargo_row['gross_qty'];
                $n_qty = $cargo_row['net_qty'];

            echo "<tr><td>$name</td>";
            echo "<td>$n_pack</td>";
            echo "<td>$k_pack</td>";
            echo "<td>$desc</td>";
            echo "<td>$t_ref</td>";
            echo "<td>$imo</td>";
            echo "<td>$g_qty</td>";
            echo "<td>$n_qty</td> </tr>";

            }
            echo "</tbody>                                            
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Nb. of packages</th>
                <th>Kind of packages</th>
                <th>Description of goods</th>
                <th>Textual reference</th>
                <th>IMO class</th>
                <th>Gross qty</th>
                <th>Net qty</th>             
            </tr>
            </tfoot>
        </table>";   
        
        }
        else{

    echo "<label style='font-size:18px; color:gray;'>No any cargo items...</label>";
}

 }
?>