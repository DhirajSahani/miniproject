( function( api ) {

	// Extends our custom "real-estate-manager" section.
	api.sectionConstructor['real-estate-manager'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );