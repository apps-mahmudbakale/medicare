<?php

namespace App\Filament\Pages;

use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;

class EditProfile extends Page implements HasForms
{

    protected string $view = 'filament.pages.edit-profile';
    protected static bool $shouldRegisterNavigation = false;
}
