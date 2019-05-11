<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::Create([
        'site_name'                            => 'Achievers Confluence',
          'site_url'                             => 'https://www.achieversconfluence.com',
          'site_logo_header'                     => 'assets-web/img/logo-white.png',
          'site_logo_footer'                     => 'assets-web/img/logo2.png',
          'site_slogan'                          => ' ...the peoples connection!',
        	'site_state_country'                   => 'Lagos-Nigeria',
          'site_main_number'                     => '+(234) 802 327 1927 ',
          'site_whatsapp_number'                    => '+(234) 816 955 6004',
          'site_international_number'            => '+(234) 802 327 1927',
        	'site_email'                           => 'info@achieversconfluence.com',
        	'site_facebook'                        => 'achieversconfluence',
        	'site_twitter'                         => 'achieversconfluence',
          'site_linkedin'                         => '#',
        	'site_instagram'                       => '#',
          'site_youtube'                         => '#',
          'site_pinterest'                       => '#',
          'site_home_text'                       => 'Achievers Confluence is a Pan-African e-business networking group, designed for the convergence of various business concepts, ideas, inventions, manufacturing and initiatives to trigger quantum growth in African commercial and investments environment',
          'site_home_image'                      => '#',

            'site_about_text'                    => 

            'Building a movement of Nigerian youths to participate in politics and nation building. Creating a platform to share ideas with counterparts across the nation and the world in general. Creating an irreversible consciousness in the Nigerian people through education, debates, interaction and information gathering to permanently guarantee a Nigeria where every voice has a genuine hope of being heard.<br>All members of The Peoples\' Senate are referred to as Senators.',

            'site_mission'                    => 'Create an irreversible consciousness in the Nigerian people through education, debates, interaction and information gathering to permanently guarantee a Nigeria where every voice has a genuine hope of being heard.',

            'site_vision'                    => 'A truly politically conscious and informed Nigeria where everyone is a guardian of our national identity and prosperity ',

            'site_overview'                    => '

                                                  1.  Build a movement of Nigerian youths to participate in politics and nation building <br>
                                                  2.  Debate national issues and advice the Federal, State and Local Governments the temperament of the people at all times.<br>
                                                  3.  Energize and inspire the Nigerian youth to positive national action<br>
                                                  4.  Conduct opinion pools on issues that touch on all aspects of our national lives <br>
                                                  5.  Facilitate information sharing amongst all stakeholders in the Nigeria state<br>.
                                                  6.  Facilitate a transition of power from one generation to the other<br> 
                                                  7.  Create a platform to share ideas with counterparts across the globe<br> 
                                                  8.  Create a platform for cross-fertilization of ideas amongst the people<br>',

            'site_client_description'          => 'To Create an irreversible consciousness in the Nigerian people through education, debates, interaction and information gathering to permanently guarantee a Nigeria where every voice has a genuine hope of being heard.',


            'site_work_days'              => 'Every Day',


            'site_about_image'                  => '/assets/images/logo-white.png',
            'site_full_address_local'              => 'No. 10 Gimbiya Street, Area 11, Garki. Abuja, Nigeria',
            'site_full_address_international'      => 'No. 10 Gimbiya Street, Area 11, Garki. Abuja, Nigeria.'
        ]);
    }
}
