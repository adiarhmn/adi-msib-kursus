<?php

namespace App\Http\Controllers;

use App\Models\KursusModel;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    protected $KursusModel;
    public function __construct()
    {
        $this->KursusModel = new KursusModel();
    }

    // Method untuk menampilkan Data Kursus
    public function index(Request $request)
    {
        $data['kursus'] = $this->KursusModel->all();
        return view('Kursus', $data);
    }

    // Method untuk mengarahkan ke halaman tambah kursus
    public function create()
    {
        return view('KursusTambah');
    }

    // Method untuk menyimpan data kursus
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul_kursus' => 'required|unique:tabel_kursus',
            'deskripsi_kursus' => 'required|min:10',
            'durasi_kursus' => 'required|numeric'
        ]);

        $this->KursusModel->create([
            'judul_kursus' => $validatedData['judul_kursus'],
            'deskripsi_kursus' => $validatedData['deskripsi_kursus'],
            'durasi_kursus' => $validatedData['durasi_kursus']
        ]);

        return redirect('/kursus')->with('success', 'Data Kursus Berhasil Ditambahkan');
    }

    // Method untuk menampilkan halaman edit kursus
    public function edit($id)
    {
        $data['kursus'] = $this->KursusModel->find($id);
        return view('KursusEdit', $data);
    }

    // Method untuk mengupdate data kursus
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul_kursus' => 'required|unique:tabel_kursus,judul_kursus,' . $id . ',id_kursus',
            'deskripsi_kursus' => 'required|min:10',
            'durasi_kursus' => 'required|numeric'
        ]);

        $this->KursusModel->find($id)->update([
            'judul_kursus' => $validatedData['judul_kursus'],
            'deskripsi_kursus' => $validatedData['deskripsi_kursus'],
            'durasi_kursus' => $validatedData['durasi_kursus']
        ]);

        return redirect('/kursus')->with('success', 'Data Kursus Berhasil Diubah');
    }


    // Method untuk menghapus data kursus
    public function destroy($id)
    {
        $this->KursusModel->destroy($id);
        return redirect('/kursus')->with('success', 'Data Kursus Berhasil Dihapus');
    }
}
