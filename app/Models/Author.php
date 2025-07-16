<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table        = 'author_names';           // Table name
    protected $primaryKey   = 'authorID';               // Custom primary key (if applicable)
    public $timestamps      = true;                    // Keep this true if using created_at, updated_at
    protected $fillable     = ['names'];              // Mass-assignable fields

    public function insertAuthor($data)
    {
        return self::create($data);
    }

    public function updateAuthor($id, $data)
    {
        return self::where('authorID', $id)->update($data);
    }

    public function getAuthors($filters = [])
    {
        $query = self::query();
        // $query->leftjoin('book_names', 'book_names.authorID', '=' , 'author_names.authorID');

        if (!empty($filters)) {
            $query->where($filters);
        }

        $query->orderBy('authorID', 'DESC');
        return $query->get();
        // echo dd($query->toSql()); die;
    }

    public function getAuthors_listing($filters = [])
    {
        $offset = isset($filters['offset']) ? $filters['offset'] : 0 ;
        $length = isset($filters['length']) ? $filters['length'] : 10 ;
        unset($filters['offset'], $filters['length']);
        $query = self::query();

        // $query->leftjoin('book_names', 'book_names.authorID', '=' , 'author_names.authorID');

        if (!empty($filters)) {
            $query->where($filters);
        }

        $query->skip($offset)->take($length);
        $query->orderBy('authorID', 'DESC');
        return $query->get();
        // echo dd($query->toSql()); die;
    }

    public function deleteAuthor($id)
    {
        return self::destroy($id);
    }
}
