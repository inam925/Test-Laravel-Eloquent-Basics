<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        Stat::increment('projects_count');
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        // ...
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        // ...
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        // ...
    }

    /**
     * Handle the Project "forceDeleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        // ...
    }
}
