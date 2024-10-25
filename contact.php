<?php
    include("conn.php");
    echo "$samplename <br>";

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $msg = filter_input(INPUT_POST, 'message');

    

    echo "$name<br>";
    echo "$email<br>";
    echo "$phone<br>";
    echo "$msg<br>";

    $sql = "INSERT INTO contact VALUES('$name','$email',$phone,'$msg');";
    $result = mysqli_query($conn,$sql);
    echo"Data Inserted";

        
    // echo '
    // <script>
    //     alert("Form Submitted Successfully.");
    // </script>';

    sleep(0.5);
    header("Location:index.html#contact");
    exit();
    
?>