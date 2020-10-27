var id = setInterval(frame, 5);

function frame() {
  if (/* test for finished */1) {
    clearInterval(id);
  } else {
    /* code to change the element style */ 
  }
}

function change() {
    var elem = document.getElementById("animate");
    var pos = 0;
    var id = setInterval(frame, 5);
    function frame() {
      if (pos == 350) {
        clearInterval(id);
      } else {
        pos++;
        elem.style.top = pos + 'px';
        elem.style.left = pos + 'px';
      }
    }
  }
  function synevent(){
    var ev=new Event("ss");
    var ev=new CustomEvent("ss",{
        detail:
        {
            firstname:"madhu"
        }
    })
    btn=document.getElementById("demo");
    btn.addEventListener("ss",fn1,false);
    btn.dispatchEvent(ev);
}

function call(){
    document.body.addEventListener("keydown",fn1,false);
            document.body.addEventListener("keypress",fn2,false);
            document.body.addEventListener("keyup",fn3,false);
            function fn1(e){
                console.log(e);
                console.log("keydown",+e.keyCode);
                console.log("keydown",e.keyCode);
            }
            function fn2(e){
                console.log("keypress",e.keyCode);
            }
            function fn3(e){
                console.log("keyup",e.keyCode);
                console.log("keypress",e.shiftKey);
            }
}

function synevent(){
    var ev=new Event('ss');
    btn=document.getElementById("demo");
    btn.addEventListener("ss",fn1,false);
    btn.dispatchEvent(ev);
}

function time()
{
    var time = 1000;
        function fn1() {
            time = time+1000;
            var d = new Date();
            document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
        function fn2() {
            var d = new Date();
            document.getElementById("demo").innerHTML = d.toLocaleTimeString();
        }
}