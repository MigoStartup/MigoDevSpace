<x-app-layout>
	<x-slot name="header">
		<h2 class="bg-gray-800 font-semibold text-xl text-white dark:text-white leading-tight">
			{{ __('File upload') }}
		</h2>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	</x-slot>
	
	<div class="container">

       

    <div class="panel panel-primary text-white">

  

      <div class="panel-heading">

        <h2>Select a file to upload: <h2>

      </div>

  

      <div class="panel-body">

        
         <br>
                @isset ($file)
                    <div class="alert alert-success alert-block">

                <strong>{{ "File uploaded successfully!" }}</strong>
               

            </div>
            <br>
                  <div class="alert alert-success alert-block">
               		 <strong>File path: <a href="{{ url('http://migodev.migosec.space/files/'.$file) }}">{{ url('http://migodev.migosec.space/files/'.$file) }}</a></strong>
               		 </div>
               		 @endisset

      

        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

  

            <div class="mb-3">

                <label class="form-label" for="inputFile">File:</label>

                <input 

                    type="file" 

                    name="file" 

                    id="inputFile"

                    class="bg-dark form-control @error('file') is-invalid @enderror">

  

                @error('file')

                    <span class="text-danger">{{ $message }}</span>

                @enderror

            </div>

   

            <div class="mb-3">

                <button type="submit" class="btn btn-dark">Upload</button>

            </div>

       

        </form>

      

      </div>

    </div>

</div>

</x-app-layout>