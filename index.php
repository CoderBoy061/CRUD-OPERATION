<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>User Register</title>
    <style>
      #stateId{
        width:40vw;
        padding:8px;
        border-radius:5px
    }
    body{
        background-color:#ededed
    }
    .contact{
        background-color: white;
        margin-top:20px;
        margin-left:10vw;
        margin-right:10vw;
        height:70vh;
       box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.12);
    }
    
    </style>
  </head>
  <body>
    <div class="containeer">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User Registration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="contact">
    <h3 class="text-center"><u>Create Your account</u></h3>
    <div class="col-lg-6 m-auto d-block">
                <form action="/task/_handleUser.php" method="post">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Enter Your Name</label>
                        <input type="email" placeholder="Enter Your Name" autoComplete=false name="contactName"class="form-control" id="exampleInputEmail1"
                            name="contactEmail" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" placeholder="Enter Your Email" class="form-control" id="exampleInputEmail1"
                            name="contactEmail" aria-describedby="emailHelp">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="email" class="form-control mb-3" placeholder="Enter Your Phone Number"
                                id="exampleInputEmail1" name="contactPhone" aria-describedby="emailHelp">
                                <label> State  </label>
                                 <select name="contactState" id="stateId">
                                 <option value=""> --select State--</option>
                                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                                 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                 <option value="Bihar">Bihar</option>
                                 <option value="Chhattishgarh">Chhattishgarh</option>
                                 <option value="Goa">Goa</option>
                                 <option value="Gujrat">Gujrat</option>
                                 <option value="Harayana">Harayana</option>
                                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                                 <option value="Jammu and Kashmi">Jammu and Kashmir</option>
                                 <option value="Jharkhand">Jharkhand</option>
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Manipur">Manipur</option>
                                 <option value="Meghalaya">Meghalaya</option>
                                 <option value="Mizoram">Mizoram</option>
                                 <option value="Nagaland">Nagaland</option>
                                 <option value="Odisha">Odisha</option>
                                 <option value="Punjab">Punjab</option>
                                 <option value="Rajasthan">Rajasthan</option>
                                 <option value="Sikkim">Sikkim</option>
                                 <option value="Tamil Nadu">Tamil Nadu</option>
                                 <option value="Telengana">Telengana</option>
                                 <option value="Tripura">Tripura</option>
                                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                                 <option value="Uttrakhand">Uttrakhand</option>
                                 <option value="West Bengal">West Bengal</option>
                


                                 </select>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="mt-2">Full Adress</label>
                                <input type="email" class="form-control " placeholder="Enter Your Enter Your Address"
                                    id="exampleInputEmail1" name="contactAddress" aria-describedby="emailHelp"><div class="form-group">
                                <label for="exampleInputEmail1">Enter Your City</label>
                                <input type="email" class="form-control" placeholder="Enter Your City"
                                    id="exampleInputEmail1 " name="contactCity" aria-describedby="emailHelp">
                                  

                                </div>

                                <button type="submit" name="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
    </div>
    
    
    </div>

    <!-- <option selected id="state" name="contactState">Choose your State</option>
                                            <option value="1">Andhra Pradesh</option>
                                            <option value="2">Arunachal Pradesh</option>
                                            <option value="3">Bihar</option>
                                            <option value="4">Chhattishgarh</option>
                                            <option value="5">Goa</option>
                                            <option value="6">Gujrat</option>
                                            <option value="7">Harayana</option>
                                            <option value="8">Himachal Pradesh</option>
                                            <option value="9">Jammu and Kashmir</option>
                                            <option value="10">Jharkhand</option>
                                            <option value="11">Karnataka</option>
                                            <option value="12">Kerala</option>
                                            <option value="13">Madhya Pradesh</option>
                                            <option value="14">Maharashtra</option>
                                            <option value="15">Manipur</option>
                                            <option value="16">Meghalaya</option>
                                            <option value="17">Mizoram</option>
                                            <option value="18">Nagaland</option>
                                            <option value="19">Odisha</option>
                                            <option value="20">Punjab</option>
                                            <option value="21">Rajasthan</option>
                                            <option value="22">Sikkim</option>
                                            <option value="23">Tamil Nadu</option>
                                            <option value="24">Telengana</option>
                                            <option value="25">Tripura</option>
                                            <option value="26">Uttar Pradesh</option>
                                            <option value="27">Uttrakhand</option>
                                            <option value="28">West Bengal</option> -->

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