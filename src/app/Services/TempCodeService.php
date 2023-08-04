<?php

namespace Evgeny\TempCode\App\Services;

use App\Models\TempCode;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TempCodeService
{
    public function createNewTempCode($source = 'NONE', $userId = null): Model|Builder
    {
        $code = $this->generate();

        return TempCode::query()->create(
            [
                'user_id' => $userId,
                'code' => $code,
                'source' => $source
            ]
        );
    }

    protected function generate(): int
    {
        return random_int(1000, 9999);
    }
}
