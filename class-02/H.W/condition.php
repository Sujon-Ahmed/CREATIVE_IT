<?php
// your mark value
$mark = 110;
// condition for grading point
if($mark > 100){
    echo "🙄 Your mark is out of 100!";
}elseif($mark <= 100 && $mark >= 80) {
    echo "🎉 Congratulation You got : (A+)";
}elseif($mark <= 79 && $mark >= 70) {
    echo "🙂 You got : (A)";
}elseif($mark <= 69 && $mark >= 60) {
    echo "👍 You got : ( A-)";
}elseif($mark <= 59 && $mark >= 50) {
    echo "😯 You got : (B)";
}elseif($mark <= 49 && $mark >= 40) {
    echo "😕 You got : (C)";
}elseif($mark <= 39 && $mark >= 33) {
    echo "😔 You got : (D)";
}else {
    echo "😥 OPPs You're Failed!";
}