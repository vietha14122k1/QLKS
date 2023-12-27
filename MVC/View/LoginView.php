<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@300;400;500;700;900&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .login {
        width: 450px;
    position: fixed;
    z-index: 100;
    background: #0000009c;
    padding: 20px 0;
    height: 100vh;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    }

    .login h1 {
        font-family: 'Lobster', cursive;
        text-align: center;
        color: #ffffff;
        font-size: 30px;
        padding: 20px 0 20px 0;
        position: relative;
        z-index: 10;
        text-shadow: 5px 7px 3px #000000cc
    }

    .login form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: relative;
        z-index: 2;
        top: 50%;
        transform: translateY(-100%);
    }

    .login form label {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        color: #ffffff;
    }

    .login input[type="password"],
    .login input[type="text"] {
        width: 310px;
        height: 50px;
        background: #ffffff00;
        font-size: 25px;
        color: white;
        border: none;
    }

    .login form input[type="submit"] {
        padding: 15px;
        margin-top: 20px;
        cursor: pointer;
        border: none;
        width: 100%;
        font-family: 'Lobster', cursive;
    }

    ion-icon {
        font-size: 35px;
    }
    .backgroud_img{
        position: fixed;
        inset: 0;
        z-index: 4;
        height: 100vh;
    }
    .backgroud_img img{
        width: 100%;
        height:100%;
        object-fit: cover;
    }
    </style>
</head>

<body>


    <div style="position: relative; inset: 0;">

        <div class="backgroud_img">
            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
        <div class="login">
            <h1>logn in</h1>
            <form action="http://localhost/QLKS/Login/checklogin" method="post">
                <div>
                    <div style="display: flex; border-bottom: 3px solid white ; height:50px;margin-bottom: 20px;">
                        <label for="username">
                            <ion-icon name="person-sharp"></ion-icon>
                        </label>
                        <input type="text" style="color:white" name="username" placeholder="Enter your userName..."
                            id="username" required>

                    </div>
    
                    <div
                        style="display: flex; border-bottom: 3px solid white ; height:50px;margin-bottom: 20px;position: relative;">
                        <label for="password">
                            <ion-icon name="key-outline"></ion-icon>
                        </label>
                        <input type="password" name="password" placeholder="Enter your Password" id="show-password"
                            required>
                        
                    </div>
    
                    <div style="display: flex;
                    align-items: center;
                    justify-content: center;"><input type="submit" value="Login" name="btnDangnhap"></div>
                     </div>
                    </form>
                     <div style="display: flex;
                    align-items: center;
                    justify-content: center;margin-top:230px; "><label ><i ><a  style="font-size:20px;color:red;" href="http://localhost/QLKS/Home">Truy cập với vai trò là khách</a></i></label></div>
                   
                   
                    
                
            
        </div>
    </div>


</body>

</html>