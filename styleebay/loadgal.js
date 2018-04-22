// JavaScript Document
function LoadGallery(imageFile) {
  var theImage = document.getElementById('MainImage');
  if(theImage) {
    if(document.all) {
      theImage.style.filter="blendTrans(duration=0.5)";
      theImage.filters.blendTrans.Apply();
    }
    theImage.src = imageFile;
    if(document.all) theImage.filters.blendTrans.Play();
  }
}