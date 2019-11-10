<?php 
    include 'birthdaysignup.inc.php'
?>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>

  .container-form{
  max-width: 500px;
  margin: auto 
  }
  
#prev {
    width: 150px;
    border-radius: 100px;
    height: 150px;
    display: none
}

  .form-signin {
    padding: 1px 29px 29px;
    margin: 0 auto;
    /*//margin-top:90px;//*/
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px 0 0 5px;
    -moz-border-radius: 5px 0 0 5px;
    border-radius: 5px 0 0 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
    font-family: Tahoma, Geneva, sans-serif;
    color: #990000;
    font-weight: lighter;
}

.signup-form-container {
    border-radius: 15px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin: 4% auto;
    max-width: 500px;
    border-top-color: #00c0ef;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1)
}

.form-header {
    color: #444;
    display: block;
    padding: 20px;
    position: relative;
    border-bottom: 1px solid #f4f4f4;
}

.form-header .form-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1
}

.form-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 20px;
}

.form-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 20px;
    background-color: #fff
}

.form-control {
    font-size: 16px;
    height: auto;
    padding: 7px 9px;
}

.form-group #error {
    color: #a94442;
}
  .glyphicon{
    color: #000;
  }
  .header{
    font-size:25px;
    font-weight:bold;

  }
  input[type="text"]{
    border: 0;
    border-bottom: 2px solid;
  }

 input[type="number"]{
    border: 0;
    border-bottom: 2px solid;
  } input[type="file"]{
    border: 0;
    border-bottom: 2px solid;
  }

</style>


    
<div id="" class="container" style="   ">
     <div class="container-form" >
      <div class="signup-form-container" >
    <form method="post" action="" enctype="multipart/form-data" id="register-form" autocomplete="off">
         
         <div class="form-header">
          <p style="text-align:center" class="header">SIGN UP FOR YOUR BIRTHDAY UPDATE</p>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                    <div  style="width: 350px; height: 150px;text-align: center; margin: auto; background: #d6d6d6; padding: auto; cursor: pointer; border-radius: 10px;" class="prev">
                      <h6 class="showText" style="font-size: 16px; font-family: Arial, serif; " id="showText"><span style="color: #a11111; font-size:14px"></span>Upload Image<span class="glyphicon glyphicon-camera" style="text-align: center;"></span><span style='display:block; margin-top:60px; font-size:23px'><i class="icon-upload-alt"></i></span></h6>
              <img id="prev" style="display: none;">
            
            </div>   <input type="file" accept="image/*" style="float: left; width: 70%; padding: 4px; color: #e3e3e3; background: #e3e3e3;display: none; cursor: pointer;" name="avatar" required id="avatar" onchange="loadFile(event)" multiple >
         </div>
                  
         <div class="form-body">
         
            <!-- json response will be here -->
                <?php
    if(isset($msg)){
      echo $msg;
    }
    ?>
              <!-- json response will be here -->
            

            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="fullname" type="text" id="name" class="form-control" placeholder="FULL NAME" maxlength="40" required  autofocus="true" />
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
              <fieldset>
                <legend style="text-align: center;"><i style="font-size:14px">Your D.O.B (DAY AND MONTH ONLY)</i></legend>
              <div class="form-group">
              

                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                   
                                 <select name="date"    class="form-control">
                                    <option value="DAY">DAY</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    </select>
                                    <select name="month"  class="form-control">
                                    <option value="MONTH">MONTH</option>
                                    <option value="01">JAN</option>
                                    <option value="02">FEB</option>
                                    <option value="03">MARCH</option>
                                    <option value="04">APRIL</option>
                                    <option value="05">MAY</option>
                                    <option value="06">JUNE</option>
                                    <option value="07">JULY</option>
                                    <option value="08">AUGUST</option>
                                    <option value="09">SEP</option>
                                    <option value="10">OCT</option>
                                    <option value="11">NOV</option>
                                    <option value="12">DEC</option>
                                  </select>
                                  
                                   
                                                   </div>
                   <span class="help-block" id="error"></span>
              </div>
              </fieldset>
                        <hr>
              
              
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                   <input name="phone" type="number"  class="form-control" placeholder="PHONE(WHATSAPP)" maxlength="14"  required="true" required/>
                   </div>
                   <span class="help-block" id="error"></span>
              </div>  
              <!-- <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="fbadd" type="text"  class="form-control" placeholder="Fb username(e.g: facebook.com/john.oba.10)" maxlength="400"  required="true" required/>
                   </div>
                   <span class="help-block" id="error"></span>
              </div> -->
                 
            </div>
           
            
            <div class="form-footer">
                <center><button type="submit" style="background: #3b5990" class="btn btn-info form-control" id="btn-signup" name="btn-signup">
                 <span class="glyphicon glyphicon-log-in"></span> Sign Me Up
                </button>
              </center>
            </div>
<br><br><hr>
            </form>
            </div>
            </div>   

    </div>
    
</div>
<script src="../js/jquery-1.9.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script >
   $(document).ready(function(){
    $("#navcollapser").click(function(){
      $(this).toggleClass("open");
    });
    $("#avatar").on('change', function(){
      $("#showText").hide();
    })
   })
  </script>
      <script>
    $(document).ready(function(){
         $('.prev').on('click', function(){
          $("#avatar").click();
          $("#avatar").on('change', function(){
          $("#prev").show();
        })
        });
      })
      
    </script>
    <script>
var loadFile = function(event){
    var reader = new FileReader();
    var showText = document.getElementById('showText');
    showText.display = "none" ;
    reader.onload = function() {
      var output = document.getElementById('prev');
      
      output.src = reader.result;
    };
  reader.readAsDataURL(event.target.files[0]);

  };

</script>
<script type="text/javascript">
  
</script>

