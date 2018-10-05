var imgs = ['assets/images/memory/logo_EPSI.jpg',
            'assets/images/memory/logo_IDRAC.jpg',
            'assets/images/memory/logo_IFAG.jpg',
            'assets/images/memory/logo_IGEFI.jpg',
            'assets/images/memory/logo_OPENSOURCESCHOOL.jpg',
            'assets/images/memory/logo_SUPDECOM.jpg',
            'assets/images/memory/logo_WIS.png',
            'assets/images/memory/logoHEP.jpg'
          ];
var discovered = [];
var last = null;
var attempt = null;

// return a new tab with imgs shuffled and multiply by 2
function shuffle(tab){
  // clone tab
  var clone = tab.slice(0);
  var res = [];
  while(clone.length !== 0){
    // random number between 0 an tab size
    var nb = Math.floor(Math.random()*clone.length);
    var img = clone[nb];
    if(res.indexOf(clone[nb]) !== -1){
      clone.splice(nb, 1);
    }
    res.push(img);
  }
  return res;
}


// foreach elements in tab, create an image in the selected dom element
function populate(tab, domElement){
  tab.forEach(function(elem){
    var img = document.createElement('img');
    var container = document.createElement('figure');
    img.src = elem;
    img.className = 'hide';
    container.appendChild(img);
    domElement.appendChild(container);

    container.addEventListener('click', gameLogic);
  });
}

function fin()
{
    document.getElementById('messageFin').style.display = 'block';
    setInterval(function(){ location.href = 'ecoles.html'; }, 5000);
}

// game logic on click
function gameLogic(e){
  var img = e.currentTarget.childNodes[0];

  // if the image is already discovered, return
  if(discovered.indexOf(img.src) !== -1) return;

  // you can't open more than 2 images (attemps is not null for x seconds when we failed an attempt)
  if(attempt !== null) return;

  // show image
  img.className = 'show';

  // first image to flip, store it
  if(last === null){
    last = img;
  }
  else if(last === img){
    return;
  }
  // not the first, compare it with last flipped.
  // if it is the same, add it to discovered images
  else if(last.src === img.src){
    img.parentNode.className = 'good';
    last.parentNode.className = 'good';
    discovered.push(img.src);
    last = null;
    if(discovered.length === imgs.length){
        
        fin();
    }
  } // not the same, wait before flip back
  else{
    attempt = img;
    setTimeout(function(){
      last.className = 'hide';
      img.className = 'hide';
      last = null;
      attempt = null;
    }, 1000);
  }
}

populate(shuffle(imgs), document.getElementById('board'));
