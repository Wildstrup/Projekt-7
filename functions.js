let navSlide = () => {
  let burgerMenu = document.querySelector('.burgerMenu');
  let nav = document.querySelector('.navLinks')
  let navLinks = document.querySelectorAll('navLinks li')

  burgerMenu.addEventListener('click', () => {
    nav.classList.toggle('navActive');
    burgerMenu.classList.toggle('toggle');
  });
}

navSlide();


var checkBox = document.getElementById("#checkBox");
var hiddenInputs = document.getElementsById('hidden');

for(var i = 0; != hiddenInputs.length; i++) {
  if(checkBox.checked) {
    hiddenInputs[i].style.display = "block";
  } else {
    hiddenInputs[i].style.display = "none";
  }
}


let submit = document.querySelector('.noteSubmit');
let noteList = document.querySelector('.notes');
let noteInput = document.querySelector('.noteInput');

function template(data) {
  noteList.insertAdjacentHTML("beforeend",`
  <div class="notes">
    <div class="note flex itemsStart justifyStart">
      <div class="flex1">
        <h3 class="yourNote">${data.yourNote}</h3>
        <div class="noteBody">${data.note}</div>
      </div>
    </div>
  `);
}

function appendNote(event) {
  let data = {
    note: noteInput.value,
    yourNote: "Note"
  }
  event.preventDefault();

  if (noteInput.value.length < 1) return;

  template(data);

  noteInput.value = "";

  localStorage.setItem('noteListing', noteList.innerHTML);
}

submit.addEventListener('click', appendNote, false);


let saved = localStorage.getItem('noteListing');

if (saved) {
  noteList.innerHTML = saved;
}
