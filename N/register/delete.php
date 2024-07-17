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
          <form method = "POST" action = "del.php" >
            <input
              type="id" name = "ID"
              placeholder="Your ID" 
              required
              class="input_box"
            />
            <input
              type="email" name = "mail"
              placeholder="Your Email"
              required
              class="input_box"
            />
            
            <input type="checkbox" id="terms" />
            <label for="terms">I accept the terms & conditions</label>
            <button type="submit">Delete</button>
        </div>
      </div>
    </dev>
</body>

    </html>