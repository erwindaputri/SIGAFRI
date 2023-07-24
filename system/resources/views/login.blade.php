@extends('LandingPage.landing')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>LOGIN</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block-two wow fadeIn">



                <div class="inner-box">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column d-flex align-items-center justify-content-center px-3 py-3">
                                <form method="POST" action="{{ url('/login') }}" style="width: 100%">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" class="form-control" autocomplete="off" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" id="password" class="form-control" name="password" autocomplete="off" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-5">Login</button>
                                </form>
                            </div>
                        </div>
                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column d-flex px-3 py-3">
                                <div class="form-group">
                                <p>Jika Belum Memiliki Akun Silahkan <a href="{{ url('register') }}"> Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- End Blog Section -->
@endsection
