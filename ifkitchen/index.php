<html>
<head>
      <title>Step progress bar</title>
      <style type="text/css">
           .container {
               width: 100%;
           }
           .progressbar {
               counter-reset: step;
           }
           .progressbar li {
               list-style-type: none;
               float: left;
               width: 10.33%;
               position: relative;
               text-align: center;
           }
           .progressbar li:before {
               content: counter(step);
               counter-increment: step;
               width: 30px;
               height: 30px;
               line-height: 30px;
               border: 1px solid #ddd;
               display: block;
               text-align: center;
               margin: 90 auto 10px auto;
               border-radius: 50%; 
               background-color: white;
           }
           .progressbar li:after {
               content: '';
               position: absolute;
               width: 100%;
               height: 1px;
               background-color: #ddd;
               top: 105px;
               left: -50%;
               z-index: -1;
           }
           .progressbar li:first-child:after {
               content: none;
           }
           .progressbarbar li.active {
               color: green;
           }
           .progressbar li.active:before {
               border-color: green;
           }
           .progressbar li.active + li:after {
               background-color:green;
           }
        </style>
    </head>
<body>
    <div class="container">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li>Step 2</li>
            <li>Step 3</li>
            <li>Step 4</li>
            <li>Step 5</li>
            <li>Step 6</li>
            <li>Step 7</li>
            <li>Step 8</li>
            <li>Step 9</li>
        </ul>
    </div>
</body>
</html>
