# Custom Templates in IDX Broker

## Requirements

Requiremed Variables:
    * address
    * price
    * listingID
    * fields: beds, baths (totalBaths, fullBaths, partialBaths), sqft, acres, propStatus
    * photo (called with macro so there's a consistent containing ID for MLS Rules, tools.photo() )
    * featured agent
    * virtual tours & open houses
    * share this
    * custom link
    * description / remarks
    * actions: save property, more info, print

## twig use

Twig is a templating engine for php.

http://twig.sensiolabs.org https://mijingo.com/blog/key-value-arrays-in-twig

Basic usage

Create templates with html and variables. Variables are declared using double curly braces. Example: '

{{ variable }}

The above curly braces will be filled in with whatever is defined as variable
templates can then be used with twig to offer pages based on dynamic data.
