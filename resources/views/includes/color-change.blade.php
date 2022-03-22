<div id="xyz">
    <h1 id="headingTag" class="text-center">hello world</h1>
</div>

<div class="py-5">
    <ul class="nav">
        <li class="nav-item"><a href="" id="colorRed" class="btn btn-danger mr-2 nav-link">red</a></li>
        <li><a href="" id="colorGreen" class="btn btn-success mr-2 nav-link">Green</a></li>
        <li><a href="" id="colorGray" class="btn btn-secondary mr-2 nav-link">Gray</a></li>
        <li><a href="" id="colorBlack" class="btn btn-dark mr-2 nav-link">Black</a></li>
    </ul>
    <div id="box" class="mt-3" style="height: 300px; width: 300px; border: 1px solid orange"></div>
</div>

<script>

    var btnRed = document.getElementById('colorRed');
    btnRed.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'red';
    }

    var btnGreen = document.getElementById('colorGreen');
    btnGreen.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'green';
    }

    var btnGray = document.getElementById('colorGray');
    btnGray.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'gray';
    }

    var btnBlack = document.getElementById('colorBlack');
    btnBlack.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.style.backgroundColor = 'black';
    }

</script>



<script>
    var heading = document.getElementById('headingTag');
    var xyz = document.getElementById('xyz');

    heading.onclick = function () {
        heading.innerText = 'Hello BITM';
        heading.style.color = 'green';
        // xyz.innerHTML = 'Hello BITM';
    }

    heading.onmouseover = function () {
        heading.style.color = 'red';
    }

    heading.onmouseleave = function () {
        heading.style.color = 'black';
    }

</script>
