<?php

namespace App\Filament\Resources\ProfileResource\Widgets;

use App\Models\Profile;
use App\Models\ProfileStatistic;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Model;

class StatsOverview extends BaseWidget
{
    public ?Model $record = null;
    protected function getStats(): array
    {
        if($this->record){
            $profileStats = new ProfileStatistic();
            $todayVisits = $profileStats->getProfileVisits($this->record, 'today');
            $lastMonthVisits = $profileStats->getProfileVisits($this->record, 'last_month');
            $allTimeVisits = $profileStats->getProfileVisits($this->record);
            return [
                Stat::make('Today Views', $todayVisits)
                    ->icon('heroicon-m-eye')
                    ->color('success'),
                Stat::make('Last Months Views', $lastMonthVisits)
                    ->icon('heroicon-m-eye')
                    ->color('success'),
                Stat::make('All time Views', $allTimeVisits)
                    ->icon('heroicon-m-eye')
                    ->color('success'),
            ];
        }
    }
}
