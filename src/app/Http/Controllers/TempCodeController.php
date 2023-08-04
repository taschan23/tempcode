<?php

namespace Evgeny\TempCode\App\Http\Controllers;

use Evgeny\TempCode\App\Services\TempCodeService;
use Illuminate\Routing\Controller;

class TempCodeController extends Controller
{
    public function generate(TempCodeService $tempCodeService): string
    {
        return $tempCodeService->createNewTempCode()->code;
    }
}