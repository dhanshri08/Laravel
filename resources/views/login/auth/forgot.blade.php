@extends('login.layouts.app')
@section('title','forgot')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-seondary">Forgot Password</h2>
                </div>
                <div class="card-body p-5">
                    <form action="post" action="#" id="forgot-form">
                         <div class="mb-3 text-secondary">Eneter Your email address and we will send you a link to reset your password</div>

                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0"
                                placeholder="Email">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3 d-grid">
                            <input type="submit" value="Reset Password" class="btn- btn-dark rounder-0" id="forgot-btn">
                        </div>
                        <div class="text-center text-secondary">
                            <div>
                                Back to <a class="text-decoration-none" href="/register"> Login here</a>
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

@endsection