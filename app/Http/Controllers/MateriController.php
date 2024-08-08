<?php

namespace App\Http\Controllers;

use App\Models\KursusModel;
use App\Models\MateriModel;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    protected $KursusModel;
    protected $MateriModel;
    public function __construct()
    {
        $this->KursusModel = new KursusModel();
        $this->MateriModel = new MateriModel();
        
    }

    // Method untuk menampilkan Halaman Tambah Materi
    public function create($id_kursus)
    {
        $data['id_kursus'] = $id_kursus;
        $data['kursus'] = $this->KursusModel->find($id_kursus);
        return view('MateriTambah', $data);
    }

    // Method untuk menyimpan data materi
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'id_kursus' => 'required',
            'judul_materi_kursus' => 'required|unique:tabel_materi_kursus',
            'deskripsi_materi_kursus' => 'required|min:10',
            'link_materi_kursus' => 'required'
        ]);

        $this->MateriModel->create([
            'id_kursus' => $validatedData['id_kursus'],
            'judul_materi_kursus' => $validatedData['judul_materi_kursus'],
            'deskripsi_materi_kursus' => $validatedData['deskripsi_materi_kursus'],
            'link_materi_kursus' => $validatedData['link_materi_kursus']
        ]);

        return redirect('/kursus/detail/' . $validatedData['id_kursus'])->with('success', 'Data Materi Berhasil Ditambahkan');
    }


    // Method untuk menampilkan halaman edit materi
    public function edit($id)
    {
        $data['materi'] = $this->MateriModel->find($id);
        $data['kursus'] = $this->KursusModel->find($data['materi']->id_kursus);
        return view('MateriEdit', $data);
    }


    // Method untuk mengupdate data materi
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul_materi_kursus' => 'required|unique:tabel_materi_kursus,judul_materi_kursus,' . $id . ',id_materi_kursus',
            'deskripsi_materi_kursus' => 'required|min:10',
            'link_materi_kursus' => 'required'
        ]);

        $materi = $this->MateriModel->find($id);
        $materi->update([
            'judul_materi_kursus' => $validatedData['judul_materi_kursus'],
            'deskripsi_materi_kursus' => $validatedData['deskripsi_materi_kursus'],
            'link_materi_kursus' => $validatedData['link_materi_kursus']
        ]);

        return redirect('/kursus/detail/' . $materi->id_kursus)->with('success', 'Data Materi Berhasil Diubah');
    }

    // Method untuk menghapus data materi
    public function destroy($id)
    {
        $materi = $this->MateriModel->find($id);
        $this->MateriModel->destroy($id);
        return redirect('/kursus/detail/' . $materi->id_kursus)->with('success', 'Data Materi Berhasil Dihapus');
    }
}
