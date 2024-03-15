<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organizers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <x-form-section submit="updateProfileInformation">
                        <x-slot name="title">
                            {{ __('Profile Information') }}
                        </x-slot>

                        <x-slot name="description">
                            {{ __('Update your account\'s profile information and email address.') }}
                        </x-slot>

                        <x-slot name="form">
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="name" value="{{ __('Name') }}" />
                                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
                                <x-input-error for="name" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
                                <x-input-error for="email" class="mt-2" />

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                                    <p class="text-sm mt-2">
                                        {{ __('Your email address is unverified.') }}

                                        <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" wire:click.prevent="sendEmailVerification">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if ($this->verificationLinkSent)
                                        <p class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                @endif
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="phone" value="{{ __('Phone Number') }}" />
                                <x-input id="phone" type="number" class="mt-1 block w-full" wire:model="state.phone" required autocomplete="phone" />
                                <x-input-error for="phone" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-label for="birthday" value="{{ __('Birthday') }}" />
                                <x-input id="birthday" type="date" class="mt-1 block w-full" wire:model="state.birthday" required autocomplete="birthday" />
                                <x-input-error for="birthday" class="mt-2" />
                            </div>
                        </x-slot>

                        <x-slot name="actions">
                            <x-action-message class="me-3" on="saved">
                                {{ __('Saved.') }}
                            </x-action-message>

                            <x-button wire:loading.attr="disabled" wire:target="photo">
                                {{ __('Save') }}
                            </x-button>
                        </x-slot>
                    </x-form-section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
