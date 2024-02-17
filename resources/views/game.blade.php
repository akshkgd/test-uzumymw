
<html lang="en">
    <head>
      <meta charset="utf-8">
    
      <title>Guess the coding language | Codekaro</title>
      <meta name="description" content="The HTML5 Herald">
      <meta name="author" content="SitePoint">
    
      <link rel="stylesheet" href="css/styles.css?v=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.8/postscribe.min.js"></script>
      <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
      <script data-ad-client="ca-pub-7658479796622508" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <style>
          body {
              display: flex;
              justify-content: center;
              font-family: Nunito;
              background: linear-gradient(146.11deg, #FFDFBA 20.43%, rgba(255, 255, 255, 0) 79.91%), linear-gradient(202.81deg, #FF6636 38.99%, rgba(255, 255, 255, 0) 85.2%), #FFB45C;
          }

          @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }

          .main-container {
              max-width: 700px;
              width: 100%;
              margin: auto;
          }

          .points-container {
              margin: auto;
              text-align: center;
          }

          .top-score-value {
              font-size: 72px;
              font-weight: 800;
              margin: 0;
          }

          .top-score-title {
              margin-top: -10px;
              font-size: 24px;
              font-weight: 800;
          }

          #coding-container {
              margin-top: 40px;
              font-size: 20px;
          }

          .question {
              margin-bottom: 10px;
          }

          #coding-block {
              overflow: auto;
              max-height: 500px;
          }

          .gist-meta {
              display: none;
          }

          .answers-container {
              margin: 20px;
              display: grid;
              grid-template-columns: 1fr 1fr 1fr 1fr;
              grid-gap: 1em;
          }

          .btn-general{
            border: none;
            background: transparent;
            background-color: white;
            border-radius: 100px;
            outline: none;
            font-weight: 800;
            font-family: Nunito;
            height: 65px;
            -webkit-box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.15); 
            box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.15);
          }

          .btn-success {
            background: linear-gradient(119.32deg, #7BFF2A 16.26%, rgba(255, 255, 255, 0) 67.98%), #59EB00;
            box-shadow: 0px 1px 20px rgba(99, 255, 105, 0.7);
            color:white;
          }

          .btn-fail {
            background: linear-gradient(109.45deg, #FF7373 -7.86%, rgba(255, 255, 255, 0) 79.2%), #FF4949;
            box-shadow: 0px 1px 20px #FF7B7B;
            color: white;
          }

          .bottom-container {
              display: grid;
              grid-template-columns: 1fr 1fr 1fr;
              grid-gap: 1em;
              margin: 20px;
              align-items: center;
          }

          .final-score-title {
              font-weight: 600;
          }

          .final-score-value {
              font-weight: 800;
          }

          .end-text {
              font-weight: 600;
              color: rgba(0, 0, 0, 0.3);
              margin-top: 10px;
              margin-bottom: 10px;
          }

          .btn-retry {
              position: relative;
          }

          .iconify {
              position: absolute;
              right: 35px;
              top: 22px;
          }

          @media only screen and (max-width: 768px) {
              #coding-block {
                  max-height: 300px;
              }

              .question {
                  font-size: 18px;
              }

             .answers-container {
                 grid-template-columns: 1fr;
                 margin: 0;
                 margin-top: 20px;
             }

             .btn-general{
                 height: 55px;
             }

            .bottom-container {
                grid-template-columns: 1fr;
                grid-gap: 0;
                margin: 0;
                margin-top: 30px;
                text-align: center;
            }

            .end-text {
                margin: 0;
            }

            .iconify {
              position: absolute;
              right: 35px;
              top: 22px;
            }

            .btn-retry {
                position: absolute;
                width: 100%;
                bottom: 0;
                left: 0;
            }

            .btn-general {
                height: 55px;
                width: 100%;
            }

            .bottom-container {
                display: block;
                position: relative;
            }
          }



          .hide {
              visibility: hidden;
          }

          .disable {
            pointer-events:none;
          }

          .lds-ripple {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
            }
            .lds-ripple div {
            position: absolute;
            border: 4px solid #fff;
            opacity: 1;
            border-radius: 50%;
            animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
            }
            .lds-ripple div:nth-child(2) {
            animation-delay: -0.5s;
            }
            @keyframes lds-ripple {
            0% {
                top: 36px;
                left: 36px;
                width: 0;
                height: 0;
                opacity: 1;
            }
            100% {
                top: 0px;
                left: 0px;
                width: 72px;
                height: 72px;
                opacity: 0;
            }
          }
          

      </style>
    
    </head>
    
    <body>
        <div class="main-container">
            <div class="points-container">
                <h1 class="top-score-value">0</h1>
                <h3 class="top-score-title">Points</h3>
            </div>
            <div id="coding-container">
                <h3 class="question">Which programming language is this?</h3>
                <div class="lds-ripple"><div></div><div></div></div>
                <div id="coding-block">

                </div>
            </div>
            <div class="answers-container">
                <button class="btn-general btn-answers btn0"></button>
                <button class="btn-general btn-answers btn1"></button>
                <button class="btn-general btn-answers btn2"></button>
                <button class="btn-general btn-answers btn3"></button>
            </div>
            <div class="bottom-container">
                <div class="final-score-container">
                    <span class="final-score-title">Final score: </span>
                    <span class="final-score-value">0 Points</span>
                    <p class="end-text"> Take a screenshot and show it to Codekaro on instagram :)</p>
                </div>
                <button class="btn-general btn-next">Next</button>
                <button class="btn-general btn-retry">Retry<span class="iconify" data-inline="false" data-icon="akar-icons:arrow-right" style="font-size: 22px;"></span></button>
            </div>
        </div>
        
      <script src="js/scripts.js"></script>
      <script>
          var gistObjectArray
          var gistIndex = 0
          var randomLanguages = ["Swift", "JavaScript", "Java", "Kotlin", "Shell", "PowerShell", "C++", "C", "C#", "Ruby", "Dart", "Python", "Objective-C", "Perl", "Go", "PHP", "R", "Dockerfile", "CSS", "HTML", "TypeScript", "Haskell", "GLSL"]
          var rightLanguage
          var rightNumberIndex
          var points = 0 

          $( document ).ready(function() {
            clearButtons()
            fetchGists()

            //button clicks
            $( ".btn-answers" ).click(function(event) {
                let chosenLanguage = $(event.target).text()
                if (chosenLanguage == rightLanguage){
                    showSuccessUI(event.target)
                } else{
                    showFailUI(event.target)
                }
            });

            $( ".btn-next" ).click(function(event) {
                gistIndex += 1
                refreshUI()
            });

            $( ".btn-retry" ).click(function(event) {
                gistIndex += 1
                points = 0
                refreshUI()
            });

          });

          var token1 = "ghp_tP7Za2ohf"
          var token2 = "DnQsC4KvAt4ql"
          var token3 = "192Q7esV0o6Uia"

          const client = axios.create({
                auth: {
                    username: "mansoorshahsaid", 
                    password: token1+token2+token3
                },
                headers: {
                    "Accept": "application/vnd.github.v3+json"
                }
          });

          var fetchCount = 0
          function fetchGists(){
            let random = getRandomInt(100)

            client.get('https://api.github.com/gists/public?page='+random)
            .then(function (response) {
                // handle success
                //console.log(response);

                let gistArrayJson = response["data"]
                gistObjectArray = findBestGists(gistArrayJson)
                if (gistObjectArray == null) {
                    if (fetchCount <= 5) {
                        fetchGists()
                        count += 1
                    } else {
                        alert("Please reload this page. Something went wrong")
                    }
                } else {
                    fetchCount = 0
                    resetVariables()
                    //console.log(gistObjectArray)
                    refreshUI()
                }
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
          }

          function resetVariables() {
              gistIndex = 0
              rightLanguage = null
              rightNumberIndex = null
          }

          function refreshUI(){
              clearButtons()
              
              if (gistIndex == gistObjectArray.length) {
                  fetchGists()
                  return
              }

              let gistObject = gistObjectArray[gistIndex]
              rightLanguage = gistObject["language"]

              let randomAnswers = []
              while (randomAnswers.length != 4) {
                var randomAns = randomLanguages[getRandomInt(randomLanguages.length-1)]
                if (!randomAnswers.includes(randomAns) && randomAns != rightLanguage) {
                    randomAnswers.push(randomAns)
                }
              }

              rightNumberIndex = getRandomInt(randomAnswers.length-1)
              randomAnswers[rightNumberIndex] = rightLanguage

              for (var i = 0; i < randomAnswers.length; i++) {
                  $(".btn"+i).text(randomAnswers[i])
              }

              $( "#coding-block" ).empty();
              $(".lds-ripple").css("display", "none");
              postscribe('#coding-block', "<script class='gist-code' src='"+gistObject['embed_url']+"'><\/script>");

          }

          function clearButtons() {
              $(".btn-answers").removeClass("btn-success")
              $(".btn-answers").removeClass("btn-fail")
              $(".btn-answers").removeClass("disable")

              $(".bottom-container").addClass("hide")
              $(".bottom-container").addClass("hide")
              $(".btn-next").addClass("hide")
              $(".btn-retry").addClass("hide")
              $(".final-score-container").addClass("hide")
              $(".top-score-value").text(points)
              $(".final-score-value").text(points+" Points")
          }

          function showSuccessUI(buttonTapped) {
              $(buttonTapped).addClass( "btn-success" );
              points += 50
              $(".top-score-value").text(points)
              $(".bottom-container").removeClass("hide")
              $(".btn-next").removeClass("hide")
              $(".btn-retry").addClass("hide")
              $(".final-score-container").addClass("hide")
              $(".btn-answers").addClass("disable")

          }

          function showFailUI(buttonTapped) {
            $(buttonTapped).addClass( "btn-fail" );
            $(".btn"+rightNumberIndex).addClass( "btn-success" )
            $(".final-score-value").text(points+" Points")

            $(".bottom-container").removeClass("hide")
            $(".btn-next").addClass("hide")
            $(".btn-retry").removeClass("hide")
            $(".final-score-container").removeClass("hide")
            $(".btn-answers").addClass("disable")
          }

          function findBestGists(gistArrayJson){
              //gistArrayJson is an array of dictionaries
              var gistObjectArray = []
              for (var i = 0; i < gistArrayJson.length; i++){
                  let gistJson = gistArrayJson[i]
                  let htmlUrl = gistJson["html_url"]

                  let files = gistJson["files"]
                  let firstFile = files[Object.keys(files)[0]]
                  let secondFile = files[Object.keys(files)[1]]
                  
                  if (firstFile == undefined || secondFile != undefined) {
                      continue;
                  }

                  let size = firstFile["size"]
                  let language = firstFile["language"]
                //   console.log(gistJson)
                //   console.log(firstFile)
                //   console.log(secondFile)

                  if (!isValidLanguage(language)) {
                      continue;
                  } else {
                    var gistObject = {}
                    gistObject["embed_url"] = htmlUrl+".js"
                    gistObject["language"] = language
                    gistObjectArray.push(gistObject)
                  }
              }

              if (gistObjectArray.length != 0) {
                  return gistObjectArray
              } else {
                return null
              }
          }

          function isValidLanguage(language) {
                  switch (language){
                      case null:
                      case "Markdown":
                      case "JSON":
                      case "Text":
                      case "Ignore List":
                      case "XML":
                      case "Jupyter Notebook":
                      case "CSV":
                      case "Maven POM":
                      case "YAML":
                      case "AutoHotkey":
                      case "TSV":
                      case "reStructuredText":
                      case "VCL":
                      case "Diff":
                      case "TeX":
                      case "TOML":
                      case "Windows Registry Entries":
                      case "SVG":
                      case "Ballerina":
                      case "Org":

                          return false
                      default:
                          return true
                  }
          }

          function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
          }
      </script>
    </body>
</html>