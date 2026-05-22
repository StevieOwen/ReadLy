<x-layout>

    <div class="pt-40 px-8 bg-[#f8f6f1] flex flex-col space-y-5">

        <div>
            <p class="bg-[#10B9811A] font-semibold text-[#059669] md:w-[20%] p-1 rounded-[12px] text-center text-[clamp(0.6rem,2vw,0.8rem)]"><span id="num_users">2,400+ </span>READERS ONLINE NOW</p>
        </div>

        <div class="flex flex-col space-y-4 md:flex-row md:spacey-0 md:space-x-40 pb-5 border-b border-[#E8E5DE]">
            {{-- left side Hero-section --}}
            <div>
                <h1 class="font-display text-[#0e0d0a] text-5xl sm:text-6xl lg:text-[4.5rem] font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1">Your Digital <br>
                 <em class="bg-[linear-gradient(90deg,#1c1a15_0%,#059669_40%,#1c1a15_60%,#059669_100%)] bg-[length:200%_auto] bg-clip-text text-transparent not-italic "> Bookshelf. </em>
                 <br> Your Global <br> Book Club.
                </h1>  

                <p class="text-[#7D7261]">Upload any book in PDF, EPUB, or MOBI. Instantly join <br> live discussions with readers worldwide. Reading is <br> better together.</p>

                <div class="mt-8 flex flex-col space-y-3 space-x-0 md:flex-row md:space-y-0  md:space-x-2">
                    <a class="bg-[#059669] text-white rounded-[10px] py-3 px-4 flex space-x-1 items-center transition-transform duration-[1000ms] hover:-translate-y-2" href="" >
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d='M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1m-8-.5v-11M15.5 8 12 4.5 8.5 8'/>
                        </svg> 
                        <span>Upload Your First Book</span> 
                    </a>
                    
                    <a class="bg-[#fff] rounded-[10px] py-3 px-5 flex space-x-1 items-center transition-transform duration-[1000ms] hover:-translate-y-2 " href=""> 
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                        <path d='M3.464 16.828C2 15.657 2 14.771 2 11s0-5.657 1.464-6.828C4.93 3 7.286 3 12 3s7.071 0 8.535 1.172S22 7.229 22 11s0 4.657-1.465 5.828C19.072 18 16.714 18 12 18c-2.51 0-3.8 1.738-6 3v-3.212c-1.094-.163-1.899-.45-2.536-.96'/>
                        </svg>
                        <span>Browse Live Chat</span>
                    </a>
                </div>

            </div>

              {{-- Right side Hero-section   --}}
            
            <div class="relative flex justify-center items-center animate-[float_4s_ease-in-out_infinite]">
                <!-- Decorative shelf lines -->
                <div class="absolute -left-4 top-1/4 bottom-1/4 w-1 rounded-full bg-gradient-to-b from-transparent via-[#34d399] to-transparent"></div>

                <!-- Main card -->
                <div class="relative w-full max-w-md mockup-shadow rounded-2xl overflow-hidden bg-white">
                <!-- App header bar -->
                <div class="flex items-center gap-2 px-4 py-3 bg-[#0e0d0a] border-b border-[#312d26]">
                    <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                    <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                    <div class="w-3 h-3 rounded-full bg-[#10b981]"></div>
                    </div>
                    <div class="flex-1 flex justify-center">
                    <div class="bg-[#312d26] rounded-md px-12 py-1 text-xs text-[#9a8f7a]">ReadLy.app</div>
                    </div>
                </div>

                <!-- App body -->
                <div class="flex h-64 bg-[#faf9f7]">
                    <!-- Sidebar -->
                    <div class="w-16 bg-[#0e0d0a] flex flex-col items-center gap-4 py-4">
                    <div class="w-8 h-8 rounded-lg bg-[#059669] flex items-center justify-center">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="white" stroke-width="2"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="white" stroke-width="2" fill="none"/></svg>
                    </div>
                    <div class="w-6 h-0.5 bg-[#4a4339] rounded mx-auto"></div>
                    <div class="w-7 h-7 rounded-lg bg-ink-800 flex items-center justify-center opacity-60">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="white" stroke-width="2"/></svg>
                    </div>
                    <div class="w-7 h-7 rounded-lg bg-[#312d26] flex items-center justify-center opacity-60">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="4" stroke="white" stroke-width="2"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" stroke="white" stroke-width="2"/></svg>
                    </div>
                    </div>

                    <!-- Library panel -->
                    <div class="flex-1 overflow-hidden">
                    <div class="px-3 py-2 border-b border-[#e8e5de]">
                        <p class="text-[10px] font-semibold text-[#9a8f7a] uppercase tracking-wider">My Library</p>
                    </div>
                    <div class="flex gap-2 p-3 overflow-x-hidden">
                        <!-- Book 1 -->
                        <div class="flex-shrink-0 w-14 cursor-pointer group">
                        <div class="h-20 w-14 rounded-md shadow-md bg-[#fbbf24]  flex items-end p-1.5 group-hover:shadow-lg transition-shadow">
                            <p class="book-spine text-[7px] font-bold text-white/80 leading-tight truncate w-full">Dune</p>
                        </div>
                        <p class="text-[8px] text-ink-500 mt-1 truncate">Dune</p>
                        </div>
                        <!-- Book 2 -->
                        <div class="flex-shrink-0 w-14 cursor-pointer group">
                        <div class="h-20 w-14 rounded-md shadow-md bg-[#da2c38] flex items-end p-1.5 group-hover:shadow-lg transition-shadow">
                            <p class="book-spine text-[7px] font-bold text-white/80 leading-tight truncate w-full">1984</p>
                        </div>
                        <p class="text-[8px] text-ink-500 mt-1 truncate">1984</p>
                        </div>
                        <!-- Book 3 (active) -->
                        <div class="flex-shrink-0 w-14 cursor-pointer group">
                        <div class="h-20 w-14 rounded-md shadow-md ring-2 ring-emerald-500 bg-[#43291f] flex items-end p-1.5">
                            <p class="book-spine text-[7px] font-bold text-white/80 leading-tight truncate w-full">Sapiens</p>
                        </div>
                        <p class="text-[8px] text-ink-500 mt-1 truncate">Sapiens</p>
                        </div>
                        <!-- Book 4 -->
                        <div class="flex-shrink-0 w-14 cursor-pointer group">
                        <div class="h-20 w-14 rounded-md shadow-md bg-[#226f54] flex items-end p-1.5 group-hover:shadow-lg transition-shadow">
                            <p class="book-spine text-[7px] font-bold text-white/80 leading-tight truncate w-full">Solaris</p>
                        </div>
                        <p class="text-[8px] text-ink-500 mt-1 truncate">Solaris</p>
                        </div>
                    </div>

                    <!-- Chat preview -->
                    <div class="px-3 py-2 border-t border-ink-100">
                        <p class="text-[10px] font-semibold text-ink-400 uppercase tracking-wider mb-2">Active Discussion</p>
                        <div class="bg-ink-50 rounded-lg p-2 space-y-1.5">
                        <div class="flex items-start gap-1.5">
                            <div class="w-4 h-4 rounded-full bg-[#34d399] flex-shrink-0 mt-0.5"></div>
                            <p class="text-[9px] text-[#635a4d] leading-relaxed">The world-building in chapter 12 is incredible 🔥</p>
                        </div>
                        <div class="flex items-start gap-1.5">
                            <div class="w-4 h-4 rounded-full bg-[#059669] flex-shrink-0 mt-0.5"></div>
                            <p class="text-[9px] text-[#635a4d] leading-relaxed">Agreed! The spice metaphor hits different now.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Bottom bar -->
                <div class="px-4 py-2 bg-white border-t border-ink-100 flex items-center gap-2">
                    <div class="flex-1 bg-ink-50 rounded-lg px-3 py-1.5 text-[10px] text-ink-400">Share a thought…</div>
                    <button class="w-6 h-6 rounded-md bg-emerald-500 flex items-center justify-center">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none"><line x1="22" y1="2" x2="11" y2="13" stroke="white" stroke-width="2.5"/><polygon points="22 2 15 22 11 13 2 9 22 2" stroke="white" stroke-width="2.5" fill="none"/></svg>
                    </button>
                </div>
                </div>
            </div>
        </div>

    </div>
        {{-- format type --}}
    <div class="py-10 border-b border-[#b5ac99] bg-[#F8F6F1] flex flex-col space-y-6 shadow-2xl shadow-[#0e0d0a]">
        <h5 class="uppercase text-center text-[clamp(0.6rem, 2vw, 1.2rem)] text-[#9A8F7A]">Support All major book formats</h5>
        <div class="flex justify-center space-x-3 ">
            <div class="book-type">PDF</div>
            <div class="book-type">EPUB</div>
            <div class="book-type">MOBI</div>
            <div class="book-type">AZW3</div>
            <div class="book-type">CBZ</div>
            <div class="book-type">TXT</div>
        </div>
    </div>

    <div class="bg-[#F8F6F1] py-25 px-4 flex flex-col space-y-3">
        <h5 class="text-[#10b981] font-semibold">Everything you need</h5>
        <h2 class="font-display text-[#0e0d0a] text-[clamp(2.5rem,3vw,4rem)] font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1">Built For the <br>Serious reader. </h2>
        <p class="text-[#7d7261]">Every feature designed around how real readers actually read — and <br> want to talk about what they've read.</p>
    </div>
        {{-- Features 1 big card --}}
    <div class="bg-[#F8F6F1] px-10 flex flex-col space-y-4 md:flex-row md:space-y-0 md:justify-between"> 

        <div class="flex flex-col space-y-4 rounded-[10px] bg-white p-4">
            <div class="w-[20%] h-[40%] bg-indigo-50 text-indigo-700 flex justify-center itmes-center rounded-[10px]" > 
                <svg width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1m-8-.5v-11M15.5 8 12 4.5 8.5 8'/></svg>
            </div>
            <h5 class="text-[clamp(1.2rem,2vw,1.8rem)]">Multi-Format Uploads</h5>
            <p class="text-[#7d7261] text-[clamp(0.6rem,2vw,0.8rem)]">Drag and drop any file — PDF, EPUB, MOBI, AZW3, <br> and more. Our parser handles conversion <br> automatically so you can start reading in seconds. </p>
            <div class="flex space-x-3 ">
                <div class="book-type bg-indigo-50 text-indigo-700">PDF</div>
                <div class="book-type bg-indigo-50 text-indigo-700">EPUB</div>
                <div class="book-type bg-indigo-50 text-indigo-700">MOBI</div>
            </div>
        </div>

        <div class="flex flex-col space-y-4 rounded-[10px] bg-[#1c1a15] p-4">
            <div class="w-[20%] h-[20%] bg-[#10B98133] text-[#10b981] flex justify-center items-center rounded-[10px]" > 
                <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='M6.433 2.4c1.402-.15 3.203-.15 5.52-.15h.094c2.317 0 4.118 0 5.52.15 1.418.153 2.541.47 3.437 1.186.92.736 1.35 1.693 1.553 2.9.193 1.152.193 2.618.193 4.446v.183c0 1.782 0 3.015-.2 3.934a3.7 3.7 0 0 1-.545 1.323c-.264.392-.6.722-1 1.042-.897.717-2.02 1.033-3.438 1.185-1.402.151-3.203.151-5.52.151H12c-1.056 0-1.863.357-2.707.906-.342.221-.675.464-1.036.729l-.304.22c-.475.345-.994.71-1.58 1.046A.75.75 0 0 1 5.25 21v-2.585c-.879-.19-1.623-.496-2.254-1-.4-.321-.737-.65-1-1.043a3.7 3.7 0 0 1-.546-1.323c-.2-.919-.2-2.152-.2-3.934v-.183c0-1.828 0-3.294.193-4.445.203-1.208.633-2.165 1.553-2.901.896-.717 2.019-1.033 3.437-1.185m2.317 8.1a.75.75 0 0 0-1.5 0v.5a.75.75 0 0 0 1.5 0zm4 0a.75.75 0 0 0-1.5 0v.5a.75.75 0 0 0 1.5 0zm4 0a.75.75 0 0 0-1.5 0v.5a.75.75 0 0 0 1.5 0z'/></svg>
            </div>
            <h5 class="text-[clamp(1.2rem,2vw,1.8rem)] text-white">Real-Time Group Chats</h5>
            <p class="text-[#7d7261] text-[clamp(0.6rem,2vw,0.8rem)]">Join thousands of active book clubs. Discuss <br> chapter by chapter, share annotations, and react <br> to moments as you read — all in real time. </p>
            
        </div>

        <div class="flex flex-col space-y-4 rounded-[10px] bg-white p-4">
            <div class="w-[20%] h-[20%] bg-[#e8e5de] text-[#fbbf24] flex justify-center items-center rounded-[10px]" > 
                <svg width="35" height="35" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='M8.17 2.25h9.23c.667 0 1.336.109 1.803.593.46.478.547 1.14.547 1.757v11.8c0 .543-.072 1.077-.35 1.509a1.65 1.65 0 0 1-.65.583v.908c0 .666-.108 1.335-.591 1.802-.478.462-1.14.548-1.757.548H5.75a1.5 1.5 0 0 1-1.5-1.5V6.017c-.003-.498-.006-1.12.13-1.687.167-.692.552-1.363 1.371-1.78.338-.172.694-.24 1.074-.27.365-.03.81-.03 1.345-.03m-2.42 18h10.652c.547 0 .683-.096.714-.126.025-.024.134-.155.134-.724v-.65h-10a1.5 1.5 0 0 0-1.5 1.5'/></svg>
            </div>
            <h5 class="text-[clamp(1.2rem,2vw,1.8rem)]">Personal Digital Library</h5>
            <p class="text-[#7d7261] text-[clamp(0.6rem,2vw,0.8rem)]">Your bookshelf, organized beautifully. Track <br> and see your reading stats evolve over time.</p>
            <div class="w-full bg-ink-100 rounded-full h-1.5 mt-2">
              <div class="bg-[#f59e0b] h-1.5 rounded-full w-3/5 transition-all duration-700"></div>
            </div>
            <p class="text-[11px] text-[#9a8f7a] mt-2">Currently reading: <span class="text-[#4a4339] font-medium">Sapiens — Ch. 12 of 20</span></p>
        </div>
        
    </div>
        {{-- Features 2 --}}
    <div class="flex flex-col space-y-3 py-5 px-10 md:flex-row md:justify-between border-b border-[#d0cabc]">

        <div class="flex items-center space-x-2 bg-white rounded-[10px] p-4 md:w-[27%]">
            <div class="w-[20%] h-[80%]  bg-[#FFF1F2] text-[#FFE4E6] p-2 flex justify-center items-center rounded-[10px]">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M7.75 3.5C5.127 3.5 3 5.76 3 8.547 3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79-.78-1.654-2.39-2.79-4.25-2.79'/></svg>
            </div>
            <div>
                <h6>Reading Lists</h6>
                <span class="text-[#b5ac99] text-[clamp(0.6rem,2vw,0.8rem)]">Save books you love</span>
            </div>
        </div>

        <div class="flex items-center space-x-2 bg-white rounded-[10px] p-4 md:w-[27%]">
            <div class="w-[20%] h-[80%]  bg-[#F0FDFA] text-[#CCFBF1] p-2 flex justify-center items-center rounded-[10px]">
                 <svg width="25" height="25" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                 <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                 </svg>
            </div>
            <div>
                <h6>Smart Discoveries</h6>
                <span class="text-[#b5ac99] text-[clamp(0.6rem,2vw,0.8rem)]">Find your next great read</span>
            </div>
        </div>

        <div class="flex space-x-2 bg-white rounded-[10px] p-4 md:w-[25%]">
            <div class="w-[20%] h-[80%] bg-[#F5F3FF] text-[#EDE9FE] p-2 flex justify-center items-center rounded-[10px]">
               <svg width="25" height="25" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path d='M5 21v-9a1 1 0 1 1 2 0v9a1 1 0 1 1-2 0m6 0V3a1 1 0 1 1 2 0v18a1 1 0 1 1-2 0m6 0V8a1 1 0 1 1 2 0v13a1 1 0 1 1-2 0'/>
               </svg>
            </div>
            <div>
                <h6>Reading Stats</h6>
                <span class="text-[#b5ac99] text-[clamp(0.6rem,2vw,0.8rem)]">Track your reading</span>
            </div>
        </div>

    </div>

    <div class="py-25">
        <div class="flex flex-col space-y-2 justify-center items-center">
            <h5 class="text-[#10b981] font-semibold">FROM THE COMMUNITY</h5>
            <h2 class="font-display text-[#0e0d0a] text-[clamp(2rem,3vw,2.5rem)] font-display font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1">Readers love <br> BookPulse.</h2>
        </div>

            {{-- testimony from community member --}}
        <div class="p-2 flex flex-col space-x-0 space-y-4 md:flex-row md:w-full md:space-y-0 md:justify-center md:space-x-6">
            {{-- testimony-1 --}}
            <div class="p-6 rounded-[10px] flex flex-col space-y-4 bg-white">
                <p>I've tried Goodreads, Discord, every app out <br> there. BookPulse is the only one that actually
                    <br> combines my library and my reading community <br> in one beautiful place. I'm on it every evening.
                </p>

                <div class="flex space-x-2 items-center">
                    <div class="w-[45px] text-[clamp(1rem,2vw,1.5rem)] text-white h-[45px] rounded-full bg-[#D01D1D] flex justify-center items-center">
                        s
                    </div>
                    <div>
                        <h4>Sophia</h4>
                        <p class="text-[#b5ac99] text-[clamp(0.5rem,2vw,0.8rem)]">Literature PhD · Oxford, UK</p>
                    </div>
                </div>

            </div>
                {{-- testimony-2 --}}
            <div class="p-6 rounded-[10px] flex flex-col space-y-4 bg-[#0e0d0a]">
                <p class="text-[#b5ac99]">The real-time chapter discussions are game- <br> changing. Last week 200 of us read the final
                    <br> chapter of Project Hail Mary together. I've never <br> had that experience with a book before.
                </p>

                <div class="flex space-x-2 items-center">
                    <div class="w-[45px] text-[clamp(1rem,2vw,1.5rem)] text-white h-[45px] rounded-full bg-[#1DD079] flex justify-center items-center">
                        D
                    </div>
                    <div>
                        <h4 class="text-white">Daniel K.</h4>
                        <p class="text-[#7d7261] text-[clamp(0.5rem,2vw,0.8rem)]">Software Engineer · Berlin, DE</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="flex justify-center pb-20">
    
        <div class="bg-[#0e0d0a] rounded-[10px] pt-10 pb-3 px-10 w-[90%] flex flex-col space-y-3 md:flex-row md:space-y-0 md:justify-between items-center">
            <div>
                <h4 class="text-[#10b981] font-semibold">Free forever, no credit card</h4>
                <h2 class="font-display text-[#0e0d0a] text-[clamp(2rem,3vw,2.5rem)] font-display font-black leading-[1.05]  mb-6 opacity-90 animate-fade-up-delay-1 text-white">Start reading together <br> in under 60 seconds.</h2>
            </div>

            <div>
                <span class="block text-white font-semibold text-center  bg-gradient-to-br from-[#059669] to-[#10b981] p-4 rounded-[12px] transition-transform duration-[1000ms] hover:-rotate-2 "><a href="/registration">Create Free Account</a></span>
            </div>
        </div>

    </div>

    <div>
    
    </div>
</x-layout>