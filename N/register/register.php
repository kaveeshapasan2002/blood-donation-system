<html>
    <head> 
        <title>  </title>
        <link rel="stylesheet" href="style/register.css" />
</head>

<body>

<?php
   require 'config.php'
?>


<dev class="hero">
      <h1>Join with us</h1>
      <div class="signup-box">
        <div class="details">
          <form method = "POST" action = "insert.php" >
            <input
              type="id" name = "ID"
              placeholder="Your ID" 
              required
              class="input_box"
            />
            <input
              type="name" name = "name"
              placeholder="Your Name"
              required
              class="input_box"
            />
            <input
              type="email" name = "mail"
              placeholder="Email Address"
              required
              class="input_box"
            />
            <input
              type="password" name = "passwrd"                   
              placeholder="Create a password"
              required
              class="input_box"
            />
            <input
              type="number" name = "age"
              placeholder="Age"
              required
              class="input_box"
            />
            <input
              type="date" name = "dob"
              placeholder="Date Of Birth"
              required
              class="input_box"
            />
            <input
              type="tel" name = "phone"
              placeholder="Contact Number"
              required
              class="input_box"
            />
            <input type="checkbox" id="terms" />
            <label for="terms">I accept the terms & conditions</label>
            <button type="submit">SIGN UP</button>
            <button type="reset">reset</button>
            <button id="myButton" class="lbttn">Login</button>
          </form>
        </div>
      </div>
    </dev>

    

<script>
    document.getElementById("myButton").onclick = function() {
        window.location.href = "http://localhost/login/login.php";
    };
</script>


</body>

    </html>