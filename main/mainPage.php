<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        session_start();
    ?>

    <title>SimilAnime</title>
</head>
    <body style="color: white">

        <div class="ui menu">
            <div class="item">
                <img src="../img/logo_similanime.png">
            </div>

            <a href="#" class="item">Characters</a>

            <a href="#" class="item">Similarity</a>

            <div class="right menu">
                <a href="#" class="item">Logout</a>
            </div>
        </div>

        <div class="ui grid container">

            <div class="row">
                <h1 class="ui huge header">
                    Welcome <?php echo $_SESSION['username']?>

                    <div class="sub header">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </h1>
            </div>

            <div class="row centered">
                <hr style="width: 150px; background-color: rgba(255, 168, 0, 1); height: 2px; border: none; border-radius: 5px;">
            </div>

            <div class="row">
                <div class="ui items" style="background-color: red">
                    <div class="ui item" style="width: 750px">
                        <div class="ui tiny image">
                            <img class="ui avatar image" src="../img/image 1.png">
                        </div>  
                        <div class="content">
                            <a href="#" class="header">TESTE</a>
                            <div class="meta">
                                <span>Descricao</span>
                            </div>
                            <div class="description">
                                <p>hduiwahduwiadhwadhwa</p>
                            </div>
                            <div class="extra">
                                mais descricao
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached teal indicating progress">
                        <div class="bar"></div>
                    </div>  
                </div>

                <div class="ui items" style="background-color: red">
                    <div class="ui item" style="width: 750px">
                        <div class="ui tiny image">
                            <img class="ui avatar image" src="../img/image 1.png">
                        </div>  
                        <div class="content">
                            <a href="#" class="header">TESTE</a>
                            <div class="meta">
                                <span>Descricao</span>
                            </div>
                            <div class="description">
                                <p>hduiwahduwiadhwadhwa</p>
                            </div>
                            <div class="extra">
                                mais descricao
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached teal indicating progress">
                        <div class="bar"></div>
                    </div>  
                </div>

                <div class="ui items" style="background-color: red">
                    <div class="ui item" style="width: 750px">
                        <div class="ui tiny image">
                            <img class="ui avatar image" src="../img/image 1.png">
                        </div>  
                        <div class="content">
                            <a href="#" class="header">TESTE</a>
                            <div class="meta">
                                <span>Descricao</span>
                            </div>
                            <div class="description">
                                <p>hduiwahduwiadhwadhwa</p>
                            </div>
                            <div class="extra">
                                mais descricao
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached teal indicating progress">
                        <div class="bar"></div>
                    </div>  
                </div>
            </div>



        </div>


    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</html>