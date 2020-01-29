<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <title>reg form2 bootstrap</title>
    </head>
    <body>

    <div class = "container-fluid">

     <div class = "header">
        

        
        <ul class="navbar navbar-expand-sm bg-dark navbar-dark nav justify-content-end">
            <a class="navbar-brand" href="#" style="border-radius: 10px;">
                <img src="\images\logo1.png" alt="logo" style="width:100px;height: 50px;margin-right: 1000px;border-radius: 18px;">
            </a>
            
            <li class="nav-item" style="margin-left:50px">
            <button type="button" class="btn btn-outline-secondary"style="color:white;" >About Us</button>
            <button type="button" class="btn btn-outline-secondary" style="color: white;" >Contact Us</button>
            <a href="\php\login.php"><button type="button" class="btn btn-outline-secondary" style="color: white;">Home</button></a>
            </li>
            
            
        </ul>

    


     </div>
  </div>
  <div class = "container-fluid">
  <div class = col-xl-12 style="background-color: #f1fa3c;height:680px;padding-top:15px">
                  <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                  </div>
                  <div class = col-xl-4 style="border:1px solid black;height:500px;margin-left:550px;background-color:white;box-shadow:
                    10px 10px 10px gray;border-radius:20px;margin-top:100px;">
                    <h2 style="text-align:center;padding-top:29px;font-size:30px">2. Qualification</h2>
                    <form>
                    <div class="input-group mb-3" style="padding-top:10px">
                             <select class="custom-select" style="border-radius:52px;margin-right:20px;
                             padding-top:2px;border:solid 2px lightgray" type="text" name="cat"  id="ca" required>
                                <option disabled selected>Select your category..</option>
                                <option >Designer</option>
                                <option >Interviewee</option>
                                
                             </select>

                             <div class="input-group mb-3" style="padding-top:10px">
                             <select class="custom-select" style="border-radius:52px;margin-right:20px;margin-top:35px;
                             padding-top:2px;border:solid 2px lightgray" type="text" name="cat"  id="ca" required>
                                <option disabled selected>Select your category..</option>
                                <option >Designer</option>
                                <option >Interviewee</option>
                                
                             </select><br><br>

                             <input class="form-control" placeholder="Enter your name" style="border-radius:20px;margin-top:50px;border:2px solid lightgray"
                        type="text" name="Name" id="n" value="">
                        <input type="hidden" value="<?php echo $_POST['Name'] ?>" name="Name" >
         <input type="hidden" value="<?php echo $_POST['Email'] ?>" name="Email">
         <input type="hidden" value="<?php echo $_POST['Cnum'] ?>" name="Cnum">
         <input type="hidden" value="<?php echo $_POST['DOB'] ?>" name="DOB">
         <input type="hidden" value="<?php echo $_POST['male'] ?>" name="male">
         <input type="hidden" value="<?php echo $_POST['cat'] ?>" name="cat">





                        <input type="submit" value="NEXT" id="sub" onClick="return validate_qualification(this.form)">


                    </form>
                   </div>



  </div>

    </body>

    </html>
