<?php

namespace App\Http\Controllers\Api\Ranking;

use App\Http\Controllers\Controller;
use App\Models\Movement;
use App\Models\PersonalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index(Request $request, Movement $movement)
    {
        $ranking = PersonalRecord::query()
            ->join('users as u', 'u.id', '=', 'personal_records.user_id')
            ->select([
                'u.name',
                DB::raw('MAX(personal_records.value) as score'),
            ])
            ->where('personal_records.movement_id', $movement->id)
            ->groupBy('personal_records.user_id')
            ->orderBy('score', 'DESC')
            ->get()
            ->groupBy('score')
            ->values()
            ->toArray();

        return response()->json([
            'success' => true,
            'data' => $ranking
        ]);
    }

    public function general(Request $request)
    {
        $ranking = PersonalRecord::query()
            ->join('users as u', 'u.id', '=', 'personal_records.user_id')
            ->select([
                'u.name',
                DB::raw('SUM(personal_records.value) as score'),
            ])
            ->groupBy('personal_records.user_id')
            ->orderBy('score', 'DESC')
            ->get()
            ->groupBy('score')
            ->values()
            ->toArray();

        return response()->json([
            'success' => true,
            'data' => $ranking
        ]);
    }


}
