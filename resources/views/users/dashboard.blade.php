<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="text-[#1C1A15] bg-[#F8F6F1CC] font-body flex relative">

<aside class="hidden flex flex-col space-y-6 md:block border-r border-[#e8e5de] w-[15%] h-screen">
    <header class="p-4 border-b border-[#e8e5de] shadow-md">
        <h2 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.5rem)]">ReadLy</h2>
    </header>

        {{-- Menu items --}}
    <div class="p-3 flex flex-col space-y-6">
        
        <div class="flex flex-col space-y-3">
            <h5 class="text-[#9a8f7a] text-[clamp(0.7rem,2vw,0.9rem)]">Main</h5>
            <ul class="flex flex-col space-y-6 text-[clamp(0.8rem,2vw,0.9rem)]">
                <li class="menu-items">
                    <a class="flex space-x-1 items-center" href=""><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M10.5 11.5V9.522L12 8.428l1.5 1.094V11.5a.25.25 0 0 1-.25.25h-2.5a.25.25 0 0 1-.25-.25'/>
                    <path d='M17.4 2.25c.667 0 1.336.109 1.803.593.46.478.547 1.14.547 1.757v11.8c0 .543-.072 1.077-.35 1.509a1.65 1.65 0 0 1-.65.583v.908c0 .666-.108 1.335-.591 1.802-.478.462-1.14.548-1.757.548H5.75a1.5 1.5 0 0 1-1.5-1.5V6.017c-.003-.498-.006-1.12.13-1.687.167-.692.552-1.363 1.371-1.78.338-.172.694-.24 1.074-.27.365-.03.81-.03 1.345-.03zm-.998 18c.547 0 .683-.096.714-.126.025-.024.134-.155.134-.724v-.65h-10a1.5 1.5 0 0 0-1.5 1.5zm-3.96-13.356a.75.75 0 0 0-.884 0l-2.25 1.64A.75.75 0 0 0 9 9.14v2.36c0 .966.784 1.75 1.75 1.75h2.5A1.75 1.75 0 0 0 15 11.5V9.14a.75.75 0 0 0-.308-.606z'/></svg>
                    <span>My Library</span>
                    </a>
                </li>

                <li class="menu-items">
                    <a class="flex space-x-1 items-center" href="">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                    </svg>
                    <span>Discover</span>
                    </a>
                </li>

                <li class="menu-items">
                    <a class="flex space-x-1 items-center" href="">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M3.464 16.828C2 15.657 2 14.771 2 11s0-5.657 1.464-6.828C4.93 3 7.286 3 12 3s7.071 0 8.535 1.172S22 7.229 22 11s0 4.657-1.465 5.828C19.072 18 16.714 18 12 18c-2.51 0-3.8 1.738-6 3v-3.212c-1.094-.163-1.899-.45-2.536-.96'/>
                    </svg>
                    <span>Book Clubs</span>
                    </a>
                </li>

                <li class="menu-items"> 
                    <a class="flex space-x-1 items-center" href="">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M2 3a1 1 0 0 1 2 0v10.365l2.217-1.846.334-.266c.786-.59 1.61-.966 2.512-.91 1.021.066 1.864.67 2.62 1.426l.007.006.25.239c.556.499.909.61 1.143.614.28.004.7-.142 1.413-.766l5.846-5.115a1 1 0 0 1 1.316 1.506l-5.846 5.114c-.818.716-1.716 1.274-2.754 1.26-.92-.011-1.723-.465-2.467-1.137l-.316-.3-.006-.007c-.655-.655-1.055-.826-1.332-.843-.234-.015-.59.067-1.175.505l-.265.21-3.491 2.908c.006.463.018.849.045 1.182.05.606.142.954.276 1.217l.115.206c.289.47.702.853 1.196 1.105l.103.049c.251.108.584.184 1.113.227C7.471 20 8.264 20 9.4 20H21l.102.005a1 1 0 0 1 0 1.99L21 22H9.4c-1.103 0-1.991.001-2.709-.058-.637-.052-1.208-.154-1.737-.381l-.224-.106a5 5 0 0 1-2.092-2.01l-.093-.175c-.302-.593-.428-1.233-.487-1.961a24 24 0 0 1-.053-1.714 1 1 0 0 1-.001-.185Q2 15.026 2 14.6z'/>
                    </svg>
                    <span>Reading Stats</span>
                    </a>
                </li>
            </ul>
        </div>


            {{-- account settings --}}
        <div class="flex flex-col space-y-2">
            <h5 class="text-[#9a8f7a] text-[clamp(0.7rem,2vw,0.9rem)]">Account</h5>
            <ul class="flex flex-col space-y-4 text-[clamp(0.8rem,2vw,0.9rem)]">
                <li class="menu-items">
                    <a class="flex space-x-1 items-center" href="">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M2.25 12a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m2.22-7.53a.75.75 0 0 1 1.06 0l2.122 2.12a.75.75 0 0 1-1.061 1.06L4.47 5.532a.75.75 0 0 1 0-1.061m15.06-.001a.75.75 0 0 1 0 1.06l-2.12 2.122a.75.75 0 0 1-1.06-1.061l2.12-2.121a.75.75 0 0 1 1.061 0M7.652 16.348a.75.75 0 0 1 0 1.061L5.53 19.53a.75.75 0 0 1-1.06-1.06l2.121-2.122a.75.75 0 0 1 1.06 0m8.697 0a.75.75 0 0 1 1.061 0l2.121 2.122a.75.75 0 1 1-1.06 1.06l-2.122-2.121a.75.75 0 0 1 0-1.06M12 2.25a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75m0 15a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75M17.25 12a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1-.75-.75M12 8.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5'/>
                    </svg>
                    <span>Settings</span>
                    </a>
                </li>

                <li class="menu-items">
                    <a class="flex space-x-1 items-center" href="">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M12 1.25a3.16 3.16 0 0 0-2.235.926L2.177 9.765a3.16 3.16 0 0 0 0 4.47l7.588 7.588a3.16 3.16 0 0 0 4.47 0l7.588-7.588a3.16 3.16 0 0 0 0-4.47l-7.588-7.588A3.16 3.16 0 0 0 12 1.25m0 13.497a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5a.75.75 0 0 1 .75-.75m1.872-6.814c.544.482.878 1.188.878 2.057 0 .64-.164 1.138-.45 1.543-.256.365-.588.614-.823.79l-.027.02c-.263.198-.416.32-.524.474-.09.127-.176.317-.176.68a.75.75 0 0 1-1.5 0c0-.64.164-1.14.45-1.544.256-.364.588-.613.823-.79l.027-.02c.263-.198.416-.32.524-.474.09-.127.176-.317.176-.679 0-.46-.166-.75-.372-.934a1.33 1.33 0 0 0-.878-.31c-.34 0-.657.114-.877.31-.207.183-.373.474-.373.934a.75.75 0 0 1-1.5 0c0-.869.334-1.575.877-2.057A2.83 2.83 0 0 1 12 7.246c.66 0 1.343.218 1.872.687'/>
                    </svg>
                    <span>Help</span>
                    </a>
                </li>

            
            </ul>

        </div>
        
        
    </div>

    {{-- users infos --}}
    <div class="flex ml-2 items-center py-2 px-5 space-x-2 bg-white rounded-[10px] w-[90%] shadow-lg">
        <div class="w-[40px] h-[40px] rounded-full bg-[#10b981] text-white flex justify-center items-center"> 
            U
        </div>
        <div>
            <h5 class="text-[clamp(0.8rem,2vw,0.9rem)]">User Name</h5>
            <p></p>
        </div>
    </div>

    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link ml-2 px-2 flex space-x-1">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
        <path d='M13.496 21H6.5c-1.105 0-2-1.151-2-2.571V5.57c0-1.419.895-2.57 2-2.57h7M16 15.5l3.5-3.5L16 8.5m-6.5 3.496h10'/>
        </svg>
        <span class="text-[clamp(0.8rem,2vw,0.9rem)]">Logout</span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
