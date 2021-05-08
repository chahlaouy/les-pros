<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', __('Administrator'), [
            'product:read',
            'product:update',
            'product:create',
            'product:delete',

            'client:read',
            'client:update',
            'client:create',
            'client:delete',

            'command:read',
            'command:update',
            'command:create',
            'command:delete',

            'order:read',
            'order:update',
            'order:create',
            'order:delete',

            'message:read',
            'message:update',
            'message:create',
            'message:delete',

            'can:broadcast',

        ])->description(__('Administrator users can perform any action.'));

        Jetstream::role('sales', __('Sales'), [

            'product:read',

            'order:read',
            'order:update',
            'order:create',

            'message:read',
            'message:update',
            'message:create',
            
            'command:read',
            'command:update',
            'command:create',

            'can:broadcast',

        ])->description(__('Sales users'));

        Jetstream::role('employee', __('Employee'), [

            'product:read',
            'command:read',
            'client:read',
            'order:read',
            'message:read',

        ])->description(__('Employee users'));

        Jetstream::role('editor', __('Editor'), [

            'product:read',
            'product:update',
            'product:create',

            
        ])->description(__('Editor users'));
    }
}
