# Custom Templates in IDX Broker

This is very much just a local playground and is not the same as adding twig files to IDX accounts.

DO NOT contact IDX Broker for support of this repo.
For any issues please open an bug issue in here GitHub.
For enhancements please keep the scope to this repo and not a finished application from IDX.

## Requirements

### PHP
5.6 recommended for this SDK

Start local server. PHP [built in web server](http://php.net/manual/en/features.commandline.webserver.php) used.

### twig

install twig via composer

`composer require twig/twig:~1.0`

### Required Variables in Templates:
    * address
    * price
    * listingID
    * fields: beds, baths propStatus
    * photo
    * description / remarks

## twig use

[Twig is a templating engine for php](http://twig.sensiolabs.org https://mijingo.com/blog/key-value-arrays-in-twig)

## Basic usage

Create templates with html and variables. Variables are declared using double curly braces.

Example:

{{ variable }}

The above curly braces will be filled in with whatever is defined as variable
templates can then be used with twig to offer pages based on dynamic data.

### List of sample twig variables

* {{ listingID }} = Property listing ID
* {{ address }} = Full property address
* {{ streetNumber }} = Street number from property address
* {{ streetDirection }} = Street direction
* {{ streetName }} = Street name from property address
* {{ unitNumber }} = Unit Number
* {{ cityName }} = Name of City
* {{ stateAbrv }} = State abbreviation
* {{ state }} = State full name
* {{ zipcode }} = Zip code
* {{ bedrooms }} = HTML for number of full bedrooms
* {{ fullBaths }} = HTML for number of full baths
* {{ propStatus }} = Property status
* {{ priceLabel }} = Lebel for Price
* {{ priceDisplay }} = price
* {{ moreInfoLink }} = Url for more info
* {{ scheduleShowingLink }} = Url for scheduling a showing
* {{ photoGalleryLink }} = Url for photo gallery
* {{ remarks }} = Remarks text
* {{ map }}= HTML for map
* {{ fieldContainers }} = HTML block with advanced fields
* {{ photoSingle }} = HTML for primary image
* {{ photoGallery }} = HTML for all images
* {{ photoThree }} = HTML for first three images

These variables are for alpha testing. This list, rules and everything will likely change. This is by NO means a complete list or tester.
