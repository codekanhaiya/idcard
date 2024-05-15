var AppClass = function() {
  var appstate = {
    target: 'confetti-holder',
    max: 200,
    size: 2,
    animate: true,
    props: ['circle', 'square', 'triangle', 'line', {type:'svg', src:'img/hat.svg', weight: 0.2, size: 20}],
    colors: [[165,104,246],[230,61,135],[0,199,228],[253,214,126]],
    clock: 25,
    rotate: true,
    width: window.innerWidth,
    height: window.innerHeight,
    start_from_edge: true,
    respawn: false
  };

  var confetti = null;

  var start = function() {
    confetti = new ConfettiGenerator(appstate);
    confetti.start();
  };

  var clear = function(){
    confetti.clear();
  }

  return {
    start: start,
    clear:clear
  };


}


var app = null;


const startit = () => {
  setTimeout(function(){
    console.log("Start");
    
      app = new AppClass();
      app.start();

  },1);
};

const stopit = () =>{
  setTimeout(function(){
    console.log("Stop");
 
    app.clear(); 
     
  },8000);
};


window.onload = function(){
  startit();
  stopit();
}
