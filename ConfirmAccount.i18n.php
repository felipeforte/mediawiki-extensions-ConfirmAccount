<?php
/**
 * Internationalisation file for ConfirmAccount extension.
 *
 * @addtogroup Extensions
*/

$wgConfirmAccountMessages = array();

$wgConfirmAccountMessages['en'] = array(
	# Request account page
	'requestaccount'          => 'Request account',
	'requestacount-text'      => '\'\'\'Complete and submit the following form to request a user account\'\'\'. 
	
	Make sure that you first read the [[{{NS:PROJECT}}:Terms of Service|Terms of Service]] before requesting an account.
	
	Once the account is approved, you will be emailed a notification message and the account will be usable at 
	[[Special:Userlogin]].',
	'requestaccount-dup'      => '\'\'\'Note: You already are logged in with a registered account.\'\'\'',
	'requestacount-legend1'   => 'User account:',
	'requestacount-legend2'   => 'Personal information:',
	'requestacount-legend3'   => 'Other information:',
	'requestacount-acc-text'  => 'Your email address will be sent a confirmation message once this request is submited. Please respond by clicking 
	on the confirmation link provided by the the email. Also, your password will be emailed to you when your account is created.',
	'requestacount-ext-text'  => 'The following information is kept private and will only be used for this request. 
	You may want to list contacts such a phone number to aid in identify confirmation.',
	'requestaccount-bio-text' => "Your biography will be set as the default content for your userpage. Try to include 
	any credentials. Make sure you are comfortable publishing such information. Your name can be changed via [[Special:Preferences]].",
	'requestaccount-real'     => 'Real name:',
	'requestaccount-same'     => '(same as real name)',
	'requestaccount-email'    => 'Email address:',
	'requestaccount-bio'      => 'Personal biography:',
	'requestaccount-notes'    => 'Additional notes:',
	'requestaccount-urls'     => 'List of websites, if any (separate with newlines):',
	'requestaccount-agree'    => 'You must certify that your real name is correct and that you agree to our Terms of Service.',
	'requestaccount-inuse'    => 'Username is already in use in a pending account request.',
	'requestaccount-tooshort' => 'Your biography must be at least be $1 words long.',
	'requestaccount-tos'      => 'I have read and agree to abide by the Terms of Service of {{SITENAME}}.',
	'requestaccount-correct'  => 'I certify that the name I have specified under "Real name" is in fact my own real name.',
	'requestacount-submit'    => 'Request account',
	'requestaccount-sent'     => 'Your account request has successfully been sent and is now pending review.',
	'request-account-econf'   => 'Your e-mail address has been confirmed and will be listed as such in your account 
	request.',
	'requestaccount-email-subj' => '{{SITENAME}} e-mail address confirmation',
	'requestaccount-email-body' => 'Someone, probably you from IP address $1, has requested an
account "$2" with this e-mail address on {{SITENAME}}.

To confirm that this account really does belong to you on {{SITENAME}}, open this link in your browser:

$3

If the account is created, only you will be emailed the password. If this is *not* you, don\'t follow the link. 
This confirmation code will expire at $4.',

	'acct_request_throttle_hit' => "Sorry, you have already requested $1 accounts. You can't make any more requests.",
	
	# Add to Special:Login
	'requestacount-loginnotice' => 'To obtain a user account, you must \'\'\'[[Special:RequestAccount|request one]]\'\'\'.',
	
	# Confirm account page
	'confirmaccounts'       => 'Confirm account requests', 
	'confirmacount-list'    => 'Below is a list of account requests awaiting approval. 
	Approved accounts will be created and removed from this list. Rejected accounts will simply be deleted from this 
	list.',
	'confirmacount-list2'    => 'Below is a list recently rejected account requests which may automatically be deleted 
	once several days old. They can still be approved into accounts, though you may want to first consult the rejecting 
	admin before doing so.',
	'confirmacount-text'    => 'This is a pending request for a user account at \'\'\'{{SITENAME}}\'\'\'. Carefully 
	review and if needed, confirm, all the below information. Note that you can choose to create the account under a 
	different username. Use this only to avoid 	collisions with other names.
	
	If you simply leave this page without confirming or denying this request, it will remain pending.',
	'confirmacount-none'    => 'There are currently no pending account requests.',
	'confirmacount-none2'   => 'There are currently no recently rejected account requests.',
	'confirmaccount-badid'  => 'There is no pending request corresponding to the given ID. It may have already been handled.',
	'confirmaccount-back'   => 'View pending account list',
	'confirmaccount-back2'  => 'View recently rejected account list',
	'confirmaccount-name'   => 'Username',
	'confirmaccount-real'   => 'Name',
	'confirmaccount-email'  => 'Email',
	'confirmaccount-bio'    => 'Biography',
	'confirmaccount-urls'   => 'List of websites:',
	'confirmaccount-nourls' => '(None provided)',
	'confirmaccount-review' => 'Approve/Reject',
	'confirmacount-confirm' => 'Use the buttons below to accept this request or deny it.',
	'confirmaccount-econf'  => '(confirmed)',
	'confirmaccount-reject' => '(rejected by [[User:$1|$1]] on $2)',
	'confirmacount-create'  => 'Accept (create account)',
	'confirmacount-deny'    => 'Reject (delist)',
	'requestaccount-reason' => 'Comment (will be included in email):',
	'confirmacount-submit'  => 'Confirm',
	'confirmaccount-acc'    => 'Account request confirmed successfully; created new user account [[User:$1]].',
	'confirmaccount-rej'    => 'Account request rejected successfully.',
	'confirmaccount-summary' => 'Creating user page with biography of new user.',
	'confirmaccount-welc'   => "'''Welcome to ''{{SITENAME}}''!''' We hope you will contribute much and well. 
	You'll probably want to read [[{{NS:PROJECT}}:Getting started|Getting started]]. Again, welcome and have fun! 
	~~~~",
	'confirmaccount-wsum'   => 'Welcome!',
	'confirmaccount-email-subj' => '{{SITENAME}} account request',
	'confirmaccount-email-body' => 'Your request for an account has been approved on {{SITENAME}}.

Account name: $1

Password: $2

For security reasons you will need to change your password on first login. To login, please go to 
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body2' => 'Your request for an account has been approved on {{SITENAME}}.

Account name: $1

Password: $2

$3

For security reasons you will need to change your password on first login. To login, please go to 
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body3' => 'Sorry, your request for an account "$1" has been rejected on {{SITENAME}}.

There are several ways this can happen. You may not have filled out the form correctly, did not provide adequate 
length in your responses, or otherwise failed to meet some policy criteria. There may be contact lists on site that 
you can use if you want to know more about user account policy.',
	'confirmaccount-email-body4' => 'Sorry, your request for an account "$1" has been rejected on {{SITENAME}}.

$2

There may be contact lists on site that you can use if you want to know more about user account policy.',
);

