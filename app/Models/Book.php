<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table        = 'book_names';           // Table name
    protected $primaryKey   = 'bookID';               // Custom primary key (if applicable)
    public $timestamps      = true;                    // Keep this true if using created_at, updated_at
    protected $fillable     = ['book_name', 'authorID'];              // Mass-assignable fields

    public function insertbook($data)
    {
        return self::create($data);
    }

    public function updatebook($id, $data)
    {
        return self::where('bookID', $id)->update($data);
    }

    public function getbooks($filters = [])
    {
        $query = self::query();
        $query->leftJoin('author_names', 'author_names.authorID', '=', 'book_names.authorID');

        if (!empty($filters)) {
            $query->where($filters);
        }
        
        $query->orderby('bookID', 'DESC');
        return $query->get();
    }

    public function deletebook($id)
    {
        return self::destroy($id);
    }
}
