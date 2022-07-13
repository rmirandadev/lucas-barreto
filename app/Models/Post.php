<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle','slug','image','image_legend','text','status','clicks','user_id'];

    const STATUS = [0 => 'Inativa', 1 => 'Ativa'];
    public function getStatusViewAttribute(): string
    {
        return $this->status == 0 ? "<span class='badge badge-danger'>Inativa</span>" : "<span class='badge badge-success'>Ativa</span>";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getDateViewAttribute()
    {
        return date('d',strtotime($this->created_at)) . ' de ' . GetMonth(date('m',strtotime($this->created_at))) . ' de ' . date('Y',strtotime($this->created_at));
    }
}
