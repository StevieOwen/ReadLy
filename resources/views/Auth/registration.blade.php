<x-authLayout>
<title>Registration</title>

<div class="flex ">

<aside class="aside hidden md:block">
    {{-- GRID LINES DECORATION --}}
    <div class="absolute  inset-0 opacity-[0.04] bg-[linear-gradient(rgba(255,255,255,1)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,1)_1px,transparent_1px)] bg-[size:20px_20px]" >
    </div>

    <div class="p-10">
        <h4 class="font-display font-bold tracking-tight text-white text-[clamp(1rem,3vw,1.5rem)]">READLY</h4>
    </div>

    <div class="p-15 ">
        <h2 class="font-display text-[clamp(2rem,3vw,2.5rem)] font-black text-white leading-[1.08] mb-5">Your story <br> starts <br> 
        <em class="bg-[linear-gradient(90deg,#fff_0%,#10b981_40%,#fff_60%,#10b981_100%)] bg-[length:200%_auto] bg-clip-text text-transparent not-italic">right here.</em> </h2>
        <p class="text-[#7d7261] text-[clamp(0.6rem,2vw,1rem)] ">Create your free account and unlock a world of books, live discussions, and readers who share your passion.</p>
    </div>
   
    <div class="absolute bottom-0 left-0 right-0 h-2 bg-ink-700 rounded shadow-lg"></div>
    <div class="flex justify-center">
        <div class="flex items-end gap-1.5 pb-2 animate-book-float w-[80%]">
        <div class="h-24 w-10 rounded-t-sm bg-gradient-to-b from-indigo-500 to-indigo-700 shadow-md flex items-end pb-1 justify-center">
        <span class="book-spine text-[7px] font-bold text-white/70">Dune</span>
        </div>
        <div class="h-28 w-12 rounded-t-sm bg-gradient-to-b from-rose-500 to-rose-700 shadow-md flex items-end pb-1 justify-center">
        <span class="book-spine text-[7px] font-bold text-white/70">1984</span>
        </div>
        <div class="h-20 w-9 rounded-t-sm bg-gradient-to-b from-teal-500 to-teal-700 shadow-md"></div>
        <div class="h-32 w-11 rounded-t-sm bg-gradient-to-b from-amber-400 to-amber-600 shadow-md ring-2 ring-emerald-400/50 flex items-end pb-1 justify-center">
        <span class="book-spine text-[7px] font-bold text-white/70">Sapiens</span>
        </div>
        <div class="h-22 w-10 rounded-t-sm bg-gradient-to-b from-violet-500 to-violet-700 shadow-md" style="height:5.5rem"></div>
        <div class="h-24 w-8 rounded-t-sm bg-gradient-to-b from-emerald-600 to-emerald-800 shadow-md"></div>
        <div class="h-28 w-12 rounded-t-sm bg-gradient-to-b from-orange-500 to-orange-700 shadow-md flex items-end pb-1 justify-center">
        <span class="book-spine text-[7px] font-bold text-white/70">Cosmos</span>
        </div>
        <div class="h-20 w-9 rounded-t-sm bg-gradient-to-b from-sky-500 to-sky-700 shadow-md"></div>
        </div>

    </div>
    
    <hr class="bg-white border border-white">

    <div class="flex justify-between p-4">
        <div class="flex flex-col items-center">
            <span class="text-white">48K+</span>
            <p class="text-[#7d7261] text-[clamp(0.4rem, 1vw, 0.5rem)]">Active readers</p>
        </div>

        <div class="flex flex-col items-center ">
            <span class="text-white">1200+</span>
            <p class="text-[#7d7261] text-[clamp(0.4rem, 1vw, 0.5rem)]">Live clubs today</p>
        </div>

        <div class="flex flex-col items-center">
            <span class="text-white">Free</span>
            <p class="text-[#7d7261] text-[clamp(0.4rem, 1vw, 0.5rem)]">Always & Forever</p>
        </div>
    </div>

    
</aside>


