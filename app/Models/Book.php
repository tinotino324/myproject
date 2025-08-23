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
        
        $query->orderBy('bookID', 'DESC');
        return $query->get();
    }

    public function getbooks_listing($filters = [])
    {
        $offset     = isset($filters['offset']) ? $filters['offset'] : 0;
        $limit      = isset($filters['limit']) ? $filters['limit'] : 10;
        $keyword    = isset($filters['keyword']) ? $filters['keyword'] : '';
        $query      = self::query();
        $query->leftJoin('author_names', 'author_names.authorID', '=', 'book_names.authorID');

        if (!empty($keyword)) {
            // ->where('column_name', 'like', '%value%')
            // $keyword_query = "(sims_asset_category.category LIKE \"%". $keyword ."%\" OR sims_location.location LIKE \"%". $keyword ."%\" OR item_name LIKE \"%". $keyword ."%\"OR building_information LIKE \"%". $keyword ."%\")";

            $query->where(function ($q) use ($keyword) {
                $q->where("book_name", 'like', '%' . $keyword . '%')
                 ->orWhere("author_names.names", 'like' , '%' . $keyword . '%');
            });
            // $query->where(function ($q) use ($keyword) {
            //     $q->where("book_name", 'like', '%' . $keyword . '%')
            //       ->orWhere("author_names.names", 'like', '%' . $keyword . '%');
            // });
        }

        $query->skip($offset)->take($limit);
        $query->orderBy('bookID', 'DESC');
        return $query->get();
    }

    public function deletebook($id)
    {
        return self::destroy($id);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
