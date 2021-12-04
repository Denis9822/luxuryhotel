@extends('layouts.index',['footer' => false])
@section('content')

    @push('styles')
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    @endpush

    <main id="ts-content">

        <section class="ts-block ts-xs-text-center pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-lg-5">
                        <div class="card">
                            <div class="card-header">Авторизация</div>
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                        <div class="col-md-6">
                                            <input type="email" id="email_address" class="form-control" name="email" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="pass" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Войти
                                        </button>
                                    </div>

                                    @if(session('err') == 'login')
                                        <div class=" col-md-6 offset-md-4 mt-3">
                                            <p class="alert-danger p-3">Пользователь не найден</p>
                                        </div>
                                    @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>

    <script>


    </script>
@endsection
