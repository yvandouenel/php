console.log('dans voicecup.js');

window.onload = () => {
    console.log('dans voicecup.js');

    const form = document.getElementById("form");
    form.onsubmit = (e) => {
      e.preventDefault();
      let word = e.target.querySelector("#word").value;
      console.log('word = ' + word);  
    }
}