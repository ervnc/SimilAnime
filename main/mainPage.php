<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <link rel="stylesheet" href="style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SimilAnime</title>
    </head>
    <body>

        <?php
            session_start();

            include_once "../database.php";

            $user = $_SESSION['username'];
        ?>

        <div class="ui menu">
            <div class="item">
                <img src="../img/logo_similanime.png">
            </div>
            <a href="#" class="item" id="nav">Characters</a>
            <a href="#" class="item" id="nav">Similarity</a>
            <div class="right menu">
                <a href="#" class="item"><div style="border-radius: 50%; background-color: white; height: 35px; width: 35px;"></div></a>
            </div>
        </div>

        <div class="ui grid stackable container">

            <div class="row">
                <h1 class="title">
                    Welcome <span class="title__span"><?php echo $user?></span>

                    <div class="sub header">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </h1>
            </div>

            <div class="row centered">
                <hr style="width: 150px; background-color: rgba(203, 119, 255, 1); height: 2px; border: none; border-radius: 5px;">
            </div>

            <div class="row">
                <div class="ui items">
                    <div class="ui item" id="cardCharacter" style="width: 750px">
                        <div class="ui tiny circular image">
                            <img src="../img/icon-user.svg">
                        </div>  
                        <div class="content">
                            <a href="#" class="header" id="content_header">TESTE</a>
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
                    <div class="ui indicating tiny progress" data-value="0" data-total="100" style="margin-top: 0">
                        <div class="bar"></div>
                        <div class="label" id="progress">Similarity</div>
                    </div>


                    <div class="ui item" id="cardCharacter" style="width: 650px">
                        <div class="ui tiny circular image">
                            <img src="../img/icon-user.svg">
                        </div>  
                        <div class="content">
                            <a href="#" class="header" id="content_header">TESTE</a>
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
                    <div class="ui indicating tiny progress" data-value="0" data-total="100" style="width: 650px; margin-top: 0">
                        <div class="bar"></div>
                        <div class="label" id="progress">Similarity</div>
                    </div>


                    <div class="ui item" id="cardCharacter" style="width: 550px">
                        <div class="ui tiny circular image">
                            <img src="../img/icon-user.svg">
                        </div>  
                        <div class="content">
                            <a href="#" class="header" id="content_header">TESTE</a>
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
                    <div class="ui indicating tiny progress" data-value="0" data-total="100" style="width: 550px; margin-top: 0">
                        <div class="bar"></div>
                        <div class="label" id="progress">Similarity</div>
                    </div>
                </div>
            </div>


            <div class="row">

                <table class="ui collapsing selectable celled table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Blood type</th>
                            <th>Gender</th>
                            <th>Sexuality</th>
                            <th>Birth date</th>
                            <th>Zodiac sign</th>
                            <th>MBTI</th>
                            <th>Occupation</th>
                            <th>Similarity</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody>
                    <?php
                        $sql = "select * from characters where user='$user'";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["weight"]?></td>
                            <td><?php echo $row["height"]?></td>
                            <td><?php echo $row["blood_type"]?></td>
                            <td><?php echo $row["gender"]?></td>
                            <td><?php echo $row["sexuality"]?></td>
                            <td><?php echo $row["birth_date"]?></td>
                            <td><?php echo $row["zodiac_sign"]?></td>
                            <td><?php echo $row["mbti"]?></td>
                            <td><?php echo $row["occupation"]?></td>
                            <td><?php echo $row["similarity"]?></td>
                            <td>
                                <form method="get" class="form_table">
                                    <div class="ui tiny buttons">
                                        <input type="hidden" name="name" value="<?php echo $row["name"] ?>">
                                        <button class="ui button button_edit">Edit</button>
                                        <div class="or"></div>
                                        <a class="ui button button_delete">Delete</a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>

                <div class="ui mini modal">
                    <div class="header">Are you sure you want to delete this character?</div>
                    <div class="actions">
                        <div class="ui approve button">Delete</div>
                        <div class="ui cancel button">Cancel</div>
                    </div>
                </div>

            </div>

            <a class="ui button" href="../character/register-character.php">Register character</a>



        </div>

    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
        $('.ui.indicating.tiny.progress')
            .progress('increment', 50)
        ;
        $('.ui.indicating.tiny.progress')
            .progress({
                text: {
                    active  : 'Adding {percent}%',
                    success: '{total}%'
                }
            })
        ;

        $(".ui.button.button_edit").click(function(){
            $(".form_table").prop('action', '../character/edit-character.php');
        });

        $(".ui.button.button_delete").click(function(){
            $('.ui.mini.modal')
            .modal({
                onDeny : function(){
                    return true;
                },
                onApprove : function() {
                    $(".form_table").prop('action', '../character/delete-character.php');
                    $(".form_table").submit();
                }
            })
            .modal('show')
            ;
        });

        
    </script>
</html>
