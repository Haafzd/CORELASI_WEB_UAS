<?php

namespace App\Providers;

use App\Models\AttendanceRecord;
use App\Models\User;
use App\Policies\AttendancePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
       
    }
}
