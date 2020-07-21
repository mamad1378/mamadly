<!DOCTYPE html>
<html lang="en">
<head>
        <!-- bootstrap css link -->
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" >
        <script src="https://kit.fontawesome.com/27da73b380.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/main.css">
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>

    <style>
    </style>

</head>
<body>
    <!-- Side navigation -->
    <div class="sidenav border-right d-flex flex-wrap align-content-center">
        <div class="fixed-top">
            <a href="#" class="feedly-link"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX///8rskwnsUkisEYgsEUSrj4br0IWrkD7/vzt+PAArDgLrTvy+vT2/Pc3tlYztVNEumDo9uu648OR059LvGVUvmzL6tLi9Oax4LuN0ZtxyIRewXQ+uFuEzpTV7tuk27Ca16d9zI7G6M1pxX1kw3mo3LN3yYjU7tm/5civ37m34sFS9WjOAAAKEElEQVR4nO2d2XqiQBCFoQFRcY9LXEKMMaPm/R9wQKOBZqs+9IL5OBdzNSP8U9VbdVVhWa1atWrVqlWrVq1atWr1VApf19vJ2B7vFh+Xk+mXka/TmxP4rsOYzRhz/cD9WJp+JamaLQLXTssN5q9d0+8lS+HCY3ZWzJscTL+aHL318/iujP3NHzDjdO4X8MXqTFamX7CuwpFTAmjbjv3k0+qyU+ShD0/1nxpxWTgEk4PxideNQ6UFr4idp51SaYAx4tn0q2I6EFz0R/2nRDx7VL5Iwcz064rrTHTRH/nfpl9YVOfcjVqJvCdDPPfF+CL1nwpxJjIGH1Z8Nf3adM18QRd9NsRZgPBFCp4E8Vt8DN7Vv5h+eYq+y05LVfKeAPEVmWQSiF+mAar0irvoTf2GI17QSeZXQaMRL3XG4F3eu2mMYkmwYKygsYhfdcfgXf2GIn7Vm0WTaqajvssDjBD3pnGyepczBu8K9qaBeEkGbB6iVBe9qVmOupcPGCG+mMb61V7WMpFW0BhEJRaM1RQrKgNsCuKLOsAIcW0aLwKUvUykFRhHVGrBWKatqBwwQnwzCbhW66LmEdfqLWgWEQF0OuX3+o1CfAMAg8+vTSAeEPc+jACKj0HWiW9fTmNxM5pABCzIWHj9p70dnwLWREQA0LHv2UGDefMRPwDA8fTxz4cI4r8nArSs7qLTaEQAkNnT1E8giL42R/2HAPIZehDiprGAzjibgtjdNhURGoO5OZYNRfwnfvlSANhQR90AgNwkk0QUXzT8z+YBjooAI8SJ+AZOLSLkor2SH+zZ4ttwX2FyuGQLxgqBw5Q6K37KB7SsF/GhaPtHJXxdBHBX5qJXfSEX4/5RgaNCgKNKQGsDuKkaxKMSC1pLMJbV2Urm624RwEHl7/ZcKMfviijVil3IgtWA0xEKGCMODQNOCIA7aBA+EOVZEdgiuwTAXkXFUCXiQhIfcsxxJ9UuNLXrAcaIUhx1qAhwVdOCV0QZYxE54rhzyiRTHzC2Yu2xiAESXJTJAIyfVRNxqAhwBZwpCp62qPYXE4BAYL8YscZY7AKBW5oF5QHG0xrsqEhkmjL0V1g5Rgki6KgDIIpCApQ2Bh+IhLk7R8osKB0QRBxOFAHCp4lSxJ3wdDNAAAlb4ZVYWSJZlLNoGhBxUQJgqMBFb3InQoiIi/oUQKYKMLaigKMOgHNbhxA5CUULS4XkjMjTTQ+IRHcIAb5QySTzK2dXFbp8AAJjkGDBk0IXvYk43QyBYw0luKfagrGcMcFRkdACJcwe0vsP1FD5LclVSHCIArjUYMFYldcIkAUJl5YnRw9gpRV7wLmNBKh0mUir+EI20hTJOCNkuSw1AvKZO2lAwEVJgJrG4F1FeQNWDzh5kwAVbbaLxVgu4hTYFFPS6SidlGSLOTmISHCIAnjQkynNKZuDhU0yFEDtLnpTBnGozIIcoOPKDLOViNmpdXE4BwAJ6eV8mxrmH1+2mqya3qN+AtmeFEDu2pHZcTuos6b9jZs4kgMVoDTANMo9DTrU5Km/BUVT8WwBSjUS76LOI5JS7+6Xrkc3v63w8ygVZXwfHicRKkKiCIDY7va4pbCPUizIt6lJn781Ifq3LiJH0YdRLPjN/bfxh5qBlAvSKrHrpc1K1ISUAmS+k1I2molEZMXlxe0KXwRXCgog32jImWePpVoQ3fhkMBdbnSDA3BgYcnEgKmZ3rZ7YUkEC5H7SLciOQiLrogpCayaU7kTpVnHhx2Dh1ReyWRSU/yqWwUrpVXHhXLTsbq9XI6+NJndtHQWe4ROWCb4PT/nN3gootxQS21o7+t92CDmdfCelqsSFk4zeWSVic2tM/9ud6u7iX/wkU5kKguR5i2hkCfxlVgnIH1IIqSe1mhBSJGTDqsurDCAh0+VNuQ0n9KHuVCQi8G1qKIkLoeKeBWwiNpeWRkf5Li6U1MjeWP1cKrYeliwXGUCCBQfKD1HReig20osb/u05d6MAajglRnuaqViPp6LOlBlAQmZG3Txv0vuGwmeL/HbG2TFIANQQrWHj6D3eBRekvJ6GfJsaSha9DkDbjaPWU9EFKXu+4DspUUp2dLhoZI5rtG0jisjHSvkuLpTUE+SeRFzRrjTWSnjf5B8TK12PLyylWFBTxPQ+aQgbMToSrS+HVW8wCM8fjPvXPgVQi4vGG5qbBuK30Mz1vaDf7wce/7/TIaSe6HFR2+6H9yfCbeKzahJgsmPfh6wjDKVCV5OL2m5quAC1TXmiZEfJrLUoE5eMiVRWZEVJHlKRyJ4nxrjTrIwINAlQ9XHpR8wJ+UfXj0A3yUWZm/OtM6S+Iqny4/EPoPIk2pvuXcU41RuLJEBNN/g5LvpjRaAM6K5mTTIFgHUc1SWsg/oAS+K6SMXo9UcJtQ468ryv75JN+JKA6Fd/dSPUNQbLAbGq0WgHWOj4D0BdLloFCFrRr/q6nzYLFucHJwQgsopSjlBXLltZjnfCikiLgdIrGJUFXUmVZHhLQCyJrmkDpFnwKqAbTXFp10lyYXORyBa8CmjXUrRt01VrQSgISqp7BDJOc3OGdVXLVHcVyyCKWzEP8aSt3kmwDtiCurN5mW54GRdlamYdgfrReoj+Nv2gJT/J+LvtSMG4FK7kvgnp0OaOkvu3C+eizHvtWt2zdDOCgBbUJ5F5b5fzaTUYrJb7EZ/Ifrsnkdab5i5KVzGJiHYcDQ/iaDi/U2POPe1absRUqEw9I6CdZ5GY/evAMhHhziY1rJirdLEVUsqZr6LUTrqAzs95yuR5A73180TpKqYF0VGU5y0DEGpvnQHMmc5l5NKArXfkI+Y3AkBaG/CAsppD1kQs2jPWtWLtXm0JIR9ceYgV7vrr5UTVamMmEzG3JveOWMNRO9JctC6iVxbeG8CXbRI6JkpC9JelP7sC1wz5gOjnq5yqG5sPCFFqi92HICu6VTU2UD9vFRaMBX2jq+pSag3YUHqr61qIXvk4DIGZRnKj65SAzzkyu2xjNQUicUpaztdBLDuBI4nsagGhTzpmzxUPQKgvnFI+DLHoFD5E+sJ9qrXgFVHcUfNPcUjuh68BMJuWT0LMWhFJi1D9GZ0HIuComVLnXoMBIUT+6gvpyK7yEzoZRGBddGaJH1gi66Cmr67BiHaw3V8OpzBczt43wKWp3u8fQg1fbNaJw+GB50Hfk9UMGCHq+NixSUDNiGY+l4s46lMBZkvv/xxgtjb9zwFa1uWvf1s92wTjzwFqQDQNmG1G8+cAsw2F/hygUkRK2zQd+lblqJS2aXo0U9NHh9KTSpcOCvLzWF5ZvDmFOzkFjL9y7YNpqLSGG6kNkVlwlJODIFPLubSkQ8ebN8yAP5otAglVB6zjbWfVDzOkcD3qex2HoXI6Xn+yryzAMavp7H2zXczn80lCu1+NRrc/MxqPR4vN/iyYrd2qVatWrVq1atWqVatWevQfhYzHRnQczkgAAAAASUVORK5CYII=" alt="" class="feedly-img"></a>
            <a href="#">
                <span style="font-size:30px;cursor:pointer" onclick="toggleNav();">
                    {{-- <i class="fas fa-bars"></i> --}}
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-layout-sidebar-inset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                        <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                      </svg>
                </span>
            </a>
        </div>
        <div class="center-icons">
            <a href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                </svg>
            </a>
            <a href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
            </a>
            <a href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
            </a>
            <a href="#" class="">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-moon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
                </svg>
            </a>
        </div>
        <div class="fixed-bottom">
            <a href="#" class="propic">
                <img src="/img/propic.jpg" class="rounded-circle" width="40" height="40" alt="">
            </a>
        </div>
    </div>
    <div id="mySidenav" class="menu-drop">
        @yield('menu-drop')
      </div>
    <!-- Page content -->
    <div id="main" class="container-fluid main">
        <div class="main-top border-bottom ">
            <div class="top-content">
                <a href="#">
                    <span class="badge badge-danger">upgrade</span>
                </a>
            </div>
        </div>
        <div class=" main-bottom">
            <div class="bottom-content">
                @yield('content')
            </div>
        </div>
    </div>








    {{-- script for menu drop right --}}
    <script>
        function toggleNav() {
            var sidenav = document.getElementById("mySidenav"),
            main = document.getElementById("main");
            sidenav.style.width = sidenav.style.width === "300px" ? '0px' : '300px';
            main.style.marginLeft = main.style.marginLeft === "350px" ? '50px' :  '350px';
        }
    </script>
    <!-- bootstrap script links -->
    {{-- <script src="../../bootstrap/jquery-3.5.1.slim.min.js" ></script>
    <script src="../../bootstrap/popper.min.js" ></script>
    <script src="../../bootstrap/bootstrap.min.js" ></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    <script src="css/bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="css/bootstrap/popper.min.js"></script>
    <script src="css/bootstrap/bootstrap.min.js"></script>
</body>
</html>