<html>


<head>
<title>SafeSight</title>
        <link rel="icon" href="/img/sslogo.png" type="image/x-icon">
<style>
            body {
                font-family: century-gothic;
                background-image:url("/img/backgg.jpg");
                background-repeat:no-repeat;
                background-size: 100% 100%;
            }
            .container {
                height:82vh;
            }

           

            .test {
                background: rgb(153,3,3);
                background: linear-gradient(270deg, rgba(153,3,3,1) 0%, rgba(255,255,255,1) 50%);
                width:100%;
                height:100%;
                display:flex;
                justify-content:center;
                align-items:center;
                text-align:center;
                
            }

            .spacer {
                background: rgb(153,3,3);
                background: linear-gradient(90deg, rgba(153,3,3,1) 0%, rgba(255,255,255,1) 50%);
                width:50%;
                height: 90vh;
                border-radius:40px;
                margin: 0px 20px 0px 20px;
                justify-content:center;
                text-align:center;
                align-items:center;
                padding-top:15vh;
                
                
            }

            .test2 {
                background-color:white;
                width:30%;
                height:70vh;
                justify-content:center;
                align-items:center;
                text-align:center;
                border-radius:50px;
                padding-top:7vh;
                border:ridge 10px;
                
                
            }







        </style>
        </head>
<body>







<x-guest-layout>

<div class="test">

        <div class="spacer">

                <div style="; font-size:9vh; padding-top:11vh ;font-weight:900;">
                 SafeSight
                </div>
                <div style="; width:25vw; margin-left:13vw; text-align:center; font-size:2.5vh;">
                is an IoT-based home security notifier that sends direct report to the 
                nearest authority on your area. It uses a camera that has facial 
                recognition feature that will scan faces whenever who is in the 
                place and recognizes if it is an intruder or not. 
                </div>
                
                
        </div>

 <div class="test2">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</div>
</div>
</x-guest-layout>



                </body>
            <html>