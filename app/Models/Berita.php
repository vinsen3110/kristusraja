<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\TextHelper;


class Berita extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'judul',
        'slug',
        'tanggal',
        'subjudul',
        'foto_utama',
        'article',
        'type',
        'foto_1',
        'foto_2',
        'foto_3',
        'foto_4',
        'foto_5',
        'foto_6',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
