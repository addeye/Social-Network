<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/03/2016
 * Time: 10:24
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $primaryKey = 'kamar_id';

    protected $fillable =
        [
            'nama_kamar',
        ];
}