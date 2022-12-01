@extends('login.layouts.app')
@section('title','login')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-seondary">Login</h2>
                </div>
                <div class="card-body p-5">
                    <div class="login-alert">                 </div>
                    <form method="post"  id="login-form">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0"
                                placeholder="Email">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control rounded-0"
                                placeholder="password">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none" href="/forgot"> Forgot password</a>
                        </div>
                        <div class="mb-3 d-grid">
                            <input type="submit" value="Login" class="btn- btn-dark rounder-0" id="login-btn">
                        </div>
                        <div class="text-center text-secondary">
                            <div>
                                Don't have an account? <a class="text-decoration-none" href="/register"> Register here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
    $(function(){
        $('#login-form').submit(function(e){
            e.preventDefault;
            $('#login-btn').val('please wait...')
  
            $.ajax({
                
                url:'{{ route('login.auth.login')}}',
                method:'post',
                data:$(this).serialize(),
                // dataType:'json',
                success:function(res){
                    console.log(res);
                    // if(res.status == 400){
                    //     showError('email', res.message.email);
                    //     showError('password', res.message.password);                        
                    //     $("#login-btn").val('Login');
                    // } else if(res.status == 401){
                    //     $('#login-alert').html(showMessage('danger',res.message));
                    //     $("#log  n-btn").val('Login');
                    // }
                    // else{
                    //     if(res.status == 200 ){
                    //         window.location = '{{ route('profile') }}';
                    //     }
                    // }
                }
            });
        });
    });
</script>
@endsection


