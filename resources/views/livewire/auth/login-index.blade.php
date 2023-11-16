<div>
    <!-- CONTAINER OPEN -->
    <form wire:submit="login">
        <div class="container-login100">

            <div class="wrap-login100 p-6">
                <div class="card-body text-center">
                    <span class="avatar avatar-xxl cover-image"
                        data-bs-image-src="{{ asset('assets/images/brand/Kota-Cimahi.png') }}"
                        style="background: url(&quot;{{ asset('assets/images/brand/Kota-Cimahi.png') }}&quot;) center center;"></span>
                    <h4 class="h4 text-primary mb-0 mt-3"><b>Sappeuting Emas</b></h4>
                </div>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text">{{ session('error') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif


                <div class="wrap-input100 validate-input input-group mt-2"
                    data-bs-validate="Valid email is required: ex@abc.xyz">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-account" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control" name="username" wire:model.defer="username"
                        type="text" autocomplete="off" placeholder="Username">
                </div>

                @error('username')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror

                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                    </a>
                    <input class="input100 border-start-0 ms-0 form-control" name="password" wire:model.defer="password"
                        type="password" placeholder="Password">
                </div>

                @error('password')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror

                <div class="form-group mt-2 mb-2">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-icon btn-sm btn-danger reload" id="reload"><i
                                class="fe fe-refresh-ccw" wire:click="reloadCaptcha"></i></a>
                    </div>
                </div>
                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                    <input name="captcha" wire:model.defer="captcha" type="text" class="form-control"
                        placeholder="Enter Captcha" autocomplete="off">
                </div>
                @error('captcha')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
                <div class="container-login100-form-btn">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>
        </div>
    </form>
    <!-- CONTAINER CLOSED -->
</div>
