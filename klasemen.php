<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasemen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memuat model atau library jika diperlukan
    }

    public function index()
    {
        // Data klasemen contoh
        $data['klasemen'] = [
            'Premier League' => [
                ['Posisi' => 1, 'Tim' => 'Manchester City', 'Menang' => 10, 'Seri' => 2, 'Kalah' => 0, 'Gol' => 34, 'Kebobolan' => 5, 'Selisih Gol' => '+29', 'Poin' => 32],
                ['Posisi' => 2, 'Tim' => 'Arsenal', 'Menang' => 9, 'Seri' => 2, 'Kalah' => 1, 'Gol' => 28, 'Kebobolan' => 8, 'Selisih Gol' => '+20', 'Poin' => 29],
                ['Posisi' => 3, 'Tim' => 'Liverpool', 'Menang' => 8, 'Seri' => 3, 'Kalah' => 1, 'Gol' => 30, 'Kebobolan' => 10, 'Selisih Gol' => '+20', 'Poin' => 27],
            ],
            'La Liga' => [
                ['Posisi' => 1, 'Tim' => 'Real Madrid', 'Menang' => 9, 'Seri' => 2, 'Kalah' => 0, 'Gol' => 30, 'Kebobolan' => 7, 'Selisih Gol' => '+23', 'Poin' => 29],
                ['Posisi' => 2, 'Tim' => 'Barcelona', 'Menang' => 8, 'Seri' => 3, 'Kalah' => 1, 'Gol' => 27, 'Kebobolan' => 9, 'Selisih Gol' => '+18', 'Poin' => 27],
                ['Posisi' => 3, 'Tim' => 'Atletico Madrid', 'Menang' => 7, 'Seri' => 4, 'Kalah' => 0, 'Gol' => 25, 'Kebobolan' => 12, 'Selisih Gol' => '+13', 'Poin' => 25],
            ]
        ];

        // Memuat view 'klasemen.php' dan mengirimkan data klasemen
        $this->load->view('klasemen', $data);
    }
}
