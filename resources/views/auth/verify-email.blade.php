<x-base-layout>

	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>verifikasi</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">
                                    <div style="margin-bottom: 5px;" class="mb-4 text-sm text-gray-600">
                                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                                    </div>

                                    @if (session('status') == 'verification-link-sent')
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                        </div>
                                    @endif

                                        <div style="margin-bottom: 5px;">
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf

                                            <div>
                                                <x-jet-button type="submit">
                                                    {{ __('Resend Verification Email') }}
                                                </x-jet-button>
                                            </div>
                                        </form>
                                        </div>

                                        <div>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <button type="submit" class="btn-sharul">
                                                {{ __('Logout') }}
                                            </button>
                                        </form>
                                        </div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

</x-base-layout>
