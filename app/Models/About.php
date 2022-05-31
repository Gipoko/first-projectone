<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
 
class About extends Model
{
    protected $fillable = [
        'about_head', 'about_title','about_description'
    ];
    protected $table = 'about';
    protected $primaryKey = 'about_id';

    
}