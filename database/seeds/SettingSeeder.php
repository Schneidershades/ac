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
          'site_objectives'                       => 'A Bold Step towards Influencing & Networking Generations of Entrepreneurs and Professionals With Ideas & Creativity In Wealth Creation',
          'site_home_image'                      => '#',

            'site_about_text'                    => 

            'Building a movement of Nigerian youths to participate in politics and nation building. Creating a platform to share ideas with counterparts across the nation and the world in general. Creating an irreversible consciousness in the Nigerian people through education, debates, interaction and information gathering to permanently guarantee a Nigeria where every voice has a genuine hope of being heard.<br>All members of The Peoples\' Senate are referred to as Senators.',

            'site_mission'                    => 'To create opportunities for people to attain full potentials through capacity building, business growth and wealth creation',

            'site_vision'                    => 'To be the foremost network of reputable business and professional people, committed to growth & excellence',

            'site_overview'                    => '

                                                  1.  Build a movement of Nigerian youths to participate in politics and nation building <br>
                                                  2.  Debate national issues and advice the Federal, State and Local Governments the temperament of the people at all times.<br>
                                                  3.  Energize and inspire the Nigerian youth to positive national action<br>
                                                  4.  Conduct opinion pools on issues that touch on all aspects of our national lives <br>
                                                  5.  Facilitate information sharing amongst all stakeholders in the Nigeria state<br>.
                                                  6.  Facilitate a transition of power from one generation to the other<br> 
                                                  7.  Create a platform to share ideas with counterparts across the globe<br> 
                                                  8.  Create a platform for cross-fertilization of ideas amongst the people<br>',

            'site_client_description'          => 'This networking pool is purposely designed for convergence of various business platforms , ideas, inventions, manufacturing and initiatives to trigger quantum growth in African businesses and investments, and interlinking them with partners, buyers, manufacturers, and sellers within Africa and across the world. ',


            'site_work_days'              => 'Every Day',


            'site_about_image'                  => '/assets/images/logo-white.png',
            'site_full_address_local'              => '50, Addo Road, Ajah-Lekki, Lagos, Nigeria.',
            'site_full_address_international'      => '50, Addo Road, Ajah-Lekki, Lagos, Nigeria.',
            'site_account_name'      => 'Fidelity Bank',
            'site_account_number'      => '5600436061',
        ]);
    }
}
