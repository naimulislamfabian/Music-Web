<script>
    function eyeFunction() {
        var y = document.getElementById('eyeButton');
        var x = document.getElementById('passwordField');
        if (x.type === "password") {
            x.type = "text";
            y.setAttribute("src", "img/eye_off.png");
        } else {
            x.type = "password";
            y.setAttribute("src", "img/eye_on.png");
        }
    }

    function dropfunc() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        var ppBox = document.getElementById("ppBox");
        dropdownMenu.style.display = "block";
        ppBox.setAttribute("onclick", "dropfunctwo()");

    }

    function dropfunctwo() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        var ppBox = document.getElementById("ppBox");
        dropdownMenu.style.display = "none";
        ppBox.setAttribute("onclick", "dropfunc()");

    }

    function playfunc(postid) {
        var mainpost = document.getElementById(postid);
        //var playButton = document.getElementClassName(play-pause);
        var postvalue = mainpost.getAttribute('data-val');
        var player = document.getElementById("audioplayer");
        //playButton.setAttribute("src", "img/pause.png");
        player.setAttribute("src", "files/" + postvalue + ".mp3");
        mainpost.setAttribute("src", "img/pause.png");
        mainpost.setAttribute("onclick", "pausefunc(" + postid + ")");
        player.play();




    }

    function pausefunc(postid) {
        var mainpost = document.getElementById(postid);
        var postvalue = mainpost.getAttribute('data-val');
        var player = document.getElementById("audioplayer");
        player.setAttribute("src", "");
        mainpost.setAttribute("src", "img/play.png");
        mainpost.setAttribute("onclick", "playfunc(" + postid + ")");
        player.pause();

    }

    const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');

    buttonRight.onclick = function() {
        document.getElementById('containerss').scrollLeft += 655;
    };
    buttonLeft.onclick = function() {
        document.getElementById('containerss').scrollLeft -= 655;
    };
</script>
</body>

</html>