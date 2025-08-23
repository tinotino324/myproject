<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table        = 'products';           // Table name
    protected $primaryKey   = 'productID';               // Custom primary key (if applicable)
    public $timestamps      = true;                    // Keep this true if using created_at, updated_at
    // protected $fillable     = ['names'];              // Mass-assignable fields
    protected $guarded      = [];

    public function insertproduct($data)
    {
        return self::create($data);
    }

    public function updateproduct($id, $data)
    {
        return self::where('productID', $id)->update($data);
    }

    public function getproducts($filters = [])
    {
        $query = self::query();
        // $query->leftjoin('book_names', 'book_names.productID', '=' , 'product_names.productID');

        if (!empty($filters)) {
            $query->where($filters);
        }

        $query->orderBy('productID', 'DESC');
        return $query->get();
        // echo dd($query->toSql()); die;
    }

    public function getproducts_listing($filters = [])
    {
        $offset     = isset($filters['offset']) ? $filters['offset'] : 0 ;
        $length     = isset($filters['length']) ? $filters['length'] : 10 ;
        $keyword    = isset($filters['keyword']) ? $filters['keyword'] : '';
        $query      = self::query();

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where("names", 'like', '%' . $keyword . '%');
            });
        }
        
        $query->skip($offset)->take($length);
        $query->orderBy('productID', 'DESC');
        return $query->get();
        // echo dd($query->toSql()); die;
    }

    public function deleteproduct($id)
    {
        return self::destroy($id);
    }
}
