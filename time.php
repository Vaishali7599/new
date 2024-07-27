<?php
function isPalindrome($number) {
  $reverse = strrev($number); // Reverse the given number

  // Check if the reversed number is equal to the original number
  if ($number == $reverse) {
    return true;
  } else {
    return false;
  }
}

// Example usage
$number = 12321;
if (isPalindrome(strval($number))) {
  echo "The number $number is a palindrome.";
} else {
  echo "The number $number is not a palindrome.";
}
?>
