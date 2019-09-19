<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

  <style type="text/css">

    .content {
      max-width: 500px;
      margin: auto;
    }

    .title {
      font-family: Work Sans;
      font-style: normal;
      font-weight: bold;
      font-size: 40px;
      line-height: 47px;
      letter-spacing: 0.05em;
      color: #000000;
    }

    .check {
      height: 65.81px;
      background-color: #EAEAEA !important;
      padding: 10px;
    }

    label.checkbox {
      font-size: 14px;
    }

    .btn1 {
      display: inline-block;
      font-weight: 400;
      color: white;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: #1EE06C;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      box-shadow: 1px 6px 14px rgba(0, 0, 0, 0.25);
    }

    .field-icon {
      position: absolute;
      margin: 15px 400px;
      color: #aaa;
      transition: 0.3s;
      cursor: pointer;
    }

    .field-icon.active {
      color: dodgerblue;
    }

  </style>
</head>

<body style="background-color: #F4F3F3;">
  <form action="authentication.php" method="post">
    <div class="content">
      <div class="card mt-5 mb-5">
        <p class="text-center title my-5">Create Account</p>

        <div class="card-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" class="form-control" name="name" required>
            <label>Name</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas prefix grey-text">
              <svg width="30" height="30" viewBox="0 0 150 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="50" height="100" fill="#008000"/>
                <rect x="100" width="50" height="100" fill="#008000"/>
                <rect x="50" width="50" height="100" fill="white"/>
              </svg>
            </i>
            <input type="text" class="form-control" name="mobile" required>
            <label>+234</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" class="form-control" name="email" required>
            <label>Email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <span class="fas fa-eye field-icon" id="eye"></span>
            <input type="password" id="pwd" class="form-control" name="password" required>
            <label>Password</label>
          </div>

          <div class="check my-5">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultUncheckedDisabled2" required>
              <label class="custom-control-label checkbox" for="defaultUncheckedDisabled2">I understand agree to terms and conditions guarding this corporation</label>
            </div>
          </div>

          <div class="text-center">
            <button class="btn1 btn-block my-4 py-3" type="submit" name="register">Create Account</button>
          </div>

          <p class="text-center mt-5" style="color: black; font-size: 16px;">Don't have an account?<a href="index.php"><span style="color: #1EE06C;"> Login</span></a></p>

        </div>
          
      </div>
    </div>
  </form>
  
  
  <script type="text/javascript">
    var pwd = document.getElementById('pwd');
    var eye = document.getElementById('eye');

    eye.addEventListener('click',togglePass);

    function togglePass() {
      eye.classList.toggle('active');

      (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
    }
  </script>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</body>
</html>