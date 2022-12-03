<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Homepage extends BaseController
{
    public function index()
    {
        $model = new Menu_M();

        $data = [
            'judul' => 'Menu',
            'menu' => $model->paginate(3, 'page'),
            'pager' => $model->pager,
        ];
        return view('home/produk', $data);
    }

    public function buah()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();
        $hasil = $model->where('idkategori', 35)->findAll();

        $count = count($hasil);

        $tampil = 3;
        $mulai = 0;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }

        $buah = $model->where('idkategori', 35)->findAll($tampil, $mulai);


        $data = [
            'judul' => 'Menu',
            'buah' => $buah,
            'pager' => $pager,
            'tampil' => $tampil,
            'total' => $count
        ];
        return view('home/buah', $data);
    }

    public function dessert()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();
        $hasil = $model->where('idkategori', 35)->findAll();

        $count = count($hasil);

        $tampil = 3;
        $mulai = 0;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }

        $dessert = $model->where('idkategori', 36)->findAll($tampil, $mulai);


        $data = [
            'judul' => 'Menu',
            'dessert' => $dessert,
            'pager' => $pager,
            'tampil' => $tampil,
            'total' => $count
        ];
        return view('home/dessert', $data);
    }

    public function jajan()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();
        $hasil = $model->where('idkategori', 34)->findAll();

        $count = count($hasil);

        $tampil = 3;
        $mulai = 0;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }

        $jajan = $model->where('idkategori', 34)->findAll($tampil, $mulai);


        $data = [
            'judul' => 'Menu',
            'jajan' => $jajan,
            'pager' => $pager,
            'tampil' => $tampil,
            'total' => $count
        ];
        return view('home/jajan', $data);
    }

    public function makanan()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();
        $hasil = $model->where('idkategori', 32)->findAll();

        $count = count($hasil);

        $tampil = 3;
        $mulai = 0;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }

        $makanan = $model->where('idkategori', 32)->findAll($tampil, $mulai);


        $data = [
            'judul' => 'Menu',
            'makanan' => $makanan,
            'pager' => $pager,
            'tampil' => $tampil,
            'total' => $count
        ];
        return view('home/makanan', $data);
    }

    public function minuman()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();
        $hasil = $model->where('idkategori', 33)->findAll();

        $count = count($hasil);

        $tampil = 3;
        $mulai = 0;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        }

        $minuman = $model->where('idkategori', 33)->findAll($tampil, $mulai);


        $data = [
            'judul' => 'Menu',
            'minuman' => $minuman,
            'pager' => $pager,
            'tampil' => $tampil,
            'total' => $count
        ];
        return view('home/minuman', $data);
    }

    
}
