@extends('layouts.app')

@section('content')
    <section>
        <div id="agileits-sign-in-page" class="sign-in-wrapper">
            <div class="agileinfo_signin">
                <h3>إنشاء حساب</h3>
                <form action="{{route('register')}}" method="post">
                    {{csrf_field()}}
                     <div class="form-group">
             <label for="name" class="col-md-4 control-label">Register With</label>
              <div class="col-md-6">
            <a href="{{ url('login/facebook') }}"><i class="fa fa-facebook"></i></a>
            </div>
            </div>
                    <input type="text" name="firstname" placeholder="الإسم اﻷول" required="">
                    <input type="text" name="lastname" placeholder="الإسم الثاني" required="">
                    <input type="text" name="address" placeholder="العنوان" required="">
                    <input type="tel" name="phone" placeholder="رقم الهاتف" required="">
                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                    <input type="password" name="password" placeholder="كلمة المرور" required="">
                    <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required="">
                    <div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox">اوافق على<a class="w3layouts-t" href="terms.html" target="_blank">قواعد الإستخدام</a> و <a class="w3layouts-t" href="privacy.html" target="_blank">والخصوصيه</a></label>
						</span>
                    </div>
                    <input type="submit" value="إنشاء حساب"/>
                </form>
            </div>
        </div>
    </section>
@endsection
