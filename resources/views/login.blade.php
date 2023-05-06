@include('layout.header')

<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <center><img height="70" width="70" src="{{ asset('/gambar/bengkulu.png') }}"></center>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Form Login</h3>
            </div>
            <form action="{{ route('post_login') }}" method="post">
            @csrf
            <div class="card-body">
                @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                
                <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for=""><strong>Password</strong></label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
            </div>
            </form>
        </div>

        <div class="main">
            <ul id="cbp-bislideshow" class="cbp-bislideshow">
                <li><img src="{{ asset('/gambar/kotabengkulu.jpg') }}" alt="image01"/></li>
                <li><img src="{{ asset('/gambar/kotabengkulu2.jpg') }}" alt="image02"/></li>
                <li><img src="{{ asset('/gambar/kotabengkulu3.jpg') }}" alt="image03"/></li>
                <li><img src="{{ asset('/gambar/kotabengkulu4.jpeg') }}" alt="image04"/></li>
                <li><img src="{{ asset('/gambar/kotabengkulu5.jpg') }}" alt="image05"/></li>
                <li><img src="{{ asset('/gambar/kotabengkulu6.jpg') }}" alt="image06"/></li>
            </ul>
        </div>

    </div>
</div>

@include('layout.footerdata')