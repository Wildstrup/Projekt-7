// Navigation
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

// Note system
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

// Show and hide calendar
var x;
function show_hide() {
  if(x==1) {
    document.getElementById("hidden").style.display="block";
    return x=0;
  } else {
    document.getElementById("hidden").style.display="none";
    return x=1;
  }
}
