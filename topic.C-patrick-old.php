<?php 
  require_once $_SERVER['HOME'].'/projects/js_nutshell/config.php';
  require_once 'header.inc.php';
?>
        <title>Maths and what it's good for (life lessons included)</title>
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
                        <p>Maths is great, everybody loves math. When you're a child, you wanted to go to school asap bc of the math lessons and so did everyone else.</p>
                        <p>All the more unfortunate is the state of how teachers nowadays do not give you a the slightest idea of what it's good for, where you can use it.</p>
                        <p>But, i hear you say, maths is awesome and you can use it anywhere...right? Well...absolutely!</p>
                        <p>Sometimes it's easy to see, sometimes you have to put some thought into it and sometimes it's quite far-fetched, but still, it's doable.</p>
                        <p>And that's exactly the spirit you need!</p>
                    </i>
                </small>
            </div>
            <!-- the entire black part comes here -->
            <div class="flex-container">
                <div class="row">
                    <!-- name -->
                    <pre><code class="language-js"><div class="col-xs">
/*Addition*/
1 + 2 =
/*This is for when you want to add two floats or integers together.*/

div class="col-6 output">
            
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             
              <button class="btn btn-run" onclick="run(this)">Run</button>
              <button class="btn btn-run" onclick="reset(this)">Reset</button>
            </div>

/*Subtraction*/
3 - 4 =
/*This is for when you want to find out how much smaller the second argument is than the first one or what their difference is.*/

/*Multiplication*/
5 * 6 =
/*This is for when you want to multiply two numbers by eachother or when you want to count the number of fields in a rectangle with sides as given.*/

/*Division*/
7 / 8 =
/*This is for when you want to find out how many times the second argument can be fitted into the first one.*/

/*Exponentiation*/
9 ** 10 =
/*This is for when you want to do many multiplications after eachother with the same numbers.*/

/*Remainder*/
11 % 12 =
/*This is for when you want to find out what the remainder is if you divide the first argument by the second one.*/

/*check console.log*/
                    </div></code></pre>
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
        <?php include 'footer.inc.php'; ?>
    </body>
</html>