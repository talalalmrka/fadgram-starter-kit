<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public function users()
    {
        return User::paginate();
    }
    public function edit($id)
    {
        //sleep(2);
        //return;
        $this->redirect(route('dashboard.users.edit', $id), true);
    }
    public function delete($id)
    {
        //sleep(2);
        //return;
        $delete = User::destroy($id);
        if ($delete) {
            session()->flash('status', __('Delete success.'));
        } else {
            $this->addError('status', __('Delete failed!'));
        }
    }
    public function render()
    {
        return view(
            'livewire.dashboard.users.index',
            [
                'users' => $this->users(),
            ]
        )->layout('layouts.app', [
                    'title' => __('Users'),
                ]);
    }
}
