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
            <h2 class="text-2xl font-extrabold text-slate-900">Forgot Your Password?</h2>
            <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                We got you covered, enter your email and we will send a link to reset it
        </div>

       <form class="pt-4" action="{{ route('password.email') }}" method="POST">
            @csrf

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }} </div>
            @endif

            <div class="flex flex-col space-y-3">
                <label for="email">Email Address</label>
                <input class="block w-full bg-[#f4f3f0] p-1 pr-10 rounded-[8px] border border-[#e8e5de] text-[#1c1a15]" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button class="mt-3 bg-gradient-to-br from-[#059669] to-[#10b981] font-semibold p-2 rounded-[10px] text-[#fff] transition-transform duration-[1000ms] hover:-translate-y-2" type="submit">Send Password Reset Link</button>
        </form>

        
    </div>
</body>
</html>