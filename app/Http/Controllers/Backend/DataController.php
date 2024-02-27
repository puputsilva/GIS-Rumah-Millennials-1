<?php

namespace App\Http\Controllers\Backend;

use App\Models\QnA;
use App\Models\Spot;
use App\Models\Team;
use App\Models\Program;
use App\Models\Centre_Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function centrepoint()
    {
        $centrepoint = Centre_Point::latest()->get();
        return datatables()->of($centrepoint)
            ->addColumn('action', 'backend.CentrePoint.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function spot()
    {
        $spot = Spot::latest()->get();
        return datatables()->of($spot)
            ->addColumn('action', 'backend.Spot.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function program()
    {
        $program = Program::latest()->get();
        return datatables()->of($program)
            ->addColumn('action', 'backend.Program.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function qna()
    {
        $qna = QnA::latest()->get();
        return datatables()->of($qna)
            ->addColumn('action', 'backend.QnA.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function team()
    {
        $team = Team::latest()->get();
        return datatables()->of($team)
            ->addColumn('action', 'backend.Team.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
