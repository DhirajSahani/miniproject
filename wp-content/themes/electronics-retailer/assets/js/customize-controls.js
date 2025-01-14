( function( api ) {

	// Extends our custom "electronics-retailer" section.
	api.sectionConstructor['electronics-retailer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );