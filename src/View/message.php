<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message do sistema</title>
    
</head>

<body>
    <?php session_start();
    ?>
    <main class="flex items-center justify-center" style="height: 100vh;">
        <?php
        if (!empty($_SESSION['msg_success'])) :

        ?>
            <article class="w-2/4 h-32 text-white bg-green-700 rounded">
                <div class="p-9">
                    <p class="text-center">
                        <?= $_SESSION['msg_success']

                        ?>

                    </p>
                </div>
            </article>
        <?php endif;
        unset($_SESSION['msg_success']);
        ?>
        <?php
        if (!empty($_SESSION['msg_warning'])):
        ?>

<article class="w-2/4 h-32 text-white bg-orange-700 rounded">
                <div class="p-9">
                    <p class="text-center">
                        <?= $_SESSION['msg_warning']

                        ?>

                    </p>
                </div>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_warning']);
        ?>
           <?php
           if(!empty($_SESSION['msg_error'])):
           
           ?> 
            <article class="w-2/4 h-32 text-white bg-red-700 rounded">
                <div class="p-9">
                    <p class="text-center">
                        <?= $_SESSION['msg_error']

                        ?>

                    </p>
                </div>
            </article>
           
            <?php
            endif;
            unset($_SESSION['msg_error']);
            ?>
        

    </main>
    
</body>

</html>