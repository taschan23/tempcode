<?php

namespace Evgeny\TempCode\App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasUser
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(config('temp-code.models.user'))->withDefault();
    }
}