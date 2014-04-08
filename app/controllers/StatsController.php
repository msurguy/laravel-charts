<?php

class StatsController extends BaseController
{

    public function getIndex()
    {
        return View::make('stats');
    }

    public function getAPI()
    {
        $days = Input::get('days', 7);

        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = DB::table('orders')
            ->where('created_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->remember(1440) // Cache the data for 24 hours
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ]);

        return $stats;
    }
}