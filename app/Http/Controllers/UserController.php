<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->User = new User();
    }
    public function index()
    {
        $data = [
            'users' => $this->User->getUserData(),
        ];
        return view('Admin/user/v_user', $data);
    }
    
    public function destroy($id)
    {
        $this->User->deleteData($id);
        return redirect()->route('user')->with('pesan', 'Data berhasil dihapus');
    }
}
