<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:24
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'mahasiswa_id';

    protected $fillable =
        [
            'nama',
            'no_telp',
            'alamat',
        ];
    public function tempatKamar() {
        return $this->hasOne('Penempatan', 'mahasiswa_id');
    }
}