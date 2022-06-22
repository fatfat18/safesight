<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" >
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-5 px-7 py-4 sm:block sm:pt-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-xl text-blue-700 dark:text-blue-500 underline ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-xl text-blue-700 dark:text-blue-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        <div class="max-w-2xl mx-auto 2xl:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">


                <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 250 250">
                        
                    <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                    <path d="M173,545.89v-250H423v250Zm4-126c-.22,66.42,51.23,121.52,120.26,121.52,68,0,120.11-53.29,120.55-118.95.46-69.27-54.31-121.82-120.92-121.68C230,300.93,176.86,355.81,177,419.9Z" transform="translate(-173 -295.89)" style="fill: #fefefe"/>
    <path d="M177,419.9c-.11-64.09,53-119,119.89-119.11,66.61-.14,121.38,52.41,120.92,121.68-.44,65.66-52.57,118.94-120.55,118.95C228.2,541.42,176.75,486.32,177,419.9Zm222.18,2.18c.35-57-44.31-102.52-100.33-103.18-59.72-.7-102.11,47.44-103.26,97.6-1.46,63.64,47.71,105.6,100.16,106.23C354,523.43,399.08,476.45,399.15,422.08Z" transform="translate(-173 -295.89)" style="fill: #fe0202"/>
    <path d="M399.15,422.08c-.07,54.37-45.16,101.35-103.43,100.65-52.45-.63-101.62-42.59-100.16-106.23,1.15-50.16,43.54-98.3,103.26-97.6C354.84,319.56,399.5,365.1,399.15,422.08Zm-40.08-5.8h-124c-1.47,25.86,8,46.06,30.06,59.22,20.8,12.39,42.65,12.47,63.37.11C350.42,462.55,360.16,442.29,359.07,416.28Zm11-33.06h-22.9c0,4.38.22,8.39-.1,12.35-.14,1.78-1.37,3.48-2.11,5.22-.64-1.67-1.71-3.31-1.82-5-.26-4.25-.08-8.53-.08-12.62h-7a94.34,94.34,0,0,1-.09,10.28c-.29,2.68,2,7-4,7.59V383.09H224c0,7.23-.12,14.2,0,21.16.11,4.36,2.75,6.57,7.52,6.58q65.52,0,131,0c4.51,0,7.39-2.78,7.48-7.38C370.21,396.79,370.11,390.13,370.11,383.22Z" transform="translate(-173 -295.89)" style="fill: #fefefe"/>
    <path d="M359.07,416.28c1.09,26-8.65,46.27-30.56,59.33-20.72,12.36-42.57,12.28-63.37-.11-22.07-13.16-31.53-33.36-30.06-59.22Zm-61.92,13.56c-8.83-.08-17,7.66-17.1,16.28a17.57,17.57,0,0,0,17.48,17.74c8.16.09,16.53-8.36,16.54-16.68C314.08,438.2,306,429.93,297.15,429.84Z" transform="translate(-173 -295.89)" style="fill: #fe0202"/>
    <path d="M370.11,383.22c0,6.91.1,13.57,0,20.22-.09,4.6-3,7.38-7.48,7.38q-65.52,0-131,0c-4.77,0-7.41-2.22-7.52-6.58-.16-7,0-13.93,0-21.16H332V401c6-.61,3.71-4.91,4-7.59a94.34,94.34,0,0,0,.09-10.28h7c0,4.09-.18,8.37.08,12.62.11,1.7,1.18,3.34,1.82,5,.74-1.74,2-3.44,2.11-5.22.32-4,.1-8,.1-12.35Z" transform="translate(-173 -295.89)" style="fill: #fe0101"/>
    <path d="M297.15,429.84c8.87.09,16.93,8.36,16.92,17.34,0,8.32-8.38,16.77-16.54,16.68a17.57,17.57,0,0,1-17.48-17.74C280.19,437.5,288.32,429.76,297.15,429.84Zm0,5c-5.91-.16-11.81,5.42-12.1,11.47s5.34,12,11.73,12.34c5.85.32,12.09-5.83,12.11-11.93S303.27,435,297.17,434.87Z" transform="translate(-173 -295.89)" style="fill: #fefbfb"/>
    <path d="M297.17,434.87c6.1.17,11.76,5.9,11.74,11.88S302.65,459,296.8,458.68c-6.39-.34-12-6.27-11.73-12.34S291.26,434.71,297.17,434.87Zm-7.55,8.8c2.15,1.52,3.55,3.22,4.45,3,1.31-.34,2.27-2.06,3.38-3.19-1.1-.91-2.15-2.46-3.32-2.55S291.78,442.26,289.62,443.67Z" transform="translate(-173 -295.89)" style="fill: #fe0505"/>
    <path d="M289.62,443.67c2.16-1.41,3.39-2.84,4.51-2.76s2.22,1.64,3.32,2.55c-1.11,1.13-2.07,2.85-3.38,3.19C293.17,446.89,291.77,445.19,289.62,443.67Z" transform="translate(-173 -295.89)" style="fill: #fef4f4"/>
  
        </g>
         </g>
                    
                    </svg>
                <div style="flex items-center">
                    <h1 style="font-family:century; color:red; font-size:25px;">Safe Sight</h1>
                </div>


        

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                             <div class="flex items-center">
                                
                            </div>

                            <div class="ml-50">
                                <div class="mt-2 text-black dark:text-gray-400 text-xl ">
                                             is an application to develop by 3R3 students for their Research Capstone . The function of this system is to ensure safety of the homeowner while they are away. They will install a camera inside your home and stores data with the members of the homeowners. It comes with an internet-of-things device that has facial recognition installed and also uses another internet-of-things device to send an automated report to the police department if the internet-of-things detect uknown faces inside your home.
                                </div>
                            </div>
                        </div>
    
           
                    </div>
                 </div>
          
            </div>
        </div>
    </body>
</html>
