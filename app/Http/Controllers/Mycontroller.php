<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class Mycontroller extends Controller
{
    public function index()
    {
        $Model                  = New Author();
        $bookModel              = New Book();
        $books                  = $bookModel->getbooks();
        $authors                = $Model->getAuthors();
        $data['author_counts']  = !empty($authors) ? count($authors) : 0;
        $data['book_counts']    = !empty($books) ? count($books) : 0;
        return view('dashboard.index', $data);
    }

    public function author()
    {
        $Model              = New Author();
        // Author::factory()->count(5)->create();
        $authors            = $Model->getAuthors();
        $data['counts']     = !empty($authors) ? count($authors) : 0;
        return view('authors.index', $data);
    }

    public function chatbot()
    {
        $Model              = New Author();
        $authors            = $Model->getAuthors();
        $data['counts']     = !empty($authors) ? count($authors) : 0;
        return view('chatbot.index', $data);
    }

    public function books()
    {
        $Model              = New Author();
        $bookModel          = New Book();
        $books              = $bookModel->getbooks();
        $authors            = $Model->getAuthors();
        $data['authors']    = $authors;
        $data['counts']     = !empty($books) ? count($books) : 0;

        return view('books.index', $data);
    }

    public function save_author(Request $request)
    {
        $response['status'] = FALSE;
        $name               = $request->post('name');
        $id                 = $request->post('id');
        $Model              = new Author();
        $authors_names      = $Model->getAuthors(['names' => $name]);
        $authors            = [];

        $validator  = Validator::make($request->all(),[
            "name" => "required||max:20"
        ]);

        if($validator->fails())
        {
            $errors                 = $validator->errors();
            // $errors->all();
            $response['message']    = $errors->getMessages()['name'][0];
            $response['status']     = FALSE;   
            echo json_encode($response);die;
        }
        
        if(!empty($authors_names))
        {
            foreach($authors_names as $authors_name)
            {
                $authors[]  = $authors_name;
            }
            
            if(!empty($authors))
            {
                $response['message'] = "This Author Name is already exist !";
                $response['status']  = FALSE;
                echo json_encode($response);die;
            }
        }

        if((int)$id)
        {
            $update         = $Model->updateAuthor($id, ['names' => $name]);
        }
        else
        {
            $update         = $Model->insertAuthor(['names' => $name]);
        }

        if($update)
        {
            $response['status']     = TRUE;
            $response['message']    = "Auther Name is Sucessfully Saved";
        }
        else
        {
            $response['message']    = "Failed";
        }


        echo json_encode($response);die;

    }

    public function save_book(Request $request)
    {
        $response['status'] = FALSE;
        $name               = $request->post('name');
        $authorID           = $request->post('authorID');
        $id                 = $request->post('id');
        $Model              = new Book();
        $books_names        = $Model->getBooks(['book_name' => $name]);
        $books              = [];

        if(!empty($books_names))
        {
            foreach($books_names as $book_name)
            {
                $books[]  = $book_name;
            }
            
            if(!empty($books))
            {
                $response['message'] = "This Bool Name is already exist !";
                $response['status']  = FALSE;
                echo json_encode($response);die;
            }
        }

        if((int)$id)
        {
            $update         = $Model->updatebook($id, ['book_name' => $name, "authorID" => $authorID]);
        }
        else
        {
            $update         = $Model->insertbook(['book_name' => $name, "authorID" => $authorID]);
        }

        if($update)
        {
            $response['status']     = TRUE;
            $response['message']    = "Book Name is Sucessfully Saved";
        }
        else
        {
            $response['message']    = "Failed";
        }


        echo json_encode($response);die;

    }

    public function get_authors(Request $request)
    {

        $offset             = $request->post('offset');
        $length             = $request->post('length');
        $keyword            = $request->post('keyword');
        $Model              = new Author();
        $bookModel          = new book();
        $params['offset']   = $offset;
        $params['length']   = $length;
        $params['keyword']  = $keyword;
        $authors            = $Model->getAuthors_listing($params);
        $total_authors      = $Model->getAuthors();
        $books              = $bookModel->getbooks();
        $data               = [];
        $book_data          = [];
        $book_count_data    = [];
        $book_names         = [];

        
        if(!empty($books))
        {
            foreach($books as $book)
            {
                $book_data[$book->authorID][] = $book;
            }
        }

        if(!empty($book_data))
        {
            foreach($book_data as $key => $book_count)
            {
                $book_count_data[$key]  = count($book_count);
                $book_names[$key]       = implode(', ', array_column($book_count, 'book_name'));
            }
        }

        if(!empty($authors))
        {
            foreach($authors as $author)
            {
                $author['date']         = date('d-M-Y', strtotime($author['created_at']));
                $author['create_date']  = date('D M Y', strtotime($author['created_at']));
                $author['update_date']  = date('D M Y', strtotime($author['updated_at']));
                $author['book_count']   = isset($book_count_data[$author['authorID']]) ? $book_count_data[$author['authorID']] : 0;
                $author['book_names']   = isset($book_names[$author['authorID']]) ? $book_names[$author['authorID']] : 0;
                $data[]                 = $author;
            }
        }
        $response['status'] = FALSE;

        if(!empty($data))
        {
            $response['status']     = TRUE;
            $response['authors']    = $data;
            $response['counts']     = $book_count_data;

        }

        $response['total_counts']   = count($total_authors);
        $response['listing_counts'] = count($authors);
        $response['offset']         = $offset;
        $response['length']         = $length;
        echo json_encode($response);die;
    }

    public function get_books(Request $request)
    {
        $offset             = $request->post('offset');
        $length             = $request->post('length');
        $keyword            = $request->post('keyword');
        $Model              = new book();
        $total_books        = $Model->getbooks();
        $params['offset']   = $offset;
        $params['limit']    = $length;  
        $params['keyword']  = $keyword;    
        $books              = $Model->getbooks_listing($params);
        $data               = [];

        if(!empty($books))
        {
            foreach($books as $book)
            {
                $book['date']           = date('d-M-Y', strtotime($book['created_at']));
                $book['create_date']    = date('D M Y', strtotime($book['created_at']));
                $book['update_date']    = date('D M Y', strtotime($book['updated_at']));
                $data[]                 = $book;
            }
        }
        $response['status'] = FALSE;

        if(!empty($data))
        {
            $response['status']     = TRUE;
            $response['books']    = $data;

        }

        $response['total_counts']   = count($total_books);
        $response['listing_counts'] = count($books);
        $response['offset']         = $offset;
        $response['length']         = $length;
        echo json_encode($response);die;
    }

    public function get_answer(Request $request)
    {
        $chat               = $request->post('chat');
        $Model              = new Author();
        $BookModel          = new book();
        $authors            = $Model->getAuthors();
        $books              = $BookModel->getbooks();
        $data               = [];
        $book_data          = [];
        $book_array         = [];
        $book_count_data    = [];
        $top_author_list    = [];
        $author_data        = [];

        if(!empty($authors))
        {
            foreach($authors as $author)
            {
                $data[]                             = $author;
                $author_data[$author->authorID]    = $author['names'];
            }
        }

        if(!empty($books))
        {
            foreach($books as $book)
            {
                $book_data[]                    = $book;
                $book_array[$book->authorID][]  = $book;
            }
        }

        if(!empty($book_array))
        {
            foreach($book_array as $key => $book_count)
            {
                $book_count_data[$key]  = count($book_count);
            }
        }

        arsort($book_count_data);

        if($book_count_data)
        {
            foreach($book_count_data as $bookID => $book_count_val)
            {
                $top_author_list[$bookID] = $author_data[$bookID].'-'.$book_count_val;
            }
        }
        
        $total_authors_list = array_slice($top_author_list, 0, 4);

        $authors_names      = !empty($data) ? '<b>(Total-'.count($data).')</b><br>'.implode('<br>', array_column($data, "names")) : '';
        $book_names         = !empty($book_data) ? '<b>(Total-'.count($book_data).')</b><br>'.implode('<br>', array_column($book_data, "book_name")) : '';
        $author_list        = !empty($top_author_list) ? implode('<br>', $top_author_list) : '';

        $answers            = [1 => $authors_names, 2 => $book_names, 3 => $author_list];
        $return_ans         = isset($answers[$chat]) ? $answers[$chat] : false;
        $response['status'] = FALSE;

        if($return_ans)
        {
            $response['status'] = TRUE;
            $response['answer'] = $return_ans;
        }

        echo json_encode($response);die;

    }

    public function delete(Request $request)
    {
        $Model              = new Author();
        $id                 = $request->post('id');
        $delete             = $Model->deleteAuthor($id) ;   
        $response['status'] = FALSE;

        if($delete)
        {
            $response['status']     = TRUE;
            $response['message']    = "Deleted Successfully";
        }
        else
        {
            $response['message']    = "Failed";
        }

        echo json_encode($response);die;
    }

    public function book_delete(Request $request)
    {
        $Model              = new Book();
        $id                 = $request->post('id');
        $delete             = $Model->deletebook($id) ;   
        $response['status'] = FALSE;

        if($delete)
        {
            $response['status']     = TRUE;
            $response['message']    = "Deleted Successfully";
        }
        else
        {
            $response['message']    = "Failed";
        }

        echo json_encode($response);die;
    }

}
