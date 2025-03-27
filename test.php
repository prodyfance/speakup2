<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Ajouter Ami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 320px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        .profile-pic {
            width: 50px;
            height: 50px;
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
            font-size: 14px;
            color: gray;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .mutual-friend-pic {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            object-fit: cover;
        }
        .add-friend-btn {
            width: 100px;
            padding: 8px 0;
            border: none;
            border-radius: 5px;
            background-color: #e7f3ff;
            color: #1877F2;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            position: absolute;
            right: 10px;
            top: 20px;
            
        }
        a{
            text-decoration:none;
            font-size:15px;
        }
        ul{
            list-style-type: none;
        }
        li{
            margin-bottom:5px;
        }
    </style>
</head>
<body>

    <!-- <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReH2oDScqX0ukdZjy2hunm1K0q-UOvVs-P2Q&s" alt="Photo de profil" class="profile-pic">
        <div class="info">
            <div class="name">RAMON DINO</div>
            <div class="mutual-friends">
                <img src=" https://www.panattasport.com/wp-content/uploads/2024/12/big-ramy-png.webp" alt="Ami en commun" class="mutual-friend-pic">
                 amis communs
            </div>
            <button class="add-friend-btn">Ajouter ami</button>
        </div>
    </div> -->



    <ul>
        <li>
            <div class="card">
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReH2oDScqX0ukdZjy2hunm1K0q-UOvVs-P2Q&s" alt="Photo de profil" class="profile-pic">
            <div class="info">
            <div class="name">RAMON DINO</div>
            <div class="mutual-friends">
                <img src=" https://www.panattasport.com/wp-content/uploads/2024/12/big-ramy-png.webp" alt="Ami en commun" class="mutual-friend-pic">
                 amis communs
            </div>
            <button class="add-friend-btn">Ajouter ami</button>
           </div>
              </div>
        </li>
        <li>
           
        </li>
        <li class="card">
            
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReH2oDScqX0ukdZjy2hunm1K0q-UOvVs-P2Q&s" alt="Photo de profil" class="profile-pic">
            <div class="info">
            <p class="name">RAMON DINO</p>
            <p class="mutual-friends">amis communs</p>

            <a href="#" class="add-friend-btn">Ajouter ami</a href="#">
           </div>
              
        </li><strong></strong>
    </ul>

</body>
</html>