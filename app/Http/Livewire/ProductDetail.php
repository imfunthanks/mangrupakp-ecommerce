<?php

namespace App\Http\Livewire;

use App\Pesanan;
use App\PesananDetail;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product, $jumlah_pesanan;

    public function mount($Id)
    {
        $productDetail = Product::find($Id);

        if ($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function masukkanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        //Validasi jika user belum login
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        //Menghitung total harga
        $total_harga = $this->jumlah_pesanan * $this->product->harga;

        //Cek apakah user punya data pesanan utama yang statusnya 0
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //Simpan/update data pesanan utama
        if (empty($pesanan)) {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $pesanan->kode_pemesanan = 'ET-' . $pesanan->id;
            $pesanan->update();
        } else {
            $pesanan->total_harga = $pesanan->total_harga + $total_harga;
            $pesanan->update();
        }

        //Menyimpan pesanan detail
        PesananDetail::create([
            'product_id' => $this->product->id,
            'pesanan_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga' => $total_harga
        ]);

        $this->emit('masukKeranjang');
        session()->flash('message', 'Sukses Masuk Keranjang');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail')
            ->extends('layouts.app')
            ->section('content');
    }
}
