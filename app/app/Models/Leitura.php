<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Leitura;

class Leitura extends Model
{

    protected $connection = 'mysql';
    protected $table = 'leituras';

    public static function listar()
    {
        $sql = self::select([
            "titulo",
            "pag_lida",
            "pag_total",
            "user_id"
        ]);
    }

    public static function add(array $data)
    {
        $sql = self::insert([
            "titulo" => $data['titulo'],
            "pag_total" => $data['pag_total'],
            "pag_lida" => $data['pag_lida'],
            "user_id" =>$data['user_id']
        ]);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
