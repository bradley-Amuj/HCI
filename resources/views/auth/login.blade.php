@extends('layouts.portal')

@section('content')


{{-- Added login form --}}
<div class="cont">
  <div class="limiter"> 
  
    <form method="POST" action="{{ route('login') }}">
  
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label for="email">
      <span>Email</span>
    </label>
    <div class="wrap-input100 form-group" >
      @csrf
     
      <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
     
      <span class="focus-input100"></span>
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
   @enderror
    </div>
    <label>
      <span>Password</span>
    </label>
    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
      <input  id="password" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
      <span class="focus-input100"></span>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div class="flex-sb-m w-full p-b-48">
      <div class="contact100-form-checkbox">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
         
          
      </div>

      <div>
          
              @if (Route::has('password.request'))
              <a class="txt3" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif
          </a>
      </div>
  </div>
    <button  type="submit" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
    </div>
  </form>
  </div>

   
      

  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great products and accessories!</p>
      </div>

      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already have an account, just sign in. We've missed you!</p>
      </div>

      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
      
    </div>
    <div class="form sign-up">
      <form method="POST" action="{{ route('register') }}">
        @csrf
      <h2>Get started with your free account,</h2>
    
      <div class="wrap-input100 form-group" >
        <input id="name" type="text" class="form-control input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" class="form-control" placeholder="Full name" type="text" autofocus>
        <span class="focus-input100"></span>
        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
      </div>
      
      <div class="wrap-input100 form-group" >
      <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email address"required autocomplete="email">
      <span class="focus-input100"></span>
      @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
      </div>
     
      <div class="wrap-input100 form-group" >
        <input id="phone" type="number" class="form-control input100 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  placeholder="Phone Number" required autocomplete="phone">
         <span class="focus-input100"></span>
        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div>
      <div class="wrap-input100 form-group" >
    <input id="password" placeholder="Create Password" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
 <span class="focus-input100"></span>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
      </div> <div class="wrap-input100 form-group" >
    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control input100" name="password_confirmation" required autocomplete="new-password">
    <span class="focus-input100"></span>
  </div>
      <button type="submit" class="submit">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span>facebook</span></button>
        </div>
      </form>
  </div>
</div>
</div>
<script>
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});

</script>



@endsection

