<?php


namespace LaravelMerax\FileServer\App\Http\Controllers\File;


use LaravelMerax\FileServer\App\Models\FileServer\File;
use Illuminate\Routing\Controller;

class Show extends Controller
{

    public function __invoke(File $file)
    {
        return $file->attachable->inline();
    }
}
