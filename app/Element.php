<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Element extends Model
{
    protected $table = "chemical_element";
    public $timestamps = false;
    protected $fillable = ['name', 'symbol','atomicNumber','weight'];

    public static function findOrAbort($id){
        if (!$element = Element::find($id)) {
            $element = [
                'error' => [
                    'code' => 'ERR-NOTFOUND',
                    'http_code' => '404',
                    'message' => 'Requested element cannot be found in the database.',
                ]
            ];
            return \Response::json($error, 404);
        }
        return $element;
    }
}
