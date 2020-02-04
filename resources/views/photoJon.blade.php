@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">PhotosJon</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">

                    		<div class="col-md-12">
                    			<div class="row">
                            @foreach($photos as $photo)
                    				<div class="col-md-4">
                                  <img src="{{ $photo->lien }}" alt="{{ $photo->filename }}" style="width:100%; height:100%; padding-bottom:10px; object-fit: cover;"; >
                    				</div>
                    			               @endforeach
                    			</div>


                    		</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="pagesPhotos">
        <ul class="pagination justify-content-center pt-2" >

                {{ $photos->links() }}

        </ul>
    </nav>

</div>
@endsection
