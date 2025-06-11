<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
        }

        .search-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
        }

        select.form-select {
            height: 50px;
            font-size: 16px;
        }

        .bot-response {
            margin-top: 40px;
            width: 100%;
            max-width: 600px;
        }

        #chatAnswer.loading::before {
            content: "Thinking...";
            color: #6c757d;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
    </style>
</head>
<body>
<div class="box-header d-flex align-items-center justify-content-start">                
            <a href="<?= ('index') ?>" class="me-2 backBtn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"></path>
                </svg> Go Back
            </a>        
        </div>   
        <br>
<div class="search-wrapper">
    <h3 class="mb-3">Ask the ChatBot</h3>
    <label for="chat" class="form-label">Available Questions</label>
    <?php
        $chatArray = [ 0 => 'Select Chat', 1 => 'How many authors are there?', 2 => 'How many books are available?', 3 => 'List top 5 authors.'];
        echo form_dropdown("chat", $chatArray, "chat", "id='chat' class='form-select' onchange=get_answer()");
    ?>
    <span class="text-danger small d-block mt-2" id="chat_error"></span>
</div>

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</body>
</html>
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

