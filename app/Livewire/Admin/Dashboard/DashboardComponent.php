<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('livewire.admin.dashboard.dashboard-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }
}
