<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use HasFactory, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "title",
        "description",
        "status",
        "published"
    ];
    // Define the possible values for the 'status' field
    public static $statusOptions = [
        'non_debute' => 'Non débuté',
        'en_cours' => 'En cours',
        'termine' => 'Terminé',
    ];
    /**
    * Get the indexable data array for the model.
    *
    * @return array
    */
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'published' => $this->published,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}
