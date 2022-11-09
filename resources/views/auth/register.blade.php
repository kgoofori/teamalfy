<x-auth>

    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-6">
                <div class="form-wraper">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-7">
                            <h2 class="h2">Become a part of the Luxe Tribes!</h2>
                            <div class="form">

                                <form method="POST" action="{{ route('auth.register') }}">
                                    @csrf()
                                    <div class="flex-box">
                                        <div class="icon-wraper">
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div >
                                            <h5>Add your photo (optional)</h3>
                                                <p class="text-sm text-muted m-0">Supported formats: jpg, jpeg, png.</p>
                                                <label for="file-picker"><i class="fa fa-upload"></i> click to
                                                    upload</label>
                                                <input type="file" hidden id="file-picker">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" name="name"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    placeholder="Full Name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="date" name="dob"
                                                    class="form-control  @error('dob') is-invalid @enderror"
                                                    placeholder="DOB">
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control @error('country') is-invalid @enderror"
                                                    name="country" placeholder="Country">
                                                    <option value=""></option>
                                                    <option>Ghana</option>
                                                    <option>Nigeria</option>
                                                </select>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    class="form-control  @error('email') is-invalid @enderror"
                                                    placeholder="Email Address">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="phone"
                                                    class="form-control  @error('phone') is-invalid @enderror"
                                                    placeholder="23 123 4567">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
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
                                        </div>
                                        <div class="col-6">
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
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-custom">Create Account</button>
                                </form>
                                <p class="text-muted"> Already have an account? <a href="{{ route('login') }}">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <div class="grey-bg">
                    <img class="img-1" src="https://booking.luxetribes.com/images/background/back-4.svg">
                    <img class="img-2" src="https://booking.luxetribes.com/images/background/back-5.svg">
                    <img class="img-3" src="https://booking.luxetribes.com/images/background/back-6.png">
                    
                </div>

            </div>
        </div>
    </div>
</x-auth>
