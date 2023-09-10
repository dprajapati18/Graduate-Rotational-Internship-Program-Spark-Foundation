<?php 
    $id = $_GET['cid'];
    require_once("db.php");
    $sql = "select * from customers where cid=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="Css/customerProfile.css">
        
</head>
<body>
    <!-- <div class="container"> -->
        <?php include_once("nav2.php")?>

        <section class="container">

            <div class="profile">
                <div class="backgroundImg">
                    <img src="https://getwallpapers.com/wallpaper/full/8/6/a/1473822-new-dual-monitor-wallpaper-2880x900-3200x1200-tablet.jpg" alt="">
                </div>
                <div class="profileImg">
                    <img src="https://avatars.githubusercontent.com/u/88883506?s=400&u=27db689c47d5e0d7fc953a8cd400c14b04c7a400&v=4" alt="">
                    <div class="userDetails">
                        <h2><?= $row['cname'] ?></h2>
                        <p><?= $row['email_id'] ?></p>
                        <!-- <p>8797421521</p> -->
                        <div class="accountDetails">
                            <div>
                                <span><b>Account No.: </b> <?= $row['acc_number'] ?></span>
                                <span><b>Balance:</b> Rs <?= $row['current_balance'] ?></span> 
                            </div>
                            <div>
                                <span>
                                    <b> Account Type: </b><?= $row['acc_type'] ?>
                                </span>
                                <span>
                                    <b>Nationality: </b><?= $row['nationality'] ?>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </section>

        <section class="transaction container">
            <div>
                <?php echo $id?>
                <a href="TransferMoney.php?id=<?= $id?>"><button class="CustomerViewBtn">Send Money</button></a>
            </div>
            <div>
                <button class="CustomerViewBtn" onclick="window.location='TransactionHistory.php'">Transaction History</button>
            </div>
        </section>
        

        
        <script src="js/scrip.js"></script>
</body>
</html>