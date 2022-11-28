<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEvento extends Model
{
  use HasFactory;
  protected $table = 'evento';
  protected $primaryKey = 'codigo_evento';
  protected $fillable=['nome_evento','local_evento','data_evento','status'];
  protected $guarded = ['created_at', 'update_at'];
}
