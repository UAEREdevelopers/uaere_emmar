<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function all_communities()
    {



        // All properties in Community
        $properties = array();
        $propertyImage = ['community_1/property1_community1/1.jpg', 'community_1/property2_community1/1.jpg','community_1/property3_community1/1.jpg'];
        $propertyNames = ['ACT ONE ACT TWO','IL PRIMO', 'FORTE'];
        $propertyBeds = ['1-4','4-7','7-10'];
        $propertyBaths = ['1', '1', '1'];
        $propertyArea = ['4800','4800','4800'];
        $propertyStartingPrice = ['13.5M','13.5M','13.5M'];
        $propertyDesc = ['Act Two brings a new vision of luxury to The Opera District renowned for its culture and cosmopolitanism','Anyone who lives here will know they are coming home to a haven of luxurious design and stylish comfort, all in a fantastic location.','Set in the heart of The Opera District in Downtown Dubai, Il Primo is only steps away from the iconic Dubai Opera.'];
        foreach ($propertyNames as $key => $value) {
            
            $properties[$key]["image"] = $propertyImage[$key];
            $properties[$key]["name"] = $propertyNames[$key];
            $properties[$key]["beds"] = $propertyBeds[$key];
            $properties[$key]["baths"] = $propertyBaths[$key];
            $properties[$key]["area"] = $propertyArea[$key];
            $properties[$key]["start_price"] = $propertyStartingPrice[$key];
            $properties[$key]["desc"] = $propertyDesc[$key];

        }

        return view("all_communities",[
            'properties'=> $properties,
            
            
        ]);
    }


    function community_detail($community_name){

        $communityDetails = $this ->fetchCommunityDetails($community_name);
        \Log::info(print_r($communityDetails,true));

       return view("communities",[
            'communityDetails'=> $communityDetails,
            
            
        ]);

    }


    public function fetchCommunityDetails($community_name){
        $community = array();
        $community_slider = array();
        $properties = array();









        if($community_name == 'dubai_hills'){
            

            //Put Community Details 
            $community["name"] = "Dubai Hills";
            $community_slider_name = ["GOLF GRAND","CLUB DRIVE","GREENSIDE RESIDENCE"];
            $community_slider_desc = ["Luxury home tailored to your needs","Step into the world of Club Drive","Imagine a realm of breathtaking natural splendour"];
            $community_slider_gallery = ['community_1/gallery/1.jpg','community_1/gallery/2.jpg','community_1/gallery/3.jpg'];
            foreach ($community_slider_gallery as $key => $value) {
                $community_slider[$key]["name"] = $community_slider_name[$key];
                $community_slider[$key]["desc"] = $community_slider_desc[$key];
                $community_slider[$key]["image"] = $community_slider_gallery[$key];
            }
            $community["sliders"] = $community_slider;
            $community["amenities"] = ['Championship Golf Course','Dubai Hills Park','Dubai Hills Mall','Schools'];
            $community["travel_amenities"] = ['15 minutes Expo','15 minutes marina','20 minutes Metro','10 Minutes Airport'];

            //Put Property Related To Community

            $propertyNames = ['GOLF GRAND','CLUB DRIVE', 'GREENSIDE RESIDENCE'];
            $propertyImage = ['community_1/property1/1.jpg', 'community_1/property2/1.jpg','community_1/property3/1.jpg'];
            $propertyBeds = ['1-3','1-3','1-3'];
            $propertyBaths = ['1', '1', '1'];
            $propertyArea = ['1,065','726','744'];
            $propertyStartingPrice = ['1.3M','1.5M','1.4M'];
            $propertyDesc = ['Imagine a place with stunning natural beauty and a green championship golf course that goes on forever.','Discover a sanctuary where nature’s elegance meets the grandeur of a sprawling golf landscape.','Picture the sensation of having every longing met within a community of kindred spirits.Check it out.'];

            foreach ($propertyNames as $key => $value) {
            
                $properties[$key]["image"] = $propertyImage[$key];
                $properties[$key]["name"] = $propertyNames[$key];
                $properties[$key]["beds"] = $propertyBeds[$key];
                $properties[$key]["baths"] = $propertyBaths[$key];
                $properties[$key]["area"] = $propertyArea[$key];
                $properties[$key]["start_price"] = $propertyStartingPrice[$key];
                $properties[$key]["desc"] = $propertyDesc[$key];

            }

            $community["properties"] = $properties;


        }










        if($community_name == 'dubai_creek_harbour'){
            

            //Put Community Details 
            $community["name"] = "Dubai Creek Harbour";
            $community_slider_name = ["ORIA","AEON","CREEK PALACE"];
            $community_slider_desc = ["Sunrise over Dubai’s iconic skyline","Anchored in the trendsetting Creek Beach"," perfectly located on Creek Promenade"];
            $community_slider_gallery = ['community_2/gallery/1.jpg','community_2/gallery/2.jpg','community_2/gallery/3.jpg'];
            foreach ($community_slider_gallery as $key => $value) {
                $community_slider[$key]["name"] = $community_slider_name[$key];
                $community_slider[$key]["desc"] = $community_slider_desc[$key];
                $community_slider[$key]["image"] = $community_slider_gallery[$key];
            }
            $community["sliders"] = $community_slider;
            $community["amenities"] = ['Serviced Apartments','Residential Space','Parks & Open Spaces','Schools'];
            $community["travel_amenities"] = ['5 minutes SANCTUARY','10 minutes  AIRPORT','20 minutes DUBAI MARINA','25 Minutes EXPO 2021'];

            //Put Property Related To Community

            $propertyNames = ['ORIA','AEON', 'CREEK PALACE'];
            $propertyImage = ['community_2/property1/1.jpg', 'community_2/property2/1.jpg','community_2/property3/1.jpg'];
            $propertyBeds = ['1-3','1-3','1-3'];
            $propertyBaths = ['1', '1', '1'];
            $propertyArea = ['1,065','1,289','744'];
            $propertyStartingPrice = ['1.3M','1.7M','1.4M'];
            $propertyDesc = ['Oria stands as a striking urban landmark, beautifully harmonising with the calming atmosphere of the waterfront and the lively pulse of Dubai’s heart','AEON is a manifestation of avant-garde luxury, convenience, and urban flair.Anchored in the trendsetting Creek Beach.','5-star services and world-class amenities. Be inspired by exceptional views of the Dubai skyline, from the comfort of your elegant new home in the heart of Creek Island'];

            foreach ($propertyNames as $key => $value) {
            
                $properties[$key]["image"] = $propertyImage[$key];
                $properties[$key]["name"] = $propertyNames[$key];
                $properties[$key]["beds"] = $propertyBeds[$key];
                $properties[$key]["baths"] = $propertyBaths[$key];
                $properties[$key]["area"] = $propertyArea[$key];
                $properties[$key]["start_price"] = $propertyStartingPrice[$key];
                $properties[$key]["desc"] = $propertyDesc[$key];

            }

            $community["properties"] = $properties;


        }







        if($community_name == 'valley'){
            

            //Put Community Details 
            $community["name"] = "Valley";
            $community_slider_name = ["EDEN","NARA","TALIA"];
            $community_slider_desc = ["THE VALLEY‘s premier villa community, EDEN.","Anchored in the trendsetting Creek Beach"," perfectly located on Creek Promenade"];
            $community_slider_gallery = ['community_3/gallery/1.jpg','community_3/gallery/2.jpg','community_3/gallery/3.jpg'];
            foreach ($community_slider_gallery as $key => $value) {
                $community_slider[$key]["name"] = $community_slider_name[$key];
                $community_slider[$key]["desc"] = $community_slider_desc[$key];
                $community_slider[$key]["image"] = $community_slider_gallery[$key];
            }
            $community["sliders"] = $community_slider;
            $community["amenities"] = ['Golden Beach','Kids Dale','Sports Village','Pocket Park'];
            $community["travel_amenities"] = ['5 minutes RUGBY','8 minutes OUTLET MALL','20 minutes AIRPORT','20 Minutes Downtown Dubai'];

            //Put Property Related To Community

            $propertyNames = ["EDEN","NARA","TALIA"];
            $propertyImage = ['community_3/property1/1.jpg', 'community_3/property2/1.jpg','community_3/property3/1.jpg'];
            $propertyBeds = ['3-4','3-5','3-4'];
            $propertyBaths = ['1', '1', '1'];
            $propertyArea = ['-','-','-'];
            $propertyStartingPrice = ['-','-','-'];
            $propertyDesc = ['With well-shaded walkable streets, generous green spaces and an array of exceptional amenities, you and your loved ones will live the lifestyle you have always dreamt of.','Imagine your life in a gated community brimming with life and positive energy, in a home that will inspire a life of joy and harmony with your family.Nara has direct access to The Valleys indoor ','The Valley’s third neighbourhood of elegant townhouses – TALIA comprises stylish, family-friendly homes connected to nature and situated just footsteps away from Golden Beach.'];

            foreach ($propertyNames as $key => $value) {
            
                $properties[$key]["image"] = $propertyImage[$key];
                $properties[$key]["name"] = $propertyNames[$key];
                $properties[$key]["beds"] = $propertyBeds[$key];
                $properties[$key]["baths"] = $propertyBaths[$key];
                $properties[$key]["area"] = $propertyArea[$key];
                $properties[$key]["start_price"] = $propertyStartingPrice[$key];
                $properties[$key]["desc"] = $propertyDesc[$key];

            }

            $community["properties"] = $properties;


        }















        if($community_name == 'mina_rashid'){
            

            //Put Community Details 
            $community["name"] = "Mina Rashid";
            $community_slider_name = ["SEAGATE","SEASCAPE","SUNRIDGE"];
            $community_slider_desc = ["A four-building complex located along the lushly landscaped promenade.","e ideal combination of luxury, style, and elegance with breathtaking views of the Marina","Perfect destination for  coastal living in their own slice of paradise."];
            $community_slider_gallery = ['community_4/gallery/1.jpg','community_4/gallery/2.jpg','community_4/gallery/3.jpg'];
            foreach ($community_slider_gallery as $key => $value) {
                $community_slider[$key]["name"] = $community_slider_name[$key];
                $community_slider[$key]["desc"] = $community_slider_desc[$key];
                $community_slider[$key]["image"] = $community_slider_gallery[$key];
            }
            $community["sliders"] = $community_slider;
            $community["amenities"] = ['Long Yachts','Interconnected District Parks','Floating Yacht Club','Queen Elizabeth 2'];
            $community["travel_amenities"] = ['5 minutes AIRPORT','8 minutes DOWNTOWN','20 minutes BURJ KHALIFA','20 Minutes DUBAI GATE'];

            //Put Property Related To Community

            $propertyNames = ["SEAGATE","SEASCAPE","SUNRIDGE"];
            $propertyImage = ['community_4/property1/1.jpg', 'community_4/property2/1.jpg','community_4/property3/1.jpg'];
            $propertyBeds = ['1-3','1-3','1-2'];
            $propertyBaths = ['1', '1', '1'];
            $propertyArea = ['-','-','-'];
            $propertyStartingPrice = ['-','-','1.47M'];
            $propertyDesc = ['Each of Seagate’s modern residential units is a masterpiece of detail and design. Choose between expansive 1, 2, 3 & 4-bedroom floorplans with panoramic windows offering endless water and outdoor living space views.','This is your coastal luxury haven, where you can spend extended vacations enjoying the stunning combination of warm weather, world-class shopping, modern architecture, sandy beaches, and the most cosmopolitan way of life… ','At Sunridge you will experience the ideal combination of luxury, style, and elegance with breathtaking views of the Marina and the Arabian Gulf’s blue horizon.'];

            foreach ($propertyNames as $key => $value) {
            
                $properties[$key]["image"] = $propertyImage[$key];
                $properties[$key]["name"] = $propertyNames[$key];
                $properties[$key]["beds"] = $propertyBeds[$key];
                $properties[$key]["baths"] = $propertyBaths[$key];
                $properties[$key]["area"] = $propertyArea[$key];
                $properties[$key]["start_price"] = $propertyStartingPrice[$key];
                $properties[$key]["desc"] = $propertyDesc[$key];

            }

            $community["properties"] = $properties;


        }







        

        return $community;
    }


    public function single_community()
    {
        return view("single_community");
    }

    


    public function authenticate_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
}