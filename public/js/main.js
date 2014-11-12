$(document).ready(function () {
	var listUser = $('.list-group-item');

	listUser.on('click', function (e) {
		e.preventDefault();
		for (u in listUser.toArray()){
			listUser[u].className = "list-group-item";
			if (listUser[u] === this){
				this.className = "list-group-item active";
				$('#username').val(this.innerText);
			}
		}
	})
})