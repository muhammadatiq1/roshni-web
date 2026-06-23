<x-admin-layout>
    <x-slot name="title">
        Profile Settings
    </x-slot>

    <div class="max-w-4xl mx-auto space-y-8 pb-10">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-semibold tracking-tight text-gray-900">Account Settings</h1>
            <p class="mt-2 text-sm text-gray-500">Manage your profile details and security preferences.</p>
        </div>

        <!-- Update Profile Information -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all hover:shadow-md">
            <div class="p-8 sm:p-10">
                <div class="flex items-start gap-4 mb-8">
                    <div class="p-3 bg-blue-50 text-blue-600 rounded-xl">
                        <i data-lucide="user" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-medium text-gray-900">Profile Information</h2>
                        <p class="mt-1 text-sm text-gray-500">Update your account's profile information and email address.</p>
                    </div>
                </div>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="space-y-6 max-w-2xl">
                    @csrf
                    @method('patch')

                    <div class="space-y-1">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                            class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-colors outline-none" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="space-y-1">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username"
                            class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-colors outline-none" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div class="mt-3 p-4 bg-amber-50 rounded-lg border border-amber-100">
                                <p class="text-sm text-amber-800 flex items-center gap-2">
                                    <i data-lucide="alert-triangle" class="w-4 h-4"></i>
                                    Your email address is unverified.
                                </p>
                                <button form="send-verification" class="mt-2 text-sm font-medium text-amber-600 hover:text-amber-800 underline transition-colors">
                                    Click here to re-send the verification email.
                                </button>
                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 text-sm font-medium text-green-600">A new verification link has been sent to your email address.</p>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="flex items-center gap-4 pt-4">
                        <button type="submit" class="px-6 py-3 bg-gray-900 text-white text-sm font-medium rounded-xl hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-all shadow-sm">
                            Save Changes
                        </button>
                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="text-sm font-medium text-green-600 flex items-center gap-1">
                                <i data-lucide="check-circle-2" class="w-4 h-4"></i> Saved successfully.
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <!-- Update Password -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden transition-all hover:shadow-md">
            <div class="p-8 sm:p-10">
                <div class="flex items-start gap-4 mb-8">
                    <div class="p-3 bg-purple-50 text-purple-600 rounded-xl">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-medium text-gray-900">Change Password</h2>
                        <p class="mt-1 text-sm text-gray-500">Ensure your account is using a long, random password to stay secure.</p>
                    </div>
                </div>

                <form method="post" action="{{ route('password.update') }}" class="space-y-6 max-w-2xl">
                    @csrf
                    @method('put')

                    <div class="space-y-1">
                        <label for="update_password_current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                        <div class="relative">
                            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password"
                                class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:ring-2 focus:ring-purple-500/20 focus:border-purple-500 transition-colors outline-none" />
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div class="space-y-1 pt-2">
                        <label for="update_password_password" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input id="update_password_password" name="password" type="password" autocomplete="new-password"
                            class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:ring-2 focus:ring-purple-500/20 focus:border-purple-500 transition-colors outline-none" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div class="space-y-1">
                        <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                            class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:ring-2 focus:ring-purple-500/20 focus:border-purple-500 transition-colors outline-none" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4 pt-4">
                        <button type="submit" class="px-6 py-3 bg-purple-600 text-white text-sm font-medium rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-600 transition-all shadow-sm">
                            Update Password
                        </button>
                        @if (session('status') === 'password-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="text-sm font-medium text-green-600 flex items-center gap-1">
                                <i data-lucide="check-circle-2" class="w-4 h-4"></i> Password updated.
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>

</x-admin-layout>
