var i = 0
var img = []

img[0] = "https://images.pexels.com/photos/45170/kittens-cat-cat-puppy-rush-45170.jpeg?auto=compress&cs=tinysrgb&w=1600"
img[1] = "https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=1600"
img[2] = "https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=1600"
img[3] = "https://images.pexels.com/photos/96428/pexels-photo-96428.jpeg?auto=compress&cs=tinysrgb&w=1600"
img[4] = "https://images.pexels.com/photos/774731/pexels-photo-774731.jpeg?auto=compress&cs=tinysrgb&w=1600"
img[5] = "https://images.pexels.com/photos/160755/kittens-cats-foster-playing-160755.jpeg?auto=compress&cs=tinysrgb&w=1600"

function Slide(){
    document.getElementById("img").style = "background-image: url("+ img[i] +");"
    if(i < img.length-1){
        i++;
    }else{
        i=0;
    }

    setTimeout("Slide()", 4000);
}

window.onload=Slide;