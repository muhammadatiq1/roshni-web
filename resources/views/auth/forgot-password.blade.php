<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-900 font-display">Forgot Password</h2>
        <p class="text-sm text-gray-500 mt-2">
            No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                   class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm px-4 py-3" 
                   placeholder="admin@roshnicare.com">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-500 hover:text-gray-900 transition-colors">
                &larr; Back to login
            </a>
            <button type="submit" class="inline-flex justify-center py-2.5 px-5 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                Email Reset Link
            </button>
        </div>
    </form>
</x-guest-layout>
