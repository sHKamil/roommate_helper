<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/schedule-test.css">
    <title>schedule</title>
</head>
<body>
<div class="container text-center">
  <div class="row justify-content-md-center bg-dark mt-3">
    <div class="col col-lg-4 text-center bg-secondary">
      <button class="btn btn-dark"><i class="bi bi-arrow-left"></i></button>
    </div>
    <div id="actual_date" class="col-lg-4 text-light">
      Data dzisiejsza
    </div>
    <div class="col col-lg-4 bg-secondary">
        <button class="btn btn-dark"><i class="bi bi-arrow-right"></i></button>
    </div>
    <table class="table table-bordered table-lf text-light" style="table-layout: fixed;">
        <thead>
            <tr>
            <th scope="col">Poniedziałek</th>
            <th scope="col">Wtorek</th>
            <th scope="col">Środa</th>
            <th scope="col">Czwartek</th>
            <th scope="col">Piątek</th>
            <th scope="col">Sobota</th>
            <th scope="col">Niedziela</th>
            </tr>
        </thead>
        <tbody>
            <tr class="schedule-rows">
                <td id="d1">1</td>
                <td id="d2">2</td>
                <td id="d3">3</td>
                <td id="d4">4</td>
                <td id="d5">5</td>
                <td id="d6">6</td>
                <td id="d7">7</td>
            </tr>
            <tr class="schedule-rows">
                <td id="d8">8</td>
                <td id="d9">9</td>
                <td id="d10">10</td>
                <td id="d11">11</td>
                <td id="d12">12</td>
                <td id="d13">13</td>
                <td id="d14">14</td>
            </tr>
            <tr class="schedule-rows">
                <td id="d15">15</td>
                <td id="d16">16</td>
                <td id="d17">17</td>
                <td id="d18">18</td>
                <td id="d19">19</td>
                <td id="d20">20</td>
                <td id="d21">21</td>
            </tr>
            <tr class="schedule-rows">
                <td id="d22">22</td>
                <td id="d23">23</td>
                <td id="d24">24</td>
                <td id="d25">25</td>
                <td id="d26">26</td>
                <td id="d27">27</td>
                <td id="d28">28</td>
            </tr>
            <tr class="schedule-rows">
                <td id="d29">29</td>
                <td id="d30">30</td>
                <td id="d31">31</td>
                <td id="d32">32</td>
                <td id="d33">33</td>
                <td id="d34">34</td>
                <td id="d35">35</td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
<script src="assets/js/schedule-test.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>