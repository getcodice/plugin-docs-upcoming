<?php

namespace CodicePlugin\DocsUpcoming;

use Codice\Plugins\Plugin as PluginBase;

class Plugin extends PluginBase
{
    public function boot()
    {
        parent::boot();

        $m = $this->app->make('menu.main');
        $m->add('upcoming', 'Upcoming tasks', 'tasks', 6);
    }
}
