<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/fav.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- normal CSS file -->
    <link href="./index.css" rel = "stylesheet" type = "text/css" />

    <title>SaveOcean</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');


*{
    border: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
}

/* navbar */
.navbar-brand-text{
    color: #3362CC;
}

/* introduction */
#introduction{
    min-height: 80vh;
    background-image: url('./assets/section1.svg');
    background-position: center;
    background-repeat: no-repeat;
}

#introduction-title{
    color: #3362CC;
    font-size: 50px;
    font-weight: bolder;
}

#introduction-description{
    color: black;
    font-size: 18px;
}

#donation-button{
    background-color: orangered;
    border-radius: 5px;
    color: white;
}

#content1{
    background-color: #3362CC;
}

.content-title{
    font-size: 18px;
    font-weight: bold;
}

.content-description{
    color: white;
    font-size: 16px;
}
    </style>
  </head>
  <body>
    <!-- navbar section -->
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <p class = 'navbar-brand-text'>
              <strong>Save</strong>Ocean
            </p>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item mb-3">
                <a class="nav-link" aria-current="page" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Our Programs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Stories</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- section 1 -->
    <div id="introduction">
      <div class="d-flex flex-column justify-items-center align-items-center my-3">
        <div class="container text-center" id="introduction-title">
          Save the Oceans,<br />
          Feed The World
        </div>

        <div class="my-5" id="introduction-description">
          Restoring the ocean could feed 1 billion people a healthy seafood meal every day
        </div>

        <div class="my-3">
          <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_J2iXzEWZFdUrOQ" async> </script> </form>
        </div>
      </div>
    </div>
    <!-- secion 1 ends here -->

    <!-- section 2 -->
    <div id="content1">
      <div class="container row">
        <!-- column 1 -->
        <div class="col-12 col-md-6 mb-3">
          <div class="my-3 content-title">
            Our Mission
          </div>

          <div class="content-description">
            Ocean conservancy is working
            with you to protect the ocean
            from today's greatest global
            challenges. Together, we create
            science-based solutions for a
            healthy ocean and wildlife.
          </div>
        </div>

        <!-- column 2 -->
        <div class="col-12 col-md-6 mb-3">
          <div class="my-3 content-title">
            History
          </div>

          <div class="content-description">
            In the early years, our work focused on species like whales, sales and
            sea turtles. While we were a part of many success stories, we realized
            we couldn't protect species without protecting their habitat. So we
            thought bigger and shifted to a more ecosystem-based approach.
            Over the years, our mission grew and solidified to make us who we are
            now: a science-based organization that stands on the absolute
            conviction that each individual can make a positive difference for our ocean.
          </div>
        </div>
      </div>
    </div>
    <!-- section 2 ends here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
