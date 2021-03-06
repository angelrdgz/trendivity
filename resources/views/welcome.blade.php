<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <title>Trendivity</title>
</head>

<body>
    <div class="first">
        <div class="container">
            <img src="{{ secure_asset('imgs/icon_gears.png') }}" class="logo-gears" alt="">
            <img src="{{ secure_asset('imgs/logo.png') }}" class="logo" alt="">
            <img src="{{ secure_asset('imgs/frase.png') }}" class="logo-frase" alt="">
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <form method="POST" action="{{action('HomeController@send')}}">
                        @csrf
                        @if ($message = Session::get('success'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-light alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <textarea name="message" id="" cols="30" rows="4" placeholder="Mensaje" class="form-control @error('message') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4 offset-sm-8 col-md-2 offset-md-10">
                                <div class="form-group">
                                    <button type="submit" class="btn text-uppercase btn-block">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h6 class="text-center">Tel. 81 1623 0582 al 85</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">Cel. 81 1909 6596</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="text-center">larmendaiz@trendivity.mx</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>