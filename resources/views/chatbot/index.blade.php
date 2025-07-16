@extends('layouts.app')

@section('title', 'Books')

@push('styles')

@endpush

@section('content')

<div class="box-header d-flex align-items-center justify-content-start">                
    <a href="<?= ('index') ?>" class="me-2 backBtn" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
            <path d="M0 0h24v24H0V0z" fill="none"></path>
            <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"></path>
        </svg>
    </a>  
    <h3 class="box-title mb-0">ChatBot</h3>         
</div> 

<br>
<div class="center-wrapper">
    <div class="search-wrapper">
        <h3 class="mb-3">Ask the ChatBot</h3>
        <label for="chat" class="form-label">Available Questions</label>
        <?php
            $chatArray = [ 0 => 'Select Chat', 1 => 'How many authors are there?', 2 => 'How many books are available?', 3 => 'List top 5 authors.'];
            echo form_dropdown("chat", $chatArray, "chat", "id='chat' class='form-select' onchange=get_answer()");
        ?>
        <span class="text-danger small d-block mt-2" id="chat_error"></span>
        <div id="chatResponseWrapper" class="bot-response p-3 rounded shadow-sm bg-white border d-none" >
    <div class="d-flex align-items-center gap-2 mb-2">
        <div class="bot-avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
            🤖
        </div>
        <strong class="text-primary">SmartBot</strong>
    </div>
    <div id="chatAnswer" class="text-dark small">
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
$("#lengthDiv, #navDiv").addClass('d-none');
</script>
@endpush
@endsection
