<x-base-layout>
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <x-jet-validation-errors class="mb-4" />
                                <form class="form-stl" action="{{ route('register') }}" name="frm-login" method="post" >
                                    @csrf
                                    {{-- <fieldset class="wrap-title"> --}}
                                        <h3 class="form-title">Create an account</h3>

                                    {{-- </fieldset> --}}
                                    {{-- <fieldset class="wrap-input"> --}}
                                        <label for="frm-reg-lname">Name*</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Nama Anda*" :value="name" required autofocus autocomplete="name">
                                    {{-- </fieldset> --}}
                                    {{-- <fieldset class="wrap-input"> --}}
                                        <label for="frm-reg-email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address" :value="email">
                                    {{-- </fieldset> --}}

                                    {{-- <fieldset class="wrap-title"> --}}
                                        <h3 class="form-title">Login Information</h3>
                                    {{-- </fieldset> --}}
                                    {{-- <fieldset class="wrap-input item-width-in-half left-item "> --}}
                                        <label for="frm-reg-pass">Password *</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
                                    {{-- </fieldset> --}}
                                    {{-- <fieldset class="wrap-input item-width-in-half "> --}}
                                        <label for="frm-reg-cfpass">Confirm Password *</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                        {{-- </fieldset> --}}
                                        <div class="form-group mt-5" style="margin-top: 15px;">
                                            {!! NoCaptcha::renderJs('id', false, 'onloadcallback') !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                    {{-- <input type="submit" class="btn btn-sign" value="Register" name="register"> --}}
                                    <button class="btn btn-sign" type="submit">Register</button>
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
    <!--main area-->
</x-base-layout>

<script>
    let onloadcallback = function () {
        alert('grecaptcha is ready!')
    }

    $('#frm-reg-pass').keypress(function(e) {
        var s = String.fromCharCode( e.which );
        if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
            alert('caps is on');
        }
    });
</script>

