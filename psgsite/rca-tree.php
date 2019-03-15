<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        var values;
        var currentNode;
        var valStartsSub0 = 0; var valStartsSub1 = 0; var valStartsSub2 = 0;
        var showStartRatioSub0 = 0; var showStartRatioSub1 = 0; var showStartRatioSub2 = 0; var showStartRatioSub3 = 0; var showStartRatioSub4 = 0; var showStartRatioSub5 = 0; var showStartRatioSub6 = 0; var showStartRatioSub7 = 0;
        var jobRatioSub0 = 0; var jobRatioSub1 = 0; var jobRatioSub2 = 0;
        var interviewRatioSub0 = 0; var interviewRatioSub1 = 0; var interviewRatioSub2 = 0; var interviewRatioSub3 = 0; var interviewRatioSub4 = 0; var interviewRatioSub5 = 0; var interviewRatioSub6 = 0; var interviewRatioSub7 = 0; var interviewRatioSub8 = 0; var interviewRatioSub9 = 0;
        var submitRateSub0 = 0; var submitRateSub1 = 0; var submitRateSub2 = 0;
        var callQuality0 = 0; var callQuality1 = 0; var callQuality2 = 0;
        var leadQualitySub0 = 0; var leadQualitySub1 = 0; var leadQualitySub2 = 0; var leadQualitySub3 = 0;
        var connectRateSub0 = 0; var connectRateSub1 = 0; var connectRateSub2 = 0; var connectRateSub3 = 0; var connectRateSub4 = 0; var connectRateSub5 = 0;
        var dialEffortSub0 = 0; var dialEffortSub1 = 0;
        var numLeadsSub0 = 0; var numLeadsSub1 = 0; var numLeadsSub2 = 0; var numLeadsSub3 = 0; var numLeadsSub4 = 0; var numLeadsSub5 = 0; var numLeadsSub6 = 0; var numLeadsSub7 = 0;
        
        
          function openModal(btn){
              var body = document.getElementById("message");
              var elemId = btn.id;
              var numSubNodes = 0;
              var subNodes =[];
              var subNodeValues = [];
              var header = document.getElementsByClassName("modal-title")[0];
              //save current node 
              currentNode = btn.id;
              
              header.innerHTML = btn.innerHTML;
              
              switch(elemId){
                  case 'valStarts': numSubNodes = 3;
                      subNodes.push('GP of requisitions is too low');
                      subNodeValues.push(valStartsSub0);
                      
                      subNodes.push('GP of requisitions not aligned with how goals were baselined');
                      subNodeValues.push(valStartsSub1);
                      
                      subNodes.push('Recruiters are prioritizing low GP requisitions');
                      subNodeValues.push(valStartsSub2);
                      break;
                  case 'showStartRatio': numSubNodes = 8;
                      subNodes.push('Interview prep is poor');
                      subNodeValues.push(showStartRatioSub0);
                      
                      subNodes.push('Poor candidate qualifications');
                      subNodeValues.push(showStartRatioSub1);
                      
                      subNodes.push('Offer Accepts rate is too low');
                      subNodeValues.push(showStartRatioSub2);
                      
                      subNodes.push('Unfavorable client - end client equation(e.g., VMS Status)');
                      subNodeValues.push(showStartRatioSub3);
                      
                      subNodes.push('Candidate onboarding issues');
                      subNodeValues.push(showStartRatioSub4);
                      
                      subNodes.push('Too much time passed between interview and Start');
                      subNodeValues.push(showStartRatioSub5);
                      
                      subNodes.push('Missing track record with End Client');
                      subNodeValues.push(showStartRatioSub6);
                      
                      subNodes.push('Missing data');
                      subNodeValues.push(showStartRatioSub7);
                      
                      break;
                  case 'jobRatio' : numSubNodes = 3;
                      subNodes.push('Client does not have enough jobs for current team size');
                      subNodeValues.push(jobRatioSub0);
                      
                      subNodes.push('Workable Jobs ratio per recruiter too low');
                      subNodeValues.push(jobRatioSub1);
                      
                      subNodes.push('Drop in Jobs is temporary (only this month)');
                      subNodeValues.push(jobRatioSub2);
                      
                      break;
                  case 'interviewRatio': numSubNodes = 10;
                      subNodes.push('Poor candidate qualifications');
                      subNodeValues.push(interviewRatioSub0);
                      
                      subNodes.push('Candidate Show rate is too low');
                      subNodeValues.push(interviewRatioSub1);
                      
                      subNodes.push('Unfavorable client - end client equation(e.g., VMS Status)');
                      subNodeValues.push(interviewRatioSub2);
                      
                      subNodes.push('Time to Submit is too long');
                      subNodeValues.push(interviewRatioSub3);
                      
                      subNodes.push('Candidate pay rate mismatch with job');
                      subNodeValues.push(interviewRatioSub4);
                      
                      subNodes.push('Submit to Job Opening ratio is too high');
                      subNodeValues.push(interviewRatioSub5);
                      
                      subNodes.push('Too much time passed between Submit and Interview invite');
                      subNodeValues.push(interviewRatioSub6);
                      
                      subNodes.push('Jobs are too old');
                      subNodeValues.push(interviewRatioSub7);
                      
                      subNodes.push('Missing data');
                      subNodeValues.push(interviewRatioSub8);
                      
                      subNodes.push('Too Many Cross Submits');
                      subNodeValues.push(interviewRatioSub9);
                      
                      break;
                  case 'submitRate': numSubNodes = 3;
                      subNodes.push('Snapshot quality is too low');
                      subNodeValues.push(submitRateSub0);
                      
                      subNodes.push('TBD rate is too high');
                      subNodeValues.push(submitRateSub1);
                      
                      subNodes.push('Time to generate Snapshots is too long');
                      subNodeValues.push(submitRateSub2);
                      
                      break;
                  case 'callQuality': numSubNodes = 3;
                      subNodes.push('Recruiter does not follow script');
                      subNodeValues.push(callQuality0);
                      
                      subNodes.push('Did not act with urgency to close');
                      subNodeValues.push(callQuality1);
                      
                      subNodes.push('Script is insufficient');
                      subNodeValues.push(callQuality2);
                      
                      break;
                  case 'leadQuality': numSubNodes = 4;
                      subNodes.push('Resume is a skill mismatch');
                      subNodeValues.push(leadQualitySub0);
                      
                      subNodes.push('Resume is a compensation mismatch based on obvious experience cues');
                      subNodeValues.push(leadQualitySub1);
                      
                      subNodes.push('Resume is a location mismatch');
                      subNodeValues.push(leadQualitySub2);
                      
                      subNodes.push('Resume is an obvious mismatch for job type');
                      subNodeValues.push(leadQualitySub3);
                      
                      break;
                  case 'connectRate': numSubNodes = 6;
                      subNodes.push('Quality of voicemail is poor');
                      subNodeValues.push(connectRateSub0);
                      
                      subNodes.push('Time of calls is wrong');
                      subNodeValues.push(connectRateSub1);
                      
                      subNodes.push('Number of times a lead is dialed is too low');
                      subNodeValues.push(connectRateSub2);
                      
                      subNodes.push('Calling from a different area code than candidate');
                      subNodeValues.push(connectRateSub3);
                      
                      subNodes.push('Are we failing to execute ETC?');
                      subNodeValues.push(connectRateSub4);
                      
                      subNodes.push('Is the % of new leads (vs pipeline) too low?');
                      subNodeValues.push(connectRateSub5);
                      
                      break;
                  case 'dialEffort': numSubNodes = 2;
                      subNodes.push('Call time in Planner is too short');
                      subNodeValues.push(dialEffortSub0);
                      
                      subNodes.push('Poor planner execution (productivity issue?)');
                      subNodeValues.push(dialEffortSub1);
                      
                      break;
                  case 'numLeads': numSubNodes = 8;
                      subNodes.push('Wrong sourcing channels');
                      subNodeValues.push(numLeadsSub0);
                      
                      subNodes.push('Wrong search strings');
                      subNodeValues.push(numLeadsSub1);
                      
                      subNodes.push('Tough jobs / not enough jobs');
                      subNodeValues.push(numLeadsSub2);
                      
                      subNodes.push('Not enough time to source');
                      subNodeValues.push(numLeadsSub3);
                      
                      subNodes.push('Low/slow sourcing effort');
                      subNodeValues.push(numLeadsSub4);
                      
                      subNodes.push('Overscreening leads');
                      subNodeValues.push(numLeadsSub5);
                      
                      subNodes.push('Bad pipeline strategy');
                      subNodeValues.push(numLeadsSub6);
                      
                      subNodes.push('Bad referral strategy');
                      subNodeValues.push(numLeadsSub7);
                      
                      break;
                  default: numSubNodes = 0;
              }
              
              var docBody = '';
              
              docBody += '<table>';
              for(var i=0; i< numSubNodes; i++){
                  docBody += "<tr><td>";
                  docBody += "<p class='lead text-center bg-info panel-primary text-info center-block' id= 'label" + i + "' ";
                  if(subNodeValues[i] == 1){
                     docBody += " style='color:green'>";   
                  } else if (subNodeValues[i] == 2){
                     docBody += " style='color:red'>";    
                  } else{
                     docBody += ">";   
                  }
                  
                  docBody += subNodes[i];
                  docBody += "</p>";
                  docBody += "</td><td><select id='choices" + i + "' onchange='changeSubnodeColor(this, label" + i + ")'>";
                  docBody += "<option value='0'";
                  if(subNodeValues[i] == 0){
                     docBody += " selected='selected'>Not Assessed</option>";   
                  } else {
                     docBody += ">Not Assessed</option>";    
                  }
                  docBody += "<option value='1'"
                  if(subNodeValues[i] == 1){
                     docBody += " selected='selected'>Not a Concern</option>";   
                  } else {
                     docBody += ">Not a Concern</option>";    
                  }
                  docBody += "<option value='2'";
                  if(subNodeValues[i] == 2){
                     docBody += " selected='selected'>Challenge</option>";   
                  } else {
                     docBody += ">Challenge</option>";    
                  }
                  docBody += "</select></td>";
                  docBody += "</tr>";
              }
              docBody += '</table>';
                                      
              body.innerHTML = docBody;
              
              
          }
        
          function changeSubnodeColor(choice, label){
              var input = choice.value;
              
              if(input == 1){
                  label.style.color = 'green';
              } else if (input == 2){
                  label.style.color = 'red';
              } else {
                  label.style.color= '#31708f';
              }
          }
        
        function resetMap(){
            valStartsSub0 = 0; valStartsSub1 = 0; valStartsSub2 = 0;
            
            showStartRatioSub0 = 0; showStartRatioSub1 = 0; showStartRatioSub2 = 0; showStartRatioSub3 = 0; showStartRatioSub4 = 0; showStartRatioSub5 = 0; showStartRatioSub6 = 0; showStartRatioSub7 = 0;
            jobRatioSub0 = 0;  jobRatioSub1 = 0;  jobRatioSub2 = 0;
            
            interviewRatioSub0 = 0;  interviewRatioSub1 = 0;  interviewRatioSub2 = 0;  interviewRatioSub3 = 0;  interviewRatioSub4 = 0;  interviewRatioSub5 = 0;  interviewRatioSub6 = 0;  interviewRatioSub7 = 0; interviewRatioSub8 = 0;  interviewRatioSub9 = 0;
            
            submitRateSub0 = 0;  submitRateSub1 = 0;  submitRateSub2 = 0;
            
            callQuality0 = 0; callQuality1 = 0;  callQuality2 = 0;
            
            leadQualitySub0 = 0;  leadQualitySub1 = 0;  leadQualitySub2 = 0;  leadQualitySub3 = 0;
            
            connectRateSub0 = 0;  connectRateSub1 = 0;  connectRateSub2 = 0;  connectRateSub3 = 0;  connectRateSub4 = 0;  connectRateSub5 = 0;
            dialEffortSub0 = 0;  dialEffortSub1 = 0;
            
            numLeadsSub0 = 0;  numLeadsSub1 = 0;  numLeadsSub2 = 0;  numLeadsSub3 = 0;  numLeadsSub4 = 0;  numLeadsSub5 = 0;  numLeadsSub6 = 0;  numLeadsSub7 = 0;
            alert("Choices have been reset")
        }
        
          function saveChoices(){
              var test = document.getElementById(currentNode);
              switch(currentNode){
                  case 'valStarts':
                      valStartsSub0 = document.getElementById("choices0").value;
                      valStartsSub1 = document.getElementById("choices1").value;
                      valStartsSub2 = document.getElementById("choices2").value;
                      break;
                      
                  case 'showStartRatio':
                      showStartRatioSub0 = document.getElementById("choices0").value;
                      showStartRatioSub1 = document.getElementById("choices1").value;
                      showStartRatioSub2 = document.getElementById("choices2").value;
                      showStartRatioSub3 = document.getElementById("choices3").value;
                      showStartRatioSub4 = document.getElementById("choices4").value;
                      showStartRatioSub5 = document.getElementById("choices5").value;
                      showStartRatioSub6 = document.getElementById("choices6").value;
                      showStartRatioSub7 =  document.getElementById("choices7").value;
                      break;
                      
                  case 'jobRatio' :
                      jobRatioSub0 = document.getElementById("choices0").value;
                      jobRatioSub1 = document.getElementById("choices1").value;
                      jobRatioSub2 = document.getElementById("choices2").value;
                      break;
                      
                  case 'interviewRatio':
                      interviewRatioSub0 = document.getElementById("choices0").value;
                      interviewRatioSub1 = document.getElementById("choices1").value;
                      interviewRatioSub2 = document.getElementById("choices2").value;
                      interviewRatioSub3 = document.getElementById("choices3").value;
                      interviewRatioSub4 = document.getElementById("choices4").value;
                      interviewRatioSub5 = document.getElementById("choices5").value;
                      interviewRatioSub6 = document.getElementById("choices6").value;
                      interviewRatioSub7 = document.getElementById("choices7").value;
                      interviewRatioSub8 = document.getElementById("choices8").value;
                      interviewRatioSub9 = document.getElementById("choices9").value;
                      break;
                      
                  case 'submitRate':
                      submitRateSub0 = document.getElementById("choices0").value;
                      submitRateSub1 = document.getElementById("choices1").value;
                      submitRateSub2 = document.getElementById("choices2").value;
                      break;
                      
                  case 'callQuality': 
                      callQuality0 = document.getElementById("choices0").value;
                      callQuality1 = document.getElementById("choices1").value;
                      callQuality2 = document.getElementById("choices2").value;
                      break;
                      
                  case 'leadQuality':
                      leadQualitySub0 = document.getElementById("choices0").value;
                      leadQualitySub1 = document.getElementById("choices1").value;
                      leadQualitySub2 = document.getElementById("choices2").value;
                      leadQualitySub3 = document.getElementById("choices3").value;
                      break;
                      
                  case 'connectRate':
                      connectRateSub0 = document.getElementById("choices0").value;
                      connectRateSub1 = document.getElementById("choices1").value;
                      connectRateSub2 = document.getElementById("choices2").value;
                      connectRateSub3 = document.getElementById("choices3").value;
                      connectRateSub4 = document.getElementById("choices4").value;
                      connectRateSub5 = document.getElementById("choices5").value;
                      break;
                      
                  case 'dialEffort':
                      dialEffortSub0 = document.getElementById("choices0").value;
                      dialEffortSub1 = document.getElementById("choices1").value;
                      break;
                      
                  case 'numLeads':
                      numLeadsSub0 = document.getElementById("choices0").value;
                      numLeadsSub1 = document.getElementById("choices1").value;
                      numLeadsSub2 = document.getElementById("choices2").value;
                      numLeadsSub3 = document.getElementById("choices3").value;
                      numLeadsSub4 = document.getElementById("choices4").value;
                      numLeadsSub5 = document.getElementById("choices5").value;
                      numLeadsSub6 = document.getElementById("choices6").value;
                      numLeadsSub7 = document.getElementById("choices7").value;
                      break;
                      
                  default: numSubNodes = 0;
                }
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
			overflow: auto;
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
        
        td{
            background-color: #d9edf7;
            padding-right: 20px;
            padding-top: 10px;
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
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="saveChoices()">Close</button>
          </div>
        </div>

      </div>
    </div>
      
    <div class="searchDate">
        <button class="headerBtn" name="Reset" onclick="resetMap()">Reset Map</button>
        <button class="headerBtn" name="Save">Save Map</button>
        <button class="headerBtn" name="Heat Map">Back to Heat Map</button>
    </div>
  </body>
    
</html>