<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - ReadLy</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F8F6F1CC] h-full flex items-center justify-center px-4">
    <div class="max-w-md w-full space-y-6 bg-white p-8 rounded-xl shadow-sm border border-slate-100 text-center">
        
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-emerald-50">
            <svg class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
        </div>

        <div>
            <h2 class="text-2xl font-extrabold text-slate-900">Verify your email</h2>
            <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                Thanks for joining ReadLy! Before getting started, could you verify your email address by clicking the link we just emailed to you? If you didn't receive it, we will gladly send you another.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="rounded-lg bg-green-50 border border-green-200 p-3 text-sm text-green-700 font-medium">
                A new verification link has been sent to your email address.
            </div>
        @endif

        <div class="mt-4 flex flex-col items-center justify-between gap-4">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                    Resend Verification Email
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors underline">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</body>
</html>