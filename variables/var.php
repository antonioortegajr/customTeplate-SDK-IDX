<?php
//{% import "detailsTools-1.000.twig" as idx %} is required
//{{ listingID }}
$listingID = 'M1430028';

//{{ address }}
$address = '5353 SW 60 PL';

//{{ streetNumber }}
$streetNumber = '5353';

//{{ streetDirection }}
$streetDirection = 'N';

//{{ streetName }}
$streetName = 'fake';

//{{ unitNumber }}
$unitNumber = '1';

//{{ cityName }}
$cityName = 'Miami Beach';

//{{ stateAbrv }}
$stateAbrv = 'FL';

//{{ state }}
$state = 'Florida';

//{{ zipcode }}
$zipcode = '33140-4224';

//{{ tools.fieldNew('bedrooms', {labelAfter:true}) }}
$bedRooms = '<div id="IDX-detailsField-bedrooms" class="IDX-detailsField"><span class="IDX-fieldData">3</span> <span class="IDX-fieldLabel">Bedrooms</span></div>';

//{{ tools.fieldNew('fullBaths', {labelAfter:true}) }}
$fullBaths = '<div id="IDX-detailsField-fullBaths" class="IDX-detailsField"><span class="IDX-fieldData">2</span> <span class="IDX-fieldLabel">Full Baths</span></div>';

//{{ propStatus }}
$propStatus = 'A';

//{{ priceLabel }}
$priceLabel = 'Rental Price';

//{{ priceDisplay }}
$priceDisplay = '$100,000';

//{{ moreInfoLink }}
$moreInfoLink = 'http://eugenewebdevs.idxsandbox.com/idx/moreinfo/a000/M1430028';

//{{ scheduleShowingLink }}
$scheduleShowingLink  = 'http://eugenewebdevs.idxsandbox.com/idx/scheduleshowing/a000/M1430028';

//{{ idx.photoGalleryLink }}
$photoGalleryLink = 'http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1367782';

//{{ idx.photo('single') }}
$photoSingle = '<div id="IDX-detailsPropertyPhoto" class="IDX-detailsPhoto">
					<div id="IDX-primaryPhoto" class="IDX-detailsPhotoWrap">
		<a href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028"><img src="http://mlsphotos.idxbroker.com/a000/exterior/a000-sampleImage011.jpg" id="IDX-detailsPhoto"></a>
	</div>
				<div id="IDX-detailsGalleryLink"><a id="IDX-photoGalleryLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028">View Photo Gallery<span id="IDX-photoGalleryCount"> (7)</span></a></div>


	</div>';

//{{ idx.photo('three') }}
$photoThree = '<div id="IDX-detailsPropertyPhoto" class="IDX-detailsPhoto">
					<div id="IDX-detailsPhotoThree" class="IDX-detailsPhotoWrap">
								<a class="IDX-detailsPhotoLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028"><img src="http://mlsphotos.idxbroker.com/a000/exterior/a000-sampleImage011.jpg" id="IDX-threePhoto-1" class="IDX-threePhoto IDX-detailsPhoto"></a>
										<a class="IDX-detailsPhotoLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028"><img src="http://mlsphotos.idxbroker.com/a000/exterior/a000-sampleImage013.jpg" id="IDX-threePhoto-2" class="IDX-threePhoto IDX-detailsPhoto"></a>
										<a class="IDX-detailsPhotoLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028"><img src="http://mlsphotos.idxbroker.com/a000/exterior/a000-sampleImage006.jpg" id="IDX-threePhoto-3" class="IDX-threePhoto IDX-detailsPhoto"></a>
				</div>
		<div id="IDX-detailsGalleryLink"><a id="IDX-photoGalleryLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028">View Photo Gallery<span id="IDX-photoGalleryCount"> (7)</span></a></div>


	</div>';

