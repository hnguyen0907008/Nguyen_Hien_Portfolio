(() => {
	console.log('fired');
	let changeButton = document.querySelector('#changeColor'),
		background = document.querySelector('body');


	function changeColor()
	{
		background.style.backgroundColor = "#262687";
	};

	changeButton.addEventListener('click', changeColor);
	changeButton.addEventListener("mouseover", function(e){
		e.target.style.color = "yellow";
	};
})();