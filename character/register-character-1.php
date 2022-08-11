<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    	<link rel="stylesheet" href="character css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            $name = trim($_POST["name"]);
        ?>
        <title>Register character</title>
    </head>
    <body>
        
        <div class="ui menu">
            <div class="item">
                <img src="../img/logo_similanime.png">
            </div>
        </div>

        <div class="ui three column doubling stackable grid container">
            <div class="column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted">
                                            <input type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="" name="image">
                        </div>
                        <div class="content">
                            <h1 class="header" name="name_character"></h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="column">
                <form action="save-character.php" method="post">
                    <input type="hidden" name="name" value="<?php echo $name ?>">

                    <div class="ui selection dropdown">
                        <i class="dropdown icon"></i>
                        <div class="default text">MBTI</div>
                        <div class="menu">
                            <div class="item" data-value="">-</div>
                            <div class="item" data-value="INTP">INTP</div>
                            <div class="item" data-value="INTJ">INTJ</div>
                            <div class="item" data-value="ENTJ">ENTJ</div>
                            <div class="item" data-value="ENTP">ENTP</div>
                            <div class="item" data-value="INFJ">INFJ</div>
                            <div class="item" data-value="INFP">INFP</div>
                            <div class="item" data-value="ENFJ">ENFJ</div>
                            <div class="item" data-value="ENFP">ENFP</div>
                            <div class="item" data-value="ISTJ">ISTJ</div>
                            <div class="item" data-value="ISFJ">ISFJ</div>
                            <div class="item" data-value="ESTJ">ESTJ</div>
                            <div class="item" data-value="ESFJ">ESFJ</div>
                            <div class="item" data-value="ISTP">ISTP</div>
                            <div class="item" data-value="ISFP">ISFP</div>
                            <div class="item" data-value="ESTP">ESTP</div>
                            <div class="item" data-value="ESFP">ESFP</div>
                        </div>
                    </div>

                    <p>Birth date: <input type="text" placeholder="yyyy/mm/dd" name="birth-date"></p>

                    <p>Gender:
                        <select name="gender">
                            <option>-</option>
                            <option value="Male">male</option>
                            <option value="Female">female</option>
                            <option value="Non-binary">non-binary</option>
                        </select>
                    </p>

                    <p>Sexuality:
                        <select name="sexuality">
                            <option>-</option>
                            <option>straight</option>
                            <option>gay</option>
                            <option>bi/pan</option>
                            <option>asexual</option>
                        </select>
                    </p>

                    <p>Occupation: <input type="text" name="occupation" maxlength="30"></p>
                
            </div>

            <div class="column">
                    <p>Blood type:
                        <select name="blood-type">
                            <option>-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </p>

                    <p>Weight: <input type="number" name="weight" min="0" step="0.1"></p>

                    <p>Height: <input type="number" name="height" min="0" step="0.01"></p>

                    <p>Zodiac sign:
                        <select name="zodiac-sign">
                            <option>-</option>
                            <option>aries</option>
                            <option>taurus</option>
                            <option>gemini</option>
                            <option>cancer</option>
                            <option>leo</option>
                            <option>virgo</option>
                            <option>libra</option>
                            <option>scorpio</option>
                            <option>sagittarius</option>
                            <option>capricorn</option>
                            <option>aquarius</option>
                            <option>pisces</option>
                        </select>
                    </p>

                    <input type="hidden" name="user" value="<?php echo $_POST['user']?>">
                    <button class="button_register">Cadastrar</button>
                </form>
            </div>

        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                api();

                $('.special.cards .image').dimmer({
                    on: 'hover'
                });

                $('.ui.dropdown')
                    .dropdown()
                ;

                sessionStorage.clear();
            })

            async function api() {
                const name = document.querySelector("[name=name]");
                var id = sessionStorage.getItem("id");
                console.log(id);
                console.log(name);
                var query = `
                    query {
                        Character (id: ${id}) {
                            id
                            name {
                                userPreferred
                            }
                            dateOfBirth {
                                year
                                month
                                day
                            }
                            description
                            image {
                                large
                                medium
                            }
                            age
                            bloodType
                            gender
                            siteUrl
                            media (type: ANIME) {
                                nodes {
                                    title {
                                    romaji
                                    userPreferred
                                    }
                                }
                            }
                        }
                    }
                `;

                var options = {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        query: query
                    })
                }
                const resultado = await fetch(`https://graphql.anilist.co`, options).then((res) => res.json());
                console.log(resultado);

                var nascimentoData = resultado.data.Character.dateOfBirth.day;
                var nascimentoMes = resultado.data.Character.dateOfBirth.month;

                document.querySelector("[name=birth-date]").value = nascimentoMes + "/" + nascimentoData;
                document.querySelector("[name=blood-type]").value = resultado.data.Character.bloodType;
                document.querySelector("[name=gender]").value = resultado.data.Character.gender;
                var imagem = document.querySelector("[name=image]");
                imagem.src=resultado.data.Character.image.large;
                document.querySelector("[name=name_character]").innerText = resultado.data.Character.name.userPreferred;
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    </body>
</html>