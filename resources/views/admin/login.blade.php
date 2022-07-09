

<?php
$message =Session::get('message');
if($message)
    {
        echo '<span style="color: red;width: 100%;text-align: center;">'.$message.'</span>';
        Session::put('message',null);
    }
?>
{{-- <form action="{{ URL::to('/admin-login') }}" method="post">
    {{ csrf_field() }}
    <input type="text" class="ggg" name="users_username" placeholder="E-MAIL" required="">
    <input type="password" class="ggg" name="users_password" placeholder="PASSWORD" required="">
    <span><input type="checkbox" style="font-size: 15px;margin-right:5px;"/>Remember Me</span>
    <h6><a style="font-size: 15px;display: inline-block;" href="#">Forgot Password?</a></h6>
    <div class="clearfix"></div>
    <input type="submit" value="Sign In" name="login">
</form> --}}


@extends('admin.layout.layoutadmin')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">          
                    <form action="{{ URL::to('/admin-login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <input type="text" class="form-control" name="users_username" placeholder="E-MAIL" required="">
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control" name="users_password" placeholder="PASSWORD" required="">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- <h6><a style="font-size: 15px;display: inline-block;" href="#">Forgot Password?</a></h6> --}}
                        <div class="clearfix"></div>
                        <input type="submit" value="Sign In" name="login">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection