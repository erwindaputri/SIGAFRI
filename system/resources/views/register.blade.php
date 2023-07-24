@extends('LandingPage.landing')
@section('content')
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Register SIGAPRI</h1>
            </div>
        </div>
    </section>
    <section class="blog-section">
        <div class="auto-container">
            <div class="news-block-two wow fadeIn">
                <div class="inner-box">
                    <div class="row clearfix">

                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column d-flex align-items-center justify-content-center px-3 py-3">
                                <form method="POST" action="{{ url('/register-store') }}" style="width: 100%"
                                    enctype="multipart/form-data">
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">nomor:</label>
                                        <input type="text" name="nomor" class="form-control"
                                            placeholder="Masukan nomor Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nama lengkap:</label>
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Masukan Nama Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Username:</label>
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Masukan Username Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Masukan Email Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" name="confir_password"
                                            placeholder="Masukan Password Anda" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Alamat:</label>
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukan Alamat Anda" autocomplete="off" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Poto:</label>
                                        <input type="file" name="poto" class="form-control" accept=".png, .jpg, .jpeg"
                                            autocomplete="off" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><span class="fa fa-send"></span>
                                        Register</button>
                                </form>
                            </div>
                        </div>
                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column d-flex px-3 py-3">
                                <div class="form-group">
                                    <p>Jika Sudah Memiliki Akun Silahkan <a href="{{ url('register') }}"> Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
@endsection
