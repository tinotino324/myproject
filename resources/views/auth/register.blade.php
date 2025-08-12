@include('layouts.LR_form')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Register</h3>
        <div class="alert alert-success d-none" id="errorMsg"></div>

        <div class='form-group col-lg-12 mb-3' id='nameDiv'>
            <label for="name" class="form-label">Full Name</label><span class="text-danger">*</span>
            <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
            <span class="control-label text-danger" id="name_err">
        </div>

        <div class='form-group col-lg-12 mb-3' id='emailDiv'>
            <label for="email" class="form-label">Email address</label><span class="text-danger">*</span>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
            <span class="control-label text-danger" id="email_err">
        </div>

        <div class='form-group col-lg-12 mb-3' id='passwordDiv'>
            <label for="password" class="form-label">Password</label><span class="text-danger">*</span>
            <input type="password" name="password" id="password" class="form-control" required>
            <span class="control-label text-danger" id="password_err">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary" onclick="Register()">Save</button>
        </div>
    </div>
    
</body>
</html>

<script>

    function Register()
    {
        var name        = $("#name").val().trim();
        var email       = $("#email").val();
        var password    = $("#password").val();
        var errorCount  = 0

        if(errorCount == 0)
        {
            $.ajax({
                type: 'POST',
                url: '<?= ('create_user') ?>',
                data: {
                    'name'    : name,  
                    'password': password,
                    'email'   : email,   
                    _token : '<?=  csrf_token() ?>'
                },
                dataType: 'html',
                success: function(data) 
                {
                    var result = JSON.parse(data);

                    if(result.status == true)
                    {
                        $("#errorMsg").removeClass('d-none');
                        $("#errorMsg").html(result.message);
                        
                        setTimeout(() => {
                            window.location.href = '<?= ('login') ?>';
                        }, 1000);
                    }
                    else
                    {
                        if(result.message)
                        {
                            if(result.message.name)
                            {
                                $("#nameDiv").addClass("has-error");
                                $("#name_err").text(result.message.name);
                            }
                            else
                            {
                                $("#nameDiv").removeClass("has-error");
                                $("#name_err").text("");
                            }
                            if(result.message.email)
                            {
                                $("#emailDiv").addClass("has-error");
                                $("#email_err").text(result.message.email);
                            }
                            else
                            {
                                $("#emailDiv").removeClass("has-error");
                                $("#email_err").text("");
                            }
                            if(result.message.password)
                            {
                                $("#passwordDiv").addClass("has-error");
                                $("#password_err").text(result.message.password);
                            }
                            else
                            {
                                $("#passwordDiv").removeClass("has-error");
                                $("#password_err").text("");
                            }
                        }
                        else
                        {
                            $("#errorMsg").removeClass('d-none');
                            $("#errorMsg").html(result.errors);
                            $('#email_err').text("");
                            $('#password_err').text("");
                            $("#emailDiv").removeClass("has-error");
                            $("#passwordDiv").removeClass("has-error");
                        }
                    }
                }
            });
        }
        
    }
</script>    
