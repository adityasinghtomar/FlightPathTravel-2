@include('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="row y-gap-30">

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-15 custom_border_left_blue custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total Hotel Revenue</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_blue">₹{{  $total_hotel_amount }}</div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="{{ asset('public/img/dashboard/icons/arrow-1.png') }}" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_oreng custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total Flight Booking </div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_oreng"> ₹{{ $total_flight_amount2 }}</div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="img/dashboard/icons/arrow-2.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_sky custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total Cancel Revenue</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_sky"> ₹{{ $total_flight_amount1 }}</div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_red">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="img/dashboard/icons/arrow-3.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_green custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total Flight Ravenue</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_green">
                     ₹{{ $total_flight_amount }}
                      </div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="img/dashboard/icons/arrow-4.png" alt="icon">
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_green custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">total Hotal hits</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_blue">
                     {{ $hotel_log }}
                      </div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="{{ asset('public/images/flex/tbo.png') }}" style="height:80px;" alt="icon">
                </div>
              </div>
            </div>
          </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_green custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total Flight Hits</div>
                  <div class="text-30 lh-16 fw-600 mt-5 " style="color:#ba7e0b;">
                     {{ $flight_log }}
                      </div>
                  <!--<div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>-->
                </div>

                <div class="col-md-6">
                  <img src="{{ asset('public/images/flex/tbo.png') }}" style="height:80px;" alt="icon">
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row y-gap-30 pt-20">
          <!--<div class="col-xl-6 col-md-6">-->
          <!--  <div class="py-30 px-30 custom_rounded bg-white custom_shadow">-->
          <!--    <div class="d-flex justify-between items-center heading_border">-->
          <!--      <h2 class="text-18 lh-1 fw-500">-->
          <!--        Expense overview-->
          <!--      </h2>-->
          <!--    </div>-->

          <!--    <div class="pt-30"> -->
          <!--      <canvas id="lineChart"></canvas>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
             <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
             

          <div id="container1" style="width:100%; height:400px;"></div>
            </div>
          </div>
        <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
             

          <div id="container" style="width:100%; height:400px;"></div>
            </div>
          </div>
           <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
             

          <div id="container2" style="width:100%; height:400px;"></div>
            </div>
          </div>
           <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
             

          <div id="container3" style="width:100%; height:400px;"></div>
            </div>
          </div>
           <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  Top Ten City
                </h2>
              </div>

<style>
    .tables tr td{
      padding:15px;
    font-size: 15px;
    border-bottom: 1px solid #dfdfdf;
    }
</style>
              <div class="overflow-scroll scroll-bar-1">
                <table id="example1" class="display nowrap tables" style="width:100%">
                  <thead class="">
                    <tr style="border-bottom:1px solid #dfdfdf; background: #ebebeb;">
                      <th>Sl no.</th>
                      <th> City</th>
                    <th> Total Visit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php  $i=1; ?>
              @foreach($top_10_flight_data as $row)
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td>{{ $row->origin }}</td>
                      <td>{{ $row->count }}</td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    @endforeach
                    
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  My Flight bookings
                </h2>
              </div>

              <div class="overflow-scroll scroll-bar-1">
                <table id="example" class="display nowrap" style="width:100%">
                  <thead class="">
                    <tr>
                      <th>Sl no.</th>
                      <th>Booking ID</th>
                      <th>PNR No.</th>
                      <th>Booking amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                @if(isset($flight_data1))    
                <?php $i=1; ?>
                    @foreach($flight_data1 as $flight_datas)       
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php print_r($flight_datas->booking_id);?></td>
                      <td><?php print_r($flight_datas->pnr_no);?></td>
                      <td><?php print_r($flight_datas->amount);?></td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3"></div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <?php $i++;?>
                   @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        <style>
  
#container{
  margin: 0 auto;
  padding-top: 2%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
 <script>
$(function () {
    Highcharts.setOptions({
        colors: ['#67BCE6'],
        chart: {
            style: {
                fontFamily: 'sans-serif',
                color: '#fff'
            }
        }
    });

    // Assuming you're passing aggregated flight revenue data from the backend
    var flightRevenueData = {!! json_encode($flight_revenue_by_month) !!};

    $('#container1').highcharts({
        chart: {
            type: 'column',
            backgroundColor: '#36394B'
        },
        title: {
            text: 'Flight Monthly Revenue',
            style: {
                color: '#fff'
            }
        },
        xAxis: {
            tickWidth: 0,
            labels: {
                style: {
                    color: '#fff',
                }
            },
            categories: Object.keys(flightRevenueData)
        },
        yAxis: {
            gridLineWidth: .5,
            gridLineDashStyle: 'dash',
            gridLineColor: 'black',
            title: {
                text: '',
                style: {
                    color: '#fff'
                }
            },
            labels: {
                formatter: function () {
                    return '₹' + Highcharts.numberFormat(this.value, 0, '', ',');
                },
                style: {
                    color: '#fff',
                }
            }
        },
        legend: {
            enabled: false,
        },
        credits: {
            enabled: false
        },
        tooltip: {
            valuePrefix: '₹'
        },
        plotOptions: {
            column: {
                borderRadius: 2,
                pointPadding: 0,
                groupPadding: 0.1
            }
        },
        series: [{
            name: 'Flight Revenue',
            data: Object.values(flightRevenueData)
        }]
    });
});
</script>
<script>
$(function () {
    Highcharts.setOptions({
        colors: ['#E667AF'],
        chart: {
            style: {
                fontFamily: 'sans-serif',
                color: '#fff'
            }
        }
    });

    // Assuming you're passing aggregated hotel revenue data from the backend
    var hotelRevenueData = {!! json_encode($hotel_revenue_by_month) !!};

    $('#container').highcharts({
        chart: {
            type: 'column',
            backgroundColor: '#36394B'
        },
        title: {
            text: 'Hotel Monthly Revenue',
            style: {
                color: '#fff'
            }
        },
        xAxis: {
            tickWidth: 0,
            labels: {
                style: {
                    color: '#fff',
                }
            },
            categories: Object.keys(hotelRevenueData)
        },
        yAxis: {
            gridLineWidth: .5,
            gridLineDashStyle: 'dash',
            gridLineColor: 'black',
            title: {
                text: '',
                style: {
                    color: '#fff'
                }
            },
            labels: {
                formatter: function () {
                    return '₹' + Highcharts.numberFormat(this.value, 0, '', ',');
                },
                style: {
                    color: '#fff',
                }
            }
        },
        legend: {
            enabled: false,
        },
        credits: {
            enabled: false
        },
        tooltip: {
            valuePrefix: '₹'
        },
        plotOptions: {
            column: {
                borderRadius: 2,
                pointPadding: 0,
                groupPadding: 0.1
            }
        },
        series: [{
            name: 'Hotel Revenue',
            data: Object.values(hotelRevenueData)
        }]
    });
});
</script>
 <script>
        $(function () {
            // Assuming you're passing aggregated flight revenue data from the backend
            var flightLogData = {!! json_encode($flightLogByMonth) !!};

            $('#container2').highcharts({
                chart: {
                    type: 'column',
                    backgroundColor: '#36394B'
                },
                title: {
                    text: 'Flight Monthly Hit',
                    style: {
                        color: '#fff'
                    }
                },
                xAxis: {
                    tickWidth: 0,
                    labels: {
                        style: {
                            color: '#fff',
                        }
                    },
                    categories: Object.keys(flightLogData)
                },
                yAxis: {
                    gridLineWidth: .5,
                    gridLineDashStyle: 'dash',
                    gridLineColor: 'black',
                    title: {
                        text: '',
                        style: {
                            color: '#fff'
                        }
                    },
                    labels: {
                        formatter: function () {
                            return Highcharts.numberFormat(this.value, 0, '', ',');
                        },
                        style: {
                            color: '#fff',
                        }
                    }
                },
                legend: {
                    enabled: false,
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    column: {
                        borderRadius: 2,
                        pointPadding: 0,
                        groupPadding: 0.1
                    }
                },
                series: [{
                    name: 'Flight Hits',
                    data: Object.values(flightLogData)
                }]
            });
        });
    </script>
    <script>
        $(function () {
            // Assuming you're passing aggregated flight revenue data from the backend
            var HotelLogData = {!! json_encode($HotelLogByMonth) !!};

            $('#container3').highcharts({
                chart: {
                    type: 'column',
                    backgroundColor: '#36394B'
                },
                title: {
                    text: 'Hotel Monthly Hit',
                    style: {
                        color: '#fff'
                    }
                },
                xAxis: {
                    tickWidth: 0,
                    labels: {
                        style: {
                            color: '#fff',
                        }
                    },
                    categories: Object.keys(HotelLogData)
                },
                yAxis: {
                    gridLineWidth: .5,
                    gridLineDashStyle: 'dash',
                    gridLineColor: 'black',
                    title: {
                        text: '',
                        style: {
                            color: '#fff'
                        }
                    },
                    labels: {
                        formatter: function () {
                            return Highcharts.numberFormat(this.value, 0, '', ',');
                        },
                        style: {
                            color: '#fff',
                        }
                    }
                },
                legend: {
                    enabled: false,
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    column: {
                        borderRadius: 2,
                        pointPadding: 0,
                        groupPadding: 0.1
                    }
                },
                series: [{
                    name: 'Flight Hits',
                    data: Object.values(HotelLogData)
                }]
            });
        });
    </script>

        <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"  rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"  rel="stylesheet" type="text/css">

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable( {
      searching: true,
      info : true,
    paging: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>
@include('flight.admin.db-footer')