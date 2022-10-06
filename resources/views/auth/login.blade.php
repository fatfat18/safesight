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
                padding-top:25vh;
                
                
            }

            .test2 {
                background-color:white;
                width:30%;
                height:60vh;
                justify-content:center;
                align-items:center;
                text-align:center;
                border-radius:50px;
                padding-top:9vh;
                border:ridge 10px;
                
                
            }

            
        </style>
        </head>
<body>

<x-guest-layout>

<div class="test">

        <div class="spacer">


        <div style=" font-size:9vh; padding-top:11vh ;font-weight:900;">
         SafeSight
        </div>
        <div style=" width:25vw; margin-left:13vw; text-align:center; font-size:2.5vh;">
        Securing your home!
        </div>
                
                
        </div>

 <div class="test2">
    <x-jet-authentication-card> 
    
        
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
                
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    
    </x-jet-authentication-card>
    </div>
</div>
</x-guest-layout>




















</body>
</html>


