<?php

namespace App\Models;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $filable = [
        'title',
        'color',
        'user_id'
    ];
    // Relacionamento: Uma categoria pertence a um usuário

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relacionamento: Uma categoria pode ter muitas tarefas
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
