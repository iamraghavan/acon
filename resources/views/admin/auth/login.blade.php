@extends('admin.layout.apps')
@section('content-dashboard')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="https://firebasestorage.googleapis.com/v0/b/intricate-aria-345510.appspot.com/o/bumblebeesAssets%2FImages%2FLogo%2FBumble%20Bees%20Black%20Yellow%20Logo.svg?alt=media&token=368a2e51-597a-4b6b-8080-a62628f89d75" width="180" alt="">
                </a>

                <form method="POST" action="{{ route('verify_login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                Remember this Device
                            </label>
                        </div>
                        <a class="text-primary fw-bold" href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
