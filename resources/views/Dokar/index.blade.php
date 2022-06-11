<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/homestyle.css">
    <link rel="stylesheet" href="/css/FF.css">
    <link rel="stylesheet" href="/css/cdn.css">
    <title>Dokar Grobog</title>
</head>

<body>
    @include('Dokar.Header.index')
    <main>
        <div class="container mb-4">
            @yield('constrain')
        </div>
    </main>

    @include('Dokar.footer.index')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="/js/unpkg.js"></script>
    <script>
        Vue.createApp({
            data() {
                return {
                    showItems: false,
                }
            }
        }).mount('body')
    </script>
    <script>
        const alert = document.querySelector('.alert');

        function hapus() {
            alert.style.opacity = 0;
        }
        close.onclick = hapus;
        alert.inne
    </script>
</body>


</html>
