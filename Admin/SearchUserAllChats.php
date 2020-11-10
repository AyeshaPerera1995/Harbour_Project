
<?php
include_once 'build/PHP/DB.php';

// get users
$get_u = "SELECT * FROM user";
$run_u = mysqli_query($con, $get_u);
while ($u_row = mysqli_fetch_assoc($run_u)) {
    $uid = $u_row['iduser'];
    $fn = $u_row['family_name'];
    $gn = $u_row['given_name'];

    $get_chats = "SELECT * FROM chat where parent_chat_id='$uid'";
    $run_chats = mysqli_query($con, $get_chats);
    $num_rows = mysqli_num_rows($run_chats);
    while ($c_row = mysqli_fetch_assoc($run_chats)) {
         $msg = $c_row['message'];
         $date = $c_row['date'];
         $time = $c_row['time'];
         $status = $c_row['status'];
if($status==0){
                echo '<div class="form-group" style="line-height:17px;">';
                echo '<label style="color:green;">'.$gn.' '.$fn.':</label><br>';
                echo '<label style="color:gray; font-size:18px; font-weight:normal;">'.$msg.'</label><br>';
                echo '<label>'.$date.'  |  at : '.$time.'</label><br>';
} 
if($status==1){
    echo '<div class="form-group" style="line-height:17px;">';
    echo '<label style="color:red;">Admin(Me):</label><br>';
    echo '<label style="color:gray; font-size:18px; font-weight:normal;">'.$msg.'</label><br>';
    echo '<label>'.$date.'  |  at : '.$time.'</label><br>';
}        
    
    }
if($num_rows){
              
    echo'<form action="admin_message.php" method="post">
    <div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <input type="hidden" id="uid" name="id" value="'.$uid.'">
            <input type="text" class="form-control" required placeholder="Reply to message here....." name="rmsg"/>                                                   
        </div>
    </div>
    <div class="col-sm-4">
    <input style="float:right; margin-right:50px;" type="submit" value="Reply" name="reply" class="btn btn-danger btn-sm"/></form>               
    </div>
    </div>
    </form><hr>';
                
}
            
}







?>
