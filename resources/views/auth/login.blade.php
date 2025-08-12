@include('layouts.LR_form')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        <div class="alert alert-danger d-none" id="errorMsg"></div>
        <div class='form-group col-lg-12 mb-3' id='emailDiv'>
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
            <span class="control-label text-danger" id="email_err">
        </div>

        <div class='form-group col-lg-12 mb-3' id='passwordDiv'>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <span class="control-label text-danger" id="password_err">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary" onclick="login()">Login</button>
        </div>
        <small class="text-center">
            <a href="{{'register'}}" class="btn btn-link">Join</a>
        </small>
    </div>
    
</body>
</html>

<script>

    function login()
    {
        var email       = $("#email").val();
        var password    = $("#password").val();
        var errorCount  = 0

        // if(name == '')
        // {
        //     $("#author_nameDiv").addClass('has-error');
        //     $("#auther_name_error").text("This filed is required !");
        //     errorCount++;
        // }
        // else
        // {
        //     $("#author_nameDiv").removeClass('has-error');
        //     $("#auther_name_error").text("");
        // }

        if(errorCount == 0)
        {
            $.ajax({
                type: 'POST',
                url: '<?= ('login_check') ?>',
                data: {
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
                        window.location.href = '<?= ('index') ?>';
                    }
                    else
                    {
                        if(result.errors.email || result.errors.password)
                        {
                            var mailErrMsg      = (result.errors.email && result.errors.email[0]) ? result.errors.email[0] : '';
                            var passwordErrMsg  = (result.errors.password && result.errors.password[0]) ? result.errors.password[0] : '';

                            $('#email_err').text(mailErrMsg);
                            $('#password_err').text(passwordErrMsg);
                            (mailErrMsg != '' )? $("#emailDiv").addClass("has-error") : $("#emailDiv").removeClass("has-error");
                            (passwordErrMsg != '') ? $("#passwordDiv").addClass("has-error") : $("#passwordDiv").removeClass("has-error");
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
