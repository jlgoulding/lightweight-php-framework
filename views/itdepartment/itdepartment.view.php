<?php require('./views/partials/head.php'); ?>

<div id="information" classname="bhnft-margin-left-space">
    <div class="">
        <h1 class="d-flex justify-content-center">Information Dashboard</h1>
        <p class="d-flex justify-content-center"> last update : 02-11-2020</p>
    </div>

    <div class="d-flex justify-content-center bhnft-margin-left-space">
        <div class="card-wrapper d-flex flex-wrap justify-content-between">

            <div class="card">
                <div class="card-head d-flex justify-content-center">
                    <h3>Servers RAM Util</h3>
                </div>
                <div class="card-body">
                    <h4>heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione autem molestiae cupiditate totam
                        officia
                        facilis nemo optio tenetur commodi. Nostrum a, aspernatur quidem consequuntur possimus natus at
                        dignissimos
                        doloremque perferendis!</p>
                    <a href="/oncall/ramStatus" class="btn bhnft-btn-outline stretched-link float-right">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-head d-flex justify-content-center">
                    <h3>Servers Volume Util</h3>
                </div>
                <div class="card-body">
                    <h4>heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione autem molestiae cupiditate totam
                        officia
                        facilis nemo optio tenetur commodi. Nostrum a, aspernatur quidem consequuntur possimus natus at
                        dignissimos
                        doloremque perferendis!</p>
                    <a href="/oncall/volumestatus" class="btn bhnft-btn-outline stretched-link float-right">Read more</a>
                </div>
            </div>



        </div>
    </div>
</div>




<?php require('./views/partials/footer.php'); ?>