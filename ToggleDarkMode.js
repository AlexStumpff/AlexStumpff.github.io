  function changeBackgroundColor() {
    const body = document.querySelector('body');
    const randomColor = getRandomColor();
    body.style.backgroundColor = randomColor;
  }
  
  function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  var mode = 1;
  function changeBackgroundMode() {
    const body = document.querySelector('body');
    if (mode == 1){
        body.style.backgroundColor = "#0b0b0b";
        mode = 0
    } else {
        body.style.backgroundColor = "#fff";
        mode = 1
    }

  }