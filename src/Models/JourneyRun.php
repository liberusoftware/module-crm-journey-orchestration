<?php

declare(strict_types=1);

namespace Liberu\CRM\JourneyOrchestration\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $journey_id
 * @property int $subject_id
 * @property string $status
 */
final class JourneyRun extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_journey_runs';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['next_at' => 'datetime', 'stopped_at' => 'datetime', 'context' => 'array'];
    }
}
