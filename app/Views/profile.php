<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link/>
    <style>
        .table>tbody>tr>td{
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <div class="container text-center">
    <div class="row mb-2 mt-5">
    <div class="col">
    <img
          src="https://raw.githubusercontent.com/NaufallHilal/test/main/Internal_NaufalHilal_21170510201.png"
          alt="naufal hilal"
          class="naufal"
          width="180"
          height="180"
        />
    </div>
  </div>
  <div class="row mb-3">
  <div class="col">
          </div>
    <div class="col" style="background:orange">
        <?=$nama?>
    </div>
    <div class="col">
          </div>
  </div>
  <div class="row mb-3" >
  <div class="col">
          </div>  
  <div class="col" style="background:orange">
    <?=$kelas?>
    </div>
    <div class="col">
          </div>
  </div>
  <div class="row mb-3">
  <div class="col">
          </div>
    <div class="col" style="background:orange">
    <?=$npm?>
    </div>
    <div class="col">
          </div>
  </div>
  
</div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>