<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <link rel="stylesheet" href="character css/style.css">
        <?php
            $name = trim($_POST["name"]);
        ?>
        <title>Register character</title>
    </head>
    <body>
        <div class="ui menu">
            <div class="item">
                <a href="../main/mainPage.php">
                    <img src="../img/logo_similanime.png">
                </a>
            </div>
        </div>
        <div class="ui three column doubling stackable grid container">
            <div class="column center aligned">
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
            <form class="ui form" action="save-character.php" method="post">
                <div class="column center aligned">
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                    <div class="two fields">
                        <div class="field" style="margin-right: 30px;">
                            <label>MBTI</label>
                            <select class="ui selection dropdown" name="mbti">
                                <option value="-">-</option>
                                <option value="INTP">INTP</option>
                                <option value="INTJ">INTJ</option>
                                <option value="ENTJ">ENTJ</option>
                                <option value="ENTP">ENTP</option>
                                <option value="INFJ">INFJ</option>
                                <option value="INFP">INFP</option>
                                <option value="ENFJ">ENFJ</option>
                                <option value="ENFP">ENFP</option>
                                <option value="ISTJ">ISTJ</option>
                                <option value="ISFJ">ISFJ</option>
                                <option value="ESTJ">ESTJ</option>
                                <option value="ESFJ">ESFJ</option>
                                <option value="ISTP">ISTP</option>
                                <option value="ISFP">ISFP</option>
                                <option value="ESTP">ESTP</option>
                                <option value="ESFP">ESFP</option>
                            </select>
                            <a href="https://www.personality-database.com/search?keyword=<?php echo $name?>">See your character's MBTI here</a>
                        </div>
                        <div class="field">
                            <label>Blood type</label>
                            <select class="ui selection dropdown" name="blood-type">
                                <option value="-">-</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                    </div>
                    <div class="two fields" style="margin-top: 30px;">
                        <div class="field" style="margin-right: 30px;">
                            <label>Birthday</label>
                            <div class="ui icon input">
                                <input type="text" placeholder="yyyy/mm/dd" name="birthday" id="birthday">
                                <i class="calendar alternate outline icon" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Weight</label>
                            <div class="ui input">
                                <input type="number" name="weight" min="0" step="0.1" id="weight">
                            </div>
                        </div>
                    </div>
                    <div class="two fields" style="margin-top: 30px;">
                        <div class="field" style="margin-right: 30px;">
                            <label>Gender</label>
                            <select class="ui selection dropdown" name="gender">
                                <option value="-">-</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="non-binary">Non-binary</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Height</label>
                            <div class="ui input">
                                <input type="number" name="height" min="0" step="0.01" id="height">
                            </div>
                        </div>
                    </div>
                    <div class="two fields" style="margin-top: 30px;">
                        <div class="field" style="margin-right: 30px;">
                            <label>Sexuality</label>
                            <select class="ui selection dropdown" name="sexuality">
                                <option value="-">-</option>
                                <option value="straight">Straight</option>
                                <option value="gay">Gay</option>
                                <option value="bi/pan">Bi/pan</option>
                                <option value="asexual">Asexual</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Zodiac sign</label>
                            <select class="ui selection dropdown" name="zodiac-sign" id="zodiac">
                                <option value="-">-</option>
                                <option value="aries">Aries</option>
                                <option value="taurus">Taurus</option>
                                <option value="gemini">Gemini</option>
                                <option value="cancer">Cancer</option>
                                <option value="leo">Leo</option>
                                <option value="virgo">Virgo</option>
                                <option value="libra">Libra</option>
                                <option value="scorpio">Scorpio</option>
                                <option value="sagittarius">Sagittarius</option>
                                <option value="capricorn">Capricorn</option>
                                <option value="aquarius">Aquarius</option>
                                <option value="pisces">Pisces</option>
                            </select>
                        </div>
                    </div>
                    <div class="two fields" style="margin-top: 30px;">
                        <div class="field" style="margin-right: 30px;">
                            <label>Occupation</label>
                            <div class="ui input">
                                <input type="text" name="occupation" maxlength="30" id="occupation">
                            </div>
                        </div>
                        <div class="field">
                            <input type="hidden" name="user" value="<?php echo $_POST['user']?>">
                            <button class="ui animated button large" tabindex="0" id="button_register">
                                <div class="visible content">Register</div>
                                <div class="hidden content">
                                    <i class="right arrow icon"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                api();
            
                $('.special.cards .image').dimmer({
                    on: 'hover'
                });
            
                $('.ui.selection.dropdown').dropdown();

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
            
                document.querySelector("[name=birthday]").value = nascimentoMes + "/" + nascimentoData;
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