//{{ idx.photo('gallery') }}
$photoGallery = '<div id="IDX-detailsPropertyPhoto" class="IDX-detailsPhoto">
					<div id="IDX-primaryPhoto" class="IDX-detailsPhotoWrap">
		<a href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028"><img src="http://mlsphotos.idxbroker.com/a000/exterior/a000-sampleImage011.jpg" id="IDX-detailsPhoto"></a>
	</div>
				<div id="IDX-detailsGalleryLink"><a id="IDX-photoGalleryLink" href="http://eugenewebdevs.idxsandbox.com/idx/photogallery/a000/M1430028">View Photo Gallery<span id="IDX-photoGalleryCount"> (7)</span></a></div>


	</div>';

//{{ idx.remarks }}
$remarks = 'Experience this artist\'s retreat on an almost one-acre lush property with ponds and pathways. Designed by renowned architect Gail Bryon Baldwin, this house is unique--an open,light and airy escape. At the foot of a cul-de-sac road, the property is five minutes from downtown South Miami, but a world away from all the hustle and bustle. Pass through the Koi Gardens iron gate and you\'ll find yourself in a resort-like setting, complete with pool deck and a sun-tanning balcony that overlooks it all.';

//{{ idx.map }}
$map = '<div id="IDX-detailsMap">
			<div id="IDX-map" class="IDX-detailsMap leaflet-container leaflet-fade-anim" data-lat="25.720399007501" data-lng="-80.292021640255" data-price="720000" data-idxstatus="active" data-idxid="" data-listingid="M1367782" data-mlsptid="1" data-propcat="active" tabindex="0" style="overflow: hidden;"><div class="leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-tile-pane"><div class="leaflet-layer" style="z-index: 1;"><div class="leaflet-tile-container"></div><div class="leaflet-tile-container leaflet-zoom-animated"><img class="leaflet-tile leaflet-tile-loaded" src="http://b.tiles.mapbox.com/v4/mapquest.streets/13/2268/3489.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 291px; top: 192px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://c.tiles.mapbox.com/v4/mapquest.streets/13/2268/3490.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 291px; top: 448px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://a.tiles.mapbox.com/v4/mapquest.streets/13/2267/3489.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 35px; top: 192px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://c.tiles.mapbox.com/v4/mapquest.streets/13/2269/3489.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 547px; top: 192px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://b.tiles.mapbox.com/v4/mapquest.streets/13/2267/3490.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 35px; top: 448px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://d.tiles.mapbox.com/v4/mapquest.streets/13/2269/3490.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 547px; top: 448px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://d.tiles.mapbox.com/v4/mapquest.streets/13/2268/3491.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 291px; top: 704px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://a.tiles.mapbox.com/v4/mapquest.streets/13/2268/3488.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 291px; top: -64px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://d.tiles.mapbox.com/v4/mapquest.streets/13/2267/3488.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 35px; top: -64px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://b.tiles.mapbox.com/v4/mapquest.streets/13/2269/3488.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 547px; top: -64px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://c.tiles.mapbox.com/v4/mapquest.streets/13/2267/3491.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 35px; top: 704px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://a.tiles.mapbox.com/v4/mapquest.streets/13/2269/3491.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 547px; top: 704px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://a.tiles.mapbox.com/v4/mapquest.streets/13/2270/3490.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 803px; top: 448px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://d.tiles.mapbox.com/v4/mapquest.streets/13/2270/3489.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 803px; top: 192px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://d.tiles.mapbox.com/v4/mapquest.streets/13/2266/3489.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: -221px; top: 192px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://a.tiles.mapbox.com/v4/mapquest.streets/13/2266/3490.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: -221px; top: 448px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://c.tiles.mapbox.com/v4/mapquest.streets/13/2266/3488.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: -221px; top: -64px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://c.tiles.mapbox.com/v4/mapquest.streets/13/2270/3488.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 803px; top: -64px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://b.tiles.mapbox.com/v4/mapquest.streets/13/2266/3491.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: -221px; top: 704px;"><img class="leaflet-tile leaflet-tile-loaded" src="http://b.tiles.mapbox.com/v4/mapquest.streets/13/2270/3491.png?access_token=pk.eyJ1IjoibWFwcXVlc3QiLCJhIjoiY2Q2N2RlMmNhY2NiZTRkMzlmZjJmZDk0NWU0ZGJlNTMifQ.mPRiEubbajc6a5y9ISgydg" style="height: 256px; width: 256px; left: 803px; top: 704px;"></div></div></div><div class="leaflet-objects-pane"><div class="leaflet-shadow-pane"></div><div class="leaflet-overlay-pane"></div><div class="leaflet-marker-pane"><img src="//staticos.idxsandbox.com/images/pins/map_blueHouse2.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-clickable" tabindex="0" style="margin-left: -8px; margin-top: -16px; width: 16px; height: 16px; transform: translate3d(524px, 450px, 0px); z-index: 450;"></div><div class="leaflet-popup-pane"></div></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out">-</a></div><div class="leaflet-control-layers leaflet-control" aria-haspopup="true"><a class="leaflet-control-layers-toggle" href="#" title="Layers"></a><form class="leaflet-control-layers-list"><div class="leaflet-control-layers-base"><label><input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers" checked="checked"><span> Map</span></label><label><input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers"><span> Satellite</span></label><label><input type="radio" class="leaflet-control-layers-selector" name="leaflet-base-layers"><span> Hybrid</span></label></div><div class="leaflet-control-layers-separator" style="display: none;"></div><div class="leaflet-control-layers-overlays"></div></form></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"><div class="mq-logo-control leaflet-control"><img src="http://content.mqcdn.com/sdk/leaflet/v2.2/images/questy_sm.png" width="100" height="20"></div></div><div class="leaflet-bottom leaflet-right"><div class="mq-attribution-control leaflet-control">©2017&nbsp;MapQuest,&nbsp;<a href="http://hello.mapquest.com/attributions-mapbox">© Mapbox</a>,&nbsp;© TomTom | <a id="terms" class="termsLink" target="_blank" href="http://hello.mapquest.com/terms-of-use">Terms</a></div><div class="leaflet-control-attribution leaflet-control"></div></div></div></div>
		</div>';

	//{{ tools.fieldContainers }}
    $advancedFields = '<div id="IDX-fieldsWrapper">

		<div id="IDX-detailsContainer-a000-1-1" class="IDX-fieldContainer IDX-fieldTwoColumn" data-role="collapsible" data-collapsed="false">
			<h3 class="IDX-fieldContainerTitle">Basic Features</h3>
						<div class="IDX-fieldContainerList IDX-fieldContainerListLeft">



																			<div id="IDX-field-countyName"><strong>County:</strong>
						<span class="IDX-fieldData">
													Miami-Dade
												</span>
					</div>

																			<div id="IDX-field-HeatCool"><strong>Heat/Cool:</strong>
						<span class="IDX-fieldData">
													Central air conditioning, Central heat, Electric heating
												</span>
					</div>

																			<div id="IDX-field-Interior"><strong>Interior:</strong>
						<span class="IDX-fieldData">
													Intercom system, Vaulted ceilings, Built-in features
												</span>
					</div>


																	</div>


										<div class="IDX-fieldContainerList IDX-fieldContainerListRight">

																			<div id="IDX-field-Location"><strong>Location:</strong>
						<span class="IDX-fieldData">
													Southern exposure
												</span>
					</div>

																			<div id="IDX-field-Recreation"><strong>Recreation:</strong>
						<span class="IDX-fieldData">
													swimming pool
												</span>
					</div>


																			<div id="IDX-field-propStatus"><strong>Status:</strong>
						<span class="IDX-fieldData">
													A
												</span>
					</div>




																			<div id="IDX-field-yearBuilt"><strong>Year Built:</strong>
						<span class="IDX-fieldData">
													1973
												</span>
					</div>
											</div>

					</div>

		<div id="IDX-detailsContainer-a000-1-2" class="IDX-fieldContainer IDX-fieldTwoColumn" data-role="collapsible">
			<h3 class="IDX-fieldContainerTitle">Advanced Features</h3>
						<div class="IDX-fieldContainerList IDX-fieldContainerListLeft">











																			<div id="IDX-field-Condition"><strong>Condition:</strong>
						<span class="IDX-fieldData">
													Sold "As is"
												</span>
					</div>


																			<div id="IDX-field-Construction"><strong>Construction:</strong>
						<span class="IDX-fieldData">
													Concrete block stucco
												</span>
					</div>




																			<div id="IDX-field-Exterior"><strong>Exterior:</strong>
						<span class="IDX-fieldData">
													Balcony, Deck, Greenhouse, Outdoor lights
												</span>
					</div>




																			<div id="IDX-field-Fencing"><strong>Fencing:</strong>
						<span class="IDX-fieldData">
													Fenced
												</span>
					</div>




																			<div id="IDX-field-Flooring"><strong>Flooring:</strong>
						<span class="IDX-fieldData">
													Marble floors, Hardwood floors
												</span>
					</div>





																			<div id="IDX-field-Inclusions"><strong>Inclusions:</strong>
						<span class="IDX-fieldData">
													Gas range and oven, Self-cleaning oven, Microwave oven, Disposal, Dishwasher
												</span>
					</div>




																	</div>


										<div class="IDX-fieldContainerList IDX-fieldContainerListRight">





																			<div id="IDX-field-Lot"><strong>Lot:</strong>
						<span class="IDX-fieldData">
													Trees
												</span>
					</div>

																			<div id="IDX-field-LotSize"><strong>Lot  Size:</strong>
						<span class="IDX-fieldData">
													lots size between 3/4 and 1 acre
												</span>
					</div>








																			<div id="IDX-field-Parking"><strong>Parking:</strong>
						<span class="IDX-fieldData">
													2 car garage, Attached parking
												</span>
					</div>




																			<div id="IDX-field-Rooms"><strong>Rooms:</strong>
						<span class="IDX-fieldData">
													Family room, Living/dining room combination, Master bedroom upstairs, Storage room
												</span>
					</div>







																			<div id="IDX-field-Stories"><strong>Stories:</strong>
						<span class="IDX-fieldData">
													Two story
												</span>
					</div>





																			<div id="IDX-field-Utilities"><strong>Utilities:</strong>
						<span class="IDX-fieldData">
													Septic sewer system, Public water supply, TV cable available
												</span>
					</div>

																			<div id="IDX-field-WinDoors"><strong>Win /Doors:</strong>
						<span class="IDX-fieldData">
													Bay window(s), Sliding glass door(s)
												</span>
					</div>
											</div>

					</div>

		<div id="IDX-detailsContainer-a000-1-hopoZoning" class="IDX-fieldContainer IDX-fieldOneColumn IDX-hopoZoning" data-role="collapsible">
			<h3 class="IDX-fieldContainerTitle">Zoning Info</h3>
						<div class="IDX-fieldContainerList IDX-fieldContainerListLeft">

																					</div>


					</div>
	                                <br class="IDX-clear">
                <div id="IDX-detailsContainer-greatSchools" class="IDX-fieldContainer IDX-fieldTwoColumn" data-role="collapsible">

                                        <h3 class="IDX-fieldContainerTitle">Area Info</h3>
                        <div id="IDX-detailsContainer-body-greatSchools" class="IDX-fieldTwoColumn">
                <div id="GS_schoolSearchWidget">
    <div class="GS_widget_innerBorder">
        <div id="gsWidget" data-cityname="Miami" data-state="FL" data-zipcode="33155" data-latitude="25.720399007501" data-longitude="-80.292021640255"><iframe class="greatschools" src="http://www.greatschools.org/widget/map?searchQuery=33155&amp;cityName=Miami&amp;state=FL&amp;lat=25.720399007501&amp;lon=-80.292021640255&amp;normalizedAddress=Miami%2C+FL&amp;width=1047&amp;height=588&amp;textColor=0066B8&amp;bordersColor=ffcc66&amp;zoom=12" width="1047" height="588" marginheight="0" marginwidth="0" scrolling="no" frameborder="0"></iframe></div>
    </div>
</div>            </div>
        </div>
    </div>';
