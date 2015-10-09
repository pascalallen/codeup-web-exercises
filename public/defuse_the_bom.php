<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>

        var detonationTimer = 5;

        var interval = 1000;

        var countdown = setInterval(function(){
            updateTimer();
        }, interval);

        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }

        function defuseTheBOM()
        {
            clearInterval(countdown);
        }

        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
        
    </script>
</body>
</html>
