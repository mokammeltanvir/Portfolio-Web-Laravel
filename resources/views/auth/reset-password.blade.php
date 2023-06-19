<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Password &mdash; Admin</title>

    <!-- include css style -->
    @include('admin.layouts.inc.style')
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Reset Password?</h4>
                            </div>

                            <div class="card-body">
                                @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('password.store') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ $request->email }}"  tabindex="1" required
                                            autofocus>
                                        @if ($errors->has('email'))
                                        <code>
                                        {{ $errors->first('email') }}
                                        </code>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>                                            
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        @if ($errors->has('password'))
                                        <code> {{ $errors->first('password') }} </code>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password_confirmation" class="control-label">Confirm Password</label>
                                        </div>
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                                            tabindex="2" required>
                                        @if ($errors->has('password_confirmation'))
                                        <code> {{ $errors->first('password_confirmation') }} </code>
                                        @endif
                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; System Admin
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- include js script -->
    @include('admin.layouts.inc.script')
</body>

</html>
