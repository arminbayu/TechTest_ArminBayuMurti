<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    <?php include($_SERVER['DOCUMENT_ROOT']."/TechTest_ArminBayuMurti/adminTest/themes/adminTemplate/header.php"); ?>
    <style media="screen">
    @import "bourbon";

      body {
        background: #eee !important;
      }

      .wrapper {
        margin-top: 80px;
        margin-bottom: 80px;
      }

      .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);

        .form-signin-heading,
        .form-control {
          position: relative;
          font-size: 16px;
          height: auto;
          padding: 10px;
          @include box-sizing(border-box);

          &:focus {
            z-index: 2;
          }
        }
      }

      input {
        margin-top: 10px;
        margin-bottom: 10px;
      }

    </style>
</head>

<body>
  <div class="wrapper">
    <form class="form-signin" action="<?= site_url('login') ?>" method="POST">
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
  </div>
</body>

</html>
