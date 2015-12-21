<?php namespace CloudDevStudio\EAV;

use CloudDevStudio\EAV\Repositories\MySQL\OnticData\Entity;
use CloudDevStudio\EAV\Repositories\MySQL\MetaData\EntityType;
use CloudDevStudio\EAV\Interfaces\OnticData\EntityInterface;
use CloudDevStudio\EAV\Interfaces\MetaData\EntityTypeInterface;
use Illuminate\Support\ServiceProvider;

class EAVProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EntityInterface::class, Entity::class);

    }

}