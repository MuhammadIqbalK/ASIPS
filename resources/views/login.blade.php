
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/login.css" rel="stylesheet" />
    <link href="js/login.js" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
   
      <div class='login'>
        <div class='login_title'>
          <span>Aplikasi Surveilans & Informasi Pencegahan Stunting </span>
        </div>
        <div class='login_fields'>
          <div class='login_fields__user'>
            <div class='icon'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
            </div>
            <input placeholder='Username' type='text'>
              <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
              </div>
            </input>
          </div>
          <div class='login_fields__password'>
            <div class='icon'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
            </div>
            <input placeholder='Password' type='password'>
            <div class='validation'>
              <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
          </div>
          <a href="{{ url('/Home') }}"><input type='submit' value='Log In'></a>
          <div class='login_fields__submit'>
            


            <div class='forgot'>
              <a href='#'>Forgotten password?</a>
            </div>
          </div>
        </div>
        <div class='success'>
          <h2>Authentication Success</h2>
          <p>Welcome back</p>
        </div>
        <div class='disclaimer'>
          <p>Asips 2021</p>
        </div>
      </div>
      <div class='authent'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
        <p>Authenticating...</p>
      </div>
     
      
</body>
</html>