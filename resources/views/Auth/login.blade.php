<x-authLayout>
<title>Login</title>
<div class="flex ">
<aside class="aside hidden md:block">
   {{-- GRID LINES DECORATION --}}
    <div class="absolute  inset-0 opacity-[0.04] bg-[linear-gradient(rgba(255,255,255,1)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,1)_1px,transparent_1px)] bg-[size:20px_20px]" >
    </div>

    <div class="p-10">
        <h4 class="font-display font-bold tracking-tight text-white text-[clamp(1rem,3vw,1.5rem)]">READLY</h4>
    </div>

    <div class="p-15 ">
        <h2 class="font-display text-[clamp(2rem,3vw,2.5rem)] font-black text-white leading-[1.08] mb-5">Pick up <br>where you<br> 
        <em class="bg-[linear-gradient(90deg,#fff_0%,#10b981_40%,#fff_60%,#10b981_100%)] bg-[length:200%_auto] bg-clip-text text-transparent not-italic">left off.</em> </h2>
        <p class="text-[#7d7261] text-[clamp(0.6rem,2vw,1rem)] ">Your bookshelf, your clubs, your conversations — all waiting exactly where you left them.</p>
    </div>

    
</aside>


<main class="bg-[#F8F6F1] w-full md:w-[70%]">
    {{-- go back home --}}
    <div class="hidden md:block relative z-10">
        <a href="/">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M16.5 12h-9m3.5 3.5L7.5 12 11 8.5'/>
            <path d='M3 9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748C6.04 3 7.16 3 9.4 3h5.2c2.24 0 3.36 0 4.216.436a4 4 0 0 1 1.748 1.748C21 6.04 21 7.16 21 9.4v5.2c0 2.24 0 3.36-.436 4.216a4 4 0 0 1-1.748 1.748C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.436a4 4 0 0 1-1.748-1.748C3 17.96 3 16.84 3 14.6z'/>
            </svg>
        </a>
    </div>

    {{-- header mobile-phone --}}
    <div class="w-full  md:hidden flex justify-between p-4 items-center border-b border-[#b5ac99]">
        <h2>READLY</h2>
        <a href="/">
            <div class="flex">
                <span><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d='M19.5 12h-15m0 0 5.625-6M4.5 12l5.625 6'/></svg>
                </span>
                <span>Back</span>  
            </div>
        </a>
    </div>

    {{-- signin with google or apple --}}
    <div class="p-10 md:p-25 ">
        <div>
            <h3 class="font-display text-[#0e0d0a] text-[clamp(2rem,3vw,2.5rem)] font-display font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1 text-[#0e0d0a] md:w-[45%]">Welcome back</h3>
            <p class="text-[#b5ac99] whitespace-nowrap relative z-10">New to ReadLy? <a class="text-[#059669] underline font-semibold" href="/registration">Create a free account</a> </p>
        </div>

        <div class="relative z-10 py-4 flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
            <div class="flex justify-center space-x-2 bg-white rounded-[10px] p-4 md:w-[25%] transition-all duration-[1000ms] hover:bg-[#F8F6F1] hover:outline">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M12.183 2.75c-3.683 0-6.902 2.031-8.419 5.088a9.05 9.05 0 0 0 0 8.325c1.517 3.056 4.736 5.087 8.419 5.087 2.54 0 4.72-.827 6.244-2.224 2.484-2.173 3.185-5.599 2.658-8.688a.25.25 0 0 0-.246-.208h-8.656a.25.25 0 0 0-.25.25v3.33c0 .138.112.25.25.25h4.768c-.166.74-.687 1.747-1.685 2.423l-.008.005c-.685.502-1.735.852-3.075.852-2.936 0-5.275-2.455-5.275-5.33 0-2.783 2.472-5.24 5.275-5.24 1.67 0 2.72.683 3.429 1.29a.25.25 0 0 0 .337-.011l2.578-2.52a.25.25 0 0 0-.011-.368c-1.609-1.388-3.784-2.311-6.333-2.311'/>
                </svg>
                <span>Google</span>
            </div>

            <div class="flex items-center justify-center space-x-2 bg-white rounded-[10px]  px-4 md:w-[30%] transition-color duration-[1000ms] hover:bg-[#F8F6F1] hover:outline">
                <svg class="w-[15%]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path d="M319.1 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7-55.8 .9-115.1 44.5-115.1 133.2 0 26.2 4.8 53.3 14.4 81.2 12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zM262.5 104.5c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                </svg>
                <span>Apple</span>
            </div>
 
        </div>

        <div class="flex items-center space-x-2">
            <div class="w-[150px] h-[2px] bg-[#7d7261]"></div>
            <span class="whitespace-nowrap text-[#7d7261] text-[clamp(0.7rem,2vw,0.8rem)]">or register with email</span>
            <div class="w-[150px] h-[2px] bg-[#7d7261]"></div>
        </div>


        {{-- login form --}}
        <form id="login-form" class="relative z-10 py-3 flex flex-col space-y-3 md:w-[65%]" action="{{ route('login') }}" method="POST">
        @csrf
            {{-- email --}}
            <div class="flex flex-col space-y-2">
                <label for="email">Email</label>
                <input class="@error('email') is-invalid @enderror bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="john@gmail.com" required>
                @error('email')
                    <span class="text-[#D51C39]">{{ $message }}</span>
                @enderror
            </div>

            {{-- password --}}
            <div class="flex flex-col space-y-2">
                <div class="flex justify-between items-center">
                    <label for="passsword">Password</label>

                    <a class="text-[clamp(0.6rem,2vw,0.7rem)]" href="/forgot-password">Forgot Password?</a>
                </div>
                
                <div class="relative">
                    <input class="block relative w-full bg-[#f4f3f0] p-1 pr-10 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="password" name="password" id="password" placeholder="" required>
                    
                    <button type="button" id="hide-pwd" class="absolute z-10 right-1 top-1/2 -translate-y-1/2 cursor-pointer text-[#1c1a15]/70 hover:text-[#1c1a15]">
                        <svg  width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d='M16.75 8c0-1.478-.33-2.901-1.107-3.975-.8-1.107-2.03-1.775-3.643-1.775s-2.842.668-3.643 1.775C7.58 5.099 7.25 6.522 7.25 8v1.25h-.58c-.535 0-.98 0-1.345.03-.38.031-.736.098-1.073.27a2.75 2.75 0 0 0-1.202 1.202c-.172.337-.24.694-.27 1.074-.03.364-.03.81-.03 1.344v4.66c0 .535 0 .98.03 1.345.03.38.098.737.27 1.074a2.75 2.75 0 0 0 1.202 1.202c.337.172.693.239 1.073.27.365.03.81.03 1.345.03h10.66c.535 0 .98 0 1.345-.03.38-.031.736-.098 1.073-.27a2.75 2.75 0 0 0 1.202-1.202c.172-.337.24-.694.27-1.074.03-.364.03-.81.03-1.344V13.17c0-.534 0-.98-.03-1.344-.03-.38-.098-.737-.27-1.074a2.75 2.75 0 0 0-1.2-1.202c-.338-.172-.694-.239-1.074-.27-.365-.03-.81-.03-1.345-.03h-.58zm-8 0c0-1.283.29-2.36.822-3.096.51-.703 1.28-1.154 2.428-1.154s1.919.45 2.428 1.154c.532.736.822 1.813.822 3.096v1.25h-6.5zm4 7.25v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 1.5 0M16 14.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 .75-.75m-7.25.75v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 1.5 0'/>
                        </svg>
                    </button>
                    
                    <button type="button" id="show-pwd" class="hidden absolute  z-10 right-1 top-1/2 -translate-y-1/2 cursor-pointer text-[#1c1a15]/70 hover:text-[#1c1a15]">
                        <svg  width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d='M8 10V8c0-2.761 1.239-5 4-5 2.094 0 3.313 1.288 3.78 3.114M3.5 17.8v-4.6c0-1.12 0-1.68.218-2.107a2 2 0 0 1 .874-.875c.428-.217.988-.217 2.108-.217h10.6c1.12 0 1.68 0 2.108.217a2 2 0 0 1 .874.874c.218.428.218.988.218 2.108v4.6c0 1.12 0 1.68-.218 2.108a2 2 0 0 1-.874.874C18.98 21 18.42 21 17.3 21H6.7c-1.12 0-1.68 0-2.108-.218a2 2 0 0 1-.874-.874C3.5 19.481 3.5 18.921 3.5 17.8m8.5-2.05v-.5m4 .5v-.5m-8 .5v-.5'/>
                        </svg>
                    </button>
                    
                </div>
                
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class=text-[#D51C39]>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- submit buttons    --}}
            <div class="flex justify-center pt-3">
                <input class="py-2 px-25 md:px-40 bg-gradient-to-br from-[#059669] to-[#10b981] font-semibold rounded-[10px] text-[#fff] shadow-[0_4px_14px_rgba(16,185,129,0.35)] transition-transform duration-[1000ms] hover:-translate-y-2" type="submit" value="Sign In to ReadLy" id="btn-login">
            </div>

        </form>
    </div>

    <footer class="border-t border-[#b5ac99] flex justify-center p-1">
        <p class="text-[#7d7261] text-[clamp(0.7rem,2vw,0.9rem)]">© 2026 ReadLy, Inc.</p>
    </footer>
</main>





</div>

@vite('resources/js/login.js')
</x-authLayout>