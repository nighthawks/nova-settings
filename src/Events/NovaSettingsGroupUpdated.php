<?php
namespace OptimistDigital\NovaSettings\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NovaSettingsGroupUpdated
{
    use Dispatchable, SerializesModels;

    public string $group;
    public array $updatedFields;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function __construct(string $settingsGroup, array $updatedFields)
    {
        $this->group = $settingsGroup;
        $this->updatedFields = $updatedFields;
    }
}
