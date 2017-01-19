/*
 *
 * Pet Adoption Toolkit
 * Provided by RescueGroups.org
 * Free of cost, advertising, or links to 3rd party websites
 *
 * Learn more about us and our unique approach:
 *
 * https://www.rescuegroups.org
 *
 */

// Determine if this is the first time the Toolkit
// has been included, and if so, write the includes

if (typeof toolkitObjects === 'undefined') {

	newToolkitIndex = 0;
	var toolkitObjects = new Array();
	toolkitObjects['toolkitUrl'] = '//toolkit.rescuegroups.org';
	toolkitObjects['toolkitCount'] = 1;

	if (typeof jQuery != 'undefined')
		var preExisting = true;

	// Include the common includes like jquery, hashchange, etc
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>');
	document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>');
	document.write('<script src="//s3.amazonaws.com/filestore.rescuegroups.org/scripts/noncvs/jquery.ba-hashchange.min.js" type="text/javascript"></script>');
	document.write('<script src="//s3.amazonaws.com/filestore.rescuegroups.org/scripts/noncvs/jquery.cookie.js" type="text/javascript"></script>');

	document.write('<link rel="stylesheet" href="//s3.amazonaws.com/filestore.rescuegroups.org/scripts/noncvs/prettyphoto/css/prettyPhoto.css?a0038" type="text/css" media="screen" charset="utf-8" />');
	document.write('<script src="//s3.amazonaws.com/filestore.rescuegroups.org/scripts/noncvs/prettyphoto/js/jquery.prettyPhoto.js?a0038" type="text/javascript" charset="utf-8"></script>');

	document.write('<script src="https://toolkit.rescuegroups.org/j/3/toolkit_utils.js" type="text/javascript"></script>');

} else {

	newToolkitIndex = toolkitObjects.length;
	toolkitObjects['toolkitCount']++;

}

toolkitObjects[newToolkitIndex] = new Array();
toolkitObjects[newToolkitIndex]['toolkitKey'] = '5j9XGuDZ';
toolkitObjects[newToolkitIndex]['toolkitKeyID'] = '4588';
toolkitObjects[newToolkitIndex]['toolkitLayout'] = 'random1';
toolkitObjects[newToolkitIndex]['toolkitPet'] = 'pet1';
toolkitObjects[newToolkitIndex]['petPage'] = 'Inline';
toolkitObjects[newToolkitIndex]['defaultPostalCode'] = '85716';

document.write('<link media="screen, projection" href="https://toolkit.rescuegroups.org/j/3/5j9XGuDZ/styles.css" type=text/css rel=stylesheet>');

document.write('<div class="rgtkMainContainer rgtk-5j9XGuDZ" id="rgtkMainContainer_'+newToolkitIndex+'">');

document.write('<div class="rgtkSearchContainer" id="rgtkSearchContainer_'+newToolkitIndex+'"></div>');
document.write('<div class="rgtkPetContainer" id="rgtkPetContainer_'+newToolkitIndex+'" style="display:none;"></div>');

document.write('</div>');






// Use the variables from the URL to include the template specific files
document.write('<script src="https://toolkit.rescuegroups.org/j/3/random1_layout.js" type="text/javascript"></script>');
document.write('<script src="https://toolkit.rescuegroups.org/j/3/pet1_layout.js" type="text/javascript"></script>');
