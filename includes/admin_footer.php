    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>
            Copyright &copy; <?php echo date("Y"); ?>
            <a href="">BMN BBKSDA PAPUA</a>.
        </strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/adminlte.min.js"></script>

    <!-- CUSTOM SCRIPT -->
    <?php echo $customJs ?? '' ?>
    <?php echo $bodyJs ?? '' ?>

    <script>
    // Auto hide alert after 3 detik
    setTimeout(() => {
        document.querySelectorAll('.custom-alert').forEach(el => {
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 500);
        });
    }, 3000);
    </script>
    </body>

    </html>