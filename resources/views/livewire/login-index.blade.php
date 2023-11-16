<div>
    <!-- CONTAINER OPEN -->
    <div class="container-login100">
        <div class="wrap-login100 p-6">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl cover-image" data-bs-image-src="{{ asset('assets/images/brand/Kota-Cimahi.png') }}" style="background: url(&quot;{{ asset('assets/images/brand/Kota-Cimahi.png') }}&quot;) center center;"></span>
                    <h4 class="h4 text-primary mb-0 mt-3"><b>Sappeuting Emas</b></h4>
                </div>
                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-account" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control" name="username" type="text" autocomplete="off" placeholder="Username">

                </div>
                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control" name="password" type="password" placeholder="Password">
                </div>
                <div class="form-group mt-2 mb-2">
                    <div class="captcha">
                        {{-- <span>{!! captcha_img('flat') !!}</span> --}}
                        <button type="button" class="btn btn-icon btn-sm btn-danger reload" id="reload"><i class="fe fe-refresh-ccw"></i></a>
                    </div>
                </div>
                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <input name="captcha" type="text" class="form-control" placeholder="Enter Captcha" autocomplete="off">
                    @if ($errors->has('captcha'))
                    <div class="alert alert-danger">
                        {{-- <strong>{{ $errors->first('captcha') }}</strong> --}}
                    </div>
                    @endif
                </div>
                <div class="container-login100-form-btn">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
</div>
