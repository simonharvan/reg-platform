<?php

use App\Models\EventText;
use Illuminate\Database\Seeder;

class EventsTextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_texts')->truncate();
        EventText::create([
            'id' => '1',
            'event_id' => '1',
            'language_code' => 'en',
            'travel_data_note' => '<p>Please note that the standard travel dates are the: 2 May 2016&nbsp;(arrival) and 5 May 2016&nbsp;(return), on the basis of economy class (or business for Ministerial level or above)&nbsp;return flights to Brussels from your residence. Any request for travelling on dates different than the standard or from a different location will have to be agreed with the European Commission.</p>',
            'room_additional_number_night_help' => '<p>The EC will cover maximum 3 nights in hotel <strong>THON HOTEL</strong> <strong>EU</strong> (Rue de la Loi 75, B-1040 Brussels, Belgium) depending on your travel arrangements (breakfast and Wi-Fi incl.). In case you want to arrive earlier in Brussels or leave later, the extra nights must be covered by your own means. If this does not apply to your case or in case you will select another hotel for the extra nights please select 0.</p>',
            'confirmation_text' => '',
            'email_subject' => 'REGISTRATION CONFIRMATION - "Collect More – Spend Better: Facing the challenges of the 2030 Agenda" Conference, Brussels, 3-4 May 2016',
            'email_confirmation_text' => '<p>Dear :name,<br />We thank you for your registration at the<strong> &ldquo;Collect More &ndash; Spend Better: Facing the challenges of the 2030 Agenda&rdquo; Conference</strong> which will take place on <strong>3-4 May 2016</strong> in Brussels, Belgium at the <strong>Conference Centre Albert Borschette (CCAB), Rue Froissart 36, 1040 Brussels, &ndash; Belgium</strong>.</p>',
            'email_please_review' => '<p>Please review your registration details hereunder and contact us if any changes are required.</p><p>Please print the confirmation below for your records.</p><p>Do not hesitate to contact us if you have any questions.</p>',
            'email_signature' => '<p><strong>Travel - EU 2030 Agenda Conference /Secretariat EU 2030 Agenda Conference&nbsp;</strong></p><p>c/o NOOKOM<br />travel.<a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="http://www.collect-more-spend-better.eu/">www.collect-more-spend-better.eu</a></p><p>&nbsp;</p>',
            'email_registration_details' => 'Registration Details','email_hotel_nonsponsored' => '<p>In case you need accommodation:<br />We will be glad to support you with your hotel reservation, if needed. Please note that the room rate at MARRIOTT BRUSSELS HOTEL, where the event will be held, is &euro; 219.00/night including breakfast service and VAT. However, please note that there are only 20 rooms available; therefore, reservations will be made on a first come-first served basis. This rate is based on a 3-night stay. In case that you need to book a room at this hotel please let us know by indicating your request under &ldquo;ADDITIONAL INFORMATION, Other&rdquo; section of this platform, and we will bring you in contact with the hotel staff. If rooms will no longer be available we will be glad to assist you with a reservation at another hotel. Please refer also to the list of proposed hotels nearby the event venue.</p>',
            'email_questionnaire' => ''
        ]);

        EventText::create([
            'id' => '2',
            'event_id' => '2',
            'language_code' => 'en',
            'travel_data_note' => '<p>Please note that the standard travel dates are the: 2 May 2016&nbsp;(arrival) and 5 May 2016&nbsp;(return), on the basis of economy class (or business for Ministerial level or above)&nbsp;return flights to Brussels from your residence. Any request for travelling on dates different than the standard or from a different location will have to be agreed with the European Commission.</p>',
            'room_additional_number_night_help' => '<p>The EC will cover maximum 3 nights in hotel <strong>THON HOTEL</strong> <strong>EU</strong> (Rue de la Loi 75, B-1040 Brussels, Belgium) depending on your travel arrangements (breakfast and Wi-Fi incl.). In case you want to arrive earlier in Brussels or leave later, the extra nights must be covered by your own means. If this does not apply to your case or in case you will select another hotel for the extra nights please select 0.</p>',
            'confirmation_text' => '',
            'email_subject' => 'REGISTRATION CONFIRMATION - "Collect More – Spend Better: Facing the challenges of the 2030 Agenda" Conference, Brussels, 3-4 May 2016',
            'email_confirmation_text' => '<p>Dear :name,<br />We thank you for your registration at the<strong> &ldquo;Collect More &ndash; Spend Better: Facing the challenges of the 2030 Agenda&rdquo; Conference</strong> which will take place on <strong>3-4 May 2016</strong> in Brussels, Belgium at the <strong>Conference Centre Albert Borschette (CCAB), Rue Froissart 36, 1040 Brussels, &ndash; Belgium</strong>.</p>',
            'email_please_review' => '<p>Please review your registration details hereunder and contact us if any changes are required.</p><p>Please print the confirmation below for your records.</p><p>Do not hesitate to contact us if you have any questions.</p>',
            'email_signature' => '<p><strong>Travel - EU 2030 Agenda Conference /Secretariat EU 2030 Agenda Conference&nbsp;</strong></p><p>c/o NOOKOM<br />travel.<a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="http://www.collect-more-spend-better.eu/">www.collect-more-spend-better.eu</a></p><p>&nbsp;</p>',
            'email_registration_details' => 'Registration Details','email_hotel_nonsponsored' => '<p>In case you need accommodation:<br />We will be glad to support you with your hotel reservation, if needed. Please note that the room rate at MARRIOTT BRUSSELS HOTEL, where the event will be held, is &euro; 219.00/night including breakfast service and VAT. However, please note that there are only 20 rooms available; therefore, reservations will be made on a first come-first served basis. This rate is based on a 3-night stay. In case that you need to book a room at this hotel please let us know by indicating your request under &ldquo;ADDITIONAL INFORMATION, Other&rdquo; section of this platform, and we will bring you in contact with the hotel staff. If rooms will no longer be available we will be glad to assist you with a reservation at another hotel. Please refer also to the list of proposed hotels nearby the event venue.</p>',
            'email_questionnaire' => ''
        ]);
        EventText::create([
            'id' => '3',
            'event_id' => '3',
            'language_code' => 'en',
            'travel_data_note' => '<p>Please note that the standard travel dates are the: 2 May 2016&nbsp;(arrival) and 5 May 2016&nbsp;(return), on the basis of economy class (or business for Ministerial level or above)&nbsp;return flights to Brussels from your residence. Any request for travelling on dates different than the standard or from a different location will have to be agreed with the European Commission.</p>',
            'room_additional_number_night_help' => '<p>The EC will cover maximum 3 nights in hotel <strong>THON HOTEL</strong> <strong>EU</strong> (Rue de la Loi 75, B-1040 Brussels, Belgium) depending on your travel arrangements (breakfast and Wi-Fi incl.). In case you want to arrive earlier in Brussels or leave later, the extra nights must be covered by your own means. If this does not apply to your case or in case you will select another hotel for the extra nights please select 0.</p>',
            'confirmation_text' => '',
            'email_subject' => 'REGISTRATION CONFIRMATION - "Collect More – Spend Better: Facing the challenges of the 2030 Agenda" Conference, Brussels, 3-4 May 2016',
            'email_confirmation_text' => '<p>Dear :name,<br />We thank you for your registration at the<strong> &ldquo;Collect More &ndash; Spend Better: Facing the challenges of the 2030 Agenda&rdquo; Conference</strong> which will take place on <strong>3-4 May 2016</strong> in Brussels, Belgium at the <strong>Conference Centre Albert Borschette (CCAB), Rue Froissart 36, 1040 Brussels, &ndash; Belgium</strong>.</p>',
            'email_please_review' => '<p>Please review your registration details hereunder and contact us if any changes are required.</p><p>Please print the confirmation below for your records.</p><p>Do not hesitate to contact us if you have any questions.</p>',
            'email_signature' => '<p><strong>Travel - EU 2030 Agenda Conference /Secretariat EU 2030 Agenda Conference&nbsp;</strong></p><p>c/o NOOKOM<br />travel.<a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="mailto:conference.brussels@nookom.eu">conference.brussels@nookom.eu</a><br /><a href="http://www.collect-more-spend-better.eu/">www.collect-more-spend-better.eu</a></p><p>&nbsp;</p>',
            'email_registration_details' => 'Registration Details','email_hotel_nonsponsored' => '<p>In case you need accommodation:<br />We will be glad to support you with your hotel reservation, if needed. Please note that the room rate at MARRIOTT BRUSSELS HOTEL, where the event will be held, is &euro; 219.00/night including breakfast service and VAT. However, please note that there are only 20 rooms available; therefore, reservations will be made on a first come-first served basis. This rate is based on a 3-night stay. In case that you need to book a room at this hotel please let us know by indicating your request under &ldquo;ADDITIONAL INFORMATION, Other&rdquo; section of this platform, and we will bring you in contact with the hotel staff. If rooms will no longer be available we will be glad to assist you with a reservation at another hotel. Please refer also to the list of proposed hotels nearby the event venue.</p>',
            'email_questionnaire' => ''
        ]);

    }
}
