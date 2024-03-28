<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body style="background-color: rgb(35, 34, 34);background-image: url('25.png');background-repeat: no-repeat; background-size: 1600px 740px;">
    <center>
        <div class="login-box-wrapper">
        <div class="login-box animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
            <img src="MCAlogo.jpeg" alt="" style="height:80px; width:85px; margin-top:15px; border-radius:50px;"><h2 style="font-family: 'Trebuchet MS', sans-serif; color: lightblue;">Student Registration</h2>
            <form action="Insert.php" method="post" enctype="multipart/form-data" style="width: 400px; margin: 0 auto; text-align: left;">
                <label for="studentID" style="font-weight: bold; color: lightblue;">Student ID:</label>
                <input type="text" id="studentID" name="studentID" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="firstName" style="font-weight: bold; color: lightblue;">First Name:</label>
                <input type="text" id="firstName" name="firstName" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="lastName" style="font-weight: bold; color:  lightblue;">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="middleName" style="font-weight: bold; color:  lightblue;">Middle Name:</label>
                <input type="text" id="middleName" name="middleName" placeholder="(optional)" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
                
                
                 <label for="password" style="font-weight: bold; color:  lightblue;">Password:</label>
                <input type="password" id="password" name="password" onclick="encryptPassword()" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="dob" style="font-weight: bold; color:  lightblue;">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="gender" style="font-weight: bold; color:  lightblue;">Gender:</label>
                <input type="radio" id="male" name="gender" value="Male" required style="margin-right: 5px;">
                <label for="male" style="color:  lightblue;">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required style="margin-right: 5px;">
                <label for="female" style="color:  lightblue;">Female</label><br>

                <label for="email" style="font-weight: bold; color:  lightblue;">Email:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
<?php /*
                <label for="contact" style="font-weight: bold; color: red;">Contact:</label>
                <input type="text" id="contact" name="contact" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>

                <label for="address" style="font-weight: bold; color: red;">Address:</label>
                <textarea id="address" name="address" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;"></textarea><br>

                <label for="image" style="font-weight: bold; color: red;">Image:</label>
                <input type="file" id="image" name="image" required style="margin-bottom: 10px;"><br>
 
 */?>
                <br>
                <input type="submit" value="Register" style="background-color:rgb(6, 2, 28) !important; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
            </form>
        </div> 
        </div>
    </center>
<script>
        function encryptPassword() {
            var passwordInput = document.getElementById('password');
            var passwordValue = passwordInput.value;
            var hashedPassword = md5(passwordValue); // Using MD5 to hash the password
            passwordInput.value = hashedPassword; // Replace the original password with the hashed password
        }
    </script>
</body>
</html>
