<footer id="footerId">
    <div class="footer-base row align-items-center  text-center  justify-content-center flex-column flex-md-row">
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="/">Главная</a>
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="">Услуги</a>
        <a class="nav-link {!!Request::is('/') ? 'active' : '' !!}" href="">О нас</a>
        <a class="nav-link {!!Request::is('') ? 'active' : '' !!}" href="">Контакты</a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@yield('js')

</body>
</html>
