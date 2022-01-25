@extends('layouts.app')

@section('content')
<style>
a.active.btn.btn-defaul {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}
</style>
<div class="container">
    <div class="row justify-content-center align-items-center h-70" style="height: 70vh;">
        <div class="col-md-8 ">
            <!-- <div class="card"> -->

                <div class="card-body text-center">
                <a class="active btn btn-defaul" href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>
 Register</a>&emsp;
                <a class="active btn btn-defaul" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
