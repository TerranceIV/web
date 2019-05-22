function addtocart()
{
  //----------------------------------------------mirror item display
  var itemnum=[-1,-1,-1,-1,-1,-1];
  itemnum[0]=document.getElementById('mitem1').value;
  itemnum[1]=document.getElementById('mitem2').value;
  itemnum[2]=document.getElementById('mitem3').value;
  itemnum[3]=document.getElementById('mitem4').value;
  itemnum[4]=document.getElementById('mitem5').value;
  itemnum[5]=document.getElementById('mitem6').value;
  var total=[0,0,0,0,0,0];
  if(itemnum[0]>=0||itemnum[1]>=0||itemnum[2]>=0||itemnum[3]>=0||itemnum[4]>=0||itemnum[5]>=0)
  {
    document.getElementById('mirrorheader').innerHTML =
    " MIRROR CATEGORIES ";
  }

  if(itemnum[0]>=0)
  {
    if(itemnum[0]==0)
    {
      document.getElementById('mirror1').innerHTML ="";
    }
    else{
      total[0]=itemnum[0]*5;
      document.getElementById('mirror1').innerHTML =
      "&#8667 Reflective Float Glass x " + itemnum[0] +' = RM' +total[0];

    }

  }
  if(itemnum[1]>=0)
  {
    if(itemnum[1]==0)
    {
      document.getElementById('mirror2').innerHTML ="";
    }
    else{
    total[1]=itemnum[1]*7;
    document.getElementById('mirror2').innerHTML =
    "&#8667 Reflective Floated Tempered Glass x " + itemnum[1] +' = RM' +total[1];

    }
  }
  if(itemnum[2]>=0)
  {
    if(itemnum[2]==0)
    {
      document.getElementById('mirror3').innerHTML ="";
    }
    else{
    total[2]=itemnum[2]*8;
    document.getElementById('mirror3').innerHTML =
    "&#8667 Tinted Floated Glass x " + itemnum[2] +' = RM' +total[2];

    }
  }
  if(itemnum[3]>=0)
  {
    if(itemnum[3]==0)
    {
      document.getElementById('mirror4').innerHTML ="";
    }
    else{
      total[3]=itemnum[3]*12;
      document.getElementById('mirror4').innerHTML =
      "&#8667 Curve Glass x " + itemnum[3] +' = RM' +total[3];

    }

  }
  if(itemnum[4]>=0)
  {
    if(itemnum[4]==0)
    {
      document.getElementById('mirror5').innerHTML ="";
    }
    else{
      total[4]=itemnum[4]*9;
      document.getElementById('mirror5').innerHTML =
      "&#8667 Clear Wire Glass x " + itemnum[4] +' = RM' +total[4];

    }

  }
  if(itemnum[5]>=0)
  {
    if(itemnum[5]==0)
    {
      document.getElementById('mirror6').innerHTML ="";
    }
    else{
      total[5]=itemnum[5]*10;
      document.getElementById('mirror6').innerHTML =
      "&#8667 Laminated Security Glass x " + itemnum[5] +' = RM' +total[5];

    }

  }

  //----------------------------------------------door item display
  var dooritemnum=[-1,-1,-1,-1,-1,-1];
  dooritemnum[0]=document.getElementById('ditem1').value;
  dooritemnum[1]=document.getElementById('ditem2').value;
  dooritemnum[2]=document.getElementById('ditem3').value;
  dooritemnum[3]=document.getElementById('ditem4').value;
  dooritemnum[4]=document.getElementById('ditem5').value;
  dooritemnum[5]=document.getElementById('ditem6').value;
  var doortotal=[0,0,0,0,0,0];
  if(dooritemnum[0]>=0||dooritemnum[1]>=0||dooritemnum[2]>=0||dooritemnum[3]>=0||dooritemnum[4]>=0||dooritemnum[5]>=0)
  {
    document.getElementById('doorheader').innerHTML =
    " DOOR CATEGORIES ";
  }
  if(dooritemnum[0]>=0)
  {
    if(dooritemnum[0]==0)
    {
      document.getElementById('door1').innerHTML ="";
    }
    else{
      doortotal[0]=dooritemnum[0]*1250;
      document.getElementById('door1').innerHTML =
      "&#8667 Elizabeth Sliding Door x " + dooritemnum[0] +' = RM' +doortotal[0];

    }

  }
  if(dooritemnum[1]>=0)
  {
    if(dooritemnum[1]==0)
    {
      document.getElementById('door2').innerHTML ="";
    }
    else{
    doortotal[1]=dooritemnum[1]*699;
    document.getElementById('door2').innerHTML =
    "&#8667 Foldable Sliding Door x " + dooritemnum[1] +' = RM' +doortotal[1];

    }
  }
  if(dooritemnum[2]>=0)
  {
    if(dooritemnum[2]==0)
    {
      document.getElementById('door3').innerHTML ="";
    }
    else{
    doortotal[2]=dooritemnum[2]*840;
    document.getElementById('door3').innerHTML =
    "&#8667 White-classic Entrance Door x " + dooritemnum[2] +' = RM' +doortotal[2];

    }
  }
  if(dooritemnum[3]>=0)
  {
    if(dooritemnum[3]==0)
    {
      document.getElementById('door4').innerHTML ="";
    }
    else{
      doortotal[3]=dooritemnum[3]*699;
      document.getElementById('door4').innerHTML =
      "&#8667 Jade-classic glass Entrance Door x " + dooritemnum[3] +' = RM' +doortotal[3];

    }

  }
  if(dooritemnum[4]>=0)
  {
    if(dooritemnum[4]==0)
    {
      document.getElementById('door5').innerHTML ="";
    }
    else{
      doortotal[4]=dooritemnum[4]*699;
      document.getElementById('door5').innerHTML =
      "&#8667 Jetblack Door x " + dooritemnum[4] +' = RM' +doortotal[4];

    }

  }
  if(dooritemnum[5]>=0)
  {
    if(dooritemnum[5]==0)
    {
      document.getElementById('door6').innerHTML ="";
    }
    else{
      doortotal[5]=dooritemnum[5]*699;
      document.getElementById('door6').innerHTML =
      "&#8667 Classic Entrance Door x " + dooritemnum[5] +' = RM' +doortotal[5];

    }

  }

  //----------------------------------------------window item display
  var windowitemnum=[-1,-1,-1,-1,-1,-1];
  windowitemnum[0]=document.getElementById('witem1').value;
  windowitemnum[1]=document.getElementById('witem2').value;
  windowitemnum[2]=document.getElementById('witem3').value;
  windowitemnum[3]=document.getElementById('witem4').value;
  windowitemnum[4]=document.getElementById('witem5').value;
  windowitemnum[5]=document.getElementById('witem6').value;
  var windowtotal=[0,0,0,0,0,0];
  if(windowitemnum[0]>=0||windowitemnum[1]>=0||windowitemnum[2]>=0||windowitemnum[3]>=0||windowitemnum[4]>=0||windowitemnum[5]>=0)
  {
    document.getElementById('windowheader').innerHTML =
    " <br /><br /><br />WINDOW CATEGORIES ";
  }

  if(windowitemnum[0]>=0)
  {
    if(windowitemnum[0]==0)
    {
      document.getElementById('window1').innerHTML ="";
    }
    else{
      windowtotal[0]=windowitemnum[0]*450;
      document.getElementById('window1').innerHTML =
      "&#8667 White grey wide x " + windowitemnum[0] +' = RM' +windowtotal[0];

    }

  }
  if(windowitemnum[1]>=0)
  {
    if(windowitemnum[1]==0)
    {
      document.getElementById('window2').innerHTML ="";
    }
    else{
    windowtotal[1]=windowitemnum[1]*700;
    document.getElementById('window2').innerHTML =
    "&#8667 White Armani x " + windowitemnum[1] +' = RM' +windowtotal[1];

    }
  }
  if(windowitemnum[2]>=0)
  {
    if(windowitemnum[2]==0)
    {
      document.getElementById('window3').innerHTML ="";
    }
    else{
    windowtotal[2]=windowitemnum[2]*520;
    document.getElementById('window3').innerHTML =
    "&#8667 Roll Up White x " + windowitemnum[2] +' = RM' +windowtotal[2];

    }
  }
  if(windowitemnum[3]>=0)
  {
    if(windowitemnum[3]==0)
    {
      document.getElementById('window4').innerHTML ="";
    }
    else{
      windowtotal[3]=windowitemnum[3]*480;
      document.getElementById('window4').innerHTML =
      "&#8667 Flip Up x " + windowitemnum[3] +' = RM' +windowtotal[3];

    }

  }
  if(windowitemnum[4]>=0)
  {
    if(windowitemnum[4]==0)
    {
      document.getElementById('window5').innerHTML ="";
    }
    else{
      windowtotal[4]=windowitemnum[4]*540;
      document.getElementById('window5').innerHTML =
      "&#8667 White Blue x " + windowitemnum[4] +' = RM' +windowtotal[4];

    }

  }
  if(windowitemnum[5]>=0)
  {
    if(windowitemnum[5]==0)
    {
      document.getElementById('window6').innerHTML ="";
    }
    else{
      windowtotal[5]=windowitemnum[5]*520;
      document.getElementById('window6').innerHTML =
      "&#8667 Folded Black x " + windowitemnum[5] +' = RM' +windowtotal[5];

    }

  }
  //----------------------------------------------frame item display
  var frameitemnum=[-1,-1,-1,-1,-1,-1];
  frameitemnum[0]=document.getElementById('fitem1').value;
  frameitemnum[1]=document.getElementById('fitem2').value;
  frameitemnum[2]=document.getElementById('fitem3').value;
  frameitemnum[3]=document.getElementById('fitem4').value;
  frameitemnum[4]=document.getElementById('fitem5').value;
  frameitemnum[5]=document.getElementById('fitem6').value;
  var frametotal=[0,0,0,0,0,0];
  if(frameitemnum[0]>=0||frameitemnum[1]>=0||frameitemnum[2]>=0||frameitemnum[3]>=0||frameitemnum[4]>=0||frameitemnum[5]>=0)
  {
    document.getElementById('frameheader').innerHTML =
    "<br /><br /><br /> FRAME CATEGORIES ";
  }

  if(frameitemnum[0]>=0)
  {
    if(frameitemnum[0]==0)
    {
      document.getElementById('frame1').innerHTML ="";
    }
    else{
      frametotal[0]=frameitemnum[0]*5;
      document.getElementById('frame1').innerHTML =
      "&#8667 Dark Silver x " + frameitemnum[0] +' = RM' +frametotal[0];

    }

  }
  if(frameitemnum[1]>=0)
  {
    if(frameitemnum[1]==0)
    {
      document.getElementById('frame2').innerHTML ="";
    }
    else{
    frametotal[1]=frameitemnum[1]*7;
    document.getElementById('frame2').innerHTML =
    "&#8667 Dotted-line Brown x " + frameitemnum[1] +' = RM' +frametotal[1];

    }
  }
  if(frameitemnum[2]>=0)
  {
    if(frameitemnum[2]==0)
    {
      document.getElementById('frame3').innerHTML ="";
    }
    else{
    frametotal[2]=frameitemnum[2]*8;
    document.getElementById('frame3').innerHTML =
    "&#8667 Dark-brick Alumininum x " + frameitemnum[2] +' = RM' +frametotal[2];

    }
  }
  if(frameitemnum[3]>=0)
  {
    if(frameitemnum[3]==0)
    {
      document.getElementById('frame4').innerHTML ="";
    }
    else{
      frametotal[3]=frameitemnum[3]*12;
      document.getElementById('frame4').innerHTML =
      "&#8667 Silver Column x " + frameitemnum[3] +' = RM' +frametotal[3];

    }

  }
  if(frameitemnum[4]>=0)
  {
    if(frameitemnum[4]==0)
    {
      document.getElementById('frame5').innerHTML ="";
    }
    else{
      frametotal[4]=frameitemnum[4]*9;
      document.getElementById('frame5').innerHTML =
      "&#8667 White Clear x " + frameitemnum[4] +' = RM' +frametotal[4];

    }

  }
  if(frameitemnum[5]>=0)
  {
    if(frameitemnum[5]==0)
    {
      document.getElementById('frame6').innerHTML ="";
    }
    else{
      frametotal[5]=frameitemnum[5]*4;
      document.getElementById('frame6').innerHTML =
      "&#8667 Classic Silver x " + frameitemnum[5] +' = RM' +frametotal[5];

    }

  }

  if(frameitemnum[0]>0 || dooritemnum[0]>0 || windowitemnum[0]>0 || itemnum[0]>0){
    alert("Item is added to cart, please check");
  }
}
