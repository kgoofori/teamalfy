<x-auth>

    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-6">
                <div class="form-wraper">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-7">

                            <h2 class="h2">Welcome {{ $user->name }}</h2>
                            <div class="flex-box">
                                <div class="icon-wraper" style="background-image: url({{ $user->photo_url }})">
                                    @if (empty($user->photo_url))
                                        <i class="far fa-user"></i>
                                    @endif

                                </div>
                                <div>
                                    <h5>{{ $user->name }}</h5>
                                    <p class="m-0">Username: {{ $user->username }}</p>
                                    <p class="m-0">Email: {{ $user->email }}</p>
                                    <p class="m-0">Phone: {{ $user->dail_code }}{{ $user->phone }}</p>
                                    <p class="m-0">Email: {{ $user->email }}</p>
                                </div>
                            </div>
                            <br>

                            <form action="{{ route('logout') }}" method="POST" class="text-right">
                                @csrf()
                                <button class="btn btn-danger">Logout</button>
                            </form>
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
