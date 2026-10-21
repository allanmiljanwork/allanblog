<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->

        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Password') }}</legend>
            <input name="current_password" type="password" name="password" required autocomplete="current-password"
                class="input w-full @error('password') input-error @enderror" placeholder="Current Password" />
            @error('current_password')
                <p class="label text-error">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
