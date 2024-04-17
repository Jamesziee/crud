<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Registration Form</header>
        <form action="register.php" method="POST">
          <input type="text" name="fname" placeholder="First Name" required />
          <input type="text" name="lname" placeholder="Last Name" required />
          <input type="email" name="email" placeholder="Email address" required />
          <input type="text" name="number" placeholder="Number" required />
          <input type="password" name="password" placeholder="Password" required />
          <div class="sign" align="center">
            <input type="submit" name="submit" value="Signup" />
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
