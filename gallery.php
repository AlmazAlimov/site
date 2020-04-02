<style type="text/css">
    .main_block{
        height: 500px;
        padding: 10px;
        background-color:rgb(230,230,200);
    }
    .one_img{
    }
    .line {
        display: flex;
        width: 100%;
        justify-content: space-around;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .center {
        display: flex;
        justify-content: center;
        width: 100%;
    }   
    .img1{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img2{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img3{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img4{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img5{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img6{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img7{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .img8{
        background-image:url(https://studfile.net/html/2706/381/html_uEbNfUxf6A.tA8Q/htmlconvd-YyM4fl1x1.jpg);
        height: 100px;
        width: 100px;
    }
    .big_img{
        background-color:red;
        height: 100px;
        width: 100px;
    }

</style>

<div id="main" class="main_block">
    <div class="line">
        <div class="one_img img1"></div>
        <div class="one_img img2"></div>
        <div class="one_img img3"></div>
        <div class="one_img img4"></div>
    </div>
    <div id="center" class="center">

    </div>
    <div class="line">
        <div class="one_img img5"></div>
        <div class="one_img img6"></div>
        <div class="one_img img7"></div>
        <div class="one_img img8"></div>
    </div>
</div>

<script>
    function lol() {
        let gallery = document.getElementById("main");
        gallery.onclick = function(event) {
            let target = event.target;
            if (target.classList.contains('one_img')) {
                printSquare(window.getComputedStyle(target).backgroundImage);
            }
        }
    }

    function printSquare(image) {
        let div = document.createElement("div");
        div.className += "big_img";
        div.style.backgroundImage = image;
        let place = document.getElementById("center");
        place.innerHTML = "";
        place.append(div);
    }
</script>