// German translations (by Rrosenfeld)
$wgConfirmAccountMessages['de'] = array(
	# Request account page
	'requestaccount'          => 'Benutzerkonto beantragen',
	'requestacount-text'      => '\'\'\'Fülle das folgende Formular aus und schick es ab, um ein Benutzerkonto zu beantragen\'\'\'. 

	Bitte lies zunächst die [[{{NS:PROJECT}}:Nutzungsbedingungen|Nutzungsbedingungen]] bevor du ein Benutzerkonto beantragst.

	Sobald das Konto bestätigt wurde, wirst du per E-Mail benachrichtigt und du kannst dich unter „[[{{ns:special}}:Userlogin|Anmelden]]“ einloggen.',
	'requestaccount-dup'      => '\'\'\'Achtung: Du bist bereits mit einem registrierten Benutzerkonto eingeloggt.\'\'\'',
	'requestacount-legend1'   => 'Benutzerkonto:',
	'requestacount-legend2'   => 'Persönliche Informationen:',
	'requestacount-legend3'   => 'Weitere Informationen:',
	'requestacount-acc-text'  => 'An deine E-Mail-Adresse wird nach dem Absenden dieses Formulars eine Bestätigungsmail geschickt. 
	Bitte reagiere darauf, indem du auf den in dieser Mail enthaltenen Bestätigungs-Link klickst. Sobald dein Konto angelegt wurde,
	wird dir dein Passwort per E-Mail zugeschickt.',
	'requestacount-ext-text'  => 'Die folgenden Informationen werden vertraulich behandelt und ausschließlich für diesen Antrag
	verwendet. Du kannst Kontakt-Angaben wie eine Telefonnummer machen, um die Bearbeitung deines Antrags zu vereinfachen.',
	'requestaccount-bio-text' => "Deine Biographie wird als initialer Inhalt deiner Benutzerseite gespeichert. Versuche alle nötigen
	Empfehlungen zu erwähnen, aber stelle sicher, dass du die Informationen auch wirklich veröffentlichen möchtest. Du kannst deinen
	Namen unter „[[{{ns:special}}:preferences|Einstellungen]]“ ändern.",
	'requestaccount-real'     => 'Real-Name:',
	'requestaccount-same'     => '(wie der Real-Name)',
	'requestaccount-email'    => 'E-Mail-Adresse:',
	'requestaccount-bio'      => 'Persönliche Biographie:',
	'requestaccount-notes'    => 'Zusätzliche Angaben:',
	'requestaccount-urls'     => 'Liste von Webseiten (durch Zeilenumbrüche getrennt):',
	'requestaccount-agree'    => 'Du musst bestätigen, dass Dein Real-Name korrekt ist und du die Benutzerbedingungen akzeptierst.',
	'requestaccount-inuse'    => 'Der Benutzername ist bereits in einem anderen Benutzerantrag in Verwendung.',
	'requestaccount-tooshort' => 'Deine Biographie sollte mindestens $1 Worte lang sein.',
	'requestaccount-tos'      => 'Ich habe die Benutzerbedingungen von {{SITENAME}} gelesen und akzeptiere sie.',
	'requestaccount-correct'  => 'Ich bestätige, dass der Name, den ich unter „Real-Name“ angegeben habe, mein wirklicher Name ist.',
	'requestacount-submit'    => 'Benutzerkonto beantragen',
	'requestaccount-sent'     => 'Dein Antrag wurde erfolgreich verschickt und muss nun noch überprüft werden.',
	'request-account-econf'   => 'Deine E-Mail-Adresse wurde bestätigt und wird nun als solche in Deinem Account-Antrag geführt.',
	'requestaccount-email-subj' => '{{SITENAME}} E-Mail-Adressen Prüfung',
	'requestaccount-email-body' => 'Jemand, mit der IP Adresse $1, möglicherweise du, hat bei {{SITENAME}} 
das Benutzerkonto "$2" mit deiner E-Mail-Adresse beantragt.

Um zu bestätigen, dass wirklich du dieses Konto bei {{SITENAME}}
beantragt hast, öffne bitte folgenden Link in deinem Browser:

$3

Wenn das Benutzerkonto erstellt wurde, bekommst du eine weitere E-Mail
mit dem Passwort.

Wenn du das Benutzerkonto *nicht* beantragt hast, öffne den Link bitte nicht!

Dieser Bestätigungscode wird um $4 ungültig.',

	'acct_request_throttle_hit' => "Du hast bereits $1 Benutzerkonten beantragt, du kannst momentan keine weiteren beantragen.",

	# Add to Special:Login
	'requestacount-loginnotice' => 'Um ein neues Benutzerkonto zu erhalten, musst du es \'\'\'[[{{ns:special}}:RequestAccount|beantragen]]\'\'\'.',

	# Confirm account page
	'confirmaccounts'       => 'Benutzerkonto-Anträge bestätigen', 
	'confirmacount-list'    => 'Unten findest du eine Liste von noch zu bearbeitenden Benutzerkonto-Anträgen.
	Bestätigte Konten werden angelegt und aus der Liste entfernt. Abgelehnte Konten werden einfach aus der Liste gelöscht.',
	'confirmacount-text'    => 'Dies ist ein Antrag auf ein Benutzerkonto bei \'\'\'{{SITENAME}}\'\'\'. Prüfe alle unten
	stehenden Informationen gründlich und bestätige die Informationen wenn möglich. Bitte beachte, dass du den Zugang bei Bedarf unter
	einem anderen Benutzernamen anlegen kannst. Du solltest dies nur nutzen, um Kollisionen mit anderen Namen zu vermeiden.

	Wenn du diese Seite verlässt, ohne das Konto zu bestätigen oder abzulehnen, wird der Antrag offen stehen bleiben.',
	'confirmacount-none'    => 'Momentan gibt es keine offenen Benutzeranträge.',
	'confirmacount-none2'   => 'Momentan gibt es keine kürzlich abgelehnten Benutzeranträge.',
	'confirmaccount-badid'  => 'Momentan gibt es keinen Benutzerantrag zur angegebenen ID. Möglicherweise wurde er bereits bearbeitet.',
	'confirmaccount-back'   => 'Liste der offenen Anträge ansehen',
	'confirmaccount-back2'  => 'Liste der kürzlich abgelehnten Anträge ansehen',
	'confirmaccount-name'   => 'Benutzername',
	'confirmaccount-real'   => 'Name',
	'confirmaccount-email'  => 'E-Mail',
	'confirmaccount-bio'    => 'Biographie',
	'confirmaccount-urls'   => 'Liste der Webseiten:',
	'confirmaccount-nourls' => '(Nichts angegeben)',
	'confirmaccount-review' => 'Bestätigen/Ablehnen',
	'confirmacount-confirm' => 'Benutze die folgende Auswahl, um den Antrag zu akzeptieren oder abzulehnen.',
	'confirmaccount-econf'  => '(bestätigt)',
	'confirmacount-create'  => 'Bestätigen (Konto anlegen)',
	'confirmacount-deny'    => 'Ablehnen (Antrag löschen)',
	'requestaccount-reason' => 'Kommentar (wird in die Mail an den Antragsteller eingefügt):',
	'confirmacount-submit'  => 'Abschicken',
	'confirmaccount-acc'    => 'Benutzerantrag erfolgreich bestätigt; Benutzer [[{{ns:User}}:$1]] wurde angelegt.',
	'confirmaccount-rej'    => 'Benutzerantrag wurde abgelehnt.',
	'confirmaccount-summary' => 'Erzeuge Benutzerseite mit der Biographie des neuen Benutzers.',
	'confirmaccount-welc'   => "'''Willkommen bei ''{{SITENAME}}''!''' Wir hoffen, dass du viele gute Informationen beisteuerst.
	Möglicherweise möchtest Du zunächst [[{{NS:PROJECT}}:Erste Schritte|Erste Schritte]]. Nochmal: Willkommen und hab' Spaß! 
	~~~~",
	'confirmaccount-wsum'   => 'Willkommen!',
	'confirmaccount-email-subj' => '{{SITENAME}} Antrag auf Benutzerkonto',
	'confirmaccount-email-body' => 'Dein Antrag auf ein Benutzerkonto bei {{SITENAME}} wurde bestätigt.

Benutzername: $1

Passwort: $2

Aus Sicherheitsgründen solltest du dein Passwort unbedingt beim ersten
Einloggen ändern. Um dich einzuloggen gehst du auf die Seite
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body2' => 'Dein Antrag auf ein Benutzerkonto bei {{SITENAME}} wurde bestätigt.

Benutzername: $1

Passwort: $2

$3

Aus Sicherheitsgründen solltest du Dein Passwort unbedingt beim ersten
Einloggen ändern. Um dich einzuloggen gehst du auf die Seite
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body3' => 'Leider wurde dein Antrag auf ein Benutzerkonto "$1" 
bei {{SITENAME}} abgelehnt.

Dies kann viele Gründe haben. Möglicherweise hast du das Antragsformular
nicht richtig ausgefüllt, hast nicht genügend Angaben gemacht oder hast
die Anforderungen auf andere Weise nicht erfüllt.

Möglicherweise gibt es auf der Seite Kontaktadressen, an die du dich wenden
kannst, wenn du mehr über die Anforderungen wissen möchtest.',
	'confirmaccount-email-body4' => 'Leider wurde dein Antrag auf ein Benutzerkonto "$1" 
bei {{SITENAME}} abgelehnt.

$2

Möglicherweise gibt es auf der Seite Kontaktadressen, an die du dich wenden
kannst, wenn du mehr über die Anforderungen wissen möchtest.',
);

