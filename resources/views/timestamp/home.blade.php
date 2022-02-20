<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--現在時刻の表示-->
<div id="RealtimeClockArea" style='text-align:center'></div>
<script type="text/javascript">
function set2fig(num) {
//   桁数が1桁だったら先頭に0を加えて2桁に調整する
   var ret;
   if( num < 10 ) { ret = "0" + num; }
   else { ret = num; }
   return ret;
}
function showNowTime() {
   var nowTime = new Date();
   var nowHour = set2fig( nowTime.getHours() );
   var nowMin = set2fig( nowTime.getMinutes() );
   var nowSec = set2fig( nowTime.getSeconds() );
   var msg = "現在の時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
   document.getElementById("RealtimeClockArea").innerHTML = msg;
}
setInterval('showNowTime()',1000);
</script>

<!--出勤・退勤を押すボタン配置-->

<a href ='/timestamp/attend'>出勤</a>
<a href ='/timestamp/leave'>退勤</a>


</body>
</html>
