# Nigerian States

**Nigerian States** is inspired by **Rinvex Country Package** https://github.com/rinvex/countries. The Nigerian states laravel package helps to easily retrive information about the 36 states in the Federal Republic of Nigeria.

**Available information includes**
- State Name
- Local Governments within the States
- Languages
- Date Created
- Population
- Capital
- Political Zone
- Nick Name
- and more.

# Usage

install via `composer require mercyware/nigerianstates`
```
//Get the list of States
$states = StatesLoader::states(); 

//Get a State Details
$state = StatesLoader::state('abia');

//Get name of a state
$state->getName(); 

//Get The Officail Name of a state
$state->getOfficialName(); 

//Get The short code of a state
$state->getShortCode(); 

//Get the state capital name
$state->getStateCapital(); 


//Get the state geo political zone
$state->getGeoPoliticalZone(); 

//Get the date state was created
$state->getDateCreated(); 


//Get the state population according to 2016 Census
$state->getPopulation(); 

//Get the official website of state
$state->getStateWebsite(); 



//Get thestate Demonym
$state->getDemonym(); 

//Get the state nick name
$state->getStateNickName(); 

//Get the list of local government in the state
$state->getLocalGovernmentAreas(); 

//Get the languages spoken in the state
$state->getLanguages(); 

//Get the official website of state
$state->getStateWebsite(); 

//Get the official website of state
$state->getStateWebsite(); 
```

# Source of Information
- Wikipedia [https://en.wikipedia.org/wiki/States_of_Nigeria].

