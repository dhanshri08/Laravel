@extends('login.layouts.app')
@section('title','reset password')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-seondary">Reset Password</h2>
                </div>
                <div class="card-body p-5">
                    <form action="post" action="#" id="reset-form">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0"
                                placeholder="Email">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="npassword" id="npassword" class="form-control rounded-0"
                                placeholder="new password">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="cnpassword" id="cnpassword" class="form-control rounded-0"
                                placeholder="confirm new password">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        
                        <div class="mb-3 d-grid">
                            <input type="submit" value="Update password" class="btn- btn-dark rounder-0" id="reset-btn">
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection