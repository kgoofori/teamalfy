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

                                <register-form></register-form>
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
