<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeTextsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::table('code_texts')->truncate();
        
        $codes = [
            [
                'id' => '1',
                'code_id' => '1',
                'language_code' => 'en',    
                'instructions' => '<p><b>NOOKOM</b> is the Contractor that has been appointed by the European Commission (EC) for the organisation of the event logistics. It will be our pleasure to assist you with any support needed regarding your participation at the conference.</p>
 
<p>Please fill in all requested information of this registration platform and after your registration you will receive a confirmation email. You will have to check all registration information provided. Mr Pavol WEISS, Event Administrator (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>), will contact you after your registration if more information are needed. </p>

<p><u>Please note that travel / visa / accommodation / etc. arrangements will not be reimbursed.</u></p>

<p>More practical information about the event and your stay in Almaty will be provided soon.<br>
We remain at your disposal to further information about the event or any other information on your trip to Almaty.   
</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
            [
                'id' => '2',
                'code_id' => '2',
                'language_code' => 'en',    
                'instructions' => '<p><b>
NOOKOM (acting on behalf of the European Commission (EC)) will cover the following services regarding your participation to the event: </b> </p>

<ul>
<li><b>One return ticket</b> (economy class) for transportation to Almaty and back in the period of the event (indicative dates of travelling: 30/9/14 and 03/10/14 depending on the flights’ availability). Any request for travelling on dates different than the standard will have to be agreed with the EC and any extra cost will have to be covered by the participant.
</li>
<li><b>Hotel reservation</b> (single rooms) <b>and payment</b> of a hotel situated in proximity to Turan University: <b>Grand Aiser Hotel</b>, Pozharsky str. 1 (Baitursynov av. Corner of Satpaev str.), 050013 Almaty, Kazakhstan, Tel.: +7 (727) 396-99 99, or <b>Astana International Hotel</b>, 113 Baitursynov Str., 050022, Almaty, Kazakhstan, Tel.: +7 (727) 250 70 50. The reservation includes the breakfast and it is for maximum 3 nights spent in Almaty and it will be in accordance with your travel arrangements. Private arrangements will not be reimbursed. Extras (mini-bar, laundry, etc.) will not be covered by the EC sponsorship.
</li>
<li><b>Local transport</b> between airport and hotel(s) and back on the day of your arrival/departure and from the hotel(s) to the conference venue on 1-2 October 2014.</li>
</ul>
 
<p>Please fill in all requested information of this registration platform and after your registration you will receive a confirmation email. You will have to check all registration information provided. Mr Pavol WEISS, Event Administrator (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>),  will contact you after your registration so we can start proceeding with your travel arrangements. </p>

<p><u>Please note that private arrangements or visa costs (if applicable) will not be reimbursed (only upon approval by the EC).</u></p>

<p>More practical information about the event and your stay in Almaty will be provided soon.<br>
We remain at your disposal to further information about the EC sponsorship or any other information on your trip to Almaty</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
            [
                'id' => '3',
                'code_id' => '3',
                'language_code' => 'en',    
                'instructions' => '<p><b>NOOKOM</b> is the Contractor that has been appointed by the European Commission (EC) for the organisation of the event logistics. It will be our pleasure to assist you with any support needed regarding your participation at the conference.</p>
 
<p>Please fill in all requested information of this registration platform and after your registration you will receive a confirmation email. You will have to check all registration information provided. Mr Pavol WEISS, Event Administrator (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>), will contact you after your registration if more information are needed.  </p>

<p><u>Please note that travel / visa / accommodation / etc. arrangements will not be reimbursed.</u></p>

<p>More practical information about the event and your stay in Almaty will be provided soon.<br>
We remain at your disposal to further information about the event or any other information on your trip to Almaty.   
</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
           [
                'id' => '4',
                'code_id' => '1',
                'language_code' => 'ru',    
                'instructions' => '<p>Европейская комисия (ЕК) поручила <b>NOOKOM</b> iорганизацию конференции. Мы с удовольствием поможем Вам во всех вопросах, связанных с Вашем участием в ней.</p>
 
<p>Пожалуйста, заполните всю необходимую информацию  на регистрационной платформе. После регистрации Вы получите по электронной почте подтверждение. Вы должны будете проверить всю регистрационную информацию. Г-н Павол Вайс, администратор конференции (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>), свяжется с вами, если от Вас потребуется дополнительная информация. </p>

<p><u>Обратите внимание, что путешествие, визы, проживание и другие ваши расходы не будут возмещены. </u></p>

<p>Более детальные сведения о конференции и пребывании в Алматы будет предоставлена в ближайшее время. Обращайтесь к нам за дополнительной информацией о мероприятии или любой другой информацией о Вашей поездке в Алматы.   
</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
            [
                'id' => '5',
                'code_id' => '2',
                'language_code' => 'ru',    
                'instructions' => '<p><b>NOOKOM </b> (действующий от имени Европейской комиссии (ЕК)) будeт предоставлять следующие услуги относительно вашего участия в мероприятии </p>

<ul>
<li><b>Один авиабилет </b> (эконом-класс) для полета в Алматы и обратно на время проведения мероприятия (ориентировочные сроки поездки: 30/9/14 и 03/10/14 в зависимости от наличия рейсов. Любые требования на другие даты должны быть согласованы с ЕК и дополнительные расходы покрываются самим участником. </li>
<li><b>Резервирование и оплата отеля</b> (одноместные номера), расположенного в непосредственной близости от Туран университета:  <b>Grand Aiser Hotel</b>, Пожарская ул. 1 (Байтурсынова пр. - угол ул. Сатпаева), 050013 Алматы, Казахстан, Тел .: +7 (727) 396-99 99, (727) 396-99 99 или <b>Astana International Hotel</b>,Байтурсынова ул. 113, 050022, Алматы, Казахстан, Тел .: + 7 (727) 250 70 50. В стоимость номера входит завтрак. Оплачиваются максимум 3 ночи, проведенные в Алматы. Частные договоренности не действительны. Дополнительные расходы (мини-бар, прачечная и т.д.) не будут покрыты за счет спонсорской ЕС. 
</li>
<li><b>Местные перевозки </b> между аэропортом и отелем в день вашего заезда / выезда и из отеля к месту проведения конференции 1-2 октября 2014 года</li>
</ul>
 
<p>Пожалуйста, заполните всю необходимую информацию на регистрационной платформе. После регистрации Вы получите по электронной почте подтверждение. Вы должны будете проверить всю регистрационную информацию. Г-н Павол Вайс, администратор конференции (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>), свяжется с вами после регистрации, чтобы мы могли начать оформление Вашей поездки.  </p>

<p><u>Обратите внимание, что частные договоренности не будут приняты во внимание. Стоимость виз (если применимо) не будет возмещена (только после согласования с ЕК). Обратите внимание, что расходы на поездку, визы, проживание и т.д.  возврату не подлежат.</u></p>

<p>Более детальные сведения о событии и пребывании в Алматы будет предоставлена в ближайшее время. Обращайтесь к нам за дополнительной информацией о спонсировании ЕС или любой другой информацией о Вашей поездке в Алматы.</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
            [
                'id' => '6',
                'code_id' => '3',
                'language_code' => 'ru',    
                'instructions' => '<p>Европейская комисия (ЕК) поручила <b>NOOKOM</b> iорганизацию конференции. Мы с удовольствием поможем Вам во всех вопросах, связанных с Вашем участием в ней.</p>
 
<p>Пожалуйста, заполните всю необходимую информацию  на регистрационной платформе. После регистрации Вы получите по электронной почте подтверждение. Вы должны будете проверить всю регистрационную информацию. Г-н Павол Вайс, администратор конференции (<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>), свяжется с вами, если от Вас потребуется дополнительная информация. </p>

<p><u>Обратите внимание, что путешествие, визы, проживание и другие ваши расходы не будут возмещены. </u></p>

<p>Более детальные сведения о конференции и пребывании в Алматы будет предоставлена в ближайшее время. Обращайтесь к нам за дополнительной информацией о мероприятии или любой другой информацией о Вашей поездке в Алматы.   
</p>
<p>
<b>Conference Almaty Oct 2014 Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:conference.almaty@nookom.eu">conference.almaty@nookom.eu</a>
</p>',
            ],
// ************************************************************ NGO - EN            
            [
                'id' => '7',
                'code_id' => '4',
                'language_code' => 'en',    
                'instructions' => '<p>NOOKOM has been appointed by the European Commission (EC) for the organisation of the event logistics. It will be our pleasure to assist you with any support needed regarding your participation at the Forum.</p>
 
<p>To register, please fill in all requested information on this registration platform at your earliest convenience.  Following your registration you will receive a confirmation email. You will have to check all registration information provided and keep a copy of this registration confirmation email. A member of our Support Team (16.eidhrforum@nookom.eu ), will contact you after your registration if additional information is needed. </p>
<p>In case you need support with your hotel reservation, please refer to the list of proposed hotels and let us know in case you need any further support. </p>
<p><u>Please note that costs for travel, visa, accommodation, etc., will not be reimbursed.</u></p>

<p>More practical information about the event and your stay in Brussels will be provided soon.</p>
<p>We remain at your disposal for any further information you may need.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
            [
                'id' => '8',
                'code_id' => '5',
                'language_code' => 'en',    
                'instructions' => '<p>NOOKOM has been appointed by the European Commission (EC) for the organisation of the event logistics. It will be our pleasure to assist you with any support needed regarding your participation at the Forum.</p>

<p>NOOKOM (acting on behalf of the EC) will cover the following services regarding your participation to the event: </p>

<ul>
    <li><b>One return ticket</b> (economy class) for transportation to Brussels and back in the period of the event (indicative dates of travelling: 03/12/2014 arrival to Brussels and 06/12/2014 departure from Brussels depending on the flights’ availability). Any request for travelling on dates different than the standard will have to be agreed with the EC and any extra cost will have to be covered by the participant. </li>
    <li><b>Hotel reservation</b> (single rooms) and payment at MARRIOTT BRUSSELS HOTEL (Auguste Orts 3-7/Gran Place, 1000 Brussels, Belgium). The reservation includes the breakfast and it is for maximum 3 nights spent in Brussels and it will be in accordance with your travel arrangements. Private arrangements will not be reimbursed. Extras (mini-bar, laundry, etc.) will not be covered by the EC sponsorship. </li>
    <li><b>Daily Subsistence Allowance (DSA)</b>: The DSA will be paid on the basis of the number of nights spent in Brussels (maximum 3 nights) and it amounts to € 69.60 per night, covering any sundry expenses that you may have in Brussels. Please keep in mind that you should have with you some petty cash for your first night in Brussels since the per diems will be paid the day of the event (4th or 5th of December).  
        <br>Please keep in mind that you should keep the boarding passes and deliver them to the representative of NOOKOM who will be present at the Forum in Brussels for the payment of your per diems. The ones for the return trip will need to be sent by scan to our e mail address. You will also have to sign the daily attendance list. Kindly note that according to the EC rules, if a participant himself decides to extend his stay at the beginning and/or end of the meeting, no daily allowance will be paid for additional nights. This does not however apply in the case where the extra nights are justified by the use of lower cost ticket.  I will therefore let you know about the exact number of DSAs that you will receive, following our agreement on your travel itinerary and the purchase of your ticket.</li>
    <li><b>Schengen Visa costs (if applicable) for your entry in Brussels</b> will be covered by the EC. You will have however to pay the visa costs to the relevant consular authorities.  These costs will be reimbursed to you in cash, in euro (using the EC exchange rate), by our representative in Brussels, upon your arrival at the event location. For your visa costs reimbursement, please keep the original receipt from the consular department and hand it over to our representative. Consult the list of countries placed under the obligations to hold a Visa and the list of countries authorized entry without a visa (Schengen States): https://sif-gid.ibz.be/FR/carte_schengen.aspx; https://sif-gid.ibz.be/FR/les_pays_tiers_dont_les_ressortissants_sont_soumis_a_l_obligation_de_visa.aspx.   We would like to draw your attention to the fact that Schengen visa application takes time (more than 15 days in some cases) and visa arrangements should be made early enough. Please apply at your earliest convenience and let us know if any support is needed from our side.</li>
    <li><b>Insurance (if required) for your visa application (if applicable)</b>: Any costs related to the purchase of an insurance that might be requested for the issue of your visa will be reimbursed to you in Brussels, or if necessary, we may proceed with the direct purchase of your insurance, through our insurance partner, UNION. For the case of reimbursement, you must keep the original invoice and hand it over to our representative in Brussels. </li>
    <li><b>Local transport between airport and hotel(s) and back</b> on the day of your arrival/departure: Transportation from the airport to the hotel is easy by taking the airport train, change it to a metro at Midi Station and arrive to DE BROUCKERE Station where the hotel is located – complete information will be send to you before your arrival to Brussels. Please note that the train ticket cost is of around 7.80 euro and the ticket of the metro costs 1.50 euro.  You must therefore have some cash with you for the purchase of your tickets.  The cost of the train and metro tickets will be reimbursed to you by our representative in Brussels, upon presentation of the tickets, which you must keep. For your transportation from the hotel to the airport the day of your departure you will receive the train ticket during registration. More information about your reimbursement will be given to you in due time.</li>
</ul>


<p>To register, please fill in all requested information of this registration platform at your earliest convenience.  Following your registration you will receive a confirmation email. You will have to check all registration information provided and keep a copy of this registration confirmation email. A member of our Support Team (16.eidhrforum@nookom.eu ), will contact you after your registration so we can start proceeding with your travel arrangements. </p>

<p><u>Please note that private arrangements (if applicable) will not be reimbursed (only upon approval by the EC).</u></p>

<p>More practical information about the event and your stay in Brussels will be provided soon.</p>
<p>We remain at your disposal for any further information you may need.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
            [
                'id' => '9',
                'code_id' => '6',
                'language_code' => 'en',    
                'instructions' => '<p>NOOKOM has been appointed by the European Commission (EC) for the organisation of the event logistics. It will be our pleasure to assist you with any support needed regarding your participation at the Forum.</p>
 
<p>To register, please fill in all requested information on this registration platform at your earliest convenience.  Following your registration you will receive a confirmation email. You will have to check all registration information provided and keep a copy of this registration confirmation email. A member of our Support Team (16.eidhrforum@nookom.eu ), will contact you after your registration if additional information is needed. </p>
<p>In case you need support with your hotel reservation, please refer to the list of proposed hotels and let us know in case you need any further support. </p>
<p><u>Please note that costs for travel, visa, accommodation, etc., will not be reimbursed.</u></p>

<p>More practical information about the event and your stay in Brussels will be provided soon.</p>
<p>We remain at your disposal for any further information you may need.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
// ************************************************************ NGO - FR
            [
                'id' => '10',
                'code_id' => '4',
                'language_code' => 'fr',
                'instructions' => "<p>La Commission européenne (CE) a confié à NOOKOM l'organisation logistique de l'événement. Notre équipe aura le plaisir de vous apporter tout le soutien nécessaire à votre participation au Forum.</p>
 
<p>Pour vous inscrire, veuillez remplir toutes les informations demandées sur cette plate-forme d'enregistrement à votre meilleure convenance. Lorsque vous avez complété l'information requise vous recevrez un email de confirmation. Vous devrez vérifier toutes les informations d'inscription fournies, et en conserver une copie. Pour toute information supplémentaire, un membre de notre équipe (16.eidhrforum@nookom.eu) prendra contact avec vous par email. </p>
<p>Dans le cas où vous avez besoin d'assistance avec la réservation de votre hôtel, veuillez-vous référer à la liste des hôtels proposés, et faites-nous savoir si vous avez besoin d'un soutien supplémentaire.</p>
<p><u>Veuillez prendre note que des coûts de voyage, de visa, de l’hébergement, etc…, ne seront pas remboursés.</u></p>

<p>Plus d’informations pratiques sur l'événement, et votre séjour à Bruxelles, vous seront bientôt communiquées.</p>
<p>Nous restons à votre disposition pour tout complément d'information qui pourrait vous être nécessaire.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href=\"mailto:16.eidhrforum@nookom.eu\">16.eidhrforum@nookom.eu</a>
</p>",
            ],
            [
                'id' => '11',
                'code_id' => '5',
                'language_code' => 'fr',    
                'instructions' => "<p>La Commission européenne (CE) a confié à NOOKOM l'organisation logistique de l'événement. Notre équipe aura le plaisir de vous apporter tout le soutien nécessaire à votre participation au Forum.</p>

<p>NOOKOM (en agissant pour le compte de la CE) se charge en effet de couvrir les coûts relatifs à votre participation à l'événement: </p>

<ul>
    <li><b>Billet de voyage aller-retour </b> (en classe économique) vers Bruxelles (dates indicatives de voyage: arrivée à Bruxelles le 03 décembre 2014 et départ de Bruxelles le 06 décembre 2014, selon la disponibilité des vols). Toute demande de voyager à des dates différentes de de celles indiquées ci-dessus, fera l’objet d’une demande d’autorisation par la CE, et tous frais supplémentaires occasionnés par ce changement, seront pris en charge par les participants. </li>
    <li><b>Hébergement</b> (chambres simples) et paiement à MARRIOTT BRUSSELS HOTEL (Auguste Orts 3-7/Gran Place, 1000 Bruxelles, Belgique). La réservation comprend la chambre et le petit déjeuner, pour un maximum de 3 nuits passées à Bruxelles.  Les dates exactes seront confirmées en fonction de vos dates de voyage. Des arrangements privés ne seront pas remboursés. Aucun frais supplémentaire (mini-bar, blanchisserie, etc.) ne sera pas couvert par la CE. </li>
    <li><b>Indemnités journalières</b>: Les Indemnités journalières seront versées en fonction du nombre de nuits passées à Bruxelles (maximum 3 nuits).  Leur montant s'élève à € 69,60 par nuit, pour les frais divers que vous pourriez avoir à Bruxelles. Veuillez prendre note que vous devrez avoir sur vous suffisamment d’argent pour faire face aux dépenses éventuelles pendant votre première nuit à Bruxelles, étant donné que le montant des indemnités journalières vous sera versé pendant les jours de l'événement (le 4 ou le 5 Décembre). 
        <br>Veuillez conserver vos cartes d'embarquement, et les remettre au représentant de NOOKOM qui sera présent aux lieux du Forum pour le paiement de vos indemnités journalières. Par ailleurs, vous êtes prié de nous envoyer des copies scannées par courriel électronique, des cartes d’embarquement du voyage de retour. Vous devrez également signer quotidiennement la liste de présence. Veuillez noter que, selon les règles de la CE, si un participant décide lui-même de prolonger son séjour au début et / ou fin de la réunion, aucune indemnité journalière sera versée pour les nuits supplémentaires. Cela ne s'applique pas dans le cas où les nuits supplémentaires sont justifiées par l'utilisation de billets à moindre coût.  Nous serons donc en mesure de vous communiquer le montant exact des indemnités journalières que vous allez recevoir, uniquement après l'achat de votre billet d’avion.</li>
    <li><b>Frais de visa Schengen (le cas échéant) pour votre entrée en Belgique</b> sera couvert par la CE. Vous devrez cependant payer les frais de visa auprès des autorités consulaires compétentes. Le cout du visa d’entrée en Belgique vous sera remboursé en espèces, en euros (au taux de change officiel de la Commission Européenne), par notre représentant à Bruxelles, à votre arrivée au lieu de l'événement. Pour le remboursement des frais de visa, veuillez conserver le reçu original du service consulaire et le remettre à notre représentant. Vous pouvez consultez la liste des nationalités placées sous l'obligation de détenir un visa, et la liste des nationalités autorisées d’entrée sans visa (États Schengen) au: https://sif-gid.ibz.be/FR/carte_schengen.aspx; https://sif-gid.ibz.be/FR/les_pays_tiers_dont_les_ressortissants_sont_soumis_a_l_obligation_de_visa.aspx.   Nous tenons à attirer votre attention sur le fait que l’issue d’un visa Schengen peut être un processus d’une durée de plusieurs jours ou semaines (plus de 15 jours dans certains cas).  Veuillez prendre toutes les dispositions nécessaires et déposer votre dossier aux services consulaires compétents, suffisamment tôt. Nous demeurons à votre disposition et sommes prêts à vous apporter du soutien spécifique, en cas de besoin.</li>
    <li><b>Autres coûts relatifs à l’obtention du Visa Schengen (le cas échéant)</b>: Les couts d'assurance, ou autres couts relatifs à l’obtention du visa, seront pris en charge par la Commission Européenne, s’ils sont dument justifiés. Ces frais seront remboursés en espèces, en euros (au taux de change officiel de la Commission Européenne), par notre représentant à Bruxelles, à votre arrivée au lieu de l'événement. Pour votre remboursement, veuillez conserver toutes les factures originales (documents indiquant clairement le montant à rembourser) et les remettre à notre représentant. Si nécessaire, nous pouvons procéder à l'achat direct de votre assurance-vie, via la compagnie d’assurances UNION.  </li>
    <li><b>Transport de l'aéroport international de Bruxelles à l'hôtel<b> le jour de votre arrivée / départ: De l’aéroport de Bruxelles, le moyen le plus facile pour se rendre en ville est le train.  Veuillez descendre à la gare de midi et continuer en métro vers la station de Brouckère où l'hôtel est situé. Le métro est situé à l’intérieur de la gare du Midi. Nous allons vous envoyer des informations plus détaillées sur ce sujet, avant votre arrivée à Bruxelles. Veuillez noter que le prix du billet de train est d'environ 7.80 euro et celui du métro, 1.50 euros. Ces montants vous seront remboursés, sur présentation des billets. Veuillez prendre les dispositions nécessaires pour acheter vos billets en payant en euro, et n’oubliez pas de conserver les billets afin de les remettre à notre représentant pour votre remboursement. Pour votre transport de l'hôtel à l'aéroport le jour de votre départ, vous aller recevoir le billet de train retour lors votre inscription au Forum. De plus amples informations concernant votre remboursement vous seront communiquées bientôt.</li>
</ul>


<p>Pour vous inscrire, veuillez remplir toutes les informations demandées sur cette plate-forme d'enregistrement à votre meilleure convenance. Suite à votre inscription, vous recevrez un email de confirmation. Vous devrez vérifier toutes les informations d'inscription fournies, et conserver une copie. Pour toute information supplémentaire, un membre de notre équipe (16.eidhrforum@nookom.eu) prendra contact avec vous par email.</p>

<p><u>Veuillez noter que les arrangements privés (le cas échéant) ne seront pas remboursés (sauf si ils sont exceptionnellement justifiés, et sur approbation de la CE).</u></p>

<p>Plus d’informations pratiques sur l'événement, et votre séjour à Bruxelles, vous seront bientôt communiquées.</p>
<p>Nous restons à votre disposition pour tout complément d'information qui pourrait vous être nécessaire.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href='mailto:16.eidhrforum@nookom.eu'>16.eidhrforum@nookom.eu</a>
</p>",
            ],
            [
                'id' => '12',
                'code_id' => '6',
                'language_code' => 'fr',    
                'instructions' => "<p>La Commission européenne (CE) a confié à NOOKOM l'organisation logistique de l'événement. Notre équipe aura le plaisir de vous apporter tout le soutien nécessaire à votre participation au Forum.</p>
 
<p>Pour vous inscrire, veuillez remplir toutes les informations demandées sur cette plate-forme d'enregistrement à votre meilleure convenance. Lorsque vous avez complété l'information requise vous recevrez un email de confirmation. Vous devrez vérifier toutes les informations d'inscription fournies, et en conserver une copie. Pour toute information supplémentaire, un membre de notre équipe (16.eidhrforum@nookom.eu) prendra contact avec vous par email. </p>
<p>Dans le cas où vous avez besoin d'assistance avec la réservation de votre hôtel, veuillez-vous référer à la liste des hôtels proposés, et faites-nous savoir si vous avez besoin d'un soutien supplémentaire.</p>
<p><u>Veuillez prendre note que des coûts de voyage, de visa, de l’hébergement, etc…, ne seront pas remboursés.</u></p>

<p>Plus d’informations pratiques sur l'événement, et votre séjour à Bruxelles, vous seront bientôt communiquées.</p>
<p>Nous restons à votre disposition pour tout complément d'information qui pourrait vous être nécessaire.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href=\"mailto:16.eidhrforum@nookom.eu\">16.eidhrforum@nookom.eu</a>
</p>",
            ],
// ************************************************************ NGO - ES
            [
                'id' => '13',
                'code_id' => '4',
                'language_code' => 'es',    
                'instructions' => '<p>NOOKOM es el contratista que ha sido asignado por la Comisión Europea para la organización de la logística sobre su participación en el 16th  EU-NGO FORO  el cual se llevará a cabo el 4-5 de Diciembre del 2014 en Bruselas, Bélgica (MARRIOTT BRUSSELS HOTEL, Auguste Orts 3-7/Gran Place, 1000 Brussels, Belgium).</p>
 
<p>Para registrarse, por favor complete toda la información solicitada en la plataforma de registro a la brevedad posible. Luego de registrarse, Ud. recibirá un email con la confirmación. Tendrá que revisar toda la información sobre el registro y guardar una copia del email con la confirmación. Un miembro del equipo de apoyo (16.eidhrforum@nookom.eu), lo contactará después de su registro si se necesitara información adicional.  </p>
<p>En caso de que necesite apoyo con su reserva de hotel, por favor consulte la lista con los hoteles propuestos y háganos saber si se presenta un inconveniente adicional.</p>
<p><u>Tenga en cuenta que los gastos de viaje, visado, alojamiento, etc, no serán reembolsados</u></p>

<p>Más información práctica sobre el evento y su estadía en Bruselas se proporcionará en breve.</p>
<p>Quedamos a su disposición en caso de que necesite cualquier información adicional. </p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
            [
                'id' => '14',
                'code_id' => '5',
                'language_code' => 'es',    
                'instructions' => '<p>NOOKOM es el contratista que ha sido asignado por la Comisión Europea para la organización de la logística para su participación en el 16th EU-NGO FORUM el cual se llevará a cabo el 4-5 de Diciembre del 2014 en Bruselas, Bélgica (MARRIOTT BRUSSELS HOTEL, Auguste Orts 3-7/Gran Place, 1000 Brussels, Belgium).</p>

<p>NOOKOM (en nombre de la Comisión Europea) cubrirá los siguientes servicios en relación a su participación en el evento. </p>

<ul>
    <li><b>Un boleto de ida y vuelta</b> (clase económica) para el trasporte a Bruselas en el periodo del evento (fechas indicativas de viaje: 12/03/2014 llegada a Bruselas y 12/06/2014 salida de Bruselas, según la disponibilidad de los vuelos). Cualquier solicitud para viajar en fechas diferentes a lo indicado, tendrá que ser acordado con la Comisión Europea y cualquier costo adicional tendrá que ser cubierto por el participante.  </li>
    <li><b>Reserva del hotel </b>  (Habitaciones individuales) y pago en MARRIOTT BRUSSELS HOTEL (August Orts 3-7/Gran Place, 1000 Brussels, Belgium). La reserva incluye el desayuno y es para un máximo de 3 noches de alojamiento en Bruselas, estará de acuerdo con sus planes de viaje. No se reembolsarán los acuerdos privados. Extras (mini-bar, lavandería, etc.) no serán cubiertos por el patrocinio de la Comisión Europea.  </li>
    <li><b>Dietas diarias</b>: Las dietas serán canceladas de acuerdo a las noches alojadas en Bruselas (máximo 3 noches) y el monto será € 69.60 por noche, cubriendo los diversos gastos que Ud. puede tener en Bruselas. Por favor, tenga en cuenta que usted debe tener efectivo propio para su primera noche en Bruselas ya que las dietas se pagarán el día del evento (4-5 de Diciembre). Por favor, además tenga en cuenta que usted debe tener las tarjetas de embarque y entregarlas al representante de NOOKOM que estará presente en el Foro en Bruselas para el pago de sus viáticos. Con respecto a los viajes de vuelta las tarjetas de embarque deberán ser escaneadas y enviadas a nuestro correo. Ud. también tendrá que firmar la lista de asistencia diaria. Por favor tenga en cuenta que de acuerdo a las reglas de la Comisión Europea, si un participante decide extender su estadía al comienzo y/o al final de la reunión, las dietas por noches adicionales no serán pagadas. Esto sin embargo, no es aplicable en el caso de que las noches adicionales se justifiquen por el uso de un billete de menor costo. Por lo tanto, le haremos saber sobre el número exacto de las dietas que Ud. recibirá, tras nuestro acuerdo en su itinerario de viaje y la compra de su boleto.</li>
    <li><b>Los costos de Schengen Visa (si es aplicable) para su entrada en Bruselas</b> serán cubiertos por la Comisión Europea. No obstante, usted tendrá que pagar los gastos de visado a las autoridades consulares competentes. Estos costos serán reembolsados ​​a usted en efectivo, en euros (al tipo de cambio de la Comisión Europea), por nuestro representante en Bruselas, a su llegada al lugar del evento. Para su reembolso de los gastos de visado, por favor, guarde el recibo original del departamento consular y se la entrega a nuestro representante. Consulte la lista de países situados bajo la obligación de poseer un visado y la lista de países autorizados para entrar sin visado (Estados Schengen) https://sif-gid.ibz.be/FR/carte_schengen.aspx; https://sif-gid.ibz.be/FR/les_pays_tiers_dont_les_ressortissants_sont_soumis_a_l_obligation_de_visa.aspx. Nos gustaría llamar su atención sobre el hecho de que la solicitud de visado Schengen necesita tiempo (más de 15 días en algunos casos) y los trámites de visado deben hacerse con la antelación correspondiente. Por favor, solicítelos a la brevedad posible y háganos saber si se necesita ningún tipo de apoyo por nuestra parte.</li>
    <li><b>Seguros (si es necesario) para su solicitud de visa (si se aplica)</b>: Todos los gastos relacionados con la compra de un seguro que pueda ser solicitada por la expedición de su visa será reembolsado en Bruselas, o si es necesario, podemos proceder a la compra directa de su seguro, a través de nuestro socio de seguros, UNION. Para el caso de reembolso, debe conservar la factura original y se la entrega a nuestro representante en Bruselas. </li>
    <li><b>Transporte local ida y vuelta entre el aeropuerto y el hotel (s)</b> en el día de su llegada / salida y desde el hotel al hotel: Es fácil transportarse desde el aeropuerto hasta el hotel tomando el tren del aeropuerto, para luego cambiar al metro en la estación Midi y llegar a la estación DE BROUCKERE donde se encuentra el hotel – le enviaremos la información completa antes de su llegada Bruselas. Por favor, tenga en cuenta que el precio del boleto para el metro/tren es de 7.80EUR y el billete del metro cuesta € 1,50 aproximadamente y por lo mismo le aconsejaríamos contar con efectivo El coste de los billetes de tren y de metro se reembolsará a usted por nuestro representante en Bruselas, previa presentación de los billetes, que usted debe tener. Para el transporte desde el hotel al aeropuerto, el día de su salida, le entregaremos el boleto del tren durante el proceso de registro. </li>
</ul>


<p>Para registrarse, por favor complete toda la información solicitada en la plataforma de registro a la brevedad posible. Luego de registrarse, Ud. recibirá un email con la confirmación. Tendrá que revisar toda la información sobre el registro y guardar una copia del email con la confirmación. Un miembro del equipo de apoyo (16.eidhrforum@nookom.eu), lo contactará después de su registro para proceder con los tramites de su viaje.  </p>

<p><u>Tenga en cuenta que los acuerdos privados (si se aplica) no serán reembolsado (sólo una vez aprobado por la Comisión Europea).</u></p>

<p>Más información práctica sobre el evento y su estadía en Bruselas será entregada pronto.  </p>
<p>Quedamos a su disposición para más información sobre el patrocinio de la Comisión Europea o cualquier otra información sobre su viaje a Bruselas.</p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
            [
                'id' => '15',
                'code_id' => '6',
                'language_code' => 'es',    
                'instructions' => '<p>NOOKOM es el contratista que ha sido asignado por la Comisión Europea para la organización de la logística sobre su participación en el 16th  EU-NGO FORO  el cual se llevará a cabo el 4-5 de Diciembre del 2014 en Bruselas, Bélgica (MARRIOTT BRUSSELS HOTEL, Auguste Orts 3-7/Gran Place, 1000 Brussels, Belgium).</p>
 
<p>Para registrarse, por favor complete toda la información solicitada en la plataforma de registro a la brevedad posible. Luego de registrarse, Ud. recibirá un email con la confirmación. Tendrá que revisar toda la información sobre el registro y guardar una copia del email con la confirmación. Un miembro del equipo de apoyo (16.eidhrforum@nookom.eu), lo contactará después de su registro si se necesitara información adicional.  </p>
<p>En caso de que necesite apoyo con su reserva de hotel, por favor consulte la lista con los hoteles propuestos y háganos saber si se presenta un inconveniente adicional.</p>
<p><u>Tenga en cuenta que los gastos de viaje, visado, alojamiento, etc, no serán reembolsados</u></p>

<p>Más información práctica sobre el evento y su estadía en Bruselas se proporcionará en breve.</p>
<p>Quedamos a su disposición en caso de que necesite cualquier información adicional. </p>
<p>
<b>16th EU-NGO FORUM Secretariat</b><br>
c/o NOOKOM<br>
<a href="mailto:16.eidhrforum@nookom.eu">16.eidhrforum@nookom.eu</a>
</p>',
            ],
// ************************************************************ AMMAN
            [
                'id' => '16',
                'code_id' => '7',
                'language_code' => 'en',    
                'instructions' => '<p>contact us if you have any questions - andreas.divanis@nookom.eu</p>',
            ],
            [
                'id' => '17',
                'code_id' => '8',
                'language_code' => 'en',    
                'instructions' => '<p>contact us if you have any questions - andreas.divanis@nookom.eu</p>',
            ],
        ];

        DB::table('code_texts')->insert($codes);

	}

}
