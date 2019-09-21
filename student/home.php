<!DOCTYPE html>
<html>
<head>
	<title>
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<style>
</style>
</head>
<body class="bg-dark">
	
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please login</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New User</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login</h3>
                                <div class="row register-form">
                                    <div class="col-lg-12 text-center">
                                    	<form method="post" name="loginForm">
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="LOGIN"/>
                                        </form>
                                        
                                    </div>

                                </div>
                                   
                            </div>
                          <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Registraton Form</h3>
                                
          <form method="post" name="regForm" action="tableView.php" enctype="multipart/form-data">
                                <div class="row register-form">
                                	
                                    <div class="col-md-6">
                                    	 <div class="form-group">
                                           <input type="hidden" class="form-control" value="" name="stu_id" />
                                        </div>
                                    	
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *" value="" name="fname" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" name="mob" />
                                        </div>
                                         <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Birth Date *" value="" name="dob" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" name="gender">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female" name="gender">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                         	<label> Upload Your Photo</label>
                                            <input type="file" class="form-control" value="" name="image" />
                                        </div>
                                          <div class="form-group">
                                              <label>Subject:</label><br>                           
                                               <input type="checkbox" name= "sub[]" value="PHP"/>PHP
                                               <input type="checkbox" name= "sub[]" value="HTML"/>HTML
                                               <input type="checkbox" name= "sub[]" value="CSS"/>CSS
                                          </div>
       

                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                            <textarea type="text" class="form-control" placeholder="`Address *" value="" name="address"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" name="city">
                                                <option class="hidden"  selected disabled>Please select your City</option>
                                                <option>Pune</option>
                                                <option>Kolkata</option>
                                                <option>Channai</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" name="state">
                                                <option class="hidden"  selected disabled>Please select your State</option>
                                                <option>Maharashtra</option>
                                                <option>West Bengal</option>
                                                <option>Tamilnadu</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" name="country">
                                                <option class="hidden"  selected disabled>Please select your Country</option>
                                                <option>India</option>
                                                <option>xyz</option>
                                                <option>pqr</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" value="" name="uname" />
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="pass" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="cpass" />
                                        </div>
                                        
                                        
                                        <input type="submit" class="btnRegister"  name="register" value="Register"/>


                                    </div>
                            

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
 <script src="js/jquery.min.js"></script>  
 <script src="js/bootstrap.min.js"></script>         

</body>
</html>