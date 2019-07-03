

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?= $this->Html->css('login.css');?>
</head>
<body>
    <div class="container" style="max-width:400px;">
        <div class="content-header">
            <h1>Đăng ký người dùng</h1>
        </div>
        <!-- <form action="users/login" method="post"> -->
        <?php echo $this->Form->create('Post', array('action' => 'register'));?>
            <div class="form-group">
                <input type="email" class="form-control error" name="email" id="email"  placeholder="Địa chỉ email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control error" name="password" id="password" placeholder="Mật khẩu" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control error" name="re-password" id="re-password" placeholder="Mật khẩu (xác nhận lại) " >
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:16px;">Đăng ký người dùng</button>
            <?= $this->Form->end() ?>
        <div class="text-center">
            <a href="<?= $this->Url->build([
                "controller" => "users",
                "action" => "login"
            ]);?> ">Quay lại đăng nhập?</a>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>