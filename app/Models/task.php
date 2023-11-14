<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $filable = [
        'title',
        'description',
        'due_date',
        'user_id',
        'category_id'

    ];
    // Relacionamento: Uma tarefa pertence a um usuario
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Relacionamento: Uma categoria pertence a um usuario
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
