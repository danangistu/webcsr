@extends('layouts.login')
@section('content')


    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                @include('common.alert')
                <form role="form" action="{{ url('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" name="email" class="form-control" placeholder="Username or Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 text-left checkbox">
                            <label class="form-checkbox form-icon">
                            <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-right">
                            <button class="btn btn-success text-uppercase" type="submit">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="pad-ver">
            <a href="{{ url('/password/reset') }}" class="btn-link mar-rgt">Forgot password ?</a>
        </div>
    </div>
    <!--===================================================-->

@endsection
