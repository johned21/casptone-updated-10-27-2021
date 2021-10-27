<div class="mb-4">
    <label for="email" class="form-label">Student's Name</label>
    <div class="row">
        <div class="col form-group reg-form @error('firstName') has-error @enderror">
            @error('firstName')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
            {!! Form::text('firstName', null, ['class'=>'form-control', 'placeholder'=>'First name', 'required' => '']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('firstName') }}</span>
        </div>
        <div class="col form-group reg-form @error('lastName') has-error @enderror">
            @error('lastName')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
            {!! Form::text('lastName', null, ['class'=>'form-control', 'placeholder'=>'Last name', 'required' => '']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('lastName') }}</span>
        </div>
        <div class="col form-group reg-form @error('middleName') has-error @enderror">
            @error('middleName')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
            {!! Form::text('middleName', null, ['class'=>'form-control', 'placeholder'=>'Middle name', 'required' => '']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('middleName') }}</span>
        </div>
    </div>
</div>
<div class="mb-3 form-group @error('username') has-error @enderror">
    {!! Form::label('username','Username',[],false) !!}
    @error('username')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
    {!! Form::text('username', null, ['class'=>'form-control', 'id'=>'username', 'required' => '']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('username') }}</span>
</div>
<div class="mb-3 form-group @error('email') has-error @enderror">
    {!! Form::label('email','Email',[],false) !!}
    @error('email')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
    {!! Form::text('email', null, ['class'=>'form-control', 'id'=>'email','required' => '']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
</div>
<div class="mb-3 form-group @error('password') has-error @enderror">
    {!! Form::label('password', 'Password',[],false) !!}
    @error('password')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
    {!! Form::password('password', ['class'=>'form-control','required' => '']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
</div>
<div class="mb-3 form-group @error('password_confirmation') has-error @enderror">
    {!! Form::label('password_confirmation', 'Confirm Password',[],false) !!}
    @error('password_confirmation')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
    {!! Form::password('password_confirmation', ['class'=>'form-control','required' => '']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('password_confirmation') }}</span>
    
</div>
<div class="mb-3 form-group @error('contactNo') has-error @enderror">
    {!! Form::label('contactNo', 'Mobile Number',[],false) !!}
    @error('contactNo')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
    {!! Form::number('contactNo', null, ['class'=>'form-control', 'placeholder'=>'example: 09123....','required' => '', 'id'=>'contactNo']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('contactNo') }}</span>
</div>