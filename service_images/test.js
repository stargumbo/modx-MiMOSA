console.log('================================== global click tracking loaded ================================');
try {

  function upToDiv(el) {
    //console.log(el);
    //console.log(el.parentElement);
    //console.log(el.parentElement.nodeName == "DIV");
    if (el.parentElement.nodeName == "DIV") {
      if(!el.parentElement.id){
        //console.log(el.parentElement.className);
        return el.parentElement.className;
      }
      //console.log(el.parentElement.id);
      return el.parentElement.id;
    }
    return upToDiv(el.parentElement);
  }
  var selectAll = document.querySelectorAll('a');
  for(var i=0; i<selectAll.length;i++){
    selectAll[i].addEventListener("mousedown", function(e){
        linkClicked = e.target.text;
        //console.log('text: ' + e.target.text);
        //console.log('target: ' + e.target);
        if(!e.target.text){
          linkClicked = e.target.alt;
          //console.log('alt: ' + e.target.alt);
          if(!e.target.alt){
            linkClicked = e.target.src;
            //console.log('src: ' + e.target.src);
          }

          if(!e.target.src){
            linkClicked = jQuery(this).text();
          }
        }

        sessionStorage['linkClicked'] = linkClicked;
        //console.log(upToDiv(e.target));
        sessionStorage['positionClicked'] = upToDiv(e.target);
        sessionStorage['prevPageName'] = s.pageName;

        // suppress calls
        if (s.linkObject && s.linkURL && s.linkType === 'e') {
          // do nothing
        } else {
          alert('test action');
          s.linkTrackVars= 'prop4,eVar3,prop5,events';
          s.linkTrackEvents="event221";
          s.prop5=upToDiv(e.target);
          s.eVar3=s.prop4=linkClicked;
          s.tl(this,'o',linkClicked);

        }


      }
    );
  };


} catch(e) {
  // do nothing
  console.log(' === error found in catch for global click tracking === ');
}


(function specData() {
  const myEl = $('.text-link');
  myEl.addEventListener('click', function() {
    alert("clicked!");
    const spanVal = $(this).children('span').valueOf();
    console.log(spanVal);
    event.preventDefault();
  });
})();

var navElements = document.querySelectorAll('.text-link');
//looping through each anchor element
navElements.forEach(function(element){
  var shitlevel = null;
  shitlevel = element.getAttribute('on-click-go-ac');
  if (shitlevel != null) {
    alert('fart');
  }
  //adding click event on each anchor element
  element.addEventListener('click',function(e){
    //stop default behaviour
    alert("ac!")
    e.preventDefault();
    //select current active element
    // let active = document.querySelector('.selected');
    // active.classList.remove('selected'); //remove class
    // this.classList.add('selected'); //add class to current click element
  });
});

$('span').filter(function() {
  for (var property in $(this).data()) {
    if (property.indexOf('on-click-go') == 0) {
      console.log('found!');
      return true;
    }
  }

  return false;
});​

document.querySelectorAll('[on-click-go]');




function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, '\\$&');
  const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

const pflocation = getParameterByName('pflocation');
const queryVal = getParameterByName('query');
const departmentVal = getParameterByName('department');
const brandVal = getParameterByName('brand');
const locationVal = getParameterByName('location');

const pipeList = pflocation + '|' + queryVal + '|' + departmentVal + '|' + brandVal + '|' + locationVal;

s.eVar6=pipeList;



https://spreadsheets.google.com/feeds/list/1fdLxfdzL2qOSOJBYi2hdCvFkWF7fjaxqxb4Vvw4g4oY/public/values?alt=json


  FROM python:3.6-stretch
LABEL maintainer="Marc Sharma <marc.sharma@cbsi.com>"
WORKDIR /usr/src/app

RUN mkdir -p /usr/src/models/
# ADD https://conceptnet.s3.amazonaws.com/downloads/2017/numberbatch/numberbatch-en-17.06.txt.gz /usr/src/models/numberbatch-en-17.06.txt.gz
  COPY gs://i-amlg-dev/amlg-dev-packages/numberbatch/conceptnet_vectors /usr/src/models/conceptnet_vectors
  COPY gs://i-amlg-dev/amlg-dev-packages/numberbatch/conceptnet_vectors.syn0.npy /usr/src/models/conceptnet_vectors.syn0.npy
  COPY requirements.txt .
  RUN pip install --no-cache-dir -r requirements.txt
COPY . .
  CMD [ "python", "run_genreco.py" ]





