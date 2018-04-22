 
inc_thumbnails_js =
'<script type="text/javascript" >\n\nfunction LoadGallery(i'
+ 'mageFile) {\n  var theImage = document.getElementById(\'Ma'
+ 'inImage\');\n  if(theImage) {\n    if(document.all) {\n     '
+ ' theImage.style.filter="blendTrans(duration=0.5)";\n     '
+ ' theImage.filters.blendTrans.Apply();\n    }\n    theImage'
+ '.src = imageFile;\n    if(document.all) theImage.filters.'
+ 'blendTrans.Play();\n  }\n}\n\n</script>';
 
// end_var_declaration
document.write(inc_thumbnails_js);