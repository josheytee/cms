@extends('admin.layouts.app')

@section('content')
    <div class="w3agile-validation">
        <div class="agile-validation agile_info_shadow">
            <div class="my-div">
                <form method="post" action="{{route('user.update',['id'=>$user->id])}}" class="valida"
                      autocomplete="off"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <label for="field-1">Full Name<span class="at-required-highlight">*</span>&nbsp;<span
                                class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <input type="text" name="fname" id="field-1" required="true" class="form-control"
                               value="{{$user->fname}}">
                    </div>

                    <label for="field-1-2">Date of Birth</label>
                    <div class="form-group">
                        <input type="date" name="dob" id="field-1-2" filter="date" class="form-control"
                               data-invalid="Given value must be a valid date formated as 0000-00-00"
                               value="{{$user->dob}}">
                    </div>

                    <label for="phone">Phone Number<span class="at-required-highlight">*</span>&nbsp;<span
                                class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" required="true" class="form-control"
                               value="{{$user->phone}}">
                    </div>


                    <label for="email">Email<span class="at-required-highlight">*</span>&nbsp;<span
                                class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <input type="text" name="email" id="email" required="true" class="form-control"
                               value="{{$user->email}}">
                    </div>


                    <label for="field-2">Gender<span
                                class="at-required-highlight">*</span>&nbsp;<span class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <select name="gender" id="field-2" required="true" class="form-control">
                            <option value=""></option>
                            <option value="male" @if($user->gender=='male') selected="selected" @endif>Male</option>
                            <option value="female" @if($user->gender=='female') selected="selected" @endif>Female
                            </option>
                        </select>
                    </div>
                    <label for="image">Profile Picture<span class="at-required-highlight">*</span>&nbsp;<span
                                class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <input type="file" name="image" id="image" value="{{$user->image}} ">
                    </div>

                    <label for="field-4">Hostel Address<span
                                class="at-required-highlight">*</span>&nbsp;<span class="at-required-highlight">*</span></label>
                    <div class="form-group">
                        <textarea name="address" id="field-4" required="true" class="form-control">
                                  {{$user->address}}</textarea>
                    </div>

                    <p>
                        <input type="submit" value="update" class="btn btn-primary">
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection