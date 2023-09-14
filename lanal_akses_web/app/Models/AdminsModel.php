<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminsModel extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'username', 'password', 'role'];
    // Definisi peran (role) sebagai constant
    const ROLE_KOMANDAN = 'komandan';
    const ROLE_PASINTEL = 'pasintel';
    const ROLE_PASPOTMAR = 'paspotmar';
    const ROLE_PASET = 'paset';
    const ROLE_LAIN_LAIN = 'lain-lain';
    protected $table = 'admins';

    // Metode untuk mendapatkan semua admin dengan peran tertentu
    public static function getByRole($role)
    {
        return self::where('role', $role)->get();
    }
}
