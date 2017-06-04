<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Luxury Nail - Admin </title>

    <!-- Bootstrap -->
      {!! Html::style('admin/vendors/bootstrap/dist/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
      {!! Html::style('admin/vendors/font-awesome/css/font-awesome.min.css') !!}
    <!-- NProgress -->
    {!! Html::style('admin/vendors/nprogress/nprogress.css') !!}
    <!-- Animate.css -->
    {{-- <link href="../vendors/animate.css/animate.min.css" rel="stylesheet"> --}}
     {!! Html::style('admin/vendors/animate.css/animate.min.css') !!}

    <!-- Custom Theme Style -->
    {!! Html::style('admin/css/custom.min.css') !!}
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            {{ Form::open(['action' => 'Auth\LoginController@login']) }}
              <h1>Login Form</h1>
              <div>
                {{ Form::email('email', '', [
                  'class' => 'form-control', 
                  'required' => true, 
                  'placeholder' => 'Email',
                ]) }}
              </div>
              <div>
                {{ Form::password('password', '', [
                  'class' => 'form-control', 
                  'required' => true,
                  'placeholder' => 'Password', 
                  
                ]) }}
              </div>
              <div>
                {{ Form::submit('Log in', ['class' => 'btn btn-default submit']) }}
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Admin!</h1>
                 
                </div>
              </div>
            {{ Form::close() }}
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            {{ Form::open(['action' => 'Auth\RegisterController@register']) }}
              <h1>Create Account</h1>
              <div>
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Username', 'required' => true]) }}
              </div>
              <div>
                {{ Form::email('email', '', [
                  'class' => 'form-control', 
                  'required' => true, 
                  'placeholder' => 'Email',
                  'id' => 'email',
                ]) }}
              </div>
              <div>
                {{ Form::password('password', '', [
                  'class' => 'form-control', 
                  'placeholder' => 'Password', 
                  'required' => true,
                  'id' => 'password',
                ]) }}
              </div>
              <div>
                {{ Form::password('password_confirmation', '', [
                  'class' => 'form-control',
                  'id' => 'password-confirm',
                  'required' => true,
                ]) }}
              </div>
              <div>
                {{ Form::submit('Submit', ['class' => 'btn btn-default submit']) }}
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Admin!</h1>
                 
                </div>
              </div>
            {{ Form::close() }}
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
