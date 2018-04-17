<?php
namespace Bitfumes\Todo;

use Illuminate\Support\ServiceProvider;


class TodoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/resources/views", 'todo');
        // $this->loadMigrationsFrom(__DIR__ . "/database/migrations/");
        $this->publishes([
            __DIR__ . '/config/todo-config.php' => config_path('todo-config.php'),
            __DIR__ . '/database/migrations/2018_04_12_000000_create_todos_table.php' => database_path('migrations/' . date('Y_m_d_His') . '_create_todos_table.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__ . '/config/todo-config.php',
            'todo'
        );
    }
    public function register()
    {

    }
}