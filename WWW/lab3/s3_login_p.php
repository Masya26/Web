<?php
            $a = ["Алмас", "Бикбулатов", "ПИ", "admin"];

            $passed = false;
            $user_name = $_POST["userName"];

                for ($c = 0; $c < count($a); $c++){
                    if ($user_name == $a[$c]){
                        echo "Здравствуйте, $a[$c]!";
                        $passed = true;
                        break;
                    }
                }

                if (!$passed){
                    echo "Вы, собственно, кто?";
                }

        ?>
