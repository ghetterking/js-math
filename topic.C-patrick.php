<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
        <title>Maths and what it's good for (life lessons included)</title>
        <style>
            /* e x t r a    s p a c e    n e v e r    h u r t s */
            div {
                padding: 1%;
            }

            /* for that real hacker feel */
            .container-fluid {
                font-size: medium;
                color: white;
                background-color: black;
            }

            /* because for some reason it's messy when it's the same size */
            button {
                font-size: smaller;
            }
        </style>
    </head>
    <body>
        <!-- require_once 'header.inc.php'; -->
        <main>
            <h1>Maths and what it's good for</h1>
            <div class="teaser">
                <p>Do you like maths? No? Well you came to the right place, then! =3</p>
            </div>
            <!-- no idea what this is supposed to be -->
            <div class="article">
                <h5>(life lessons included)</h5>
                <small>
                    <i>
                        <br>
                        <p>Maths is great, everybody loves math. When you're a child, you wanted to go to school asap bc of the math lessons and so did everyone else.</p>
                        <p>All the more unfortunate is the state of how teachers nowadays do not give you a the slightest idea of what it's good for, where you can use it.</p>
                        <p>But, i hear you say, maths is awesome and you can use it anywhere...right? Well...absolutely!</p>
                        <p>Sometimes it's easy to see, sometimes you have to put some thought into it and sometimes it's quite far-fetched, but still, it's doable.</p>
                        <p>And that's exactly the spirit you need!</p>
                    </i>
                </small>
            </div>
            <br>
            <!-- the entire black part comes here -->
            <div class="container-fluid">
                <div class="row">
                    <!-- name -->
                    <div class="col-xs">
                        <p>Addition</p>
                        <p>Subtraction</p>
                        <p>Multiplication</p>
                        <p>Division</p>
                        <p>Exponentiation</p>
                        <p>Remainder</p>
                    </div>
                    <!-- example calculations -->
                    <div class="col-xs">
                        <p>1 + 2 =</p>
                        <p>3 - 4 =</p>
                        <p>5 * 6 =</p>
                        <p>7 / 8 =</p>
                        <p>9 ** 10 =</p>
                        <p>11 % 12 =</p>
                    </div>
                    <!-- check console.log -->
                    <div class="col-xs">
                        <p>check console.log</p>
                        <p>check console.log</p>
                        <p>check console.log</p>
                        <p>check console.log</p>
                        <p>check console.log</p>
                        <p>check console.log</p>
                    </div>
                    <!-- document.write is ugly and i have to reload page to get back -->
                    <div class="col-xs">
                        <p><button type='button' onclick="alert(1+2).style.display='block'">click to show result</button></p>
                        <p><button type='button' onclick="alert(3-4).style.display='block'">click to show result</button></p>
                        <p><button type='button' onclick="alert(5*6).style.display='block'">click to show result</button></p>
                        <p><button type='button' onclick="alert(7/8).style.display='block'">click to show result</button></p>
                        <p><button type='button' onclick="alert(9**10).style.display='block'">click to show result</button></p>
                        <p><button type='button' onclick="alert(11%12).style.display='block'">click to show result</button></p>
                    </div>
                    <!-- explanations -->
                    <div class="col-md">
                        <p>This is for when you want to add two floats or integers together.</p>
                        <p>This is for when you want to find out how much smaller the second argument is than the first one or what their difference is.</p>
                        <p>This is for when you want to multiply two numbers by eachother or when you want to count the number of fields in a rectangle with sides as given.</p>
                        <p>This is for when you want to find out how many times the second argument can be fitted into the first one.</p>
                        <p>This is for when you want to do many multiplications after eachother with the same numbers.</p>
                        <p>This is for when you want to find out what the remainder is if you divide the first argument by the second one.</p>
                    </div>
                    <!-- the obligatory java script part -->
                    <script>
                        console.log (1 + 2);
                        console.log (3 - 4);
                        console.log (5 * 6);
                        console.log (7 / 8);
                        console.log (9 ** 10);
                        console.log (11 % 12);
                    </script>
                </div>
            </div>
            <!-- end of black part -->
            <div>
                <br>
                <!-- just some interesting topics i found later on that wouldnt fit in here -->
                <h2>Further reading:</h2>
                <a href="https://mathjs.org/docs/datatypes/units.html">Units</a><br>
                <a href="https://mathjs.org/docs/datatypes/bignumbers.html">Big Numbers</a><br>
                <a href="https://riptutorial.com/javascript/example/766/trigonometry">Trigonometry</a><br>
                <a href="https://mathjs.org/docs/datatypes/complex_numbers.html">Complex Numbers</a><br>
                <a href="https://mathjs.org/docs/datatypes/matrices.html">Matrices</a><br>
                <a href="https://www.codeproject.com/articles/18922/solving-a-differential-equation">Differential Equations</a><br>
                <a href="https://toreaurstad.blogspot.com/2017/08/integrals-in-math-with-javascript.html">Integrals</a><br>
                <a href="https://medium.com/@ahlechandre/lambda-calculus-with-javascript-897f7e81f259">Lambda Calculus</a><br>
                <a href="http://old.nationalcurvebank.org/vectors/vectors.htm">Vector Calculus</a><br>
                <!-- deleted the rest for simplicity's sake -->
            </div>
        </main>
    <!--require_once 'footer.inc.php';-->
    </body>
</html>