<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("FirstName", "firstName")
                ->sortable(),
            Column::make("MiddleName", "middleName")
                ->sortable(),
            Column::make("LastName", "lastName")
                ->sortable(),
            Column::make("Phone number", "phone_number")
                ->sortable(),
            Column::make("Gender", "gender")
                ->sortable(),
            Column::make("Rank", "rank")
                ->sortable(),
            Column::make("Role", "role")
                ->sortable(),
            Column::make("District council", "district_council")
                ->sortable(),
            Column::make("Division", "division")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
