<!--   Core JS Files   -->
<script src="<?= base_url('assets/js/') ?>core/popper.min.js"></script>
<script src="<?= base_url('assets/js/') ?>core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/js/') ?>plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/js/') ?>plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url('assets/js/') ?>plugins/chartjs.min.js"></script>

<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
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
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
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
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
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
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/js/') ?>argon-dashboard.min.js?v=2.0.4"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- DataTables Bootstrap 4 Integration JS -->
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-- DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $("#proposal").DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            dom: '<"top"lBf>rt<"bottom"ip><"clear">',
            buttons: [{
                    extend: 'copy',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.copyHtml5.action.call(this, e, dt, button, config);
                        toastr.success('Data copied to clipboard');
                    }
                },
                {
                    extend: 'csv',
                    text: 'CSV',
                    titleAttr: 'Export as CSV',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, button, config);
                        toastr.success('CSV file created');
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    titleAttr: 'Export as Excel',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
                        toastr.success('Excel file created');
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    titleAttr: 'Export as PDF',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, button, config);
                        toastr.success('PDF file created');
                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                        toastr.success('Print dialog opened');
                    }
                }
            ]
        });

        // Customize Toastr options
        toastr.options = {
            closeButton: true,
            debug: false,
            progressBar: true,
            positionClass: 'toast-top-right',
            onclick: null,
            showDuration: '300',
            hideDuration: '1000',
            timeOut: '5000',
            extendedTimeOut: '1000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut'
        };
    });

    $(document).ready(function() {
        var table = $("#penerapan").DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            dom: '<"top"lBf>rt<"bottom"ip><"clear">',
            buttons: [{
                    extend: 'copy',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.copyHtml5.action.call(this, e, dt, button, config);
                        toastr.success('Data copied to clipboard');
                    }
                },
                {
                    extend: 'csv',
                    text: 'CSV',
                    titleAttr: 'Export as CSV',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, button, config);
                        toastr.success('CSV file created');
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    titleAttr: 'Export as Excel',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
                        toastr.success('Excel file created');
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    titleAttr: 'Export as PDF',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, button, config);
                        toastr.success('PDF file created');
                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    action: function(e, dt, button, config) {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                        toastr.success('Print dialog opened');
                    }
                }
            ]
        });

        // Customize Toastr options
        toastr.options = {
            closeButton: true,
            debug: false,
            progressBar: true,
            positionClass: 'toast-top-right',
            onclick: null,
            showDuration: '300',
            hideDuration: '1000',
            timeOut: '5000',
            extendedTimeOut: '1000',
            showEasing: 'swing',
            hideEasing: 'linear',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut'
        };
    });
</script>