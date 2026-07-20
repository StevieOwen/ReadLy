<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="text-[#1C1A15] bg-[#F8F6F1CC] font-body flex relative">

<aside id="aside" class="hidden flex flex-col space-y-6 md:block border-r border-[#e8e5de] w-[15%] h-screen">
    <header class="p-4 border-b border-[#e8e5de] shadow-md flex items-center justify-between">
        <h2 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.5rem)]">ReadLy</h2>

        <div id="close-btn">
        <svg class="text-[#e12d31] md:hidden" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
        <path d='M18 6 6 18M6 6l12 12'/>
        </svg>
    </div>
    </header>

        {{-- Menu items --}}
    <div class="p-3 flex flex-col space-y-6">
        <div class="flex flex-col space-y-3">
            <h5 class="text-[#9a8f7a] text-[clamp(0.7rem,2vw,0.9rem)]">Main</h5>
            <ul class="flex flex-col space-y-6 text-[clamp(0.8rem,2vw,0.9rem)]">
                <li class="menu-items active-link" data-target="library">
                    <a class="flex space-x-1 items-center " href="/dashboard"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M10.5 11.5V9.522L12 8.428l1.5 1.094V11.5a.25.25 0 0 1-.25.25h-2.5a.25.25 0 0 1-.25-.25'/>
                    <path d='M17.4 2.25c.667 0 1.336.109 1.803.593.46.478.547 1.14.547 1.757v11.8c0 .543-.072 1.077-.35 1.509a1.65 1.65 0 0 1-.65.583v.908c0 .666-.108 1.335-.591 1.802-.478.462-1.14.548-1.757.548H5.75a1.5 1.5 0 0 1-1.5-1.5V6.017c-.003-.498-.006-1.12.13-1.687.167-.692.552-1.363 1.371-1.78.338-.172.694-.24 1.074-.27.365-.03.81-.03 1.345-.03zm-.998 18c.547 0 .683-.096.714-.126.025-.024.134-.155.134-.724v-.65h-10a1.5 1.5 0 0 0-1.5 1.5zm-3.96-13.356a.75.75 0 0 0-.884 0l-2.25 1.64A.75.75 0 0 0 9 9.14v2.36c0 .966.784 1.75 1.75 1.75h2.5A1.75 1.75 0 0 0 15 11.5V9.14a.75.75 0 0 0-.308-.606z'/></svg>
                    <span>My Library</span>
                    </a>
                </li>

                <li class="menu-items" data-target="discover">
                    <a class="flex space-x-1 items-center" href="/discover" >
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M19 11.5a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0m-2.107 5.42 3.08 3.08'/>
                    </svg>
                    <span>Discover</span>
                    </a>
                </li>

                <li class="menu-items" data-target="bookClub">
                    <a class="flex space-x-1 items-center" href="/bookClub">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d='M3.464 16.828C2 15.657 2 14.771 2 11s0-5.657 1.464-6.828C4.93 3 7.286 3 12 3s7.071 0 8.535 1.172S22 7.229 22 11s0 4.657-1.465 5.828C19.072 18 16.714 18 12 18c-2.51 0-3.8 1.738-6 3v-3.212c-1.094-.163-1.899-.45-2.536-.96'/>
                    </svg>
                    <span>Book Clubs</span>
                    </a>
                </li>

                <li class="menu-items" data-target="readingStats"> 
                    <a class="flex space-x-1 items-center" href="/readingStats">
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
                <li class="menu-items" data-target="settings">
                    <a class="flex space-x-1 items-center" href="/settings">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M2.25 12a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m2.22-7.53a.75.75 0 0 1 1.06 0l2.122 2.12a.75.75 0 0 1-1.061 1.06L4.47 5.532a.75.75 0 0 1 0-1.061m15.06-.001a.75.75 0 0 1 0 1.06l-2.12 2.122a.75.75 0 0 1-1.06-1.061l2.12-2.121a.75.75 0 0 1 1.061 0M7.652 16.348a.75.75 0 0 1 0 1.061L5.53 19.53a.75.75 0 0 1-1.06-1.06l2.121-2.122a.75.75 0 0 1 1.06 0m8.697 0a.75.75 0 0 1 1.061 0l2.121 2.122a.75.75 0 1 1-1.06 1.06l-2.122-2.121a.75.75 0 0 1 0-1.06M12 2.25a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75m0 15a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75M17.25 12a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1-.75-.75M12 8.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5'/>
                    </svg>
                    <span>Settings</span>
                    </a>
                </li>

                <li class="menu-items" data-target="help">
                    <a class="flex space-x-1 items-center" href="/help">
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
    <div id="burger-button" class=" md:hidden p-1">
        <div class=" flex justify-center items-center p-1 w-[30px] h-[30px] rounded-[10px] bg-[#10b981] text-white">
            <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d='M3.75 6.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75'/>
            </svg>
        </div>
    </div>

    <header>
        <div class="p-3 border-b border-[#b5ac99]">
            <h3 class="font-bold font-black font-display text-[clamp(1rem,3vw,1.5rem)]" id="active-section">My Library</h3>
            {{-- <p class="text-[#b5ac99] text-[clamp(0.6rem,2vw,0.8rem)]"><span id="numbers-book">6</span> books uploaded</p> --}}
        </div>
    </header>
    {{$slot}}
   
</main>
</body>

@vite('resources/js/dashboardLayout.js')
</html>