@extends('admin.layouts.app')

@section('content')
    <div class="pull-right">
        <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary">
            <i class="fa fa-edit"></i>
            Edit Profile
        </a>
    </div>
    <h2 class="w3_inner_tittle">welcome to the profile page</h2>
    <div class="agile3-grids agile_info_shadow">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="thumbnail">
                    <img src="{{asset('images/').'/'.Auth::user()->image}}" alt="" style="width:240px;height:240px;">
                </a>
            </div>
            <div class="col-md-9">
                <table class="table table-striped">
                    <tr>
                        <td>Full Name</td>
                        <td><strong>{{ strtoupper(Auth::user()->fname) }}</strong></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><strong>{{Auth::user()->username}}</strong></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><strong>{{Auth::user()->email}}</strong></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><strong>{{Auth::user()->phone}}</strong></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td><strong>{{Auth::user()->dob}}</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection