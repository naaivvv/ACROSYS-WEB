<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Facades\Validator;

final class UserTable extends PowerGridComponent
{
    use WithExport;

    public int $perPage = 10;

    public array $perPageValues = [0, 10, 20, 50];

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->showSearchInput()->showToggleColumns()->includeViewOnTop('components.header-top'),
            Footer::make()
                ->showPerPage()
                ->showPerPage($this->perPage, $this->perPageValues)
                ->showRecordCount(mode: 'full'),
        ];
    }

    public function datasource(): Builder
    {
        return User::query()->where('role', '=', 2);
    }

    public function relationSearch(): array
    {
        return [];
    }


    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('phone')
            ->add('birthday_formatted', fn (User $model) => Carbon::parse($model->birthday)->format('m/d/Y'))
            ->add('created_at')
            ->add('updated_at');
            // ->add('created_at_formatted', fn (User $model) => Carbon::parse($model->created_at)->format('m/d/Y'))
            // ->add('updated_at_formatted', fn (User $model) => Carbon::parse($model->updated_at)->format('m/d/Y'));
    }


    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),


            Column::make('Email', 'email')
                ->sortable()
                ->searchable()
                ->editOnClick(),

            Column::make('Phone', 'phone')
                ->sortable()
                ->searchable()
                ->editOnClick(),

            Column::make('Birthday', 'birthday_formatted', 'birthday')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::make('Updated at', 'updated_at')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {
        $rules = [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'regex:/^[0-9]+$/']
        ];

        if (!isset($rules[$field])) {
            throw new \Exception("No validation rule for field: $field");
        }

        try {
            Validator::make([$field => $value], [$field => $rules[$field]])->validate();
            User::query()->find($id)->update([$field => $value]);
            session()->flash('message', 'Update successful!');
            session()->flash('alert-class', 'bg-green-50 text-green-800');
        } catch (\Exception $e) {
            session()->flash('message', 'Update failed: ' . $e->getMessage());
            session()->flash('alert-class', 'bg-red-50 text-red-800');
        }
    }




    public function filters(): array
    {
        return [
            Filter::inputText('id', 'id')
                ->operators(['contains']),
            Filter::inputText('name', 'name')
                ->operators(['contains']),
            Filter::inputText('email', 'email')
                ->operators(['contains']),
            Filter::datepicker('birthday'),
            Filter::datepicker('created_at'),
            Filter::datepicker('updated_at'),
        ];
    }

    #[\Livewire\Attributes\On('destroy')]
    public function destroy($rowId): void
    {
        try {
            User::destroy($rowId);
            session()->flash('message', 'User deleted successfully!');
            session()->flash('alert-class', 'bg-green-50 text-green-800');
        } catch (\Exception $e) {
            session()->flash('message', 'Failed to delete user: ' . $e->getMessage());
            session()->flash('alert-class', 'bg-red-50 text-red-800');
        }
    }


    public function actions(User $row): array
    {

        return [
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->route('organizers.edit', ['organizer' => $row->id]),

            Button::add('destroy')
                ->slot('Delete')
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('destroy', ['rowId' => $row->id])
        ];
    }


    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
