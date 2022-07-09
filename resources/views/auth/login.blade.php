@extends('layouts.blank')

@section('content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand ml-4 mb-10">
                    <h1>Admin Tools</h1>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" method="POST" action="{{ route('login.auth') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="nopek">Email</label>
                                <input type="text" class="form-control" name="email" tabindex="1" required="" autofocus="">

                            </div>

                            <div class="form-group">
                                <label for="seller_id">Nama Departemen</label>
                                <select class="form-control select2" id="department_id" name="department_id">
                                    <option disabled selected>Pilih Departemen</option>
                                    @foreach($departments as $key => $department)
                                        <option value="{{ $department->id }}">{{$department->name}}</option>
                                    @endforeach 
                                </select>
                              </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                    required="">
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">Managed by Factory Manager</div>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection