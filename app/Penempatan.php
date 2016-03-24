<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:25
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Penempatan extends Model
{
    protected $table = 'penempatan';

    protected $primaryKey = 'penempatan_id';

    protected $fillable =
        [
            'mahasiswa_id',
            'kamar_id',
        ];
    public function mhs() {
        return $this->belongsTo('\app\Mahasiswa','mahasiswa_id');
    }

    public function kamar()
    {
        return $this->belongsTo('\app\Kamar','kamar_id');

    }

}