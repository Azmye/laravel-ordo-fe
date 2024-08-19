<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function leaderboardData()
    {
        $data = [
            ['id' => '1', 'name' => 'Budi Hartanto', 'trees' => '350', 'title' => 'Mangrove Maven', 'image' => 'images/leaderboard-icon/mangrove-maven.png'],
            ['id' => '2', 'name' => 'Dewi Sartika', 'trees' => '330', 'title' => 'Mangrove Maven', 'image' => 'images/leaderboard-icon/mangrove-maven.png'],
            ['id' => '3', 'name' => 'Eko Wahyudi', 'trees' => '200', 'title' => 'Mangrove Maven', 'image' => 'images/leaderboard-icon/mangrove-maven.png'],
            ['id' => '4', 'name' => 'Rina Kartika', 'trees' => '190', 'title' => 'Guardian of the Grove', 'image' => 'images/leaderboard-icon/guardion-grove.png'],
            ['id' => '5', 'name' => 'Agus Prasetyo', 'trees' => '140', 'title' => 'Guardian of the Grove', 'image' => 'images/leaderboard-icon/guardion-grove.png'],
            ['id' => '6', 'name' => 'Irfan Setiawan', 'trees' => '80', 'title' => 'Mangrove Master', 'image' => 'images/leaderboard-icon/mangrove-master.png'],
        ];

        return view('home', ['leaderboards' => $data]);
    }
}
