Util.Objects["front"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {
			// u.bug("scene.resized:", this);
		}

		scene.scrolled = function() {
			// u.bug("scene.scrolled:", this);
		}

		scene.ready = function() {
			// u.bug("scene.ready:", this);
			var newP = document.createElement('P');
			newP.innerHTML = 'This is the Smart Phone part of assignment : 406';
			this.appendChild(newP);
			console.log('Smart Phone');
		}

		// scene is ready
		scene.ready();
	}
}
