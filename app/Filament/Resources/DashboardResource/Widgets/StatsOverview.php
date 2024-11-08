<?php

namespace App\Filament\Widgets;
use App\Models\Holiday;
use App\Models\Timesheet;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalEmployees= User::all()->count();
        $totalHolidays=  Holiday::where('type','pending')->count();
        $totalTimesheet= Timesheet::all()->count();
        return [
            Stat::make('Total Employees', $totalEmployees)
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Pending Holidays', $totalHolidays),
            Stat::make('TimeSheets', $totalTimesheet),
        ];
    }
}
