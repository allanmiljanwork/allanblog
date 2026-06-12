<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Email') }}</legend>
            <input value="{{ old('email', $request->email) }}" name="email" type="email" required autofocus
                autocomplete="username" class="input w-full @error('email') input-error @enderror"
                placeholder="Email" />
            @error('email')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Password -->

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Password') }}</legend>
            <input name="current_password" type="password" name="password" required autocomplete="new-password"
                class="input w-full @error('password') input-error @enderror" placeholder="Current Password" />
            @error('current_password')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Confirm Password -->

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
            <input name="password_confirmation" type="password" name="password" required autocomplete="new-password"
                class="input w-full @error('password') input-error @enderror" placeholder="Reset Password" />
            @error('password_confirmation')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
