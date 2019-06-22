<!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Grafik <i>K-Means</i></h2>
                                        <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="index.php?content=edit_user&&id_user=<?php echo $data['id_user'] ?>"><button data-toggle="tooltip" data-placement="left" title="Edit Akun" class="btn"><i class="notika-icon notika-edit"></i></button></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->

     <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-10">
                        <div id="container4" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        $.getJSON(
                            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
                            function (data) {

                                Highcharts.chart('container4', {
                                    chart: {
                                        zoomType: 'x'
                                    },
                                    title: {
                                        text: 'Grafik Analisis <i>K-Means</i> Pada Penjualan <br><i>E-Ticketing</i> Bus DAMRI Segmen Antar Kota <br>Cabang Bandar Lampung (Pagi)'
                                    },
                                    subtitle: {
                                        text: document.ontouchstart === undefined ?
                                            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                                    },
                                    xAxis: {
                                        type: 'datetime'
                                    },
                                    yAxis: {
                                        title: {
                                            text: 'Jumlah Tiket Terjual'
                                        }
                                    },
                                    legend: {
                                        enabled: false
                                    },
                                    plotOptions: {
                                        area: {
                                            fillColor: {
                                                linearGradient: {
                                                    x1: 0,
                                                    y1: 0,
                                                    x2: 0,
                                                    y2: 1
                                                },
                                                stops: [
                                                    [0, Highcharts.getOptions().colors[0]],
                                                    [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                                ]
                                            },
                                            marker: {
                                                radius: 2
                                            },
                                            lineWidth: 1,
                                            states: {
                                                hover: {
                                                    lineWidth: 1
                                                }
                                            },
                                            threshold: null
                                        }
                                    },

                                    series: [{
                                        type: 'area',
                                        name: 'Tiket',
                                        data: data
                                    }]
                                });
                            }
                        );
                    </script>
                    </div>
                </div>
          

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-10">
                        <div id="container5" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        $.getJSON(
                            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
                            function (data) {

                                Highcharts.chart('container5', {
                                    chart: {
                                        zoomType: 'x'
                                    },
                                    title: {
                                        text: 'Grafik Analisis <i>K-Means</i> Pada Penjualan <br><i>E-Ticketing</i> Bus DAMRI Segmen Antar Kota <br>Cabang Bandar Lampung (Sore)'
                                    },
                                    subtitle: {
                                        text: document.ontouchstart === undefined ?
                                            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                                    },
                                    xAxis: {
                                        type: 'datetime'
                                    },
                                    yAxis: {
                                        title: {
                                            text: 'Jumlah Tiket Terjual'
                                        }
                                    },
                                    legend: {
                                        enabled: false
                                    },
                                    plotOptions: {
                                        area: {
                                            fillColor: {
                                                linearGradient: {
                                                    x1: 0,
                                                    y1: 0,
                                                    x2: 0,
                                                    y2: 1
                                                },
                                                stops: [
                                                    [0, Highcharts.getOptions().colors[0]],
                                                    [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                                ]
                                            },
                                            marker: {
                                                radius: 2
                                            },
                                            lineWidth: 1,
                                            states: {
                                                hover: {
                                                    lineWidth: 1
                                                }
                                            },
                                            threshold: null
                                        }
                                    },

                                    series: [{
                                        type: 'area',
                                        name: 'Tiket',
                                        data: data
                                    }]
                                });
                            }
                        );
                    </script>
                    </div>
                </div>
            </div>
        </div>