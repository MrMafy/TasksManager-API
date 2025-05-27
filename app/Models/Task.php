<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $status
 */
class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status'
    ];
}
