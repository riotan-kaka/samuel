<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Ambil data jadwal pertandingan
        $data['jadwal'] = $this->get_jadwal();

        // Muat view untuk menampilkan data jadwal
        $this->load->view('jadwal_view', $data);
    }

    // Fungsi untuk mendapatkan data jadwal (contoh data statis)
    private function get_jadwal()
    {
        return [
            // Format: Tanggal, Tim 1, Tim 2, Waktu, Link nonton (YouTube, Siaran Langsung, Berita, dll)
            ['tanggal' => '2024-11-10', 'tim1' => 'Indonesia', 'tim2' => 'Singapura', 'waktu' => '16:00', 
             'youtube' => 'https://www.youtube.com/watch?v=example1', 'siaran_langsung' => 'https://www.example.com/live1', 'berita' => 'https://www.example.com/news1', 'facebook' => 'https://www.facebook.com/live1', 'twitch' => 'https://www.twitch.tv/stream1'],
            ['tanggal' => '2024-11-12', 'tim1' => 'Real Madrid', 'tim2' => 'Barcelona', 'waktu' => '21:00',
             'youtube' => 'https://www.youtube.com/watch?v=example2', 'siaran_langsung' => 'https://www.example.com/live2', 'berita' => 'https://www.example.com/news2', 'facebook' => 'https://www.facebook.com/live2', 'twitch' => 'https://www.twitch.tv/stream2'],
            ['tanggal' => '2024-11-13', 'tim1' => 'Manchester United', 'tim2' => 'Liverpool', 'waktu' => '23:00',
             'youtube' => 'https://www.youtube.com/watch?v=example3', 'siaran_langsung' => 'https://www.example.com/live3', 'berita' => 'https://www.example.com/news3', 'facebook' => 'https://www.facebook.com/live3', 'twitch' => 'https://www.twitch.tv/stream3'],
            ['tanggal' => '2024-11-14', 'tim1' => 'Bayern Munich', 'tim2' => 'Borussia Dortmund', 'waktu' => '02:30',
             'youtube' => 'https://www.youtube.com/watch?v=example4', 'siaran_langsung' => 'https://www.example.com/live4', 'berita' => 'https://www.example.com/news4', 'facebook' => 'https://www.facebook.com/live4', 'twitch' => 'https://www.twitch.tv/stream4'],
            ['tanggal' => '2024-11-15', 'tim1' => 'Chelsea', 'tim2' => 'Arsenal', 'waktu' => '00:30',
             'youtube' => 'https://www.youtube.com/watch?v=example5', 'siaran_langsung' => 'https://www.example.com/live5', 'berita' => 'https://www.example.com/news5', 'facebook' => 'https://www.facebook.com/live5', 'twitch' => 'https://www.twitch.tv/stream5'],
            ['tanggal' => '2024-11-17', 'tim1' => 'Juventus', 'tim2' => 'AC Milan', 'waktu' => '03:00',
             'youtube' => 'https://www.youtube.com/watch?v=example6', 'siaran_langsung' => 'https://www.example.com/live6', 'berita' => 'https://www.example.com/news6', 'facebook' => 'https://www.facebook.com/live6', 'twitch' => 'https://www.twitch.tv/stream6'],
            ['tanggal' => '2024-11-18', 'tim1' => 'Paris Saint-Germain', 'tim2' => 'Lyon', 'waktu' => '22:00',
             'youtube' => 'https://www.youtube.com/watch?v=example7', 'siaran_langsung' => 'https://www.example.com/live7', 'berita' => 'https://www.example.com/news7', 'facebook' => 'https://www.facebook.com/live7', 'twitch' => 'https://www.twitch.tv/stream7'],
            ['tanggal' => '2024-11-19', 'tim1' => 'Tottenham', 'tim2' => 'Manchester City', 'waktu' => '20:30',
             'youtube' => 'https://www.youtube.com/watch?v=example8', 'siaran_langsung' => 'https://www.example.com/live8', 'berita' => 'https://www.example.com/news8', 'facebook' => 'https://www.facebook.com/live8', 'twitch' => 'https://www.twitch.tv/stream8'],
            ['tanggal' => '2024-11-20', 'tim1' => 'Boca Juniors', 'tim2' => 'River Plate', 'waktu' => '23:30',
             'youtube' => 'https://www.youtube.com/watch?v=example9', 'siaran_langsung' => 'https://www.example.com/live9', 'berita' => 'https://www.example.com/news9', 'facebook' => 'https://www.facebook.com/live9', 'twitch' => 'https://www.twitch.tv/stream9'],
        ];
    }
}
