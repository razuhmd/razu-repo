Util.Objects["razu"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {
			// u.bug("scene.resized:", this);
		}

		scene.scrolled = function() {
			// u.bug("scene.scrolled:", this);
		}

		scene.ready = function() {
			u.bug("scene.ready:", this);
			console.log('Ready method');
			var newP = document.createElement('p');
			this.appendChild(newP);
			newP.innerHTML = 'i-razu.js: this is a ready method test for assignment 406: there is a mistake in the parameter description: the corrected one is : /?dev=1';
			// var getArticlebody = document.querySelector('div.articlebody');
			// console.log(getArticlebody);
			// getArticlebody.appendChild(newP);

		}

		// scene is ready
		scene.ready();
	}
}
