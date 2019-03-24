@extends('layouts.app')

@section('content')
    <!-- sign in form -->
    <section>
        <div id="agileits-sign-in-page" class="sign-in-wrapper">
            <div class="agileinfo_signin">
                <h3>تسجيل الدخول الادمن</h3>
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">البريد اﻹلكتروني</label>
                        <input type="email" id="email" name="email" placeholder="ادخل اﻹيميل " value="{{ old('email') }}" required >
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">كلمة المرور</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="ادخل كلمة المرور" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">



                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني



                    </div>


                    <input type="submit" value="دخول">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        هل نسيت كلمة السر ؟
                    </a>
                </form>
                <h6> ألست عضو ؟  <a href="{{route('register')}}">قم بإنشاء حساب </a> </h6>
            </div>
        </div>
    </section>
    <!-- //sign in form -->
    <!-- Javascript -->


@endsection