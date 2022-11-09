<x-auth>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="form-wraper">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-7">
                            <h2 class="h2">Welcome Back</h2>
                            <div class="form">

                                <form method="POST" action="{{ route('auth.login') }}">
                                    @csrf()
                                    <div class="form-group">
                                        <input type="text" name="username"
                                            class="form-control  @error('username') is-invalid @enderror"
                                            placeholder="Username">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-custom">Login</button>
                                </form>
                                <p class="text-muted"> Don't have an account? <a
                                        href="{{ route('register') }}">Register</a></p>
                                <p class="text-muted"> Forgot Pasword? <a href="#">Reset Password?</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <div class="grey-bg">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-1" src="https://booking.luxetribes.com/images/background/back-8.jpeg">
                        </div>
                        <div class="col-6 text-center">
                            <img class="img-2" src="https://booking.luxetribes.com/images/background/back-7.png">
                            <img class="img-3" src="https://booking.luxetribes.com/images/background/back-6.jpeg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-auth>
