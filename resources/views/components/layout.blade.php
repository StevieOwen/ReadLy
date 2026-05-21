<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadLy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="text-[#1C1A15] bg-[#F8F6F1CC] font-body">
    
    <header class=" backdrop-blur-md fixed z-10 w-full flex flex-col space-y-4  md:justify-between md:items-center md:sapce-y-0 md:flex-row py-2 px-8 bg-[#F8F6F1CC] border-b border-[#E8E5DE]"> 
        <div class="max-md:border-b max-md:border-[#E8E5DE] pb-2 relative ">
            <h2 class="font-bold font-black font-display text-[clamp(1.3rem,3vw,1.8rem)]">ReadLy</h2>
        </div>

        <div class="md:hidden absolute top-3 right-4">
            <svg width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d='M4.5 6.5h15M4.5 12h15m-15 5.5h15'/>
            </svg>
        </div>

        
            <div class="hidden max-md:border-b max-md:border-[#E8E5DE] pb-2  md:block md:w-[25%]">
                <ul class="flex flex-col space-y-3 md:flex-row md:space-y-0 md:justify-between">
                    <li class="underline decoration-transparent transition-colors duration-[1000ms] hover:decoration-current"> <a href="">Explore</a></li>
                    <li class="underline decoration-transparent transition-colors duration-[1000ms] hover:decoration-current"><a href="">Community</a></li>
                    <li class="underline decoration-transparent transition-colors duration-[1000ms] hover:decoration-current"><a href="">Pricing</a></li>
                </ul>
            </div>

            <div class="hidden md:block md:w-[17%]">
                <ul class="flex flex-col space-y-3 md:flex-row md:space-y-0 md:justify-between">
                    <li class="text-[#4A4339] max-md:border max-md:border-[#D0CABC] text-center p-2 rounded-[10px] transition-bg duration-[1000ms] hover:bg-[#e8e5de] px-3">
                      <a href="">Sign In</a>
                    </li>
                      
                    <li class="text-center  bg-gradient-to-br from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] shadow-[0_4px_14px_rgba(16,185,129,0.35)] md:px-5 transition-transform duration-[1000ms] hover:-translate-y-2">
                     <a href="">Get Started</a>
                    </li>
                </ul>
            </div>
       
    </header>

   {{$slot}}

   <footer class="bg-[#0e0d0a] text-[#b5ac99] flex flex-col space-y-2 items-center justify-center md:flex-row md:justify-between p-5 text-[clamp(0.7rem,2vw,1rem)]"> 
        <p>© 2026 ReadLy, Inc. All rights reserved.</p>
        <p>Developped by Stevie Owen</p>
   </footer>
</body>

</html>