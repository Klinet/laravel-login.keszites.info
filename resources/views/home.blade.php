@extends('template.master')

@section('content')
    {{--    - create a login page where you can log in with email or username (must have both options) and password--}}
    <div class="d-flex p-2 justify-content-center">

        <div class="row">
            <div class="card p-5">

                <div class="card-body">
                    <h5 class="card-title">Welcome on Laravel loginpage</h5>
                    <p class="card-text">This form shows error messages on field if data is not proper.</p>

                </div>
            </div>

            <div class="card p-5">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address or Username</label>
                        <input type="email" class="form-control is-valid" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="Enter email or nick" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control is-invalid" id="exampleInputPassword1"
                                placeholder="Password">
                        <div class="invalid-feedback">
                            Looks false!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary disabled">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

