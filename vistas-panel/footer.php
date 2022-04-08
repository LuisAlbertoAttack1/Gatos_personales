</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
        <script type="text/javascript">
    $(document).ready(function() {
        mascaraObloqueo();
    });

    function mascaraObloqueo() {
        $.blockUI({
            message: ' <img src="../img/Mascara-removebg-preview.png" width="300" height="300">',
            css: {
                border: 'none',
                // padding: '15px', 
                backgroundColor: 'rgba(138,221,45,0)',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                // opacity: .5, 
                color: '#FFFFFF '
            }
        });

        setTimeout($.unblockUI, 800);
    }
    </script>
</body>

</html>