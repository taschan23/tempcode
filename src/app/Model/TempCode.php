<?php

namespace Evgeny\TempCode\App\Models;

use Evgeny\TempCode\App\Traits\HasUser;
use Illuminate\Database\Eloquent\Model;

class TempCode extends Model
{
    use HasUser;

    protected $fillable = [
        'user_id',
        'code',
        'is_used',
        'source',
    ];

    protected $casts = [
        'code' => 'int',
        'is_used' => 'bool'
    ];

    /**
     *
     * SCOPES
     *
     */

    public function scopeIsActive($query)
    {
        return $query->where('is_used', 0);
    }

    public function scopeByUserId($query, int $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeByCode($query, int $code)
    {
        return $query->where('code', $code);
    }
}
