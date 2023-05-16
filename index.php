<?php
session_start();

?>

<!DOCTYPE html>
<html lang="it" class="<?php echo $_COOKIE['tema']; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Missing Students management</title>
    <link rel="stylesheet" href="darktheme.css">
</head>

<body >
    
    
    <div class="work-area">

        <div class="darktheme">
            <button class="theme-toggle-button">
                <svg class="icon" id="sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                </svg>

                <svg class="icon " id="moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                </svg>


                Swap Themes
            </button>

        </div>


        <div class="conteiner <?php echo $_COOKIE['tema']; ?>">
            <div class="login-area" id="login-area">
                <div class="login-header">
                    <h2>Login Page</h2>
                </div>
                <div class="login-conteiner">
                    <form action="./azioni/login.php" method="post" name="login" class="buttons">


                        <div class="login-name">
                            <input type="text" name="name" placeholder="Name or Email" class="login-form" required
                                minlength="2">
                        </div>

                        <div class="login-password k">
                            <input type="password" name="password" placeholder="Password" class="login-form" required
                                minlength="2">
                        </div>

                        <div class="login-submit">
                            <button class="button-login" name="button-login">Login</button>
                        </div>

                        <div class="or-div">
                            <h2 class="or">OR</h2>
                        </div>
                    </form>
                    <div class="register-submit">
                        <button class="button-register" onclick="showRegister()">Register</button>
                    </div>
                </div>
            </div>

            <div class="register-area" id="register-area" style="display: none;">
                <div class="login-header">
                    <h2>Register Page</h2>
                </div>
                <div class="register-container">
                    <form action="./azioni/register.php" name="register" method="post">
                        <div class="register-username">
                            <input type="text" name="username" placeholder="Username" class="registerUsername" required
                                minlength="2">
                        </div>
                        <div class="register-email">
                            <input type="email" name="email" placeholder="Email" class="registerEmail" required
                                minlength="2">
                        </div>
                        <div class="register-password">
                            <input type="password" name="password" placeholder="Password" class="registerPassword"
                                required minlength="8" pattern="[a-z]*">
                        </div>
                        <div class="register-sesso">
                            <select name="sesso" class="registerSesso" required>
                                <option value="" selected disabled hidden>Gender </option>
                                <option value="maschio">M</option>
                                <option value="femmina">F</option>
                                <option value="altro">Altro</option>
                            </select>
                        </div>
                        <div class="register-data">
                            <input type="date" name="date" id="date" placeholder="Giorno di nascita"
                                class="registerDate" required>
                        </div>
                        <div class="register-ruolo k">
                            <select name="ruolo" class="registerRuolo" required>
                                <option value="" selected disabled hidden>Role</option>
                                <option value="professore">Professore</option>
                                <option value="genitore">Genitore</option>
                                <option value="studente">Studente</option>
                            </select>
                        </div>
                        <div class="register-submit">

                            <button class="button-register2">Register</button>

                        </div>
                    </form>
                    <div class="or-div2">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="login-submit">
                        <button class="button-login2" name="button-login" onclick="showLogin()">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script/RegisterShow.js"></script>
    <script src="script/LoginShow.js"></script>
    <script src="script/check.js"></script>
</body>

</html>