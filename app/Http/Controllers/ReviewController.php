<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show()
    {
        $reviewContent = "<h3>Produk Hebat!</h3><p>Saya baru saja membeli produk ini dan <em>itu melebihi harapan saya</em>. Sangat direkomendasikan!</p><p><strong>Rating:</strong> 5/5</p>";
        return view('review', ['content' => $reviewContent]);
    }
}
