<?php

use App\Livewire\Dashboard\Users\Edit as UsersEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Users\Index as UsersIndex;
Route::get('dashboard/users', UsersIndex::class)->name('dashboard.users');
Route::get('dashboard/users/edit/{user}', UsersEdit::class)->name('dashboard.users.edit');