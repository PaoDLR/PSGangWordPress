<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
        
        .headerRight{
            margin-top: 25px;
            float: right;
        }
        
        .headerCSS{
            font-family: Century Gothic;
            display: flex;
            align-items: center;
            text-align: center;
            width: 300px;
            float: left;
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
    
		table, th, td {
		  line-height: 30px;
		  border-collapse: collapse;
		  text-align: center;
		  
		}
		#data tr:hover {background-color: #ddd;}
		    
		#inner {
		   border: 1px solid black;
		    width: 70px;
		    height: 20px;
            background-color: #f08080;
		}
		    
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  right: 0;
		  bottom: 0;
		  width: 100%; /* Full width */
		  height: auto; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		  margin: auto;
		}
		/* Modal Content */
		.modal-content {
		  position: relative;
		  background-color: #fefefe;
		  margin: auto;
		  padding: 0;
		  border: 1px solid #888;
		  width: 15%;
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		  -webkit-animation-name: animatetop;
		  -webkit-animation-duration: 0.4s;
		  animation-name: animatetop;
		  animation-duration: 0.4s;
		}
		/* Add Animation */
		@-webkit-keyframes animatetop {
		  from {top:-300px; opacity:0} 
		  to {top:0; opacity:1}
		}
		@keyframes animatetop {
		  from {top:-300px; opacity:0}
		  to {top:0; opacity:1}
		}
		/* The Close Button */
		.close {
		  color: white;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}
		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		.modal-header {
		  padding: 2px 16px;
		  height: 50px;
		  background-color: #daa520;
		  color: white;
		}
		.modal-body {
		  padding: 2px 16px;
		    height: 50px;
		}   
		    
	</style>
    
<!-- QUARTERS
    Q1 - Jan1 - Mar31 90 days or 91 in leap years
    Q2 - Apr1 - Jun30 91 days
    Q3 - Jul1 - Sep30 92 days
    Q4 = Oct1 - Dec31 92 days
-->
	

</head>
<body>
    
    <!-- header -->
    <div class="headerRight">
	<form id="form" action="" method="POST">
<!--	    <input type="week" name="today" value="" min="2010-01">-->
        <input type="month" id="monthPicker" name="today" value="" min="2010-01">
	    <select>
		  <option value="recruiter1">Recruiter 1</option>
		  <option value="recruiter2">Recruiter 2</option>
		</select>
	    <!-- <input type="submit" name="Submit" value="Submit" onclick="tableCreate()"> -->
        <button type="button" onClick="tableCreate()">Submit</button>
