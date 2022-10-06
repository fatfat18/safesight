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
                padding-top:10vh;
                
                
            }

            .test2 {
                background-color:white;
                width:30%;
                height:50vh;
                justify-content:center;
                align-items:center;
                text-align:center;
                border-radius:50px;
                padding-top:5vh;
                border:ridge 10px;
                
                
            }
            .logincover {
                width:80%;
                height:60vh;
                margin-left:5.5vw;
                border-radius:30px;
                border:solid 3px;

                

            }







        </style>
        </head>
<body>








<x-guest-layout>
<div class="test">

<div class="spacer">

                <div style="padding-top:5vh; display:flex;">
                <img src="/img/logincover.jpg" alt="TEAMBOIS" class="logincover"  >
                </div>
                <div style="width:25vw; margin-left:13vw; text-align:center; font-size:3vh; padding-top:.5vh; font-weight:bold; font-family:century">
                TEAM BOIS
                </div>
                
        
        
</div>

<div class="test2">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
        </div>
</div>
</x-guest-layout>



        </body>
    </html>