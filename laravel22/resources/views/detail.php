<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANISSA'S ASSIGNMENT 22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        <h1 style="text-align: center;">DETAIL USER</h1>


        <div class="col-6 card shadow-lg border-0 m-5 p-5 mx-auto">
            <div class = "card-body">
        <form action="tampil_data_pengguna.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" value="<?php echo 'id'?>" name="id">
            <div>
            <label for="name">NAME</label><br>
            <?php echo 'ANISSA TUN SAADAH'?>
            <br>
            <br>
            </div>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label  for="role">ROLE USER</label> <br> 
            <?php echo 'ADMIN'?>
            </div>

            <div class="col">
            <label for="password">PASSWORD</label><br>
            
            <input  style="width: 63%" type="password" id="password" name = "password" value="<?php echo 'password'?>" placeholder="Recipient's username" required>
            <a  id ="see" style="width: 5em; color:white" onclick="seeFunction()" class="col btn btn-primary form-control my-2 mx-2" role="button">OPEN</a>
            <br>
            <br>
            </div>
            </div>
            <script>
                function seeFunction() {
                    var pass = document.getElementById("password");
                    if (pass.type === "password"){
                        pass.type = "text";
                    }else{
                        pass.type = "password";
                    }

                }
                
            </script>

            <div class="d-flex flex-coloumn">
            <div class="col">
            <label for="email">EMAIL</label><br>
            <?php echo '20104072@ITTELKOM-PWT.AC.ID'?>
            <br>
            <br>
            </div>

            <div class="col">
            <label for="phone">PHONE NUMBER</label><br>
            <?php echo '087872639297'?>
            <br>
            <br>
            </div>
            </div>


            <div>
            <label for="address">FULL ADDRESS</label><br>
            <?php echo 'SOUTH OF JAKARTA'?>
            <br>
            <br>
            </div>

            <div>
            <label for="avatar">PHOTOS</label><br>
            <img src="./0d9c9626bf4e24612c90465fbaa243a0.jpg" width="100" height="100">
            <br>
            <br>
            </div>

            <div>
            <label for="avatar">CREATED AT</label><br>
            <?php echo '2023-05-19 10:35:50'?>
            <br>
            <br>
            </div>

            <div>
            <label for="avatar">UPDATED AT</label><br>
            <?php echo '2023-05-10 11:16:50'?>
            <br>
            <br>
            </div>
            
            <input type="submit" value="BACK" class="btn btn bg-primary" style="color :white">
        </form>

            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>   
</body>
</html>