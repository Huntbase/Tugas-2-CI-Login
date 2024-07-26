<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use CodeIgniter\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();

        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return 
            view('layout/headerpettopia')
            . view('produk', $data)
            . view('layout/footerpettopia');
    }

    public function detail($id = null) // mendeklarasikan field id dengan default yaitu null
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id); // ambil data produk berdasarkan id

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk tidak ditemukan: ' . $id);
        }

        return 
            view('layout/headerpettopia')
            . view('rincian', $data); // tampilkan view rincian.php dengan data produk
    }

    public function viewCategory($id)
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();

        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        $data['products'] = $productModel->where('category_id', $id)->findAll();
        $data['category'] = $categoryModel->find($id);

        return 
            view('layout/headerpettopia')
            . view('category', $data);
    }

    // membuat function untuk menambahkan produk ke keranjang dengan memanggil field id produk
    public function addToCart($id)
    {
        $session = session(); // untuk menyimpan, mengambil, dan mengelola data
        $model = new ProductModel();
        $product = $model->find($id);

        // kondisi jika produk tidak ditemukan maka akan menampilkan pesan error
        if (!$product) {
            return $this->response->setJSON(['error' => 'Produk tidak ditemukan']);
        }

        $cart = $session->get('cart') ?? []; // ambil keranjang dari session atau kosongkan
        $cart[$id] = isset($cart[$id]) ? ++$cart[$id] : 1; // tambahkan atau update jumlah produk

        $session->set('cart', $cart); // simpan keranjang ke session

        $totalItems = array_sum($cart); // hitung total item di keranjang

        // mengubah respons menjadi redirect ke halaman keranjang setelah menambahkan ke keranjang
        return redirect()->to(base_url('/produk/viewCart'));
    }


    public function viewCart()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $model = new ProductModel();

        $cartItems = [];
        foreach ($cart as $id => $quantity) {
            $product = $model->find($id);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'image' => $product['image'] // Ubah ini sesuai dengan kolom di tabel produk yang menyimpan path gambar
                ];
            }
        }

        return 
            view('layout/headerpettopia')
            . view('cart', ['cartItems' => $cartItems]);
    }

    public function removeFromCart($id)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        // Hapus item dari keranjang berdasarkan ID produk
        unset($cart[$id]);

        $session->set('cart', $cart); // Simpan keranjang yang sudah di-update

        // Redirect kembali ke halaman keranjang
        return redirect()->to(base_url('/produk/viewCart'));
    }
}