<?php
include 'connection.php';
    $id = $_GET['queries_id'];
    $content = $_GET['content'];
    
    $result_select_query_by_id=mysqli_query($con,$sql_select_query_by_id . $id);
    $row_select_query_by_id = mysqli_fetch_assoc($result_select_query_by_id);

    $email_id  = $row_select_query_by_id["email"]; 
    $name  = $row_select_query_by_id["uname"]; 
    $question  = $row_select_query_by_id["question"]; 

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: admin@al-hayat.co.in";

    $email_content = 'Welcome '.$name .', <br/>' . '<br/> Question :' . $question . '<br/> <b>Reply :</b>'.$content ;
    echo $email_content ; 
    //mail($email_id,'Queries',$email_content, $headers);  
?>