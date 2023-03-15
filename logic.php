<?php
// Validation logic for a simple voting system.
if ($voter < 18 ) {
    echo "You are not eligible to vote, Age but must be 18 and above";
}
else if($pvc_status == false) {
    echo "You are not eligible to vote, PVC is required";
}
else if(ward != "020") {
    echo "You are not eligible to vote. Ward must be 020."
}
else{
    echo "You are eligible to vote";
}
?>