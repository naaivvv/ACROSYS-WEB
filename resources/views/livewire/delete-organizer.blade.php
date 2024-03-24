<div>
    @if ($confirmingUserDeletion)
        <x-modal>
            <x-slot name="title">Confirm Deletion</x-slot>
            <x-slot name="content">Are you sure you want to delete this user?</x-slot>
            <x-slot name="footer">
                <x-button wire:click="destroy" wire:loading.attr="disabled">Delete</x-button>
                <x-button wire:click="$set('confirmingUserDeletion', false)" wire:loading.attr="disabled">Cancel</x-button>
            </x-slot>
        </x-modal>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button wire:click="confirmDelete({{ $user->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
