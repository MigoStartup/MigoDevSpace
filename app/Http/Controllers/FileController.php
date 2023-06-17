<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('fileUpload');
    }
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,png,jpg,ico,svg,py,zip|max:8048',
        ]);
      
        $fileName = time().'.'.$request->file->extension();  
       
        //->file->move(public_path('uploads'), $fileName);
        $request->file->storeAs('', $fileName, "public_uploads");
     
        /*  
            Write Code Here for
            Store $fileName name in DATABASE from HERE 
        */
       
      /*  return back()
            ->with('success',
            ->with('file', $fileName);*/
            
           /* return redirect()->route('file.index', ['success' => 'You have successfully upload file.', 'file' => $fileName*/
           return view('fileUpload', [
            'success' => 'You have successfully upload file.','file' => $fileName,
        ]);
   
    }
}