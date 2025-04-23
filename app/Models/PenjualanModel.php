<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    use HasFactory;

    protected $table = 't_penjualan';
    protected $primaryKey = 'penjualan_id';

    protected $fillable = [
        'user_id',
        'pembeli',
        'penjualan_kode',
        'penjualan_tanggal'
    ];

    // Relasi ke tabel user (m_user)
    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    // Relasi ke tabel penjualan detail (t_penjualan_detail)
    public function detail()
    {
        return $this->hasMany(PenjualanDetailModel::class, 'penjualan_id');
    }

    // Method untuk menghitung total nominal transaksi
    public function totalTransaksi()
    {
        // Menghitung total harga penjualan berdasarkan detail barang
        return $this->detail->sum(function ($item) {
            return $item->harga;
        });
    }
}
