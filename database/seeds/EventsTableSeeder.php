<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::Create([
            'title'             => 'Business Opportunity Conference and Exhibition',
            'excerpt'             => 'Pathway to sustainable personal and business success',
            'from' =>               '2019-05-30',
            'to' =>               '2019-05-30',
            'time_in'             => '6am',
            'time_out'             => '5pm',
            'venue'             => 'Plot 9/10, Block 2, Oniru Chieftaincy Estate, Victoria Island, Lagos - Nigeria',
            'description'             => '

            <p class="MsoNormal"><b>WHOOPPING DISCOUNTS
ON ACi BUSINESS CONFERENCE REFERRAL<o:p></o:p></b></p><p class="MsoNormal">We have worked out very convenient discount plans to enable
as many delegates as possible to be able to attend this life-changing business
networking conference as follows;<o:p></o:p></p><p class="MsoListParagraphCxSpFirst" style="text-indent:-.25in;mso-list:l1 level1 lfo1"><!--[if !supportLists]-->1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;</span><!--[endif]-->Conference fee have been reduced from N20,000.00
to N15,000.00 for non-members of Achievers Confluence International. That’s the
same rate members are paying. Hurray!!! <o:p></o:p></p><p class="MsoListParagraphCxSpMiddle"><o:p>&nbsp;</o:p></p><p class="MsoListParagraphCxSpMiddle" style="text-indent:-.25in;mso-list:l1 level1 lfo1"><!--[if !supportLists]-->2<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><!--[endif]-->Refer a friend, family member or colleague to
register for ACi Business networking Conference today and earn a whopping 50%
discount or FREE entry. These are the details:<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle"><o:p>&nbsp;</o:p></p><p class="MsoListParagraphCxSpMiddle" style="text-indent:-.25in;mso-list:l0 level1 lfo2"><!--[if !supportLists]-->(a<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><!--[endif]-->Conference registration is N15,000.00. If you
refer 2 attendees to the conference, they’ll pay N15,000.00 each instead, while
you’ll pay N7,500.00<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="text-indent:-.25in;mso-list:l0 level1 lfo2"><!--[if !supportLists]-->(b<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><!--[endif]-->If you refer 4 attendees to the conference,
they’ll pay N10,000.00, while you’ll be admitted to the event FREE of charge<o:p></o:p></p><p class="MsoListParagraphCxSpLast" style="text-indent:-.25in;mso-list:l0 level1 lfo2"><!--[if !supportLists]-->(c<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;</span><!--[endif]-->If you refer 6 attendees to the conference, they’ll
pay N7,500.00, while you’ll be admitted to the event FREE of charge, and you’ll
in addition earn a bonus of N7,500.00<o:p></o:p></p><p class="MsoNormal">&nbsp;Register for the
event by clicking http://achieversconfluence.com/registration-form/. Fill the
Form and submit. Send your name and those you refer to
info@achieversconfluence.com.<o:p></o:p></p><p class="MsoNormal"><o:p>&nbsp;</o:p></p><p class="MsoNormal">Make all payments to *Achievers Confluence International,
Fidelity Bank Account Number 6060330146*.<o:p></o:p></p><p class="MsoNormal">Please don’t miss out of this great gathering as we’re doing
everything possible to get everyone onboard. See you on 1st November, 2018 at
Four Point by Sheraton, Oniru/Sand Fill, Victoria Island, Lagos. For further
information, please contact 08023271927 and 08023394085<o:p></o:p></p><p>

</p><p class="MsoNormal">&nbsp;As an entrepreneur,
corporate executive, dealmaker or business leader, we don’t know where else
you’ll rather be on 1st November, 2018 rather than in Achievers Confluence
Business Networking Conference. We have limited seats left as at this moment.<o:p></o:p></p>',
        ]);
    }
}
