<h1>wellcome</h1>
<input id="name">
<button id="submit" onclick="save()" class="btn-success">Submit</button>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    function save()
    {
        var name = $("#name").val();

        $.ajax({
            type: 'POST',
            url: '<?= ('save') ?>',
            data: {
                'name': name,
                _token : '<?=  csrf_token() ?>'
            },
            dataType: 'html',
            success: function(data) 
            {
                var result = JSON.parse(data);

                if(result.status == true)
                {
                    alert("success");
                }
                else
                {
                    alert("failed");
                }
            }
        });
    }
</script>