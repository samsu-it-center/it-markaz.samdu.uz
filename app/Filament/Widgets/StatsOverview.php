<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Carbon;


class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '1s';

    protected function getStats(): array
    {
        return [
//            Card::make('Server Vaqti', Carbon::now()),
        ];
    }
}
