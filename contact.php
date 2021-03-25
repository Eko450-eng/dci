<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css?v2.3.3">
    <title>Contact</title>
</head>
<body>
    <div class="head">
      <span class="hspan"></span>
        <div class="logo">
          <h1>WEBDevelopment</h1>
        </div>
          <input id="hamburger" type="checkbox">
          <label for="hamburger" class="hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
          </label>
          <div class="navigation">
            <div class="nav"><a href="index.html">Home</a></div>
            <div class="nav"><a href="html.html">HTML</a></div>
            <div class="nav"><a href="css.html">CSS</a></div>
            <div class="nav currentSite"><a href="contact.php"><span></span><span></span><span></span><span></span>Contact</a></div>
          </div>
        </div>
        <div class="banner">
          <div class="wih">
            <span></span><span></span><span></span><span></span>
            <h2>Contact me</h2>
            <p>You can send me a message using this form on here</p>
          </div>
        </div>
         
        <div class="formBox">
            <?php

      if(isset($_POST["submit"])){
      mail("ekrem@wipdesign.de","Anfrage", 'Name: '.$_POST["name"].  '   Email: '.$_POST["email"]. '  Message: '.$_POST["Message"],'From: ekrem@wipdesign.de');
        ?>
          <script type="text/javascript">
            window.alert("Thank you for your message");
          </script>
        <?php
    }
      ?>
          <form action="contact.php" method="post">
            <label>Name</label>
            <input required type="text" class="formField" name="name" placeholder="Name">
            <label>E-Mail</label>
            <input required type="email" class="formField" name="email" placeholder="Your E-Mail">
            <label>Message<label><br>
            <textarea required class="formField" name="Message" placeholder="Your message" cols="10" rows="2" maxlength="300"></textarea><br>
            <button class="button_1" type="submit" name="submit" value="Submit">Send</button>
          </form>
        </div>
</body>
</html>