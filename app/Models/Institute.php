<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = ['medium_id','board_id','institute_type_id','stream_id','name','email','contact_no','code','principal_name','est_since','branch','state','city','pin_code','address','morning_shift_start','morning_shift_end','afternoon_shift_start','afternoon_shift_end','image_file','active','created_at','updated_at'];
    
    protected $table = 'institutes';
    
     // Define the belongsTo relationship
    public function institute_types(){
        return $this->belongsTo(InstituteType::class, 'institute_type_id', 'id');
    }

    public function branches(){
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function mediums(){
        return $this->belongsTo(Medium::class, 'medium_id', 'id');
    }

    public function streams(){
        return $this->belongsTo(Stream::class, 'stream_id', 'id');
    }

}
