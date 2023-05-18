<?php

namespace App\Providers;

use App\Repositories\FraisRepository;
use App\Repositories\FactureRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\EtudiantsRepository;
use App\Repositories\EnseignantsRepository;
use App\Repositories\FraisRepositoryInterface;
use App\Repositories\FactureRepositoryInterface;
use App\Repositories\EtudiantsRepositoryInterface;
use App\Repositories\EnseignantsRepositoryInterface;
use App\Repositories\RecuEtudiantRepositoryInterface;
use App\Repositories\RecuEtudiantRepository;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(EnseignantsRepositoryInterface::class, EnseignantsRepository::class);
        $this->app->bind(EtudiantsRepositoryInterface::class, EtudiantsRepository::class);
        $this->app->bind(FraisRepositoryInterface::class, FraisRepository::class);
        $this->app->bind(FactureRepositoryInterface::class, FactureRepository::class);
        $this->app->bind(RecuEtudiantRepositoryInterface::class, RecuEtudiantRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
