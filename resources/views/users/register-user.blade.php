<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>createnew</title>
</head>
<body>
    
    <div class="container_register">

        <form action="">

            <h2>Create new !!!===>>>...<<<===!!!</h2>

            <div class="item_register">

                <label for="">Email:</label>
                <input type="email">

            </div>

            <div class="item_register">

                <label for="">Họ và Tên:</label>
                <input type="text">

            </div>

            <div class="item_register">

                <label for="">Phone:</label>
                <input type="tel">

            </div>

            <div class="item_register">

                <label for="">Địa Chỉ:</label>
                <input type="text">
            </div>

            <div class="item_register" >

                <label for="">Sinh Thần:</label>
                <input type="date" class="birthday" >

            </div>

            <div class="item_register">

                <label for="role">Vai trò:</label>
                    <select name="role" id="role" class="role">
                        <option value="admin">Giám đốc(1)</option>
                        <option value="user">Hr(2)</option>
                        <option value="guest">Nhân viên(3)</option>
                    </select>


            </div>


            <button type="submit">THỰC HIỆN</button>

            

            
        
        </form>

    </div>
    


</body>
</html>