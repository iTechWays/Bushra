<?php
session_start();
/*$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db('datta', $conn) or die(mysqli_connect_error());
*/
// 1. Create a database connection
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
    die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db('bushra',$conn);
if (!$db_select) {
    die("Database selection failed: " . mysql_error());
}

if(empty($_SESSION['user_id'])){
header("location:login.php");
}
//echo $_SESSION['user_id'];

function flash( $name = '', $message = '', $class = 'success fadeout-message' )
{
    //We can only do something if the name isn't empty
    if( !empty( $name ) )
    {
        //No message, create it
        if( !empty( $message ) && empty( $_SESSION[$name] ) )
        {
            if( !empty( $_SESSION[$name] ) )
            {
                unset( $_SESSION[$name] );
            }
            if( !empty( $_SESSION[$name.'_class'] ) )
            {
                unset( $_SESSION[$name.'_class'] );
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }
        //Message exists, display it
        elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
        {
            $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
            echo '<div style="color:red;text-align:center;font-size:20px" class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}
?>