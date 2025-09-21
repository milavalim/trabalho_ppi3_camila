<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate; // Importante para criar gates

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // registrar policies aqui
        // ex.: \App\Models\Receita::class => \App\Policies\ReceitaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate para permitir que o usuário 1 delete qualquer receita
        Gate::define('delete-receita', function ($user, $receita) {
            return $user->id === 1;
        });
    }
}
