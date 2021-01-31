<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest as BookRequest;

use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;

    /**
     * One to Many Relationship User & Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function createBook(BookRequest $request)
    {
        $user = Auth::user();
        $this->user_id = $user->id;
        
        $this->title = $request->title;
        $this->author = $request->author;
        $this->price = $request->price;

        $this->save();
    }

    public function updateBook(BookRequest $request)
    {
       if ($request->title){
        $this->title = $request->title;
       }

       if ($request->author){
        $this->author = $request->author;
       }

       if ($request->price){
        $this->price = $request->price;
       }

       $this->save();
    }
}
