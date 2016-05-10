function initial(){
	isOver();
	isVote();
	isHotVote();
}
function isOver(){
	var id=	getCookie("nowSinger");
	
	var all_info=document.getElementById('all_info');
	var finish=document.getElementById('finish');
	if(id==-1){
		finish.style.display = "block";
		all_info.style.display="none";
	}
}
function isVote(){
	var id=	getCookie("nowSinger");
	var voteForm=document.getElementById('voteForm');
	if(getCookie("hasVote")==id){
		voteForm.style.display="none";
	}
}
function isHotVote(){
	var id=	getCookie("nowSinger");
	var voteForm=document.getElementById('hotVote');
	if(getCookie("hasHotVote")==id){
		voteForm.style.display="none";
	}
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
