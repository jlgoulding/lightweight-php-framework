<?php require('partials/head.php'); ?>

<div id="bhnft_home" class="bhnft-margin-left-space">
    <div class="d-flex justify-content-center">
        <h4 class="">On-call Dashboard homepage</h4>
    </div>
    <?php foreach ($jobs as $job) : ?>
        <?php echo $job->Attendances; ?>
    <?php endforeach; ?>

    <?php echo $job->Attendances; ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, officia eos!
        Temporibus voluptatem in eligendi rerum, porro perspiciatis eius, natus sequi
        ut magnam rem ab consequatur omnis veniam accusantium impedit.</p>

    <div>
        <canvas id="myChart" width="400" height="400"></canvas>
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    datasets: [{
                        label: '# of Votes',
                        data: [
                     
                            1,
                            9,
                            3,
                            5,
                            2,
                            3
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
</div>




<?php require('partials/footer.php'); ?>