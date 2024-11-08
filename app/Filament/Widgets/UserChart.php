<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class UserChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Hodidays User Month',
                    'data' => $this->getDataUser(),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getDataUser(){
        return [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89];
    }
}