$wgConfirmAccountMessages['nl'] = array(
	# Request account page
	'requestaccount'          => 'Gebruiker aanvragen',
	'requestacount-text'      => '\'\'\'Vul het onderstaande formulier in en stuur het op om een gebruiker aan te vragen\'\'\'. 
	
	Zorg ervoor dat u eerst de [[{{NS:PROJECT}}:Terms of Service|Voorwaarden]] leest voordat u een gebruiker aanvraagt.
	
	Als uw gebruiker is goedgekeurd, krijgt u een e-mail en daarna kunt u aanmelden via [[Special:Userlogin]].',
	'requestaccount-dup'      => '\'\'\'Note bene: U bent al aangemeld met een geregistreede gebruiker.\'\'\'',
	'requestacount-legend1'   => 'Gebruiker:',
	'requestacount-legend2'   => 'Persoonlijke informatie:',
	'requestacount-legend3'   => 'Overige informatie:',
	'requestacount-acc-text'  => 'U ontvangt een e-mailbevestiging als uw verzoek is ontvangen. Reageer daar alstublieft op 
	door de klikken op de bevesitigngslink die in de e-mail staat. U krijgt een wachtwoord als uw gebruiker is aangemaakt.',
	'requestacount-ext-text'  => 'De volgende informatie wordt vertrouwelijk behandeld en wordt alleen gebruikt voor dit verzoek. 
	U kunt contactgegevens zoals een telefoonummer opgeven om te helpen bij het vaststellen van uw identiteit.',
	'requestaccount-bio-text' => "Uw biografie wordt opgenomen in uw gebruikerspagina. Probeer uw belangrijkste gegevens 
	op te nemen. Zorg ervoor dat u achter het publiceren van dergelijke informatie staat. U kunt uw naam wijzigen via uw [[Special:Preferences|voorkeuren]].",
	'requestaccount-real'     => 'Uw naam:',
	'requestaccount-same'     => '(gelijk aan uw naam)',
	'requestaccount-email'    => 'E-mailadres:',
	'requestaccount-bio'      => 'Persoonlijke biografie:',
	'requestaccount-notes'    => 'Opmerkingen:',
	'requestaccount-urls'     => 'Lijst van websites, als van toepassing (iedere site op een aparte regel):',
	'requestaccount-agree'    => 'U moet aangegeven dat uw naam juist is en dat u akkoord gaat met de Voorwaarden.',
	'requestaccount-inuse'    => 'De gebruiker is al bekend in een aanvraagprocedure.',
	'requestaccount-tooshort' => 'Uw biografie moet tenminste $1 woorden bevatten.',
	'requestaccount-tos'      => 'Ik heb de Voorwaarden van {{SITENAME}} gelezen en ga ermee akkoord.',
	'requestaccount-correct'  => 'Ik bevestig dat de naam die ik heb opgegeven onder "Uw naam" inderdaad mijn eigen naam is.',
	'requestacount-submit'    => 'Gebruiker aanvragen',
	'requestaccount-sent'     => 'Uw gebruikersaanvraag is verstuurd en wacht op review.',
	'request-account-econf'   => 'Uw e-mailadres is bevestigd en wordt in uw gebruikersaanvraag opgenomen.',
	'requestaccount-email-subj' => '{{SITENAME}} bevestiging e-mailadres',
	'requestaccount-email-body' => 'Iemand, waarschijnlijk u, heeft vanaf  IP-adres $1 op {{SITENAME}} een verzoek gedaan
voor het aanmaken van gebruiker "$2" met dit e-mailadres.

Open de onderstaande link in uw browser om te bevestigen dat deze gebruiker op {{SITENAME}} daadwerkelijk bij u hoort:

$3

Als de gebruiker is aangemaakt krijgt alleen u een e-mail met het wachtwoord. Als de aanvraag niet van u afkomstig is, volg de link dan *niet*. 
Deze bevestigingse-mail verloop op $4.',

	'acct_request_throttle_hit' => "Sorry, maar u heeft al $1 gebruikersverzoeken gedaan. U kunt geen nieuwe verzoeken meer uitbrengen.",
	
	# Add to Special:Login
	'requestacount-loginnotice' => 'Om een gebruiker te krijgen, moet u \'\'\'[[Special:RequestAccount|een verzoek doen]]\'\'\'.',
	
	# Confirm account page
	'confirmaccounts'       => 'Bevestig gebruikersverzoeken',
	'confirmacount-list'    => 'Hieronder staan de gebruikersverzoeken die op afhandeling wachten. 
	Voor goedgekeurde gebruikersverzoeken worden gebruikers aangemaakt en dat verzoek komt niet langer voor in deze lijst. 
	Afgewezen gebruikersverzoeken worden van de lijst verwijderd.',
	'confirmacount-list2'    => 'Hieronder staan recentelijk afgewezen gebruikersverzoeken die die over een aantal dagen
	automatisch worden verwijderd. Ze kunnen nog steeds goedgekeurd worden, hoewel het verstandig is voorafgaand contact te
	zoeken met de beheerder die het verzoek heeft afgewezen.',
	'confirmacount-text'    => 'Dit is een openstaand gebruikersverzoek voor \'\'\'{{SITENAME}}\'\'\'. Beoordeel het
	alstublieft zorgvuldig en bevestig, als nodig, alle onderstaande informatie. U kunt een gebruiker aanmaken met een andere
	naam. Doe dit alleen als er mogelijk verwarring kan optreden met andere gebruikersnamen.
	
	Als u deze pagina verlaat zonder het gebruikersverzoek te bevestigen of af te wijzen, dan blijft het open staan.',
	'confirmacount-none'    => 'Er zijn op dit moment geen openstaande gebruikersverzoeken.',
	'confirmacount-none2'   => 'Er zijn op het moment geen recent afgewezen gebruikersverzoeken.',
	'confirmaccount-badid'  => 'Er is geen openstaand gebruikersverzoeken voor het opgegeven ID. Wellicht is het al afgehandeld.',
	'confirmaccount-back'   => 'Bekijk openstaande gebruikersverzoeken',
	'confirmaccount-back2'  => 'Bekijk recent afgewezen verzoeken',
	'confirmaccount-name'   => 'Gebruikersnaam',
	'confirmaccount-real'   => 'Naam',
	'confirmaccount-email'  => 'E-mail',
	'confirmaccount-bio'    => 'Biografie',
	'confirmaccount-urls'   => 'Lijst met websites:',
	'confirmaccount-nourls' => '(niet opgegeven)',
	'confirmaccount-review' => 'toegelaten/afgewezen',
	'confirmacount-confirm' => 'Gebruik de onderUse the buttons below to accept this request or deny it.',
	'confirmaccount-econf'  => '(bevestigd)',
	'confirmaccount-reject' => '(afgewezen door [[User:$1|$1]] op $2)',
	'confirmacount-create'  => 'Toelaten (gebruiker aanmaken)',
	'confirmacount-deny'    => 'Afwijzen (verwijderen)',
	'requestaccount-reason' => 'Opmerking (wordt opgenomen in de e-mail):',
	'confirmacount-submit'  => 'Bevestigen',
	'confirmaccount-acc'    => 'Gebruikersverzoek goedgekeurd. De gebruiker [[User:$1]] is aangemaakt.',
	'confirmaccount-rej'    => 'Gebruikersverzoek afgewezen.',
	'confirmaccount-summary' => 'Er wordt een gebruikerspagina gemaakt met de biografie van de nieuwe gebruiker.',
	'confirmaccount-welc'   => "'''Welkom bij ''{{SITENAME}}''!''' We hopen dat u veel goed bijdragen levert. 
	Waarschijnlijk wilt u kennis nemen van [[{{NS:PROJECT}}:Getting started|Eerste stappen]]. Nogmaals, welkom en veel plezier! 
	~~~~",
	'confirmaccount-wsum'   => 'Welkom!',
	'confirmaccount-email-subj' => '{{SITENAME}} gebruikersverzoek',
	'confirmaccount-email-body' => 'Uw gebruikersverzoek op {{SITENAME}} is goedgekeurd.

Gebruiker: $1

Wachtwoord: $2

Om beveiligingsredenen dient u uw wachtwoord bij de eerste keer aanmelden te wijzigen. Aanmelden kan via 
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body2' => 'Uw gebruikersverzoek op {{SITENAME}} is goedekeurd.

Gebruikersnaam: $1

Wachtwoord: $2

$3

Om beveiligingsredenen dient u uw wachtwoord bij de eerste keer aanmelden te wijzigen. Aanmelden kan via 
{{fullurl:Special:Userlogin}}.',
	'confirmaccount-email-body3' => 'Sorry, uw gebruikersverzoek voor "$1" op {{SITENAME}} is afgewezen.

Dit kan meerdere oorzaken hebben. Mogelijk heeft u het formulier niet volledig ingevuld, waren uw antwoorden 
onvoldoende compleet, of heeft u om een andere reden niet voldaan aan de eisen. Op de site staan mogelijk 
lijsten met contactgegevens als u meer wilt weten over het gebruikersbeleid.',
	'confirmaccount-email-body4' => 'Sorry, uw gebruikersverzoek voor "$1" op {{SITENAME}} is afgewezen.

$2

Op de site staan mogelijk lijsten met contactgegevens als u meer wilt weten over het gebruikersbeleid.',
);
