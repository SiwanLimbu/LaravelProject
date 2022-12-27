<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/favicon/favicon1.ico" type="image/x-icon">
     <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #F6F7FC;
        }
        .mainBox {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 60%;
            margin: 0 auto;
            min-height: 400px;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            background-color: #fff;
            overflow: hidden;
        }
        .imgBox img {
            width: 90%;
            height: 100%;
        }
        .btn1{
            height: 40px;
            color: white;
            width: 100%;
            border-style: none;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-login:hover,.btn-login-google:hover{
            transform: scale(1.1);
        }
        .btn-login{
            background-color: #5C636A;
            margin-top: 15px;
            margin-bottom: 5px;
        }
     </style>
     @vite(['resources/js/app.js'])
</head>
<body>

     <section>
        <div class="mainBox">
            <div class="imgBox">
                <img src="/img/pizza.jpg" alt="">
            </div>
            <div class="p-5">
                <h2 class="mb-0">Create Account</h1>
                <p style="margin-left: 5px;">It's is simple and fast</p>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User name</label>
                        <input type="email" class="form-control"  name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password" id="myPassword">
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" onclick="showPassword();"><span style="margin-left:5px;font-size:13px;">Show Password</span>
                    </div>
                    <button type="submit" class="btn1 btn-login" id="btn-login">Log In</button>
                </form>
                <p class="mt-3">Already have account! <a href="{{url('/login')}}" style="text-decoration: none;">Log in</a></p>
    
            </div>
    
        </div>
     </section>
     <script>
        const inputValue=document.getElementsByTagName("input");
        for(var i=0;i<=1;i++)
        {
        inputValue[i].addEventListener('input',function()  {
                if(inputValue[0].value.length > 0 && inputValue[1].value.length > 0)
                {
                    document.getElementById("btn-login").style.backgroundColor="#D9A47A";
                }
                else{
                    document.getElementById("btn-login").style.backgroundColor="#5C636A";
                }
        });
        }
        function showPassword()
        {
            var x = document.getElementById("myPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
     </script>
</body>
</html>