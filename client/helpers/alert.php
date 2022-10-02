<?php
    function alert_box(string $message) {
        $id = rand(0, 1000000);
        echo "
            <div id='alert_box_".$id."' class='alert_box'>
                <p>".$message."!</p>
                <div class='alert_progress'></div>
            </div>

            <script>
                setTimeout(
                    function() {
                        note = document.getElementById('alert_box_".$id."');
                        note.style.display = 'none';
                    },
                    5000
                );
            </script>
        ";
    }
?>