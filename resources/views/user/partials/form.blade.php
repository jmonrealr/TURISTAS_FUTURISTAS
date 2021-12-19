 @csrf
    <div class="form-group">
        <label for="name" >Nombre:</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="name" name="name" required
                value="{{old('name')}}@isset($edit) {{ $usuario->name }} @endisset">
            <span id="nameError" class="alert-message"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="email" >Correo:</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="email" name="email" required
                value="{{old('email')}}@isset($edit) {{ $usuario->email }} @endisset">
            <span id="emailError" class="alert-message"></span>
        </div>
    </div>
{{--         <div class="form-group">--}}
{{--            <label for="password">{{ __('Password') }}</label>--}}
{{--                <div class="col-sm-12">--}}
{{--                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}
{{--                    @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--         </div>--}}
{{--         <div class="form-group">--}}
{{--             <label for="password-confirm">{{ __('Confirm Password') }}</label>--}}
{{--             <div class="col-sm-12">--}}
{{--                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--             </div></div>--}}

