<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PendudukModel extends Model
{
    protected $table = 'penduduk_hidup';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','nik','sex'];
}