<style>
    .small-image {
        height: 100px!important;
        width: 100px!important;
        cursor: pointer;
    }
</style>

<div class="ml-5" style="height: 400px; width: 600px!important;">
    <img src="{{ asset('assets/img/n1.jpg') }}" id="mainImage" alt="" class="img-fluid h-100" />
</div>
<div class="ml-5 mt-2">
    <img src="{{ asset('assets/img/n1.jpg') }}" alt="42" class="small-image mr-2" id="smallImage1" />
    <img src="{{ asset('assets/img/n2.jpg') }}" alt="" class="small-image mr-2" id="smallImage2" />
    <img src="{{ asset('assets/img/n4.jpg') }}" alt="" class="small-image mr-2" id="smallImage3" />
    <img src="{{ asset('assets/img/xxx.jpg') }}" alt="" class="small-image mr-2" id="smallImage4" />
</div>


<script>
    var mainImage = document.getElementById('mainImage');

    var smallImage1 = document.getElementById('smallImage1');
    smallImage1.onclick = function () {
        var imgUrl = smallImage1.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }

    var smallImage2 = document.getElementById('smallImage2');
    smallImage2.onclick = function () {
        var imgUrl = smallImage2.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }

    var smallImage3 = document.getElementById('smallImage3');
    smallImage3.onclick = function () {
        var imgUrl = smallImage3.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }

    var smallImage4 = document.getElementById('smallImage4');
    smallImage4.onclick = function () {
        var imgUrl = smallImage4.getAttribute('src');
        mainImage.setAttribute('src', imgUrl);
    }
</script>
