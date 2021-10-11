$(document).ready(function(){
    $("#fileToUpload").change(function(e){
        alert(e.target.files[0].name);
        $("#avatar").attr('src','IMG/'+e.target.files[0].name);
    })
})
