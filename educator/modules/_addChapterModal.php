<?php

echo "<!-- Modal -->
    <div class='modal fade' id='addChapterModal' tabindex='-1' aria-labelledby='addChapterModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>";
                echo "<div class='modal-header'>
                    <h5 class='modal-title' id='addChapterModalLabel'>Fill Chapter Details</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>";
                echo "<div class='modal-body'>";
                    include "_addChapterForm.php";
                echo "</div>
            </div>
        </div>
    </div>";

?>