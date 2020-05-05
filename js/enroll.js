const dayNames = ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
function fill() {
    var date = new Date();
    var day = date.getDay();

    
    for (let i = day; i < day + 6; i++)
        $("#selectDay").append("<option>" + dayNames[i % 7] + "</option>");

}

function passItem(el) {
    var tab=document.getElementById('Classes');
    tab.innerHTML="";
    var head=tab.createTHead();
    var row=head.insertRow(0);
    row.className="table100-head";
    row.style="font-weight:bold;"
    var col=row.insertCell(0);
    col.style="width:auto;";
    col.innerHTML="ClassID";
    var col=row.insertCell(1);
    col.style="width:auto;";
    col.innerHTML="Class"; 
    var col=row.insertCell(2);
    col.style="width:auto;";
    col.innerHTML="Description";
    var col=row.insertCell(3);
    col.style="width:auto;";
    col.innerHTML="Time";
    var col=row.insertCell(4);
    col.style="width:auto;";
    col.innerHTML="Number Of Places";
    var col=row.insertCell(5);
    col.style="width:auto;";
    col.innerHTML="Available Places";
    var col=row.insertCell(6);
    col.style="width:auto;";
    col.innerHTML="Enrollment";     
    var e = document.getElementById(el).value;
    if(e=="hide"){
      document.getElementById('warn').style.color="red";
      document.getElementById('warn').style.visibility="visible";
      return;
    }else{
      document.getElementById('warn').style.visibility="hidden";
    }
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var date=new Date();
    var day = date.getDay();
    var pos;
    for(let i=0;i<=6;i++){
      if(e==weekday[i]){
        pos=i;
      }
    }
    var diff;
    if(pos>=day){
      diff=pos-day;
    }else{
      diff=day-pos;
      diff=7-diff;
    }
    $.ajax({
        url: 'php/getData.php',
        type: 'POST',
        data: { day: e, datediff: diff },
        success: function (data) {
            var json = $.parseJSON(data);
            var tbody = document.createElement('tbody');
            var x = document.getElementById('Classes').appendChild(tbody);
            if ($.trim(json) == '') {
                var row = tbody.insertRow(0);
                var y = row.insertCell(0);
                y.colSpan = "6";
                y.innerHTML = "Unfortunately no classes are available";
            }

            $.ajax({
              url: 'php/checkEnrolled.php',
              type: 'POST',
              data: { day: e, datediff: diff },
              success: function (data) {
                var classids=$.parseJSON(data);
                var ar = new Array();
                if($.trim(json) == ''){
                  ar.push(-1);
                }else{
                    $(classids).each(function(i,val){
                      $.each(val,function(k,v){
                        ar.push(v);
                      });
                    });
                }



            $(json).each(function (i, val) {
                var row = tbody.insertRow(i);
                var c = 0;
                $.each(val, function (k, v) {
                    var y = row.insertCell(-1);
                    var classid;
                    if(k==0){
                         classid=v;
                    }
                    y.innerHTML = v;
                    if (c == 5) {
                        y = row.insertCell(-1);
                        var check=true;
                        
                          var cl = document.getElementById('Classes').rows[i + 1].cells[0].innerHTML;
                          console.log(cl);
                          console.log(ar[1]);
                          for(var j=0;j<ar.length;j++){
                            if(ar[j]==cl){
                              check=false;
                            }
                          }
                          if(check==false){
                            var unbtn=document.createElement('input');
                            unbtn.type="button";
                            unbtn.className="btn btn-primary";
                            unbtn.value = "UnEnroll";
                            unbtn.id = "unenroll";
                            unbtn.style.background="red";
                            unbtn.onclick = (function(){
                              $.ajax({
                                  url: 'php/unenrollCust.php',
                                  type: 'POST',
                                  data: { id: cl , datediff: diff },
                                  success: function (data) {
                                    var pl = document.getElementById('Classes').rows[i + 1].cells[5];
                                    var num = document.getElementById('Classes').rows[i + 1].cells[5].innerHTML;
                                    num++;
                                    pl.innerHTML = num;
                                    unbtn.parentNode.removeChild(unbtn);
                                    swal({
                                      title: 'Enrollment',
                                      text: 'You have been un-enrolled',
                                      type: 'success',
                                    
                                      showConfirmButton: true
                                    }, function(){
                                          window.location.href = 'https://www.ironsky-app.com/enroll.php';
                                    }); 
                                }
                            });
                          });
                          y.appendChild(unbtn);
                        }else{
                          if(v!=0){
                            var btn = document.createElement('input');
                            btn.type = "button";
                            btn.className = "btn btn-primary";
                            btn.value = "Enroll";
                            btn.id = "enroll";
                            btn.onclick =(function () {
                                var t = document.getElementById('Classes').rows[i + 1].cells[0].innerHTML;
                                $.ajax({
                                    url: 'php/enrollCust.php',
                                    type: 'POST',
                                    data: { id: t , datediff: diff },
                                    success: function (data) {
                                        console.log(data);
                                        if (data == 1) {
                                            var pl = document.getElementById('Classes').rows[i + 1].cells[5];
                                            var num = document.getElementById('Classes').rows[i + 1].cells[5].innerHTML;
                                            pl.innerHTML = num - 1;
                                            btn.parentNode.removeChild(btn);
                                            swal({
                                              title: 'Enrollment',
                                              text: 'Successfully enrolled',
                                              type: 'success',
                                            
                                              showConfirmButton: true
                                            }, function(){
                                                  window.location.href = 'https://www.ironsky-app.com/enroll.php';
                                            }); 
                                        }else{
                                          var reason='';
                                          switch(parseInt(data)) {
                                            case (-1):{
                                              reason="Already Enrolled";
                                              
                                            }
                                            break;
                                            case (-2):{
                                              reason="No available places";
                                              
                                            }
                                            break;
                                            case (-3):{
                                              reason="You have already enrolled 3 times for that week";
                                              
                                            }
                                            break;
                                            case (-4):{
                                              reason="You are not allowed to enroll, your membership is Open Gym";
                                              
                                            }
                                            break;
                                            default:{
                                              reason="Could Not enroll";
                                              
                                            }
                                            break;
                                          }
                                          
                                          
                                          swal({
                                            title: 'Enrollment',
                                            text: 'Failed to Enroll '+reason,
                                            type: 'error',
                                          
                                            showConfirmButton: true
                                          }, function(){
                                                window.location.href = 'https://www.ironsky-app.com/enroll.php';
                                          }); 
                                        }
                                    }
                                });
                            });
                            y.appendChild(btn);
                          }
                        }
                        
                        y = row.insertCell(-1);
                        var img = document.createElement('img');
                        img.src = "images/bar.jpg";
                        img.style = "width:100px; height:100px; margin-top:-2px;";
                        y.appendChild(img);
                    }

                    c++;

                });//for each
            });//for each
          }
        });
        }//success function of first ajax
    });//ajax
}
