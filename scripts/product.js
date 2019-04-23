function getMoreDetail(obj) {
	window.location.href = obj+'.html';
}

function findOutMore(obj) {
	var link = 'https://www.google.com/search?tbm=isch&q='+obj
	window.open(link, '_blank');
}