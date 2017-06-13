<?php

namespace App\Http\Controllers\upload;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function demo()
    {
        dd('oke');
    }
    
    public function store()
    {
    $file = Input::file('file');
  
    // $upload = new Upload;
    $upload =[
        'id',
        'filename',
        'size',
    ];
    try {
        $upload->process($file);
    } catch(Exception $exception){
        // Something went wrong. Log it.
        Log::error($exception);
        $error = array(
            'name' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'error' => $exception->getMessage(),
        );
        // Return error
        return Response::json($error, 400);
    }

    // If it now has an id, it should have been successful.
    if ( $upload->id ) {
        $newurl = URL::asset($upload->publicpath().$upload->filename);

        // this creates the response structure for jquery file upload
        $success = new stdClass();
        $success->name = $upload->filename;
        $success->size = $upload->size;
        $success->url = $newurl;
        $success->thumbnailUrl = $newurl;
        $success->deleteUrl = action('UploadController@delete', $upload->id);
        $success->deleteType = 'DELETE';
        $success->fileID = $upload->id;

        return Response::json(array( 'files'=> array($success)), 200);
    } else {
        return Response::json('Error', 400);
    }
}

    public function delete($id)
{
    $upload = Upload::find($id);
    $upload->delete();

    $success = new stdClass();
    $success->{$upload->filename} = true;

    return Response::json(array('files'=> array($success)), 200);
}
}
