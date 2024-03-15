<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','active','created_at','updated_at'];

    protected $table = 'departments';

    // Define the hasMany relationship
    public function users(){
        return $this->hasMany(User::class, 'department_id', 'id');
    }

}
