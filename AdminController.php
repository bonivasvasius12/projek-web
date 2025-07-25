<?php
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman admin.
     */
    public function show()
    {
        return view('admin.admin');
    }

    /**
     * Menangani pengiriman form untuk menambah admin.
     */
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'role'    => 'required|in:Super Admin,Kasir',
        ]);

        // Contoh menyimpan data ke database, jika kamu punya model Admin
        // Admin::create($validatedData);

        return redirect()->back()->with('success', 'Admin berhasil ditambahkan!');
    }
}