<!--	    <button onclick="table()">Submit</button>-->
	</form>
    </div>
    
     <div class="headerCSS">
         <img src="https://lh3.googleusercontent.com/4uDjlPVjSID_i590xMHU-ZyK_DGY8rHxO7wexYJXTOQvSuR8I7_-n03KMVVQKXvBAAmgK5kmvnq53ikUEyQd6G_irLVZ5_Axxq9cKiLNKFYp6RmmeeE2EF6iUpe30Z86DtUrhJ5AzHetdP9Pa7vTAbngR70OuIZln9mc68ylpZtc0AvawW1B7HyXkIjrGZhdAl1XoPlIonVMGbhceZh6v7MogYbgf7nkiRjoOOwtJuwfMxy0mBdnkgFGos165Fcnl5iGF_aGaaLIVLmGHgIGNOqDoMotSCfCl33_t33HooJBqkVgwh_dCEl9G1r0xEaitkuWqEpeOAZyopoqaW8fSHpxJn9eNi5OWYk8iu3DRQkW-AYKAkdgRCPNo9LqubsKt3U7grk31uany7b0yuFNcVJRy4p3tnL7FGOE9RQxKEHSDUwUI29r-6jOx8NfXiD2Vv4r1VnMXJQqtMNgbI0hpVxMg9PJynRm6gy-n7Y_9Nrlwv_-W8mjF55MRFTDWqzVbOo6WzPZf1v8RDW75Mz4AzvLYyI2i__FY2NlXqb_jmbSSztpSBD03qUcsqhgQqiWA3IEE2-f0aBUewTiZ9Mh5SrNU0OfwgQZThn7s45_z7xwr--roI4iwqIUzQLbJzt1M-6vEZZX1XR42AUxogrfzBxxE2iiiZdxHXw=s128-no?.png" height="50" width="50">
         <div class="headerText">
            <p>PSG RCA Tree</p><br/>
         </div>
     </div>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
	<hr>
    
    <script>
        var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		 if(dd<10){
		        dd='0'+dd
		    } 
		    if(mm<10){
		        mm='0'+mm
		    } 
		today = yyyy+'-'+mm+'-'+dd;
		// document.getElementById("demo").innerHTML = document.getElementById("monthPicker").value;
    </script>

	<?php
    if (isset($_POST['today'])){
            $date = $_POST['today']; // gets the date inputted by user
            $strDate = "$date"; // changes date type into string type for easier parsing
            $year = $strDate[0].$strDate[1].$strDate[2].$strDate[3]; // gets the year
            $month = $strDate[5].$strDate[6]; // gets the month
        //    $qtr = getQtr($month);
    }
    // function getQtr($month){
    // 	$qtrTemp = 1;
    // 	for($i=1;$i<=12;$i++){
		  //   $strDate = "$i";
	   //  	if($month == $strDate){
	   //  			return $qtrTemp;
	   //  	}
	   //  	if($i % 3 == 0){
	   //  		$qtrTemp++;
	   //  	}
	    	
	   //  }
    // }
            // get all mondays of that month
            // feb mondays: 4, 11, 18, 25
            // create an array that contains all mondays of that month
            // generate an editable tables according to the mondays
	?>
    
    <script>
        function getInput(){
            var inputArray = [];
            for (var i=1;i<=17;i++) {
                var row = document.getElementById('editValue' + i).innerHTML;
                inputArray.push(row);
                //console.log("Row " + i + ": " + row);
                //console.log(inputArray[i-1]);
            }
            
            tableCreate(inputArray);
            
    
        }
    </script>


    <table>
    	<tr>
    		
			<td name="btnData" style="width:200px">
		        <select id="selectMonth">
				</select>
		        <br>
		        <br>
		        <button id="dataBtn" type='button'>Edit Data</button>
		        <!-- <input type='submit' value='Edit Data'> -->
		        <br>
		        <br>
		        <button id="goalBtn" type='button' >Edit Goals</button>
		        <!-- <input type='submit' value='Edit Goals'> -->
		        <br>
		        <br>
		        <button id="benchBtn" type='button'>Benchmark</button>
		        <!-- <input type='submit' value='Begin RCA'> -->
		        <br>
		        <br>
		        <button id="rcaBtn" type='button'>Begin RCA</button>
                <br>
                <br>
                <button type='button' onclick="deleteAllCookies()">Reset</button>
		        
		        <!-- The edit Modal -->
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <table>
				    	<tr>
				    		<td id="editTable">
                                <form method='post'>
				    			<script>
					    			function table(){
					    				var columns = ["KPIs", "Number of Starts", "Sumbit to Start Ratio", "Submit to Interview Show Ratio", "Interview Show to Start Ratio", "Job Opening Ratio", "Number of Submits", "Submit Rate", "Number of Snapshots", "Conversion Rate", "Call Quality Score", "Number of Connects", "Connect Rate", "Dial Effort (LPR Rate)", "Number of Callable Leads", "No. of Contractors", "Remarks", "Data Options"];
								        var body = document.getElementById('editTable');
								        var tbl = document.createElement('table');
								        // tbl.setAttribute('class', 'tbl');
								        // tbl.style.width = '20%';
								        // tbl.style.height = '500px';
								        // tbl.style.textAlign = 'center';
								        // tbl.style.borderCollapse = 'collapse';
								        // tbl.style.borderColor = 'black';
								        // tbl.style.backgroundColor = '#f08080';
								        // tbl.setAttribute('border', '1');
								        var tbdy = document.createElement('tbody');
								        for (var i = 0; i < columns.length; i++) { //loop for row, loop kpi here
								        	var tr = document.createElement('tr');
								          	for (var j = 0; j < 2; j++) { //loop for column, loop dates here
								          		if(j == 0){
								          			if(i == 0){
								          				var th = document.createElement('th');
									          			th.style.width = '50%';
									          			//console.log(columns[i]);
										              	var text = document.createTextNode(columns[i]);
										              	tr.appendChild(th);
										              	th.appendChild(text);
								          			}
								          			else{
									          			var td = document.createElement('td');
									          			td.style.width = '50%';
									          			//console.log(columns[i]);
										              	var text = document.createTextNode(columns[i]);
										              	tr.appendChild(td);
										              	td.appendChild(text);
									              	}
								          		}
								          		else{
								          			if(i == 0){
								          				var th = document.createElement('th');
										            	th.style.width = '20%';
												        th.style.height = '50px';
												        th.style.textAlign = 'center';
												        th.style.borderCollapse = 'collapse';
												        th.style.borderColor = 'black';
												        th.style.backgroundColor = 'white';
												        th.setAttribute('border', '1');
										              	var text = document.createTextNode("Head");
										              	tr.appendChild(th);
										              	th.appendChild(text);
								          			}
								          			else{
										            	var td = document.createElement('td');
										            	td.style.width = '20%';
												        td.style.height = '50px';
												        td.style.textAlign = 'center';
												        td.style.borderCollapse = 'collapse';
												        td.style.borderColor = 'black';
												        //td.style.backgroundColor = '#f08080';
												        td.setAttribute('border', '1');
												        td.setAttribute('contenteditable', 'true');
										              	var text = document.createTextNode("0");
                                                        td.setAttribute('id', 'editValue' + i);
                                                        //console.log(td.getAttribute('id'));
										              	tr.appendChild(td);
										              	td.appendChild(text);
                                                        
										            }
									            }
								          	}
								          	tbdy.appendChild(tr);
								        }
								        tbl.appendChild(tbdy);
								        body.appendChild(tbl);
								    }
								    table();
				    			</script>
				    			<input type="button" onclick="getInput()" value='Submit'>
                                </form>
				    		</td>
				    	</tr>
				    </table>
				    <!-- <button type='button'>Submit</button> -->
				  </div>

				</div>

				<!-- The goal Modal -->
				<div id="myModal1" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <table>
				    	<tr>
				    		<td id="editTable1">
				    			<script>
					    			function table(){
					    				var columns = ["KPIs", "Number of Starts", "Sumbit to Start Ratio", "Submit to Interview Show Ratio", "Interview Show to Start Ratio", "Job Opening Ratio", "Number of Submits", "Submit Rate", "Number of Snapshots", "Conversion Rate", "Call Quality Score", "Number of Connects", "Connect Rate", "Dial Effort (LPR Rate)", "Number of Callable Leads", "No. of Contractors", "Remarks", "Data Options"];
								        var body = document.getElementById('editTable1');
								        var tbl = document.createElement('table');
								        // tbl.setAttribute('class', 'tbl');
								        // tbl.style.width = '20%';
								        // tbl.style.height = '500px';
								        // tbl.style.textAlign = 'center';
								        // tbl.style.borderCollapse = 'collapse';
								        // tbl.style.borderColor = 'black';
								        // tbl.style.backgroundColor = '#f08080';
								        // tbl.setAttribute('border', '1');
								        var tbdy = document.createElement('tbody');
								        for (var i = 0; i < columns.length; i++) { //loop for row, loop kpi here
								        	var tr = document.createElement('tr');
								          	for (var j = 0; j < 2; j++) { //loop for column, loop dates here
								          		if(j == 0){
								          			if(i == 0){
								          				var th = document.createElement('th');
									          			th.style.width = '50%';
									          			//console.log(columns[i]);
										              	var text = document.createTextNode(columns[i]);
										              	tr.appendChild(th);
										              	th.appendChild(text);
								          			}
								          			else{
									          			var td = document.createElement('td');
									          			td.style.width = '50%';
									          			//console.log(columns[i]);
										              	var text = document.createTextNode(columns[i]);
										              	tr.appendChild(td);
										              	td.appendChild(text);
									              	}
								          		}
								          		else{
								          			if(i == 0){
								          				var th = document.createElement('th');
										            	th.style.width = '20%';
												        th.style.height = '50px';
												        th.style.textAlign = 'center';
												        th.style.borderCollapse = 'collapse';
												        th.style.borderColor = 'black';
												        th.style.backgroundColor = 'white';
												        th.setAttribute('border', '1');
										              	var text = document.createTextNode("Head");
										              	tr.appendChild(th);
										              	th.appendChild(text);
								          			}
								          			else{
										            	var td = document.createElement('td');
										            	td.style.width = '20%';
												        td.style.height = '50px';
												        td.style.textAlign = 'center';
												        td.style.borderCollapse = 'collapse';
												        td.style.borderColor = 'black';
												        //td.style.backgroundColor = '#f08080';
												        td.setAttribute('border', '1');
												        td.setAttribute('contenteditable', 'true');
												        td.setAttribute('id', 'goalValue' + i);
										              	var text = document.createTextNode("0");
										              	tr.appendChild(td);
										              	td.appendChild(text);
										            }
									            }
								          	}
								          	tbdy.appendChild(tr);
								        }
								        tbl.appendChild(tbdy);
								        body.appendChild(tbl);
								    }
								    table();
				    			</script>
				    			<button type='button' onclick="getGoalInput()">Submit</button>
				    		</td>
				    	</tr>
				    </table>
				  </div>

				</div>
                <form method='POST'>
				<!-- The benchmark Modal -->
				<div id="myModal2" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <table>
				    	<tr>
				    		<td id="editTable2">
				    			Week:
				    			<input type="week">
				    			<input type="week">
				    			<hr>
				    			Month:
				    			<input type="month">
				    			<input type="month">
				    			<button type='button'>Submit</button>
				    		</td>
				    	</tr>
				    </table>
				  </div>

				</div>

				<!-- The RCA Modal -->
				<div id="myModal3" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <table>
				    	<tr>
				    		<td id="editTable3">
				    			<select id="rcaSelectMonth">
				    				
				    			</select>
				    			<input type="submit" value='Submit' onclick='generateRCACookie()' name='submitDB'>
                        <?php
                        echo "watch me \n";
                        if (isset($_POST["submitDB"])){
                        require_once('C:/xampp/htdocs/leo/try1/dbconn2.php');
                        $conn->set_charset("utf8");
                        //$date = $_POST['today']; // gets the date inputted by user
                        //$strDate = "$date"; // changes date type into string type for easier parsing
                        //$year = $strDate[0].$strDate[1].$strDate[2].$strDate[3]; // gets the year
                        //$month = $strDate[5].$strDate[6]; // gets the month
                        //$testnostart = $_POST['value1'];
                        //$testssr = $_POST['value2'];
                        $rca_string = $_COOKIE['RCACookie'];
                            echo $rca_string;
                        $sql_statement = "INSERT INTO ariel.rca_test (username, rca_string) 
                        VALUES ('recruiter 1', '".$rca_string."');";
                        if($conn->query($sql_statement) == TRUE){
                            echo "NICE";

                        }
                        else{
                            echo "Error : " . $sql_statement. "<br>" . $conn->error;
                        }
                            
                            echo "whip";
                    }
                                
                    echo "now watch me nae nae";  
                  ?>
                       
                                
				    		</td>
				    	</tr>
				    </table>
				  </div>

				</div>
                     </form>
		    </td>
			
		    <td name="tableData" id="innerTable" style="width:200px"> <!--main table generation goes in this td-->
		    	
		        <script>
		        	// Get the modal
					var modal = document.getElementById('myModal');
					var modal1 = document.getElementById('myModal1');
					var modal2 = document.getElementById('myModal2');
					var modal3 = document.getElementById('myModal3');
					// Get the button that opens the modal
					var editBtn = document.getElementById("dataBtn");
					var goalBtn = document.getElementById("goalBtn");
					var benchBtn = document.getElementById("benchBtn");
					var rcaBtn = document.getElementById("rcaBtn");
					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];
					var span1 = document.getElementsByClassName("close")[1];
					var span2 = document.getElementsByClassName("close")[2];
					var span3 = document.getElementsByClassName("close")[3];
					var editIndex = 1;
					var rcaIndex = 1;
					var globalEditArray = [];
					var globalEditIndex = 0;
                    
                    
					// When the user clicks on the button, open the modal 
					editBtn.onclick = function() {
					  modal.style.display = "block";
					  var select = document.getElementById("selectMonth");
					  var editIndex = select.selectedIndex + 1;
					  window.editIndex = editIndex;
					  //console.log("editIndex = " + editIndex);
					}
					goalBtn.onclick = function() {
					  modal1.style.display = "block";
					  var select = document.getElementById("selectMonth");
					  var goalIndex = select.selectedIndex + 1;
					  //console.log("goalIndex = " + goalIndex);
					}
					benchBtn.onclick = function() {
					  modal2.style.display = "block";
					  var select = document.getElementById("selectMonth");
					  var benchIndex = select.selectedIndex + 1;
					  //console.log("benchIndex = " + benchIndex);
					}
					rcaBtn.onclick = function() {
					  modal3.style.display = "block";
					  var select = document.getElementById("selectMonth");
					  var rcaIndex = select.selectedIndex + 1;
					  //console.log("rcaIndex = " + rcaIndex);
					}
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					  modal.style.display = "none";
					}
					span1.onclick = function() {
					  modal1.style.display = "none";
					}
					span2.onclick = function() {
					  modal2.style.display = "none";
					}
					span3.onclick = function() {
					  modal3.style.display = "none";
					}
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					  if (event.target == modal || event.target == modal1 || event.target == modal2 || event.target == modal3) {
					    modal.style.display = "none";
					    modal1.style.display = "none";
					    modal2.style.display = "none";
					    modal3.style.display = "none";
					  }
					}
		        	
                    function tableCreate(inputArray) {
                        
						//console.log("im in1");
		        		document.getElementById("innerTable").innerHTML = ""
		        		var todayTemp = new Date();
		        		var dd = todayTemp.getDate();
		        		var mm = todayTemp.getMonth() + 1;
		        		var yyyy = todayTemp.getFullYear();
		        		var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
		        		var monthInput = document.querySelector('input[type="month"]');
		        		var yearIn = (monthInput.value[0] + monthInput.value[1] + monthInput.value[2] + monthInput.value[3])
						var monthIn = (monthInput.value[5] + monthInput.value[6]);
						//console.log(monthIn);
						//console.log(yearIn);
						var qtr = getQtr(monthIn);
						//console.log(qtr);
						
						var q1l = 90;
						var q2l = 91;
						var q3l = 92;
						var q4l = 92;
						var monthCnt;
						
						//console.log(typeof yearIn);
						//console.log(yyyy);
						//console.log(mm + 1);
						//console.log(dd);
						var endDateTemp = new Date(yyyy.toString()+'-'+ mm.toString()+'-'+ dd.toString());
						var mondays = [];
						var d1 = new Date(yearIn + '-01-01');
						var d2 = new Date(yearIn + '-04-01');
						var d3 = new Date(yearIn + '-07-01');
						var d4 = new Date(yearIn + '-10-01');
						//console.log("d1 = " + d1);
						//console.log("d2 = " + d2);
						//console.log("d3 = " + d3);
						//console.log("d4 = " + d4);
						//console.log("qtr is: " + qtr);
						switch(qtr){
							case 1:
								monthCnt = '1';
								for (var i = 0; i < q1l + 1; i++){
									//console.log("inq1");
									//console.log("shit = " + '0' + (d1.getMonth()+1).toString());
									
									if(d1.getDay() == 1){
										if(monthCnt == (d1.getMonth()+1).toString()){
											//console.log("in2");
									    	mondays.push(new Date(d1));
								    	}
								    	else{
								    		mondays.push(new Date('1970-01-01'));
								    		monthCnt++;
								    	}
								    }
								    d1.setDate(d1.getDate() + 1);
								}
								break;
							case 2:
								monthCnt = '4';
								for (var i = 0; i < q2l + 1; i++){
									//console.log("inq2");
									
									if(d2.getDay() == 1){
										if(monthCnt == (d2.getMonth()+1).toString()){
											//console.log("in2");
									    	mondays.push(new Date(d2));
								    	}
								    	else{
								    		mondays.push(new Date('1970-04-01'));
								    		monthCnt++;
								    	}
								    }
								    d2.setDate(d2.getDate() + 1);
								}
								break;
							case 3:
								monthCnt = '7';
								for (var i = 0; i < q3l + 1; i++){
									//console.log("inq3");
									
									if(d3.getDay() == 1){
										if(monthCnt == (d3.getMonth()+1).toString()){
											//console.log("in2");
									    	mondays.push(new Date(d3));
								    	}
								    	else{
								    		mondays.push(new Date('1970-07-01'));
								    		monthCnt++;
								    	}
								    }
								    d3.setDate(d3.getDate() + 1);
								}
								break;
							case 4:
								monthCnt = '10';
								for (var i = 0; i < q4l + 1; i++){
									//console.log("inq4");
									
									if(d4.getDay() == 1){
										if(monthCnt == (d4.getMonth()+1).toString()){
											//console.log("in2");
									    	mondays.push(new Date(d4));
								    	}
								    	else{
								    		mondays.push(new Date('1970-10-01'));
								    		monthCnt++;
								    	}
								    }
								    d4.setDate(d4.getDate() + 1);
								}
								break;
						}
						//console.log(mondays);
						var select = document.getElementById("selectMonth");
						var select1 = document.getElementById("rcaSelectMonth");
						select.options.length = 0;
						select1.options.length = 0;
						for(index in mondays) {
							if(mondays[index].getFullYear() != '1970'){
						    select.options[select.options.length] = new Option(months[mondays[index].getMonth()] + " " + mondays[index].getDate().toString() + ", " + mondays[index].getFullYear().toString(), index);
						    select1.options[select1.options.length] = new Option(months[mondays[index].getMonth()] + " " + mondays[index].getDate().toString() + ", " + mondays[index].getFullYear().toString(), index);
							}
							else{
								select.options[select.options.length] = new Option(months[mondays[index - 2].getMonth()], index);
								select1.options[select1.options.length] = new Option(months[mondays[index - 2].getMonth()], index);
							}
						}
						
						
		        		var columns = ["KPIs", "Number of Starts", "Sumbit to Start Ratio", "Submit to Interview Show Ratio", "Interview Show to Start Ratio", "Job Opening Ratio", "Number of Submits", "Submit Rate", "Number of Snapshots", "Conversion Rate", "Call Quality Score", "Number of Connects", "Connect Rate", "Dial Effort (LPR Rate)", "Number of Callable Leads", "No. of Contractors", "Remarks", "Data Options"];
				        var body = document.getElementById('innerTable');
				        var tbl = document.createElement('table');
				        var tbdy = document.createElement('tbody');
				        for (var i = 0; i < columns.length; i++) { //loop for row, loop kpi here
				        	var tr = document.createElement('tr');
				          	for (var j = 0; j <= mondays.length; j++) { //loop for column, loop dates here
				          		if(j == 0){
				          			if(i == 0){
				          				var th = document.createElement('th');
					          			th.style.width = '50%';
					          			//console.log(columns[i]);
						              	var text = document.createTextNode(columns[i]);
						              	tr.appendChild(th);
						              	th.appendChild(text);
				          			}
				          			else{
					          			var td = document.createElement('td');
					          			td.style.width = '50%';
					          			//console.log(columns[i]);
						              	var text = document.createTextNode(columns[i]);
						              	tr.appendChild(td);
						              	td.appendChild(text);
					              	}
				          		}
				          		else{
				          			if(i == 0){
				          				var th = document.createElement('th');
						            	th.style.width = '50%';
								        th.style.height = '10px';
								        th.style.textAlign = 'center';
								        th.style.borderCollapse = 'collapse';
								        th.style.borderColor = 'black';
								        th.style.backgroundColor = 'white';
								        th.setAttribute('border', '1');
								        //console.log("j = " + j);
								        if(mondays[j-1].getFullYear() == '1970'){
								        	
								        	var text = document.createTextNode(months[mondays[j-2].getMonth()]);
								        }
								        else{
						              	var text = document.createTextNode(months[mondays[j-1].getMonth()] + mondays[j-1].getDate());
						              	}
						              	tr.appendChild(th);
						              	th.appendChild(text);
				          			}
				          			else{
						            	var td = document.createElement('td');
						            	td.style.width = '20%';
								        td.style.height = '10px';
								        td.style.textAlign = 'center';
								        td.style.borderCollapse = 'collapse';
								        td.style.borderColor = 'black';
								        td.style.backgroundColor = '#f08080';
								        td.setAttribute('border', '1');
								        //td.setAttribute('contenteditable', 'true');
								        if (editIndex != undefined){
	                                        if (inputArray == undefined || inputArray.length == 0){
							              		var text = document.createTextNode("0");
                                                for (var m=0;m<20;m++){
                                                    if (j == m && checkCookie('column'+m)){
                                                        var arrSplit = getCookie('column'+m).split("||");
                                                        //console.log('NIGGER');
                                                        var text = document.createTextNode(arrSplit[i]);
                                                    }
                                                }
                                            }
							              	else if (j == editIndex) {
                                                if (!checkCookie('column'+j)){
                                                    for (var k=0;k<inputArray.length;k++)
                                                        setCookie('column'+j,getCookie('column'+j) + "||" + inputArray[k]);
                                                    
                                                    //console.log("New cookie: " + getCookie('column'+j));
                                                }
                                                else {
                                                    //console.log("Cookie exists: " + getCookie('column'+j));
                                                    setCookie('column'+j, "");
                                                    for (var k=0;k<inputArray.length;k++)
                                                        setCookie('column'+j,getCookie('column'+j) + "||" + inputArray[k]);
                                                    
                                                }   
                                                var text = document.createTextNode(inputArray[i-1]);
                                            }
							              	else if(j != editIndex){
                                                    var text = document.createTextNode("0");
                                                    for (var l=0;l<20;l++){
                                                        if (checkCookie('column'+j)){
                                                            var arrSplit = getCookie('column'+j).split("||");
                                                            var text = document.createTextNode(arrSplit[i]);
                                                            
                                                        }
                                                    }
                                                }
							                }
						                else if (editIndex == undefined)
						                	var text = document.createTextNode("0");
						              	tr.appendChild(td);
						              	td.appendChild(text);
						            }
					            }
				          	}
				          	tbdy.appendChild(tr);
				        }
				        tbl.appendChild(tbdy);
				        body.appendChild(tbl);
				        globalEditArray.push(editIndex);
				    }
				    function getQtr(month){
				    	//console.log("im in");
				    	var qtrTemp = 1;
				    	//console.log(typeof month);
				    	if(month == "01" || month == "02" || month == "03"){
				    		qtrTemp = 1;
				    		return qtrTemp;
				    	}
				    	else if(month == "04" || month == "05" || month == "06"){
				    		qtrTemp = 2;
				    		return qtrTemp;
				    	}
					    	else if(month == "07" || month == "08" || month == "09"){
					    		qtrTemp = 3;
					    		return qtrTemp;
					    	}
						    	else if(month == "10" || month == "11" || month == "12"){
						    		qtrTemp = 4;
						    		return qtrTemp;
						    	}
                    }
                    
                    function getCookie(cname) {
                      var name = cname + "=";
                      var ca = document.cookie.split(';');
                      for(var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') {
                          c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                          return c.substring(name.length, c.length);
                        }
                      }
                      return "";
                    }
                    
                    function setCookie(cname, cvalue) {
                      var d = new Date();
                      d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
                      var expires = "expires="+d.toUTCString();
                      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                    }
                    
                    function checkCookie(columnname) {
                      
                      if (document.cookie.indexOf(columnname) == -1) {
                          //console.log("Does not exist");
                          return 0;
                      } 
                      else if (document.cookie.indexOf(columnname) > -1 ){
                          //console.log("Exists");
                          //console.log("Index: " + document.cookie.indexOf(columnname));
                          return 1;
                          
                      }
                      
                      return -1;
                        
                        
                    }
                    function eraseCookie(name) {
                    	// document.cookie = name+ "=;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;";
                    	var cookie = getCookie(name);
                    	cookie.split(";").forEach(function(c) { cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
                    	
                    }
                    
                    function deleteAllCookies() {
                        var r = confirm("Are you sure you wish to reset?");
                        
                        if(r == true){
	                        document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
	                        
	                        tableCreate();
	                    }
                    }
					function getGoalInput(){
						//if does not exist create, else clear the old cookie then add again
						var selected = document.getElementById('selectMonth').selectedIndex+ 1;
						console.log(selected);
						//eraseCookie('goal'+selected);
						var cookieString = "";
						setCookie('goal'+selected, "");
						for (var i=0;i<17;i++){
							cookieString+=document.getElementById('goalValue'+(i+1)).innerHTML + "||";
							console.log(document.getElementById('goalValue'+(i+1)).innerHTML);
						}
						console.log("Cookie String: " + cookieString);
						setCookie('goal'+selected, cookieString);					
							// for (var j=0;j<17;j++){
							// 	setCookie('goal'+selected, getCookie('goal'+selected) + "||" + document.getElementById('goalValue' + (j+1)).innerHTML);
								
							// }
							console.log(getCookie('goal'+selected));
					}
                    function generateRCACookie(){
 						// var j = rcaIndex;
 						// var cookieVal = getCookie('column'+j);
 						// var cookieArr = cookieVal.split("||");
 						// var goalArray = getCookie('goal'+j).split("||");
 						// var newCookie = "";
 						// var divide;
 						// var a = 1;
 						// var b = 1;
 						// for (var i=0;i<17;i++){
 						// 	if(cookieArr[i] != "0" && goalArray[i] != "0"){
 						// 		console.log(cookieArr[i])
 						// 		console.log(goalArray[i])
 						// 		a = parseFloat(cookieArr[i]);
 						// 		b = parseFloat(goalArray[i]);
 						// 		divide = a/b;
 						// 		newCookie += divide + "||";
 						// 	}
 						// }
       //                  setCookie('RCACookie',newCookie);
                       	//console.log(getCookie('RCACookie'));
                       	var selected = document.getElementById('selectMonth').selectedIndex + 1; 
                       	console.log(rcaIndex);
                       	console.log(selected);
                       	//console.log(getCookie('column'+rcaIndex));
                       	setCookie('RCACookie', getCookie('column'+rcaIndex));
                       	setCookie('goalCookie', getCookie('goal'+rcaIndex));
                       	console.log(getCookie('goalCookie'));
 					}
                    
                
				    	
				</script>
	    		
		    </td>
		
		</tr>
	</table>
</div>
</body>
</html>