</aside>

<main class="w-full md:w-[85%]">

    {{-- burger menu for mobile --}}
    <div class=" md:hidden p-1">
        <div class=" flex justify-center items-center p-1 w-[30px] h-[30px] rounded-[10px] bg-[#10b981] text-white">
            <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d='M3.75 6.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75'/>
            </svg>
        </div>
    </div>

    <section id="library">
        <header class="p-3 flex flex-col md:flex-row md:justify-between md:items-center border-b border-[#b5ac99]">
            <div>
                <h3 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.5rem)]">My Library</h3>
                <p class="text-[#b5ac99] text-[clamp(0.6rem,2vw,0.8rem)]"><span id="numbers-book">6</span> books uploaded</p>
            </div>

            <div class="flex flex-col md:flex-row space-y-3  md:justify-between md:space-x-4 md:items-center">
                {{-- search book --}}
               <form action="{{ route('dashboard') }}" method="GET" class="w-full max-w-xs">
                    <div class="relative">
                        <input class="block bg-white w-full relative border border-[#b5ac99] py-1 outline-[#b5ac99] rounded-[10px] pl-8 pr-3 transition-all duration-[500ms] hover:outline text-sm" 
                            type="text" 
                            name="search" // [!code highlight]
                            value="{{ request('search') }}" // [!code highlight]
                            placeholder="Search books ...">
                            
                        <svg class="absolute top-1.5 left-2 text-[#b5ac99]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                        </svg>

                        @if(request('search'))
                            <a href="{{ route('dashboard', request()->except('search')) }}" class="absolute right-2 top-2 text-xs text-[#b5ac99] hover:text-[#FD232A] transition-colors">
                                ✕
                            </a>
                        @endif
                    </div>
                </form>

                <div id="btn-display-modal" class="bg-gradient-to-br text-[clamp(0.6rem,2vw,0.8rem)] from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] items-center shadow-[0_4px_14px_rgba(16,185,129,0.35)] md:px-5 transition-transform duration-[1000ms] hover:-translate-y-2 max-md:w-[30%]">
                    <a class="flex items-center space-x-1" href="">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M4 16.004V17a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1m-8-.5v-11M15.5 8 12 4.5 8.5 8'/>
                    </svg>
                    <span class="whitespace-nowrap">Upload Book</span>
                    </a>
                </div>

            </div>
        </header>
        {{-- filter book --}}
        <div class="p-4 border-b border-[#b5ac99]">
            <ul class="flex space-x-4">
                <li class="{{ !request()->has('status') ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard') }}" class="font-medium block">All Books</a>
                </li>

                <li class="{{ request('status') === 'reading' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'reading']) }}" class="font-medium block">Reading</a>
                </li>

                <li class="{{ request('status') === 'completed' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'completed']) }}" class="font-medium block">Finished</a>
                </li>

                <li class="{{ request('status') === 'not started' ? 'bg-[#10b981] text-white' : 'bg-white text-[#b5ac99]' }} text-[clamp(0.6rem,2vw,0.8rem)] py-2 px-4 rounded-full transition-colors duration-200">
                    <a href="{{ route('dashboard', ['status' => 'not started']) }}" class="font-medium block">Unread</a>
                </li>
            </ul>
        </div>

        <div> 
        {{-- display a success message when the book is successfully updated --}}
            @if (session('success'))
            <div id="success-alert" class="mb-6 flex items-center justify-between p-4 rounded-xl border border-[#059669]/20 bg-[#ecfdf5] text-[#047857] shadow-sm transition-all duration-500">
                <div class="flex items-center space-x-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#d1fae5] text-[#059669]">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold">Success!</p>
                        <p class="text-xs text-[#065f46]/80">{{ session('success') }}</p>
                    </div>
                </div>
                
                <button type="button" onclick="document.getElementById('success-alert').remove()" class="text-[#059669] hover:text-[#047857] transition-colors p-1 rounded-md hover:bg-[#d1fae5]/50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <script>
                // Automatically fade out and remove the alert banner after 5 seconds
                setTimeout(() => {
                    const alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.classList.add('opacity-0', '-translate-y-2');
                        setTimeout(() => alert.remove(), 500); // Wait for the transition to finish before dropping from DOM
                    }
                }, 5000);
            </script>
            @endif
            
        </div>

         {{-- Bookshelves --}}
        <div class="flex flex-col items-center md:flex-row md:space-x-3 p-4 ">
        
            <div class="flex flex-wrap gap-6 p-4">
                @forelse ($books as $book)
                    @php
                        // 1. Grab the primary genre denomination name string cleanly
                        $genreName = $book->genres->first()->denomination ?? 'Default';

                        // 2. Map specific genre terms to corresponding background styles
                        $genreColors = [
                            'Philosophy'      => 'bg-[#726252]', // Deep Earthy Brown
                            'Fiction'         => 'bg-[#23f0c7]', // Your original Bright Teal
                            'Drama'           => 'bg-[#FD232A]', // Crimson Red
                            'Science Fiction' => 'bg-[#1e3a8a]', // Deep Space Blue
                            'History'         => 'bg-[#9a8f7a]', // Muted Sage
                            'Default'         => 'bg-[#10b981]', // Emerald Backup Accent
                        ];

                        // 3. Fallback to the default emerald background if the genre isn't explicitly listed above
                        $cardBackground = $genreColors[$genreName] ?? $genreColors['Default'];
                    @endphp



                    <div class="rounded-[10px] p-2 w-[200px] transition-all duration-[500ms] hover:shadow-md shadow-[#0e0d0a] bg-transparent">
                        
                        <div class="{{ $cardBackground }} rounded-t-[10px] p-6 min-h-[120px] flex flex-col justify-between">
                            <h5 class="text-[#b5ac99] font-bold text-[clamp(0.5rem,1vw,0.7rem)] uppercase tracking-wider">
                                {{ $book->status ?? 'NOT STARTED' }}
                            </h5>
                            <h4 class="font-semibold text-white truncate text-[clamp(1rem,1.2vw,1.4rem)]" title="{{ $book->title }}">
                                {{ $book->title }}
                            </h4>
                        </div>
                        
                        <div class="p-2 bg-white rounded-b-[10px] flex flex-col space-y-4">
                            <div>
                                <h5 class="text-[#b5ac99] text-[clamp(0.5rem,1vw,0.7rem)] font-medium truncate" title="{{ $book->author }}">
                                    {{ $book->author }}
                                </h5>
                                
                                @if($book->genres->isNotEmpty())
                                    <span class="inline-block mt-1 text-[10px] px-2 py-0.5 rounded bg-[#f5f1ea] text-[#726252]">
                                        {{ $book->genres->first()->denomination }}
                                    </span>
                                @endif
                            </div>

                            <span class="text-[#b5ac99] font-semibold text-[clamp(0.4rem,1vw,0.6rem)] uppercase tracking-widest">
                                {{ $book->format }}
                            </span> 
                            
                            <a href="/reader/{{ $book->id }}" class="block text-center bg-[#10b981] text-white text-[clamp(0.6rem,1vw,0.8rem)] rounded-[10px] p-2 font-medium transition-transform duration-[1000ms] hover:-translate-y-2 cursor-pointer shadow-sm">
                                {{ $book->status === 'reading' ? 'Continue Reading' : 'Start Reading' }}
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="w-full flex flex-col items-center justify-center py-16 px-4 border-2 border-dashed border-[#d1c9bc] rounded-2xl">
                        <svg class="w-12 h-12 text-[#b5ac99] mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="text-[#726252] font-semibold text-sm">Your bookshelf is empty</p>
                        <p class="text-xs text-[#b5ac99] mt-0.5">Click the upload button to add your first literary masterpiece!</p>
                    </div>
                @endforelse
            </div>


        </div>
        
        {{-- modal for uploading book --}}
        <div id="modal-book-upload" class="hidden fixed flex items-center justify-center inset-0 z-50 p-4 bg-[#F8F6F1CC]/40 backdrop-blur-sm">
        
            <div class=" p-3 rounded-[12px] bg-white max-w-md shadow-2xl max-h-[92vh] overflow-y-auto">
                <header class="flex flex-col space-y-3">
                    <div class="flex justify-between border-b border-[#d0cabc] pb-4">
                        <div>
                        <h4 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.2rem)]">Add a New Book </h4>
                        <span class="text-[#b5ac99] text-[clamp(0.5rem,1vw,0.7rem)]">Fill in the details and upload your file</span>
                        </div>

                        <div>
                        <button id="close-btn" class="bg-[#9a8f7a] p-1 rounded-[10px] transition-color duration-[500ms] hover:bg-[#FD232A] hover:text-white" type="button"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d='M18 6 6 18M6 6l12 12'/></svg></button>
                        </div>

                    </div>
                    

                    @if ($errors->any()) 
                        <div class="mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-xs text-red-600 font-medium"> 
                            <p class="font-bold uppercase tracking-wider mb-1">Please fix the following issues:</p> 
                            <ul class="list-disc pl-4 space-y-0.5"> 
                                @foreach ($errors->all() as $error) 
                                    <li>{{ $error }}</li> 
                                @endforeach 
                            </ul> 
                        </div> 
                    @endif 
                </header>

                <form id="add-book" class="p-3" action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- input file --}}
                    <div>
                        <label for="file" class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3">Book File <span class="text-red-500">*</span></label>
                        <div 
                            id="drop-zone"
                            class="flex flex-col items-center justify-center border-2 border-dashed border-[#d1c9bc] rounded-2xl bg-transparent py-12 px-6 transition-all duration-200 cursor-pointer hover:bg-[#fbfaf8] group">
                            <input type="file" id="file-input" name="book_file" accept=".pdf,.epub,.mobi" class="hidden" />

                            <div class="w-14 h-14 bg-[#f5f1ea] rounded-2xl flex items-center justify-center mb-4 transition-colors group-hover:bg-[#ebe5da]">
                            <svg class="w-6 h-6 text-[#726252]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16v3a2 2 0 002 2h14a2 2 0 002-2v3M12 5v11m0-11L9 8m3-3l3 3" />
                            </svg>
                            </div>

                            <p class="text-lg font-semibold text-[#1c1917] text-center mb-1">
                            Drag & drop your book here
                            </p>
                            @error('book_file') <span class="text-red-500">{{ $message }}</span> @enderror
                            <p class="text-sm text-[#a39786] text-center mb-6">
                            Supports <span class="font-semibold text-[#726252]">PDF, EPUB, MOBI</span> &mdash; up to 100 MB
                            </p>

                            <button 
                            type="button"
                            id="browse-btn"
                            class="flex items-center gap-2 bg-[#1c1611] hover:bg-[#2e251d] text-white font-medium text-sm py-3 px-6 rounded-xl transition-colors shadow-sm"
                            >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16v3a2 2 0 002 2h14a2 2 0 002-2v-3M12 5v11m0-11L9 8m3-3l3 3" />
                            </svg>
                            Browse files
                            </button>
                        </div>
                    </div>

                        {{-- Book title and author --}}
                    <div class="flex justify-between py-4">
                        {{-- book title --}}
                        <div class="flex flex-col space-y-1 w-[45%]">
                            <label class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3" for="title">Book Title <span class="text-red-500">*</span></label>
                            <input class="border border-[#b5ac99] bg-white rounded-[10px] p-1" id="title" type="text" name="title" value="" placeholder="Ketala" required>
                            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        {{-- author --}}
                         <div class="flex flex-col space-y-1 w-[45%]">
                            <label class="block text-xs font-bold tracking-wider text-[#3d332d] uppercase mb-3" for="author">Author <span class="text-red-500">*</span></label>
                            <input class="border border-[#b5ac99] bg-white rounded-[10px] p-1" id="author" type="text" name="author" value="" placeholder="Fatou Diome" required>
                            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- visibility   --}}

                    <div class="flex flex-col space-y-2 border-b border-[#b5ac99] pb-6">
                        <label for="visibility">Visibility <span class="text-red-500">*</span></label>

                        <div class="flex space-x-4 justify-between">
                            <div class="border border-[#b5ac99]  md: w-[180px] bg-white p-3 rounded-[10px]">
                                <input type="radio" name="visibility" id="public" value="public" {{ old('visibility') === 'public' ? 'checked' : '' }} required>
                                <label for="public">Public</label><br>
                                <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-[#b5ac99]">Visible to all club members and can be discussed</span>
                            </div>

                            <div class="border border-[#b5ac99]  md: w-[180px] bg-white p-3 rounded-[10px]">
                                <input type="radio" name="visibility" id="private" value="private" {{ old('visibility', 'private') === 'private' ? 'checked' : '' }} required>
                                <label for="public">Private</label><br>
                                <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-[#b5ac99]">Only visible to you in your personal library</span>
                            </div>
                        </div>
                         
                    </div>

                    <div>
                        <label for="genre_id">Genre</label>
                        <select id="genre_id" name="genre_id" class="w-full border p-2 rounded-[10px] text-[#b5ac99]">
                            <option value="">Select a Genre</option>
                            @foreach(\App\Models\Genre::all() as $genre)
                                <option value="{{ $genre->id }}" {{ old('genre') == $genre->id ? 'selected' : '' }}>{{ $genre->denomination }}</option>
                            @endforeach
                        </select>
                        @error('genre_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-between p-3 items-center">
                        <span class="text-[clamp(0.5rem,1vw,0.7rem)] text-#b5ac99]"><span class="text-red-500">*</span> Required fields </span>

                        <div class="flex space-x-3 text-[clamp(0.8rem,1vw,0.9rem)]">
                            <button type="button" id="cancel" class="bg-white px-4 py-1 rounded-[8px] transition-color duration-[500ms] hover:bg-[#FD232A] hover:text-white">Cancel</button>
                            <button type="submit" id="add-button" class="bg-gradient-to-br text-[clamp(0.6rem,2vw,0.8rem)] from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] shadow-[0_4px_14px_rgba(16,185,129,0.35)] md:px-5 transition-transform duration-[1000ms] hover:-translate-y-2" >Add to library</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- force the modal to stay if there's any error --}}
            @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const modal = document.getElementById('modal-book-upload');
                    if (modal) {
                        modal.classList.remove('hidden');
                    }
                });
            </script>
            @endif
        </div>

    </section>

    {{-- discover section --}}
    <section>

    
    </section>
</main>
</body>

@vite('resources/js/dashboard.js')
</html>