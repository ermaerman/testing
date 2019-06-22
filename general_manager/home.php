<div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Dasboard</h2>
                                        <p><i>Analysis System V 1.0.0 Cabang Bandar Lampung</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $qroyal      = "SELECT id_penjualan, id_layanan, tgl_berangkat, SUM(jml_penumpang) AS royal FROM tbl_penjualan WHERE id_layanan='1' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $qroyal)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $royal      = $result['royal'];

                                    echo $royal;
                                ?> Orang
                            </h2>
                            <p>Jumlah Penumpang<br><b>Kelas Royal</b> <i>(Hari ini)</i></p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                             <h2>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $qeks      = "SELECT id_penjualan, id_layanan, tgl_berangkat, SUM(jml_penumpang) AS eks FROM tbl_penjualan WHERE id_layanan='2' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $qeks)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $eks      = $result['eks'];

                                    echo $eks;
                                ?> Orang
                            </h2>
                            <p>Jumlah Penumpang<br><b>Kelas Eksekutif</b> <i>(Hari ini)</i></p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                           <h2>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $qbisnis      = "SELECT id_penjualan, id_layanan, tgl_berangkat, SUM(jml_penumpang) AS bisnis FROM tbl_penjualan WHERE id_layanan='3' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $qbisnis)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $bisnis      = $result['bisnis'];

                                    echo $bisnis;
                                ?> Orang
                            </h2>
                            <p>Jumlah Penumpang<br><b>Kelas Bisnis</b> <i>(Hari ini)</i></p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $qall      = "SELECT id_penjualan, id_layanan, tgl_berangkat, SUM(jml_penumpang) AS allkelas FROM tbl_penjualan WHERE tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $qall)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $allkelas      = $result['allkelas'];

                                    echo $allkelas;
                                ?> Orang
                            </h2>
                            <p>Jumlah Penumpang<br><b>Semua Kelas</b> <i>(Hari ini)</i></p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div id="container" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        $.getJSON(
                            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
                            function (data) {

                                Highcharts.chart('container', {
                                    chart: {
                                        zoomType: 'x'
                                    },
                                    title: {
                                        text: 'Grafik Penjualan <i>E-Ticketing</i> Bus DAMRI<br> Segmen Antar Kota Cabang Bandar Lampung per-Tahun'
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
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Lainnya</h2>
                            <p>Info Bus DAMRI segmen antar kota Cabang Bandar Lampung yang berjalan hari ini.</p>
                        </div>
                        <div class="dash-widget-visits"></div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $pro1      = "SELECT id_pnp_promo, id_layanan, id_promo, tgl_berangkat, SUM(jml_penumpang) AS pro1 FROM tbl_pnp_promo WHERE id_promo='1' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $pro1)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $pro1      = $result['pro1'];

                                    echo $pro1;
                                ?> Orang
                            </h3>
                            <p>Promo <b>Mudik Gratis</b> <i>(Hari ini)</i></p>
                            </div>
                           
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $pro2      = "SELECT id_pnp_promo, id_layanan, id_promo, tgl_berangkat, SUM(jml_penumpang) AS pro2 FROM tbl_pnp_promo WHERE id_promo='2' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $pro2)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $pro2      = $result['pro2'];

                                    echo $pro2;
                                ?> Orang
                            </h3>
                            <p>Promo <b>LinkAja</b> <i>(Hari ini)</i></p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3>
                                 <?php 
                                    $tgl=date('Y-m-d');
                                    $pro3      = "SELECT id_pnp_promo, id_layanan, id_promo, tgl_berangkat, SUM(jml_penumpang) AS pro3 FROM tbl_pnp_promo WHERE id_promo='3' AND tgl_berangkat='$tgl'";
                                    $query      = mysqli_query($konek, $pro3)or die(mysqli_error($konek));
                                    $result     = mysqli_fetch_assoc($query);
                                    $pro3      = $result['pro3'];

                                    echo $pro3;
                                ?> Orang
                            </h3>
                            <p>Promo <b>GoPay</b> <i>(Hari ini)</i></p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->

    <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-10">
                        <div id="container2" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        $.getJSON(
                            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
                            function (data) {

                                Highcharts.chart('container2', {
                                    chart: {
                                        zoomType: 'x'
                                    },
                                    title: {
                                        text: 'Grafik Penjualan <i>E-Ticketing</i> Bus DAMRI<br> Segmen Antar Kota Cabang Bandar Lampung'
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
                        <div id="container3" style="min-width: 310px; height: 380px; margin: 0 auto"></div>
                        <script type="text/javascript">
                        $.getJSON(
                            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
                            function (data) {

                                Highcharts.chart('container3', {
                                    chart: {
                                        zoomType: 'x'
                                    },
                                    title: {
                                        text: 'Grafik Penjualan <i>E-Ticketing</i> Bus DAMRI<br> Segmen Antar Kota Cabang Bandar Lampung'
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
    <br>
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
                                        text: 'Grafik Analisis <i>K-Means</i> Pada Penjualan <br><i>E-Ticketing</i> Bus DAMRI Segmen Antar Kota <br>Cabang Bandar Lampung'
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
                                        text: 'Grafik Analisis <i>K-Means</i> Pada Penjualan <br><i>E-Ticketing</i> Bus DAMRI Segmen Antar Kota <br>Cabang Bandar Lampung'
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
    
