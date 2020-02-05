<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max humberstone Design</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap');
        html{
            font-size: 18px;
        }
        body{
            display: flex;
            height: 100vh;
            align-items: center;
        }
        h1, h2, h3, h4, h5 {
        margin: 2.75rem 0 1rem;
        font-family: 'DM Serif Text', serif;
        font-weight: 300;
        line-height: 1.15;
        color: #323649;
        }
        h1 {
        margin-top: 0;
        font-size: 2.488em;
        margin-bottom: 80px;
        }

        h2 {font-size: 2.074em;}

        h3 {font-size: 1.728em;}

        h4 {
            font-size: 1.44em;
            opacity: 0.6;
        }

        h5 {font-size: 1.2em;}

        @keyframes blink {
            /**
            * At the start of the animation the dot
            * has an opacity of .2
            */
            0% {
            opacity: .2;
            }
            /**
            * At 20% the dot is fully visible and
            * then fades out slowly
            */
            20% {
            opacity: 1;
            }
            /**
            * Until it reaches an opacity of .2 and
            * the animation can start again
            */
            100% {
            opacity: .2;
            }
        }

        span {
            /**
            * Use the blink animation, which is defined above
            */
            animation-name: blink;
            /**
            * The animation should take 1.4 seconds
            */
            animation-duration: 1.4s;
            /**
            * It will repeat itself forever
            */
            animation-iteration-count: infinite;
            /**
            * This makes sure that the starting style (opacity: .2)
            * of the animation is applied before the animation starts.
            * Otherwise we would see a short flash or would have
            * to set the default styling of the dots to the same
            * as the animation. Same applies for the ending styles.
            */
            animation-fill-mode: both;
        }

        span:nth-child(2) {
            /**
            * Starts the animation of the third dot
            * with a delay of .2s, otherwise all dots
            * would animate at the same time
            */
            animation-delay: .2s;
        }

        span:nth-child(3) {
            /**
            * Starts the animation of the third dot
            * with a delay of .4s, otherwise all dots
            * would animate at the same time
            */
            animation-delay: .4s;
        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h4>Hang tight</h4>  
                <h1>New work coming soon<span>.</span><span>.</span><span>.</span></h1>
              </div>
          </div>
      </div>
  </body>
</html>