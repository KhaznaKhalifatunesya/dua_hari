<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon.png">
  <link rel="icon" type="image/png" href="../assets/images/logos/favicon.png">
  <title>
    LaundNa
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  <style>

    .la-ball-atom,
    .la-ball-atom>div {
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .la-ball-atom {
        display: block;
        font-size: 0;
        color: #fff;
    }

    .la-ball-atom.la-dark {
        color: #333;
    }

    .la-ball-atom>div {
        display: inline-block;
        float: none;
        background-color: currentColor;
        border: 0 solid currentColor;
    }

    .la-ball-atom {
        width: 32px;
        height: 32px;
    }

    .la-ball-atom>div:nth-child(1) {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        width: 60%;
        height: 60%;
        background: #aaa;
        border-radius: 100%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-animation: ball-atom-shrink 4.5s infinite linear;
        -moz-animation: ball-atom-shrink 4.5s infinite linear;
        -o-animation: ball-atom-shrink 4.5s infinite linear;
        animation: ball-atom-shrink 4.5s infinite linear;
    }

    .la-ball-atom>div:not(:nth-child(1)) {
        position: absolute;
        left: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background: none;
        -webkit-animation: ball-atom-zindex 1.5s 0s infinite steps(2, end);
        -moz-animation: ball-atom-zindex 1.5s 0s infinite steps(2, end);
        -o-animation: ball-atom-zindex 1.5s 0s infinite steps(2, end);
        animation: ball-atom-zindex 1.5s 0s infinite steps(2, end);
    }

    .la-ball-atom>div:not(:nth-child(1)):before {
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 10px;
        margin-top: -5px;
        margin-left: -5px;
        content: "";
        background: currentColor;
        border-radius: 50%;
        opacity: .75;
        -webkit-animation: ball-atom-position 1.5s 0s infinite ease, ball-atom-size 1.5s 0s infinite ease;
        -moz-animation: ball-atom-position 1.5s 0s infinite ease, ball-atom-size 1.5s 0s infinite ease;
        -o-animation: ball-atom-position 1.5s 0s infinite ease, ball-atom-size 1.5s 0s infinite ease;
        animation: ball-atom-position 1.5s 0s infinite ease, ball-atom-size 1.5s 0s infinite ease;
    }

    .la-ball-atom>div:nth-child(2) {
        -webkit-animation-delay: .75s;
        -moz-animation-delay: .75s;
        -o-animation-delay: .75s;
        animation-delay: .75s;
    }

    .la-ball-atom>div:nth-child(2):before {
        -webkit-animation-delay: 0s, -1.125s;
        -moz-animation-delay: 0s, -1.125s;
        -o-animation-delay: 0s, -1.125s;
        animation-delay: 0s, -1.125s;
    }

    .la-ball-atom>div:nth-child(3) {
        -webkit-transform: rotate(120deg);
        -moz-transform: rotate(120deg);
        -ms-transform: rotate(120deg);
        -o-transform: rotate(120deg);
        transform: rotate(120deg);
        -webkit-animation-delay: -.25s;
        -moz-animation-delay: -.25s;
        -o-animation-delay: -.25s;
        animation-delay: -.25s;
    }

    .la-ball-atom>div:nth-child(3):before {
        -webkit-animation-delay: -1s, -.75s;
        -moz-animation-delay: -1s, -.75s;
        -o-animation-delay: -1s, -.75s;
        animation-delay: -1s, -.75s;
    }

    .la-ball-atom>div:nth-child(4) {
        -webkit-transform: rotate(240deg);
        -moz-transform: rotate(240deg);
        -ms-transform: rotate(240deg);
        -o-transform: rotate(240deg);
        transform: rotate(240deg);
        -webkit-animation-delay: .25s;
        -moz-animation-delay: .25s;
        -o-animation-delay: .25s;
        animation-delay: .25s;
    }

    .la-ball-atom>div:nth-child(4):before {
        -webkit-animation-delay: -.5s, -.125s;
        -moz-animation-delay: -.5s, -.125s;
        -o-animation-delay: -.5s, -.125s;
        animation-delay: -.5s, -.125s;
    }

    .la-ball-atom.la-sm {
        width: 16px;
        height: 16px;
    }

    .la-ball-atom.la-sm>div:not(:nth-child(1)):before {
        width: 4px;
        height: 4px;
        margin-top: -2px;
        margin-left: -2px;
    }

    .la-ball-atom.la-2x {
        width: 64px;
        height: 64px;
    }

    .la-ball-atom.la-2x>div:not(:nth-child(1)):before {
        width: 20px;
        height: 20px;
        margin-top: -10px;
        margin-left: -10px;
    }

    .la-ball-atom.la-3x {
        width: 96px;
        height: 96px;
    }

    .la-ball-atom.la-3x>div:not(:nth-child(1)):before {
        width: 30px;
        height: 30px;
        margin-top: -15px;
        margin-left: -15px;
    }

    /*
 * Animations
 */
    @-webkit-keyframes ball-atom-position {
        50% {
            top: 100%;
            left: 100%;
        }
    }

    @-moz-keyframes ball-atom-position {
        50% {
            top: 100%;
            left: 100%;
        }
    }

    @-o-keyframes ball-atom-position {
        50% {
            top: 100%;
            left: 100%;
        }
    }

    @keyframes ball-atom-position {
        50% {
            top: 100%;
            left: 100%;
        }
    }

    @-webkit-keyframes ball-atom-size {
        50% {
            -webkit-transform: scale(.5, .5);
            transform: scale(.5, .5);
        }
    }

    @-moz-keyframes ball-atom-size {
        50% {
            -moz-transform: scale(.5, .5);
            transform: scale(.5, .5);
        }
    }

    @-o-keyframes ball-atom-size {
        50% {
            -o-transform: scale(.5, .5);
            transform: scale(.5, .5);
        }
    }

    @keyframes ball-atom-size {
        50% {
            -webkit-transform: scale(.5, .5);
            -moz-transform: scale(.5, .5);
            -o-transform: scale(.5, .5);
            transform: scale(.5, .5);
        }
    }

    @-webkit-keyframes ball-atom-zindex {
        50% {
            z-index: 10;
        }
    }

    @-moz-keyframes ball-atom-zindex {
        50% {
            z-index: 10;
        }
    }

    @-o-keyframes ball-atom-zindex {
        50% {
            z-index: 10;
        }
    }

    @keyframes ball-atom-zindex {
        50% {
            z-index: 10;
        }
    }

    @-webkit-keyframes ball-atom-shrink {
        50% {
            -webkit-transform: translate(-50%, -50%) scale(.8, .8);
            transform: translate(-50%, -50%) scale(.8, .8);
        }
    }

    @-moz-keyframes ball-atom-shrink {
        50% {
            -moz-transform: translate(-50%, -50%) scale(.8, .8);
            transform: translate(-50%, -50%) scale(.8, .8);
        }
    }

    @-o-keyframes ball-atom-shrink {
        50% {
            -o-transform: translate(-50%, -50%) scale(.8, .8);
            transform: translate(-50%, -50%) scale(.8, .8);
        }
    }

    @keyframes ball-atom-shrink {
        50% {
            -webkit-transform: translate(-50%, -50%) scale(.8, .8);
            -moz-transform: translate(-50%, -50%) scale(.8, .8);
            -o-transform: translate(-50%, -50%) scale(.8, .8);
            transform: translate(-50%, -50%) scale(.8, .8);
        }
    }

    /* Loading indicator styles */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        /* Semi-transparent black overlay */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        /* Make sure the loading overlay appears on top of other content */
    }

</style>
  @livewireStyles
  @stack('css')

</head>

<body>
    <x-load />
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <x-sidebar />
    <div class="body-wrapper" style="background-color: #509fb5">


    <!-- Navbar -->
    <x-navbar />
    <!-- End Navbar -->
        <div class="container-fluid">
        @yield('content')
        </div>

  @livewireScripts
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>

  <!-- Script template -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>

    <script>
        window.addEventListener('load', function() {
            var loadingOverlay = document.getElementById('loading-overlay');
            if (loadingOverlay) {
                loadingOverlay.style.display = 'none';
            }
        });
    </script>
    @livewireScripts
    @stack('js')
</body>

</html>
