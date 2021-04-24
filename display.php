<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>display data</title>
    <style>
    table, th, td {
  border: 1px solid black;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
body{
    background-color:#ededed
}
.user_table{
    margin-left:20vw;
    margin-right:18vw;
    background-color:white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.12);
}
.user_header{
    text-align:center;
    margin-top:20px;
    margin-bottom:20px

}
    </style>
  </head>
  <body>


  
    <h1 class="user_header"><u>List Of User</u></h1>
    <div class="user_table">
    <table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>State</th>
    <th>City</th>
    <th>Address</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "task";
                
                $conn = mysqli_connect($servername,$username,$password,$database);

                $sql = "SELECT * FROM `user`";
                $result = mysqli_query ($conn , $sql);
                while($res = mysqli_fetch_array($result)){
?>

                    <tr>
                    <td><?php echo $res['id'];  ?> </td>
                    <td><?php echo $res['user_name'];  ?></td>
                    <td><?php echo $res['user_email'];  ?></td>
                    <td><?php echo $res['user_mobile'];  ?></td>
                    <td><?php echo $res['user_state'];  ?></td>
                    <td><?php echo $res['user_city'];  ?></td>
                    <td><?php echo $res['user_address'];  ?></td>
                    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none"> Delete </a>  </button> </td>
                    <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none"> Update </a> </button> </td>
                  </tr>

            
                <?php
                }
            ?>
 
</table>
</table></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>