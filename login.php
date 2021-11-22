<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Login</title>
  </head>
  <body>


  <div class="center">
      <h1>Login</h1>
      <form method="post" action="index.php">
        <div class="txt_field">
          <input type="text" required />
          <span></span>
          <label>Library ID</label>
        </div>
        <input type="submit" value="Login" />
        <div class="signup_link">
          No library ID? <a href="#">Request Here</a>
        </div>
      </form>
