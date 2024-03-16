@extends('layouts.main')

@section('content')

<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <!-- The image half with multiple images for the slider -->
    <div class="col-md-6 d-none d-md-flex bg-image-container">
      <div class="bg-image image1"></div>
      <div class="bg-image image2"></div>
      <div class="bg-image image3"></div>
    </div>

      <!-- The content half -->
      <div class="col-md-6 bg-light">
        <div class="login d-flex align-items-center py-5">
          <!-- Demo content-->
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-7 mx-auto">
                <h3 class="display-4">EPS_Login</h3>
                <p class="text-muted mb-4">Efficiency meets precision in the palm of your Hands!
                </p>
                <hr>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                  <div class="form-group mb-3">
                    <input id="inputEmail" type="email" placeholder="Email address" required=""  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group mb-3">
                    <input id="inputPassword" type="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                  <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                </form>
              </div>
            </div>
          </div><!-- End -->
        </div>
      </div><!-- End -->

    </div>
  </div>
  <!-- Bootstrap core JavaScript-->

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

@endsection