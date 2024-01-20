<?php
$cn = mysqli_connect("localhost","root","","nersary") or die("connection faild").mysqli_connect_error();
if(isset($_POST['click'])){
    $sql = "TRUNCATE TABLE login";
    $add = mysqli_query($cn, $sql);
    header('location:'.'nersary.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="accountDesign.css">
</head>
<body>
    <?php
        $sql = "SELECT * FROM login WHERE no = 1";
        $add = mysqli_query($cn, $sql);
        if ($add == true) {
            $count = mysqli_num_rows($add);
            if ($count > 0) {
                //if($count == 1){
                    while($rows = mysqli_fetch_assoc($add)) {
                       // $id = $rows['no'];
                        $email = $rows['email'];
                         $password = $rows['password'];

                    ?>
                   <!---<h1>//<?php echo $id?></h1>!--->
                    <section>
                <form action="account.php" method = "post"></form>
                 <div class="login-box">
                <form action="account.php" method="post">
                 <h1>User</h1>
                 <div class="input-box">
                 <label><h3><?php echo $email?></h3></label>
                 </div> 
                 <button type="submit" name = "click">Logout
                 </button>
                </form>
                 </section>
                    <?php
                    
                //}
            }
        }
    }

        
    ?>

</body>
</html>