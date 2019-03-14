<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        
        
          function changeColor(btn){
              if(btn.style.backgroundColor != 'rgb(92, 184, 92)'){
                  btn.style.backgroundColor = 'rgb(92, 184, 92)'; //green
              } else{
                  btn.style.backgroundColor = 'rgb(217, 83, 79)'; //red
              }
              
          }
        
          function openModal(btn){
              var body = document.getElementById("message");
              var elemId = btn.id;
              var numSubNodes = 0;
              var subNodes =[];
              var header = document.getElementsByClassName("modal-title")[0];
              header.innerHTML = btn.innerHTML;
              
              switch(elemId){
                  case 'valStarts': numSubNodes = 3;
                      subNodes.push('GP of requisitions is too low');
                      subNodes.push('GP of requisitions not aligned with how goals were baselined');
                      subNodes.push('Recruiters are prioritizing low GP requisitions');
                      break;
                  case 'showStartRatio': numSubNodes = 8;
                      subNodes.push('Interview prep is poor');
                      subNodes.push('Poor candidate qualifications');
                      subNodes.push('Offer Accepts rate is too low');
                      subNodes.push('Unfavorable client - end client equation(e.g., VMS Status)');
                      subNodes.push('Candidate onboarding issues');
                      subNodes.push('Too much time passed between interview and Start');
                      subNodes.push('Missing track record with End Client');
                      subNodes.push('Missing data');
                      break;
                  case 'jobRatio' : numSubNodes = 3;
                      subNodes.push('Client does not have enough jobs for current team size');
                      subNodes.push('Workable Jobs ratio per recruiter too low');
                      subNodes.push('Drop in Jobs is temporary (only this month)');
                      break;
                  case 'interviewRatio': numSubNodes = 10;
                      subNodes.push('Poor candidate qualifications');
                      subNodes.push('Candidate Show rate is too low');
                      subNodes.push('Unfavorable client - end client equation(e.g., VMS Status)');
                      subNodes.push('Time to Submit is too long');
                      subNodes.push('Candidate pay rate mismatch with job');
                      subNodes.push('Submit to Job Opening ratio is too high');
                      subNodes.push('Too much time passed between Submit and Interview invite');
                      subNodes.push('Jobs are too old');
                      subNodes.push('Missing data');
                      subNodes.push('Too Many Cross Submits');
                      break;
                  case 'submitRate': numSubNodes = 3;
                      subNodes.push('Snapshot quality is too low');
                      subNodes.push('TBD rate is too high');
                      subNodes.push('Time to generate Snapshots is too long');
                      break;
                  case 'callQuality': numSubNodes = 3;
                      subNodes.push('Recruiter does not follow script');
                      subNodes.push('Did not act with urgency to close');
                      subNodes.push('Script is insufficient');
                      break;
                  case 'leadQuality': numSubNodes = 4;
                      subNodes.push('Resume is a skill mismatch');
                      subNodes.push('Resume is a compensation mismatch based on obvious experience cues');
                      subNodes.push('Resume is a location mismatch');
                      subNodes.push('Resume is an obvious mismatch for job type');
                      break;
                  case 'connectRate': numSubNodes = 6;
                      subNodes.push('Quality of voicemail is poor');
                      subNodes.push('Time of calls is wrong');
                      subNodes.push('Number of times a lead is dialed is too low');
                      subNodes.push('Calling from a different area code than candidate');
                      subNodes.push('Are we failing to execute ETC?');
                      subNodes.push('Is the % of new leads (vs pipeline) too low?');
                      break;
                  case 'dialEffort': numSubNodes = 2;
                      subNodes.push('Call time in Planner is too short');
                      subNodes.push('Poor planner execution (productivity issue?)');
                      break;
                  case 'numLeads': numSubNodes = 8;
                      subNodes.push('Wrong sourcing channels');
                      subNodes.push('Wrong search strings');
                      subNodes.push('Tough jobs / not enough jobs');
                      subNodes.push('Not enough time to source');
                      subNodes.push('Low/slow sourcing effort');
                      subNodes.push('Overscreening leads');
                      subNodes.push('Bad pipeline strategy');
                      subNodes.push('Bad referral strategy');
                      break;
                  default: numSubNodes = 0;
              }
              
              var docBody = '';
              
              for(var i=0; i< numSubNodes; i++){
                  docBody += "<p class='lead text-center bg-info panel-primary text-info center-block'>";
                  docBody += subNodes[i]; //supposed to be the node body
                  docBody += "<center><select>";
                  docBody += "<option value='0'>Not a Concern</option>";
                  docBody += "<option value='1'>Challenge</option>";
                  docBody += "<option value='2'>Not Assessed</option>";
                  docBody += "</select></center>";
                  docBody += "</p><br/>";
              }
              body.innerHTML = docBody;
              
          }
        
