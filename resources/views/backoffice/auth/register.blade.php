@extends('layouts.backoffice.auth')

@section('title', 'Halaman Register')

@section('content')
    <div class="col-md-6 d-flex justify-content-center">
        <div class="align-self-center w-100">
            <div class="text-center mb-5 mt-5 d-md-none">
                <h4 class="text-uppercase fw-bold h4 font-color-page mt-3">{{ env('APP_NAME') }}</h4>
                <p class="font-color-page text-uppercase">{{ env('APP_SUBNAME') }}</p>
            </div>
            {!! form_open('register') !!}
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-md-10 col-lg-7">
                    <h4 class="fw-bold mb-5">Silakan Daftar</h4>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($first_name) !!}
                            <div id="first_nameError" class="invalid-feedback">
                                {!! form_error($first_name['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($last_name) !!}
                            <div id="last_nameError" class="invalid-feedback">
                                {!! form_error($last_name['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($identity) !!}
                            <div id="identityError" class="invalid-feedback">
                                {!! form_error($identity['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($email) !!}
                            <div id="emailError" class="invalid-feedback">
                                {!! form_error($email['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($company) !!}
                            <div id="companyError" class="invalid-feedback">
                                {!! form_error($company['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($phone) !!}
                            <div id="phoneError" class="invalid-feedback">
                                {!! form_error($phone['name']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($password) !!}
                            <div id="passwordError" class="invalid-feedback">
                                {!! form_error($password['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            {!! form_input($password_confirm) !!}
                            <div id="password_confirmError" class="invalid-feedback">
                                {!! form_error($password_confirm['name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex mb-3 justify-content-between">
                        <div class="form-control border-0 bg-light form-control-lg w-75">
                            <img id="Imageid" src="{{ base_url('captcha/' . $captcha['filename']) }}"
                                style="width: 200px; height: 30px; border: 0;" alt=" " />
                        </div>
                        <div class="text-center justify-content-center d-flex align-items-center justify-content-center form-control border-0 bg-light form-control-lg"
                            style="width: 20%;">
                            <a class="text-muted" href="{{ base_url('resgister') }}"> <i class="fas fa-undo"></i></a>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text bg-light border-0 ps-4 ">
                            <svg width="15" height="19" viewBox="0 0 15 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M7.16047 14.4328C8.12516 14.4328 8.91446 13.6435 8.91446 12.6788C8.91446 11.7141 8.12516 10.9248 7.16047 10.9248C6.19578 10.9248 5.40649 11.7141 5.40649 12.6788C5.40649 13.6435 6.19578 14.4328 7.16047 14.4328ZM12.4224 6.53983H11.5454V4.78584C11.5454 2.36534 9.58097 0.400879 7.16047 0.400879C4.73997 0.400879 2.77551 2.36534 2.77551 4.78584H4.4418C4.4418 3.28618 5.66082 2.06717 7.16047 2.06717C8.66013 2.06717 9.87915 3.28618 9.87915 4.78584V6.53983H1.89852C0.933825 6.53983 0.144531 7.32912 0.144531 8.29381V17.0637C0.144531 18.0284 0.933825 18.8177 1.89852 18.8177H12.4224C13.3871 18.8177 14.1764 18.0284 14.1764 17.0637V8.29381C14.1764 7.32912 13.3871 6.53983 12.4224 6.53983ZM12.4224 17.0637H1.89852V8.29381H12.4224V17.0637Z"
                                    fill="#03014C" />
                            </svg>
                        </div>
                        {!! form_input($captchaForm) !!}
                        <div id="passwordError" class="invalid-feedback">
                            {!! form_error($captchaForm['name']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn btn-login text-white mb-3">Daftar</button>
                        </div>
                    </div>
                    <div class="col-12">
                        Sudah Punya Akun ? <a href="{{ base_url('masuk') }}" class="text-decoration-none">Masuk</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 pb-5 pb-md-0">
                        <p class="text-center mb-1 font-color-page fw-bold">&copy; {{ date('Y') }}
                            {{ env('APP_DESC') }}</p>
                    </div>
                </div>
            </div>
            {!! form_close() !!}
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        console.log("Halaman dashboard dimuat.");
    </script>
@endpush
