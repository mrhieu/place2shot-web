(function () {
    /* Imports */
    var $j = this.JpegMeta.JpegFile;

    /* Implementation */
    function $(x) {
        return document.getElementById(x);
    }

    function dragEnterHandler(e) {
	e.preventDefault();
    }

    function dragOverHandler(e) {
	e.preventDefault();
    }

    function dropHandler(e) {
	e.preventDefault();
	loadFiles(e.dataTransfer.files);
    }

    function strComp(a, b) {
	return (a > b) ? 1 : (a == b) ? 0 : -1;
    }

    function loadFiles(files) {
	var dataurl_reader = new FileReader();

	function display(data, filename) {
	    var jpeg = new $j(data, filename);
	    var groups = new Array;
	    var props;
	    var group;
	    var prop;

	    if (jpeg.gps && jpeg.gps.longitude) {
		//set default
		
		document.getElementById("latitude").value="";
		document.getElementById("longtitude").value="";
		document.getElementById("latitude").value=jpeg.gps.latitude;
		document.getElementById("longtitude").value=jpeg.gps.longitude;
	    
		}

	    for (group in jpeg.metaGroups) {
                if (jpeg.metaGroups.hasOwnProperty(group)) {
		    groups.push(jpeg.metaGroups[group]);
                }
	    }

	    groups.sort(function (a, b) {
		if (a.description == "General") {
		    return -1;
		} else if (b.description == "General") {
		    return 1;
		} else {
		    return strComp(a.description, b.description);
		}
	    });

	    document.getElementById('aperture').value="";
		document.getElementById('focal_length').value="";
		document.getElementById('iso').value="";
		document.getElementById('shutter_speed').value="";
		document.getElementById('taken').value="";
		document.getElementById('camera').value="";
               for (var i = 0; i < groups.length; i++) {
                group = groups[i];
		props = new Array();
		
		if(group.description=="Exif")
		{
			for (prop in group.metaProps) {
						if (group.metaProps.hasOwnProperty(prop)) {
					props.push(group.metaProps[prop]);
						}
			}
			props.sort(function (a, b) { return strComp(a.description, b.description); });
			for (var j = 0; j < props.length; j++) {
						prop = props[j];
				if(prop.description=="Aperture Value")  document.getElementById('aperture').value=prop.value;
				if(prop.description=="Focal Length") document.getElementById('focal_length').value=prop.value;
				if(prop.description=="ISO Speed Ratings") document.getElementById('iso').value=prop.value;
				if(prop.description=="Shutter Speed") document.getElementById('shutter_speed').value=prop.value;
			}
		}
		if(group.description=="TIFF")
		{
			for (prop in group.metaProps) {
						if (group.metaProps.hasOwnProperty(prop)) {
					props.push(group.metaProps[prop]);
						}
			}
			props.sort(function (a, b) { return strComp(a.description, b.description); });
			for (var j = 0; j < props.length; j++) {
						prop = props[j];
				if(prop.description=="Date and time") document.getElementById('taken').value=prop.value;
				if(prop.description=="Model") document.getElementById('camera').value=prop.value;
			}
		}
	    }
		//
	    
	}

	dataurl_reader.onloadend = function() {
	    $("thumbimage").src = this.result;
            display(atob(this.result.replace(/^.*?,/,'')), files[0]);
			//initialize();
	}

	$("status").innerHTML = "";
	$("thumbimage").src = "";
	dataurl_reader.readAsDataURL(files[0]);
	$("form_upload").reset();
    }

    window.onload = function() {
	var drop_el = $("dropbox");
	var file_el = $("uploadfile");
	drop_el.addEventListener("dragenter", dragEnterHandler, false);
	drop_el.addEventListener("dragover", dragOverHandler, true);
	drop_el.addEventListener("drop", dropHandler, true);
	file_el.addEventListener("change", function() { loadFiles(this.files); }, true);
    }
    /* No exports */
})();
