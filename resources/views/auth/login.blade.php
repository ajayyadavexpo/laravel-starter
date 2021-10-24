<x-guest-layout>
    <div class="font-sans min-h-screen antialiased bg-gray-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
          <h1 class="font-bold text-center text-4xl text-yellow-500">Your<span class="text-blue-500">App</span></h1>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">
              <h1 class="font-bold text-xl text-center">Sign in to your account</h1>

              <div class="flex flex-col space-y-1">
                <input type="email" name="email" id="email" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Email" :value="old('email')" required autofocus />
              </div>

              <div class="flex flex-col space-y-1">
                <input type="password" name="password" id="password" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Password" required autocomplete="current-password"/>
              </div>

              <div class="relative">
                <input type="checkbox" name="remember" id="remember_me" checked class="inline-block align-middle" />
                <label class="inline-block align-middle" for="remember_me">Remember me</label>
              </div>

              <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="inline-block text-blue-500 hover:text-blue-800 hover:underline">Forgot your password?</a>
                @endif
                <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Log In</button>
              </div>
            </div>
          </form>
          <div class="flex justify-center text-gray-500 text-sm">
            <p>&copy;2021. All right reserved.</p>
          </div>
        </div>
    </div>
 
</x-guest-layout>
