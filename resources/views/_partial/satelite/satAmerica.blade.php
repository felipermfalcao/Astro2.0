<div class="col-md-12 text-center pb-2">

    <form action="{{route('satelite')}}/{{$sat}}" method="get">
        <input type="date" id="data" name="data" style="height: 50px; width: 200px;">
        <input type="submit" style="height: 50px;">
    </form>
    <img class="slide img-fluid pt-3">
</div>

<div class="col-md-12 text-center">
    <img class="img-fluid" src="{{$dadosTempo[0]->base64}}"/>
</div>


<script type="text/javascript">
    var currentImage = 0,
        images = [

            <?php
                $numeroImgMomento = $dadosTempo;
                $numero = count($numeroImgMomento) - 1;
                for ($i=$numero; $i>1; $i--) {
                ?>
                "<?php echo $dadosTempo[$i]->base64; ?>",

            <?php
            }
            ?>
        ];

    function initSlideshow() {
        setImage(0);
        setInterval(function(){
            nextImage();
        },300);
    }

    function nextImage() {
        if(images.length === currentImage + 1){
            currentImage = 0;
        } else {
            currentImage++;
        }
        setImage(currentImage);
    }

    function setImage(image) {
        document.querySelectorAll('.slide')[0].src = images[image];
    }

    window.onload = initSlideshow();
</script>
