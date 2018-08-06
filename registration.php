<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function validation(){
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    var uname = document.form.name.value,
        gender = document.form.gender.value,
        email = document.form.email.value,
        phone = document.form.phone.value,
        address = document.form.address.value,
        city = document.form.city.value,
        district = document.form.district.value,
        password = document.form.pass.value,
        cpassword = document.form.cpass.value;
    if( uname == "" )
   {
     document.form.name.focus() ;
     document.getElementById("errorBox").innerHTML = "enter the first name";
     return false;
   }
    if(document.form.gender[0].checked == false && document.form.gender[1].checked == false){
    document.getElementById("errorBox").innerHTML = "select your gender";
    return false;
   }
   
   if (email == "" )
    {
        document.form.email.focus();
        document.getElementById("errorBox").innerHTML = "enter the email";
        return false;
     }else if(!emailRegex.test(email)){
        document.form.email.focus();
        document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
        return false;
     }
     
       if (phone == "" )
    {
        document.form.phone.focus();
        document.getElementById("errorBox").innerHTML = "enter the phone number!";
        return false;
     }else if(!phoneno.test(phone)){
        document.form.phone.select();
        document.getElementById("errorBox").innerHTML = "Re-enter the valid phone number!";
        return false;
     }
    
     if (address == "") {
        document.form.address.focus();
        document.getElementById("errorBox").innerHTML = "select the Address!";
        return false;
     }
     if (city == "") {
        document.form.city.focus();
        document.getElementById("errorBox").innerHTML = "select the City!";
        return false;
     }
     if (district == "") {
        document.form.district .focus();
        document.getElementById("errorBox").innerHTML = "select the District!";
        return false;
     }
     
     
    if(password == "")
     {
         document.form.pass.focus();
         document.getElementById("errorBox").innerHTML = "enter the password";
         return false;
     }
        
         
    if(cpassword == "")
     {
         document.form.cpass.focus();
         document.getElementById("errorBox").innerHTML = "enter the confrim password";
         return false;
     }
    if(cpassword !=  password){
        document.form.cpass.focus();
        document.getElementById("errorBox").innerHTML = "Password  are not matching, re-enter again";
        return false;
     }
   
    
          
}

/*$(document).ready(function(){
    $("button").click(function(){
        alert("Please fill up the registration form!");
    });
});     
*/
</script>
<style>
 .login
    {
     color: white;
     width: 500px;
     margin:auto;
     border: 2px solid black;
     padding:20px 30px;
     background: rgba(0,0,0,0.5);
    
     position: absolute;
     top:15%;
     left:35%;
     border-radius:5px;
    }
a
    {
     color:white;
    }
    
 body
    {
     background-image:url("image/ford1.jpg");
     background-position:right-top;
     background-repeat:no-repeat;
     background-size:cover;
     background-attachment:fixed;
     color: #e7e7e7;     
    }
 
 .input
    {
     width:250px;
     height:30px;
    }
 #sign_user{
 border-radius:10px;
width:100px;
height:40px;
background:#FF00FF;
font-weight:bold;
font-size:20px;
}
#errorBox{
 color:#F00;
 }


</style></head>
<center>

<body>

   <div class="login">
      <form action="bankInfo.php" method="post" name="form">
         <fieldset  style="color:   #00bfff;">Registration form</fieldset>
         <br>
         <div id="errorBox"></div>
         <div>
         <input  placeholder="Username" name="name" type="text">  
        </div>
        <br>
        <div>
           <input name="gender" type="radio" value="male"><label>male</label>
           <input name="gender" type="radio" value="female"><label>female</label>  
        </div>
        <br>
        <div>
           <input placeholder="E-mail" name="email" type="email" autofocus>  
        </div>   
            <br>
         <div>
            <input  placeholder="Phone" name="phone" type="text" autofocus>  
         </div>      
        <br>
        <div>
          <input  placeholder="Address" name="address" type="text" autofocus>  
        </div>
        

            <br>
            <div>
                 <select id="district" name="district" style="width:154px;">
                     <option value="" selected>District</option>
                         <option value="1">Dhaka</option>
                         <option value="2">Chittagoan</option>  
                         <option value="3">Khulna</option>  
                         <option value="4">Rajshahi</option>  
                </select>
            </div>
            <br>
            <div>
                <select id="city" name="city" size="1" style="width:154px;">
                    <option value="" selected>City</option>
                         <option value="Dhanmondi">Dhanmondi</option>
                         <option value="khilgoan">khilgoan</option>  
                         <option value="gulshan">gulshan</option>  
                         <option value="bashundhara">bashundhara</option> 
                         <option value="baridhara">baridhara</option>
                         <option value="uttara">uttara</option>  
                         <option value="banshkhali">banshkhali</option>  
                         <option value="agrabad">agrabad</option> 
                         <option value="sitakunda">sitakunda</option>
                         <option value="hathazari">hathazari</option>  
                         <option value="Phultala">Phultala</option>  
                         <option value="Paikgachha">Paikgachha</option> 
                         <option value="Batiaghata">Batiaghata</option>
                         <option value="Rupsa">Rupsa</option>  
                         <option value="Godagari">Godagari</option>  
                         <option value="Charghat">Charghat</option> 
                         <option value="Durgapur">Durgapur</option>
                         <option value="Baghmara">Baghmara</option>  
                         <option value="Mohanpur">Mohanpur</option>  
                         
                </select>
            </div>
                         
            <br>
        <div>
        <input  placeholder="Password" name="pass" type="password">  
        </div>    
        <br>
        <div>
            <input placeholder="Confirm Password" name="cpass" type="password" value="">  
        </div>
       <div> 
        <hr>                            
            <button id="sign_user" onclick="return validation()" type="submit" >Sign Up </button>  
        </div> 
    </form>  
        <center>
                <b>Already registered ?</b> 
            <br>
            <a href="users.php">Login here</a>
        </center><!--for centered text-->  

</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
     $('#district').on('change', function (){
        //console.log("changedd");
        $.getJSON('location_handler.php', {districtId: $(this).val()}, function(data){
            //console.log(data);
            var options = '';
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x]['cityid'] + '">' + data[x]['name'] + '</option>';
            }
            $('#city').html(options);
        });
    });
});

</script>


</body>
</html> 





    