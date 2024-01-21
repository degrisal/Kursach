<?php



 require_once 'config/connect.php';
 $Descriptionoftheproblem_id = $_GET['id'];
 $Descriptionoftheproblem=mysqli_query($connect,"SELECT * FROM `Description of the problem` WHERE `id`= '$Descriptionoftheproblem_id';");
 $Descriptionoftheproblem=mysqli_fetch_assoc($Descriptionoftheproblem);
 



$id = $_POST['id'];
$name = $_POST['name'];
$secondname = $_POST['secondname'];
$telephone =$_POST['telephone'];
$email =$_POST['email'];
$description = $_POST['description'];
$photo = $_POST['photo'];
$pricelist =$_POST['pricelist'];
$executor =$_POST['executor'];



mysqli_query($connect, "UPDATE `Description of the problem` SET `name` = '$name', `secondname` = '$secondname', `telephone` = '$telephone', `email` = '$email', `description` = '$description', `photo` = '$photo', `pricelist` = '$pricelist', `executor` = '$executor' WHERE `Description of the problem`.`id` = '$id'");



?>

 <div class="crUsluga-form">
                    <h1 class="crUsluga__titleProblem">
                        Update
                    </h1>
        <div class="df">
            <div class="crUsluga__half" style="margin-right: 20px;">
                <p class="crUsluga__name">
                    Name 
                </p>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?= $Descriptionoftheproblem['id'] ?>">
                <input class="crUsluga__input-name" type="text" placeholder="Type Your Name" name="name" value="<?= $Descriptionoftheproblem['name']?>">
            </div>
            <div class="crUsluga__half">
                <p class="crUsluga__name">
                    SecondName
                </p>
                <input class="crUsluga__input-name" type="text" placeholder="Type Your SecondName" name="secondname" value="<?= $Descriptionoftheproblem['secondname']?>">
            </div>
        </div>
<div class="df">
    <div class="crUsluga__half" style="margin-right: 20px;">
        <p class="crUsluga__name">
            Telephone
        </p>
        <input class="crUsluga__input-name" type="number" placeholder="Type Your Telephone" name="telephone" value="<?= $Descriptionoftheproblem['telephone']?>">
    </div>
    <div class="crUsluga__half">
        <p class="crUsluga__name">
            EMail
        </p>
        <input class="crUsluga__input-name" type="text" placeholder="Type Your EMail" name="email" value="<?= $Descriptionoftheproblem['email']?>">
    </div>
</div>
<div class="crUsluga__dg">
    <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Photo
        </p>
            <label class="input-file">
                <input  name="photo" class="crUsluga__input-name" type="text" placeholder="Type Your photo"  value="<?= $Descriptionoftheproblem['photo']?>">
                <span> Your URL Photo</span>
            </label>
    </div>

    <?php
$prices = mysqli_query($connect, "SELECT * FROM `prices`");
$prices = mysqli_fetch_all($prices);
?>
<form method="post" action="create.php">
    <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Prices
        </p>
        <select class="crUsluga__box" name="pricelist">
            <?php foreach ($prices as $price): ?>
                <option value="<?=$price[0]?>"><?=$price[1]?></option>
            <?php endforeach; ?>
        </select>
    </div>


<?php
$executors = mysqli_query($connect, "SELECT * FROM `executors`");
$executors = mysqli_fetch_all($executors);
?>
<form method="post" action="create.php">
 <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Executors
        </p>
        <select class="crUsluga__box" name="executor">
            <?php foreach ($executors as $executor): ?>
                <option value="<?=$executor[0]?>"><?=$executor[1]?></option>
            <?php endforeach; ?>
        </select>
    </div>
  

    <div class="crUsluga__half crUsluga__half-decr">
        <p class="crUsluga__textarea-name">
            Your Description
        </p>
        <textarea class="crUsluga__textarea" placeholder="Type Your Description..." name="description"> <?= $Descriptionoftheproblem['description']?></textarea>
    
    <button type="submit" >Accept</button>
    <button type="submit" >
        <a href="index.php">Go to Main Page</a>
    </button>
</form>
            </section>
          