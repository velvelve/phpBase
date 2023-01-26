
<?php
    $question = "In what year did Adoption of Orthodoxy occur?\n";
    $options = array("810", "990", "740");
    $answer = "990";
    while (true) {
        echo $question;
        $index = 1;
        foreach($options as $option){
            echo "$index) $option\n";
            $index++;
        }
        $user_answer = trim(readline());
        if (!in_array($user_answer, $options)) {
            echo "Invalid option. Please select one of the options provided.\n";
        } else {
            if ($user_answer == $answer) {
                echo "Congratulations! You have correctly answered the question!\n";
                break;
            } else {
                echo "Incorrect answer. The correct answer is $answer.\n";
                break;
            }
        }
    }
?>