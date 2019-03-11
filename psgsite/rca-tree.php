<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
          function changeColor(btn){
              if(btn.style.backgroundColor != 'rgb(92, 184, 92)'){
                  btn.style.backgroundColor = 'rgb(92, 184, 92)'; //green
              } else{
                  btn.style.backgroundColor = 'rgb(217, 83, 79)'; //red
              }
              
          }
          
          
      </script>
  <head>
    <base target="_top">
    <style>
        
        body{
            background-color: rgb(255, 255, 255);
            border-color: transparent;
        }
        .headerCSS{
            font-family: Century Gothic;
            display: flex;
            align-items: center;
            text-align: center;
            width: 300px;
        }
        
        .headerCSS img{
            flex-grow: 0px;
            flex-shrink: 0px;
            margin-left: 10px;
        }
        
        .headerText p{
            margin-left: 15px;
            font-family: Century Gothic;
            font-size: 20px;
            margin-top: 25px;
        }
        
        .searchDate{
            position: fixed;
            margin-left: 20px;
            bottom: 10px;
            width: 100%;
        }
        
        .searchBox{
            border: 1px solid grey;
            border-radius: 2px;
            background-color: #fcfcfc;
            width: 200px;
        }
        
        .container{
            margin-left: 0;
            width: 40%;
            height: 100%;
            border-color: transparent;
        }
        
        .headerBtn{
            background-color: orange;
            border-radius: 5px;
            border: 1px solid transparent;
            font-family: Century Gothic;
            font-size: 14px;
            height: 65px;
            margin-right: 10px;
            text-transform: uppercase;
            width: 160px;
        }
        
        .headerBtn:hover{
            background-color: #ffd400;
            cursor: pointer;
        }
        
        #submitBtn{
            height: 25px;
            width: auto;
        }
        
        .btn-orange{
            background-color: orange;
            color: white;
        }
        
        .btn-default{
            background-color: #d9edf7;
        }
        
    </style>
      
  </head>
  <body>
      
     <div class="headerCSS">
         <img src="https://lh3.googleusercontent.com/4uDjlPVjSID_i590xMHU-ZyK_DGY8rHxO7wexYJXTOQvSuR8I7_-n03KMVVQKXvBAAmgK5kmvnq53ikUEyQd6G_irLVZ5_Axxq9cKiLNKFYp6RmmeeE2EF6iUpe30Z86DtUrhJ5AzHetdP9Pa7vTAbngR70OuIZln9mc68ylpZtc0AvawW1B7HyXkIjrGZhdAl1XoPlIonVMGbhceZh6v7MogYbgf7nkiRjoOOwtJuwfMxy0mBdnkgFGos165Fcnl5iGF_aGaaLIVLmGHgIGNOqDoMotSCfCl33_t33HooJBqkVgwh_dCEl9G1r0xEaitkuWqEpeOAZyopoqaW8fSHpxJn9eNi5OWYk8iu3DRQkW-AYKAkdgRCPNo9LqubsKt3U7grk31uany7b0yuFNcVJRy4p3tnL7FGOE9RQxKEHSDUwUI29r-6jOx8NfXiD2Vv4r1VnMXJQqtMNgbI0hpVxMg9PJynRm6gy-n7Y_9Nrlwv_-W8mjF55MRFTDWqzVbOo6WzPZf1v8RDW75Mz4AzvLYyI2i__FY2NlXqb_jmbSSztpSBD03qUcsqhgQqiWA3IEE2-f0aBUewTiZ9Mh5SrNU0OfwgQZThn7s45_z7xwr--roI4iwqIUzQLbJzt1M-6vEZZX1XR42AUxogrfzBxxE2iiiZdxHXw=s128-no?.png" height="50" width="50">
         <div class="headerText">
            <p>PSG RCA Tree</p><br/>
         </div>
     </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="lead text-center bg-info btn text-info center-block">ROI</p>
          <div class="row">
            <div class="col-xs-6 text-center">
              <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
            </div>
            <div class="col-xs-6 text-center">
              <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-center">
          <p class="center-block"><span class="btn btn-default btn-lg">Value of Starts</span></p>
        </div>
        <div class="col-xs-6 text-center">
          <p class="center-block"><span class="btn btn-default btn-lg" id="numStarts" onclick="changeColor(this)">Number of Starts</span></p>
        <div class="col-xs-6 text-center">
          <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
          <p class="center-block"><span class="btn btn-success btn-lg">Yes</span></p>
            </div>
             <div class="col-xs-6 text-center">
          <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
          <p class="center-block"><span class="btn btn-danger btn-lg">No</span></p>
            </div>
          <div class="row">
            <div class="col-xs-6 text-center">
              <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
            </div>
            <div class="col-xs-6 text-center">
              <p class="btn">
                <span class="glyphicon glyphicon-arrow-down"></span></p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <p class="center-block"><span class="btn btn-default btn-lg">Yes</span></p>
              <p class="btn">
                <span class="glyphicon glyphicon-arrow-down"></span></p><br/>
              <p class="bg-success text-success btn text-wrap btn-default">Test</p>

            </div>
            <div class="col-xs-6 text-center">
              <p class="center-block"><span class="btn btn-default btn-lg">No</span></p>
              <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
              <p class="btn bg-danger text-danger text-wrap btn-default">Test</p>
            </div>
          </div>
            <div class="row">
                <div class="col-xs-6 text-center">
                  <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
                </div>
                <div class="col-xs-6 text-center">
                  <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
                </div>
            </div>
        </div>
      </div>
    </div>
         <div class="searchDate">
             <button class="headerBtn" name="Reset">Reset Map</button>
             <button class="headerBtn" name="Save">Save Map</button>
             <button class="headerBtn" name="Heat Map">Back to Heat Map</button>
         </div>
  </body>
    
</html>





