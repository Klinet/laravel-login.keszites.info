@extends('template.master')

@section('content')
    {{--    - create a login page where you can log in with email or username (must have both options) and password--}}
    <div class="d-flex p-2 justify-content-center">

        <div class="row">
            <div class="card p-5">

                <div class="card-body">
                    <h5 class="card-title">Welcome on Laravel loginpage</h5>
                    <p class="card-text">This form shows error messages on field if data is not proper.</p>
                    @if($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

            <div class="card p-5">
                <form method="post" action="{{ route('login_post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="login_data">{{ __('Username or Email') }}</label>
                        <input id="login_data" type="text"
                                class="form-control"
                                name="login_data" value="teszt@a.hu" required autofocus>
                        @if ($errors->has('username') || $errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="password"
                                placeholder="Password">
                    </div>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    <button type="submit" class="btn btn-primary disabled">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

