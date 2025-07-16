@extends('layouts.app')

@section('title', 'dashboard')

@push('styles')

@endpush

@section('content')
<div class="container mt-5">
    <h1 class="mb-3 text-center">Welcome to the AuthorBook Management App new</h1>
    <p class="lead text-center mb-5">Manage authors and their books easily. Get quick insights at a glance!</p>
    <div class="row justify-content-center">
        <!-- Authors Card -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-lg border-0 h-100 hover-effect">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-person-lines-fill" style="font-size: 3rem; color: #0d6efd;"></i>
                    </div>
                    <h5 class="card-title fw-bold">Total Authors</h5>
                    <h2 class="text-primary display-5"><?= $author_counts ?></h2>
                </div>
            </div>
        </div>

        <!-- Books Card -->
        <div class="col-md-5 mb-4">
            <div class="card shadow-lg border-0 h-100 hover-effect">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-book-half" style="font-size: 3rem; color: #198754;"></i>
                    </div>
                    <h5 class="card-title fw-bold">Total Books</h5>
                    <h2 class="text-success display-5"><?= $book_counts ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- You can also push scripts --}}
@push('scripts')
<script>

function get_answer()
{
    var chat    = $("#chat").val();
    $.ajax({
        type: 'POST',
        url: '<?= ('get_answer') ?>',
        data: {
            'chat': chat,
            _token : '<?=  csrf_token() ?>'
        },
        dataType: 'html',
        success: function(data) 
        {
            var result = JSON.parse(data);

            if(result.status == true)
            {
                $("#chatResponseWrapper").removeClass('d-none');
                $("#chatAnswer").html(result.answer);
            }
            else
            {
                $("#chatResponseWrapper").addClass('d-none');
                $("#chatAnswer").html("");

            }
        }
    });
}

</script>
@endpush
@endsection