<main class="w-full bg-[#F8F6F1] md:w-[70%] ">
    
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
            <h3 class="font-display text-[#0e0d0a] text-[clamp(2rem,3vw,2.5rem)] font-display font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1 text-[#0e0d0a] md:w-[45%]">Create your free account.</h3>
            <p class="text-[#b5ac99] whitespace-nowrap relative z-10">Already have one? <a class="text-[#059669] underline font-semibold" href="/login">Sign in instead</a> </p>
        </div>

        <div class="py-4 flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
            <div class="flex justify-center space-x-2 bg-white rounded-[10px] p-4 md:w-[25%] hover:bg-[#F8F6F1]">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M12.183 2.75c-3.683 0-6.902 2.031-8.419 5.088a9.05 9.05 0 0 0 0 8.325c1.517 3.056 4.736 5.087 8.419 5.087 2.54 0 4.72-.827 6.244-2.224 2.484-2.173 3.185-5.599 2.658-8.688a.25.25 0 0 0-.246-.208h-8.656a.25.25 0 0 0-.25.25v3.33c0 .138.112.25.25.25h4.768c-.166.74-.687 1.747-1.685 2.423l-.008.005c-.685.502-1.735.852-3.075.852-2.936 0-5.275-2.455-5.275-5.33 0-2.783 2.472-5.24 5.275-5.24 1.67 0 2.72.683 3.429 1.29a.25.25 0 0 0 .337-.011l2.578-2.52a.25.25 0 0 0-.011-.368c-1.609-1.388-3.784-2.311-6.333-2.311'/>
                </svg>
                <span>Google</span>
            </div>

            <div class="flex items-center justify-center space-x-2 bg-white rounded-[10px]  px-4 md:w-[30%] hover:bg-[#F8F6F1]">
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

         {{-- registration form --}}
        <form class="relative z-10 py-3 flex flex-col space-y-3 md:w-[65%]" action="">
            {{-- first and last name container --}}
            <div class="flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-9">

                {{-- first name --}}
                <div class="flex flex-col space-y-2">
                    <label for="firstName">First Name</label>
                    <input class="bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="text" name="firstName" id="firstName" placeholder="">
                </div>

                {{-- last name --}}
                <div class="flex flex-col space-y-2">
                    <label for="lastName">Last Name</label>
                    <input class="bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="text" name="lastName" id="lastName" placeholder="">
                </div>
            </div>

            {{-- email --}}
            <div class="flex flex-col space-y-2">
                <label for="email">Email</label>
                <input class="bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="text" name="email" id="email" placeholder="">
            </div>

            {{-- password --}}
            <div class="flex flex-col space-y-2">
                <label for="passsword">Password</label>
                <div class="relative">
                    <input class="block relative w-full bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="password" name="passsword" id="passsword" placeholder="">
                    <svg class="absolute right-1 top-1" width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M16.75 8c0-1.478-.33-2.901-1.107-3.975-.8-1.107-2.03-1.775-3.643-1.775s-2.842.668-3.643 1.775C7.58 5.099 7.25 6.522 7.25 8v1.25h-.58c-.535 0-.98 0-1.345.03-.38.031-.736.098-1.073.27a2.75 2.75 0 0 0-1.202 1.202c-.172.337-.24.694-.27 1.074-.03.364-.03.81-.03 1.344v4.66c0 .535 0 .98.03 1.345.03.38.098.737.27 1.074a2.75 2.75 0 0 0 1.202 1.202c.337.172.693.239 1.073.27.365.03.81.03 1.345.03h10.66c.535 0 .98 0 1.345-.03.38-.031.736-.098 1.073-.27a2.75 2.75 0 0 0 1.202-1.202c.172-.337.24-.694.27-1.074.03-.364.03-.81.03-1.344V13.17c0-.534 0-.98-.03-1.344-.03-.38-.098-.737-.27-1.074a2.75 2.75 0 0 0-1.2-1.202c-.338-.172-.694-.239-1.074-.27-.365-.03-.81-.03-1.345-.03h-.58zm-8 0c0-1.283.29-2.36.822-3.096.51-.703 1.28-1.154 2.428-1.154s1.919.45 2.428 1.154c.532.736.822 1.813.822 3.096v1.25h-6.5zm4 7.25v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 1.5 0M16 14.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 .75-.75m-7.25.75v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 1.5 0'/>
                    </svg>
                </div>
                
            </div>

            {{-- password confirmation--}}
            <div class="flex flex-col space-y-2">
                <label for="passswordConf">Confirm Password</label>
                <input class="bg-[#f4f3f0] p-1 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="password" name="passswordConf" id="passswordConf" placeholder="">
            </div>

                {{-- Favorites genres --}}
            <div class="flex flex-col space-y-3">
                <label class="" for="">Favorites genres (pick any)</label>

                <div class="flex space-x-4  space-y-3 flex-wrap text-[clamp(0.6rem,2vw,0.8rem)]">
                    
                    <label for="fiction">
                        <input type="checkbox" id="fiction" name="genre" value="Fiction" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Fiction
                        </div>
                    
                    </label>

                    <label for="fantasy">
                        <input type="checkbox" id="fantasy" name="genre" value="Fantasy" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Fantasy
                        </div>
                    
                    </label>

                    <label for="science">
                        <input type="checkbox" id="science" name="genre" value="Science" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                           Science
                        </div>
                    
                    </label>

                    <label for="history">
                        <input type="checkbox" id="history" name="genre" value="History" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            History
                        </div>
                    
                    </label>
                       
                    <label for="romance">
                        <input type="checkbox" id="romance" name="genre" value="Romance" class="sr-only peer">
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Romance
                        </div>
                    
                    </label>   
                    
                    <label for="philosophy">
                        <input type="checkbox" id="philosophy" name="genre" value="Philosophy" class="sr-only peer">
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Philosophy
                        </div>
                    
                    </label>

                    <label for="politic">
                        <input type="checkbox" id="politic" name="genre" value="Politic" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Politic
                        </div>
                    
                    </label>

                    <label for="other">
                        <input type="checkbox" id="other" name="genre" value="Other" class="sr-only peer" >
                        <div class="px-5 py-2 rounded-full border border-[#e3ded5] bg-[#fff] text-[#0e0d0a] font-medium transition-all
                            peer-checked:bg-[#10b981] peer-checked:text-[#fff] peer-checked:border-[#5c5647]
                            hover:border-[#5c5647]/50">
                            Other
                        </div>
                    
                    </label>
                    
                </div>
            </div>

            <div>
                <input type="checkbox" id="term" value="agree" name="terms">
                <label text-[clamp(0.6rem,2vw,0.8rem)] for="term">I agree to the  <a class="text-[#10b981]" href="">Terms of Service</a> and  <a class="text-[#10b981]" href="">Privacy Policy. </a>  </label>
            </div>

            <div class="flex justify-center pt-3">
                <input class="py-2 px-25 md:px-40 bg-gradient-to-br from-[#059669] to-[#10b981] font-semibold rounded-[10px] text-[#fff] shadow-[0_4px_14px_rgba(16,185,129,0.35)] transition-transform duration-[1000ms] hover:-translate-y-2" type="submit" value="Create My Account" id="btn-create-acccount">
            </div>
        </form>


    </div>


    
    


</main>





</div>

</x-authLayout>