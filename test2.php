<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>PRO CARD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .info {
            flex-grow: 1;
        }
        .name {
            font-size: 16px;
            font-weight: bold;
        }
        .mutual-friends {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .info {
            flex-grow: 1;
        }
        .name {
            font-size: 10px;
            font-weight: bold;
        }
        .mutual-friends {
            font-size: 14px;
            color: gray;
        }
        .buttons {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .confirm {
            background-color: #1877F2;
            color: white;
        }
        .delete {
            background-color: #ddd;
            color: black;
        }body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .info {
            flex-grow: 1;
        }
        .name {
            font-size: 15px;
            font-weight: bold;
            position: absolute;
            left: 90px;
            top: 35px;
        }
        .mutual-friends {
            font-size: 14px;
            color:rgb(155, 154, 154);
            display: flex;
            align-items: center;
            gap: 5px;
            position: absolute;
            left: 90px;
            top: 35px;
        }
        .buttons {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .confirm {
            background-color: green;
            color: white;
        }
        .delete {
            background-color: red;
            color: white;
        }
            
        .buttons {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
    </style>
</head>
<body>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJaFAczZCyhLrG1lPh5MicNaAmVCZyw5FctA&s" alt="Photo de profil" class="profile-pic">
        <div class="info">
            <strong class="name">nackname example</strong>
            <h5 class="mutual-friends">name </h5>
        </div>
        <div class="buttons">
            <button id="btn"  class="btn confirm"><i class="fa-solid fa-check"></i></button>
            <button id="btn2"  class="btn delete"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>



    <!-- <script>
        var btn=document.getElementById("btn");
        var btn2=document.getElementById("btn2");

        btn.addEventListener("click",()=>{
            
            
               btn.innerHTML='<i class="fa-solid fa-check"></i>';
               btn.style.color='white';
               btn.style.backgroundColor='green';
               btn2.style.display='none';

              
            
        })
        btn2.addEventListener("click",()=>{
            
            
               btn2.innerHTML='<i class="fa-solid fa-xmark"></i>';
               btn2.style.color='white';
               btn2.style.backgroundColor='red';
               btn.style.display='none';
        })

    </script> -->

</body>
</html>