//        $(document).ready(function(){
//            $("#valStarts").click(function(){
//                alert('banana');
//                $("#myModal").modal("show");
//                alert('tomato');
//            });
//        });
          
          
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
            width: 90%;
            height: 100%;
            border-color: transparent;
			align-content: center;
			
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
        
        .btn{
            white-space: normal;
        }
        
        option:hover, select:hover{
            cursor: pointer;
        }
        
    </style>
      
  </head>
  <body>
      
      <!-- header -->
     <div class="headerCSS">
         <img src="https://lh3.googleusercontent.com/4uDjlPVjSID_i590xMHU-ZyK_DGY8rHxO7wexYJXTOQvSuR8I7_-n03KMVVQKXvBAAmgK5kmvnq53ikUEyQd6G_irLVZ5_Axxq9cKiLNKFYp6RmmeeE2EF6iUpe30Z86DtUrhJ5AzHetdP9Pa7vTAbngR70OuIZln9mc68ylpZtc0AvawW1B7HyXkIjrGZhdAl1XoPlIonVMGbhceZh6v7MogYbgf7nkiRjoOOwtJuwfMxy0mBdnkgFGos165Fcnl5iGF_aGaaLIVLmGHgIGNOqDoMotSCfCl33_t33HooJBqkVgwh_dCEl9G1r0xEaitkuWqEpeOAZyopoqaW8fSHpxJn9eNi5OWYk8iu3DRQkW-AYKAkdgRCPNo9LqubsKt3U7grk31uany7b0yuFNcVJRy4p3tnL7FGOE9RQxKEHSDUwUI29r-6jOx8NfXiD2Vv4r1VnMXJQqtMNgbI0hpVxMg9PJynRm6gy-n7Y_9Nrlwv_-W8mjF55MRFTDWqzVbOo6WzPZf1v8RDW75Mz4AzvLYyI2i__FY2NlXqb_jmbSSztpSBD03qUcsqhgQqiWA3IEE2-f0aBUewTiZ9Mh5SrNU0OfwgQZThn7s45_z7xwr--roI4iwqIUzQLbJzt1M-6vEZZX1XR42AUxogrfzBxxE2iiiZdxHXw=s128-no?.png" height="50" width="50">
         <div class="headerText">
            <p>PSG RCA Tree</p><br/>
         </div>
     </div>
      
    <!-- tree body -->
    <div class="container overflow-auto">
      <div class="row">
        <div class="col-lg-12">
          <p class="lead text-center bg-info panel-primary text-info center-block">ROI</p>
          <div class="row">
            <div class="col-lg-2 text-center">
              <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span>
            </div>
            <div class="col-lg-9 text-center">
              <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
            </div>
          </div>

        </div>
      </div>
        
      <div class="row">
        <div class="col-lg-2 text-center">
          <p class="center-block"><button type="button" class="btn btn-default btn-lg" id="valStarts" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Value of Starts</button></p>
        </div>
        <div class="col-lg-9 text-center">
          <p class="center-block"><span class="btn btn-default btn-lg" id="numStarts" style="width: 600px; pointer-events: none; cursor: default;">Number of Starts</span></p>
          <div class="row">
             <div class="col-lg-4" style="left: 200px;">
                <p class="btn center-block" ><span class="glyphicon glyphicon-arrow-down"></span></p>
                <p class="center-block"><span class="btn btn-default btn-lg" id="subStartRatio" data-toggle="modal" data-target="#myModal" onclick="openModal(this)"  style="width: 400px; pointer-events: none; cursor: default;">Submit to Start Ratio</span></p>
                <div class="row">
                  <div class="col-lg-1" style="right: 10px;">
                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left: 35px;"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="showStartRatio" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Interview Show to Start Ratio</span></p>
                  </div>
                  <div class="col-lg-8" style="left: 35px;">
                    <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="jobRatio" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Job Opening Ratio</span></p>
                  </div>
                  <div class="col-lg-2" style="right: 20px;">
                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left:25px;"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="interviewRatio" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Submit to Interview Ratio</span></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4" style="left: 250px;">
                    <p class="btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="numSubmits" style="pointer-events: none; cursor: default;">Number of Submits</span></p>
                <div class="row">
                <div class="col-lg-5" style="left: 40px;">
                    <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="submitRate" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Submit Rate</span></p>
                </div> 
                <div class="col-lg-7" style="left: 30px;">
                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="right: 32px;"></span></p>
                    <p class="center-block"><span class="btn btn-default btn-lg" id="numSnapshots" style="pointer-events: none; cursor: default;">Number of Snapshots</span></p>
                    <div class="row">
                        <div class="col-lg-4" style="right: 50px;">
                            <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left: 35px;"></span></p>
                            <p class="center-block"><span class="btn btn-default btn-lg" id="conversionRate" style="pointer-events: none; cursor: default;">Conversion Rate</span></p>
                             <div class="row">
                                <div class="col-lg-4" style="right: 50px;">
                                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left: 35px;"></span></p>
                                    <p class="center-block"><span class="btn btn-default btn-lg" id="callQuality" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Call Quality</span></p>
                                </div>
                                <div class="col-lg-4" style="left: 30px;">
                                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left: 40px;"></span></p>
                                    <p class="center-block"><span class="btn btn-default btn-lg" id="leadQuality" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Lead Quality</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" style="left: 60px;">
                            <p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
                            <p class="center-block"><span class="btn btn-default btn-lg" id="numConnects" style="pointer-events: none; cursor: default;">Number of Connects</span></p>
                            <div class="row">    
                                <div class="col-lg-5" style="right: 20px;">
                                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left:50px;"></span></p>
                                    <p class="center-block"><span class="btn btn-default btn-lg" id="connectRate" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Connect Rate</span></p>
                                </div>
                                <div class="col-lg-7" style="left: 40px;">
                                    <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="right:10px;"></span></p>
                                    <p class="center-block"><span class="btn btn-default btn-lg" id="numDials" style="pointer-events: none; cursor: default;">Number of Dials</span></p>
                                    <div class="row">
                                    <div class="col-lg-1" style="right: 70px;">
                                        <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left: 60px;"></span></p>
                                        <p class="center-block"><span class="btn btn-default btn-lg" id="dialEffort" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Insufficient Dial Effort</span></p>
                                    </div>
                                    <div class="col-lg-1" style="left:30px;">
                                        <p class="btn"><span class="glyphicon glyphicon-arrow-down" style="left:10px;"></span></p>
                                        <p class="center-block"><span class="btn btn-default btn-lg" id="numLeads" data-toggle="modal" data-target="#myModal" onclick="openModal(this)">Number of Callable Leads</span></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>
        </div>
      </div>
    </div> <!-- end of tree body -->    
      
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p id="message">Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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