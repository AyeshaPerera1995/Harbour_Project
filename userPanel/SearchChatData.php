<?php
include_once 'build/PHP/DB.php';

if (isset($_GET['uid'])){

    $uid = $_GET['uid'];
    $get_chat = "SELECT * FROM chat WHERE parent_chat_id='$uid' ORDER BY chat_id";
    $run_chat = mysqli_query($con, $get_chat);
    while($chat_row = mysqli_fetch_assoc($run_chat)) {
        $msg = $chat_row['message'];
        $date = $chat_row['date'];
        $time = $chat_row['time'];
        $status = $chat_row['status'];

        if ($status==0) {
            echo '<div class="form-group" style="line-height:17px; margin-left:300px;">';
            echo '<label style="color:green;">Me :</label><br>';
            echo '<label style="color:gray; font-size:18px; font-weight:normal;">'.$msg.'</label><br>';
            echo '<label>'.$date.'  |  at : '.$time.'</label>';
            echo '</div><hr>';
        }
        if ($status==1) {
            echo '<div class="form-group" align="right" style="line-height:17px; margin-right:300px;">';
            echo '<label style="color:red;">Admin :</label><br>';
            echo ' <label style="color:gray; font-size:18px; font-weight:normal;">'.$msg.'</label><br>';
            echo '<label>'.$date.'  |  at : '.$time.'</label>';
            echo '</div><hr>';
        }


    }



    
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';

}

?>


                                        
                                        
                                       
                                       