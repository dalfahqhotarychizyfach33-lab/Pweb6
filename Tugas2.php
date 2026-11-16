<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hide and Show Password</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            font-family: "Times New Roman", serif;
            padding: 20px;
        }
        .input-password {
            width: 300px;
            padding: 10px 12px;
            font-size: 18px;
            border: 2px solid #555;
            border-radius: 6px;
            display: block;
            margin-bottom: 12px;
        }
        .show-container {
            display: flex;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
        }
        .show-container input[type="checkbox"] {
            width: 22px;
            height: 22px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <input type="password" id="password" class="input-password" value="rahasia1">
    
    <label class="show-container">
        <input type="checkbox" id="togglePassword">
        <span id="labelText">Show</span>
    </label>

    <script>
        $(document).ready(function() {
            $('#togglePassword').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#password').attr('type', 'text');
                    $('#labelText').text('Hide');
                } else {
                    $('#password').attr('type', 'password');
                    $('#labelText').text('Show');
                }
            });
        });
    </script>

</body>
</html>