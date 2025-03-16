<footer class="footer">
          <div class="container-fluid d-flex justify-content-center">
            <div class="copyright">
              2025, made with by
              <a href="https://github.com/pattrawutpem">Pattrawut Pota</a>
            </div>
          </div>
        </footer>
</div>
</div>
<!-- Fonts and icons -->
<script src="assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["assets/css/fonts.min.css"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
</script>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/core/jquery-3.7.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
<!-- jQuery Scrollbar -->
<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'); ?>"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('assets/js/plugin/chart.js/chart.min.js'); ?>"></script>
<!-- jQuery Sparkline -->
<script src="<?php echo base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')?>"></script>
<!-- Chart Circle -->
<script src="<?php echo base_url('assets/js/plugin/chart-circle/circles.min.js')?>"></script>
<!-- Datatables -->
<script src="<?php echo base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>
<!-- Bootstrap Notify -->
<script src="<?php echo base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>
<!-- jQuery Vector Maps -->
<script src="<?php echo base_url('assets/js/plugin/jsvectormap/jsvectormap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/jsvectormap/world.js') ?>"></script>
<!-- Sweet Alert -->
<script src="<?php echo base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>
<!-- Kaiadmin JS -->
<script src="<?php echo base_url('assets/js/kaiadmin.min.js') ?>"></script>
<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/js/kaiadmin.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>

<!-- show select image -->
<script>
  function previewImage() {
    var file = document.getElementById("user_img").files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        var imagePreview = document.getElementById("preview");
        imagePreview.src = reader.result;
        imagePreview.style.display = "block";  
    }

    if (file) {
        reader.readAsDataURL(file); 
    } else {
        imagePreview.src = "";
        imagePreview.style.display = "none";
    }
}
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-user');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                if (confirm('คุณต้องการลบผู้ใช้คนนี้หรือไม่?')) {
                    fetch('/deleteU/' + userId, {
                        method: 'POST',
                    }).then(response => {
                        if (response.ok) {
                            window.location.reload(); 
                        } else {
                            alert('เกิดข้อผิดพลาดในการลบผู้ใช้');
                        }
                    });
                }
            });
        });
    });
</script>
<script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script>
<!-- DataTable -->
<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});
    });
</script>
<!-- Chart -->
<script>
    var pieChart = document.getElementById("pieChart").getContext("2d")
    var myPieChart = new Chart(pieChart, {
        type: "pie",
        data: {
          datasets: [
            {
              data: [50, 35, 15],
              backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
              borderWidth: 0,
            },
          ],
          labels: ["New Visitors", "Subscribers", "Active Users"],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: "bottom",
            labels: {
              fontColor: "rgb(154, 154, 154)",
              fontSize: 11,
              usePointStyle: true,
              padding: 20,
            },
          },
          pieceLabel: {
            render: "percentage",
            fontColor: "white",
            fontSize: 14,
          },
          tooltips: false,
          layout: {
            padding: {
              left: 20,
              right: 20,
              top: 20,
              bottom: 20,
            },
          },
        },
      });
</script>
</body>

</html>