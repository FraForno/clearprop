<?php
/** Greek (Ελληνικά)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @file
 * @ingroup Languages
 */

/**
 * Initial translation by Pasok Internet Volunteers
 * http://forum.pasok.gr
 * version 1.0 (initial release)
 *
 * The project for the translation of MediaWiki into Greek
 * was undertaken by a group of ICT volunteers working under
 * the auspices of the Greek political party PASOK.
 *
 * The idea behind this effort was  to provide an extensible,
 * easy-to-use and non-intimidating tool for content development
 * and project management, to be used throughout the administrative
 * and political structure of PASOK by staff, volunteers, party members
 * and elected officials (all of whom possess varying degrees of ICT skills).
 *
 * The PASOK ICT team and the volunteers who worked on this project are
 * now returning the translated interface to the Open-Source Community
 * with over 98% of the messages translated into user-friendly Greek.
 *
 * We hope that it will be used as a tool by other civil society organizations
 * in Greece, and that it will enhance the collective creation and the dissemination
 * of knowledge - an essential component of the democratic process.
 */

$namespaceNames = [
	NS_MEDIA            => 'Μέσο',
	NS_SPECIAL          => 'Ειδικό',
	NS_TALK             => 'Συζήτηση',
	NS_USER             => 'Χρήστης',
	NS_USER_TALK        => 'Συζήτηση_χρήστη',
	NS_PROJECT_TALK     => 'Συζήτηση_$1',
	NS_FILE             => 'Αρχείο',
	NS_FILE_TALK        => 'Συζήτηση_αρχείου',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Συζήτηση_MediaWiki',
	NS_TEMPLATE         => 'Πρότυπο',
	NS_TEMPLATE_TALK    => 'Συζήτηση_προτύπου',
	NS_HELP             => 'Βοήθεια',
	NS_HELP_TALK        => 'Συζήτηση_βοήθειας',
	NS_CATEGORY         => 'Κατηγορία',
	NS_CATEGORY_TALK    => 'Συζήτηση_κατηγορίας',
];

$namespaceAliases = [
	'Μέσον'            => NS_MEDIA,
	'$1_συζήτηση'      => NS_PROJECT_TALK,
	'Εικόνα'           => NS_FILE,
	'Συζήτηση_εικόνας' => NS_FILE_TALK,
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'ΕνεργοίΧρήστες' ],
	'Allmessages'               => [ 'ΌλαΤαΜηνύματα' ],
	'AllMyUploads'              => [ 'ΌλαΤαΑρχείαΜου' ],
	'Allpages'                  => [ 'ΌλεςΟιΣελίδες' ],
	'Ancientpages'              => [ 'ΑρχαίεςΣελίδες' ],
	'Badtitle'                  => [ 'ΚακόςΤίτλος' ],
	'Blankpage'                 => [ 'ΚενήΣελίδα' ],
	'Block'                     => [ 'Φραγή', 'ΦραγήIP', 'ΦραγήΧρήστη' ],
	'BlockList'                 => [ 'ΚατάλογοςΦραγών', 'ΦραγώνΚατάλογος', 'ΚατάλογοςΦραγώνIP' ],
	'Booksources'               => [ 'ΠηγέςΒιβλίων' ],
	'BrokenRedirects'           => [ 'ΚατεστραμμένεςΑνακατευθύνσεις' ],
	'Categories'                => [ 'Κατηγορίες' ],
	'ChangeEmail'               => [ 'ΑλλαγήEmail' ],
	'ChangePassword'            => [ 'ΑλλαγήΚωδικού', 'ΑρχικοποίησηΠάσου', 'ΑρχικοποίησηΚωδικού' ],
	'ComparePages'              => [ 'ΣύγκρισηΣελίδων' ],
	'Confirmemail'              => [ 'ΕπιβεβαίωσηEmail' ],
	'Contributions'             => [ 'Συνεισφορές' ],
	'CreateAccount'             => [ 'ΔημιουργίαΛογαριασμού' ],
	'Deadendpages'              => [ 'ΑδιέξοδεςΣελίδες' ],
	'DeletedContributions'      => [ 'ΔιαγραμμένεςΣυνεισφορές' ],
	'Diff'                      => [ 'Διαφορά' ],
	'DoubleRedirects'           => [ 'ΔιπλέςΑνακατευθύνσεις' ],
	'EditWatchlist'             => [ 'ΕπεξεργασίαΛίσταςΠαρακολούθησης' ],
	'Emailuser'                 => [ 'EmailΧρήστη' ],
	'ExpandTemplates'           => [ 'ΕπέκτασηΠροτύπων' ],
	'Export'                    => [ 'Εξαγωγή' ],
	'Fewestrevisions'           => [ 'ΛιγότεροΕπεξεργασίες' ],
	'FileDuplicateSearch'       => [ 'ΑναζήτησηΔιπλώνΑρχείων' ],
	'Filepath'                  => [ 'ΔιαδρομήΑρχείου' ],
	'Import'                    => [ 'Εισαγωγή' ],
	'Invalidateemail'           => [ 'ΑκύρωσηEmail' ],
	'LinkSearch'                => [ 'ΣυνδέσμουΑναζήτηση' ],
	'Listadmins'                => [ 'ΚατάλογοςΔιαχειριστών' ],
	'Listbots'                  => [ 'ΚατάλογοςBot' ],
	'Listfiles'                 => [ 'ΚατάλογοςΑρχείων', 'ΑρχείαΚατάλογος', 'ΚατάλογοςΕικόνων' ],
	'Listgrouprights'           => [ 'ΚατάλογοςΔικαιωμάτωνΧρηστών' ],
	'Listredirects'             => [ 'ΚατάλογοςΑνακατευθύνσεων' ],
	'Listusers'                 => [ 'ΚατάλογοςΧρηστών', 'ΧρήστεςΚατάλογος' ],
	'Lockdb'                    => [ 'ΚλείδωμαΒάσης' ],
	'Log'                       => [ 'Μητρώο', 'Μητρώα' ],
	'Lonelypages'               => [ 'ΜόνεςΣελίδες', 'ΟρφανέςΣελίδες' ],
	'Longpages'                 => [ 'ΜεγάλεςΣελίδες' ],
	'MergeHistory'              => [ 'ΣυγχώνευσηΙστορικού' ],
	'MIMEsearch'                => [ 'ΑναζήτησηMIME' ],
	'Mostcategories'            => [ 'ΠερισσότεροΚατηγορίες' ],
	'Mostimages'                => [ 'ΠερισσότεροΣυνδεδεμέναΑρχεία', 'ΠερισσότεροΑρχεία' ],
	'Mostlinked'                => [ 'ΠερισσότεροΣυνδεδεμένεςΣελίδες', 'ΠερισσότεροΣυνδεδεμένες' ],
	'Mostlinkedcategories'      => [ 'ΠερισσότεροΣυνδεδεμένεςΚατηγορίες', 'ΠερισσότεροΧρησιμοποιημένεςΚατηγορίες' ],
	'Mostlinkedtemplates'       => [ 'ΠερισσότεροΣυνδεδεμέναΠρότυπα', 'ΠερισσότεροΧρησιμοποιημέναΠρότυπα' ],
	'Mostrevisions'             => [ 'ΠερισσότεροΕπεξεργασίες' ],
	'Movepage'                  => [ 'ΜετακίνησηΣελίδας' ],
	'Mycontributions'           => [ 'ΟιΣυνεισφορέςΜου' ],
	'MyLanguage'                => [ 'ΗΓλώσσαΜου' ],
	'Mypage'                    => [ 'ΗΣελίδαΜου' ],
	'Mytalk'                    => [ 'ΗΣυζήτησήΜου' ],
	'Myuploads'                 => [ 'ΤαΑρχείαΜου', 'ΤαΑνεβάσματάΜου', 'ΟιΕπιφορτώσειςΜου' ],
	'Newimages'                 => [ 'ΝέαΑρχεία', 'ΝέεςΕικόνες' ],
	'Newpages'                  => [ 'ΝέεςΣελίδες' ],
	'Preferences'               => [ 'Προτιμήσεις' ],
	'Prefixindex'               => [ 'ΕυρετήριοΠροθεμάτων' ],
	'Protectedpages'            => [ 'ΠροστατευμένεςΣελίδες' ],
	'Protectedtitles'           => [ 'ΠροστατευμένοιΤίτλοι' ],
	'RandomInCategory'          => [ 'ΤυχαίαΣτηνΚατηγορία', 'ΤυχαίοΣτηνΚατηγορία' ],
	'Randompage'                => [ 'Τυχαία', 'ΤυχαίαΣελίδα', 'Τυχαίο' ],
	'Randomredirect'            => [ 'ΤυχαίαΑνακατεύθυνση' ],
	'Recentchanges'             => [ 'ΠρόσφατεςΑλλαγές' ],
	'Recentchangeslinked'       => [ 'ΣυνδεδεμένεςΠρόσφατεςΑλλαγές', 'ΣχετικέςΑλλαγές' ],
	'Redirect'                  => [ 'Ανακατεύθυνση' ],
	'Revisiondelete'            => [ 'ΔιαγραφήΈκδοσης' ],
	'Search'                    => [ 'Αναζήτηση' ],
	'Shortpages'                => [ 'ΜικρέςΣελίδες' ],
	'Specialpages'              => [ 'ΕιδικέςΣελίδες' ],
	'Statistics'                => [ 'Στατιστικά' ],
	'Tags'                      => [ 'Ετικέτες' ],
	'TrackingCategories'        => [ 'ΚατηγορίεςΑνίχνευσης' ],
	'Uncategorizedcategories'   => [ 'ΑκατηγοριοποίητεςΚατηγορίες' ],
	'Uncategorizedimages'       => [ 'ΑκατηγοριοποίηταΑρχεία', 'ΑκατηγοριοποίητεςΕικόνες' ],
	'Uncategorizedpages'        => [ 'ΑκατηγοριοποίητεςΣελίδες' ],
	'Uncategorizedtemplates'    => [ 'ΑκατηγοριοποίηταΠρότυπα' ],
	'Undelete'                  => [ 'ΑναίρεσηΔιαγραφής' ],
	'Unlockdb'                  => [ 'ΞεκλείδωμαΒάσης' ],
	'Unusedcategories'          => [ 'ΑχρησιμοποίητεςΚατηγορίες' ],
	'Unusedimages'              => [ 'ΑχρησιμοποίηταΑρχεία' ],
	'Unusedtemplates'           => [ 'ΜηΧρησιμοποιούμεναΠρότυπα' ],
	'Unwatchedpages'            => [ 'ΜηΠαρακολουθούμενεςΣελίδες' ],
	'Upload'                    => [ 'Ανέβασμα', 'Επιφόρτωση' ],
	'Userlogin'                 => [ 'ΣύνδεσηΧρήστη' ],
	'Userlogout'                => [ 'ΑποσύνδεσηΧρήστη' ],
	'Userrights'                => [ 'ΔικαιώματαΧρηστών' ],
	'Version'                   => [ 'Έκδοση' ],
	'Wantedcategories'          => [ 'ΕπιθυμητέςΚατηγορίες' ],
	'Wantedfiles'               => [ 'ΕπιθυμητάΑρχεία' ],
	'Wantedpages'               => [ 'ΕπιθυμητέςΣελίδες', 'ΣπασμένοιΣύνδεσμοι' ],
	'Wantedtemplates'           => [ 'ΕπιθυμητάΠρότυπα' ],
	'Watchlist'                 => [ 'ΛίσταΠαρακολούθησης' ],
	'Whatlinkshere'             => [ 'ΤιΣυνδέειΕδώ' ],
	'Withoutinterwiki'          => [ 'ΧωρίςInterwiki' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗΑΓΚΥΡΑΣ', 'ANCHORENCODE' ],
	'basepagename'              => [ '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣΚ', 'BASEPAGENAMEE' ],
	'canonicalurl'              => [ '0', 'ΚΑΝΟΝΙΚΟURL:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'ΚΑΝΟΝΙΚΟURLΚ:', 'CANONICALURLE:' ],
	'contentlanguage'           => [ '1', 'ΓΛΩΣΣΑΠΕΡΙΕΧΟΜΕΝΟΥ', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΟΝΟΜΑ', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'ΤΡΕΧΟΥΣΑΩΡΑ', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣ', 'ΤΡΕΧΩΝΜΗΝΑΣ2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣ1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΣΥΝΤ', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΟΝΟΜΑ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΓΕΝΙΚΗ', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'ΤΡΕΧΩΝΧΡΟΝΟΣ', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'ΤΡΕΧΟΥΣΑΧΡΟΝΟΣΗΜΑΝΣΗ', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'ΤΡΕΧΟΥΣΑΕΚΔΟΣΗ', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'ΤΡΕΧΟΥΣΑΕΒΔΟΜΑΔΑ', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ΤΡΕΧΟΝΕΤΟΣ', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗ:', 'ΚΛΕΙΔΙΠΡΟΚΑΘΟΡΙΣΜΕΝΗΣΤΑΞΙΝΟΜΗΣΗΣ:', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗΚΑΤΗΓΟΡΙΑΣ:', 'ΠΡΟΚΤΑΞ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'directionmark'             => [ '1', 'ΚΩΔΙΚΟΣΦΟΡΑΣ', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'ΔΕΙΞΕΤΙΤΛΟ', 'ΠΡΟΒΟΛΗΤΙΤΛΟΥ', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'ΔΙΑΔΡΟΜΗΑΡΧΕΙΟΥ:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__ΜΕΠΠ__', '__ΜΕΠΙΝΑΚΑΠΕΡΙΕΧΟΜΕΝΩΝ__', '__FORCETOC__' ],
	'formatnum'                 => [ '0', 'ΜΟΡΦΟΠΟΙΗΣΗΑΡΙΘΜΟΥ', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'ΠΛΗΡΕΣURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ΠΛΗΡΕΣURLΚ:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'ΦΥΛΟ:', 'GENDER:' ],
	'grammar'                   => [ '0', 'ΓΡΑΜΜΑΤΙΚΗ:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__ΚΡΥΦΗΚΑΤΗΓΟΡΙΑ__', '__HIDDENCAT__' ],
	'img_alt'                   => [ '1', 'εναλλ.=$1', 'alt=$1' ],
	'img_baseline'              => [ '1', 'γραμμήβάσης', 'baseline' ],
	'img_border'                => [ '1', 'πλαίσιο', 'border' ],
	'img_bottom'                => [ '1', 'κάτω', 'bottom' ],
	'img_center'                => [ '1', 'κέντρο', 'center', 'centre' ],
	'img_framed'                => [ '1', 'με-πλαίσιο', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'χωρίς-πλαίσιο', 'frameless' ],
	'img_left'                  => [ '1', 'αριστερά', 'left' ],
	'img_link'                  => [ '1', 'σύνδεσμος=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'μικρογραφία=$1', 'μινιατούρα=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'μέσο', 'middle' ],
	'img_none'                  => [ '1', 'καθόλου', 'none' ],
	'img_page'                  => [ '1', 'σελίδα=$1', 'σελίδα_$1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'δεξιά', 'right' ],
	'img_sub'                   => [ '1', 'δείκτης', 'sub' ],
	'img_super'                 => [ '1', 'εκθέτης', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'κάτω-από-το-κείμενο', 'text-bottom' ],
	'img_text_top'              => [ '1', 'πάνω-από-το-κείμενο', 'text-top' ],
	'img_thumbnail'             => [ '1', 'μικρογραφία', 'μινιατούρα', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'άνω', 'top' ],
	'img_upright'               => [ '1', 'κατακόρυφα', 'κατακόρυφα=$1', 'κατακόρυφα_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1εσ', '$1px' ],
	'index'                     => [ '1', '__ΕΥΡΕΤΗΡΙΟ__', '__INDEX__' ],
	'int'                       => [ '0', 'ΕΣΩΤ:', 'INT:' ],
	'language'                  => [ '0', '#ΓΛΩΣΣΑ:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'ΠΕΖΑ:', 'LC:' ],
	'lcfirst'                   => [ '0', 'ΠΡΩΤΟΠΕΖΟ:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'ΤΟΠΙΚΗΜΕΡΑ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ΤΟΠΙΚΗΜΕΡΑ2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ΤΟΠΙΚΗΜΕΡΑΟΝΟΜΑ', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'ΤΟΠΙΚΗΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'ΤΟΠΙΚΗΩΡΑ', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΣΥΝΤ', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΟΝΟΜΑ', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΓΕΝΙΚΗ', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'ΤΟΠΙΚΟΣΧΡΟΝΟΣ', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'ΤΟΠΙΚΗΧΡΟΝΟΣΗΜΑΝΣΗ', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'ΤΟΠΙΚΟURL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ΤΟΠΙΚΟURLΚ:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'ΤΟΠΙΚΗΕΒΔΟΜΑΔΑ', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ΤΟΠΙΚΟΕΤΟΣ', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'ΚΕΙΜΕΝΟ:', 'MSG:' ],
	'msgnw'                     => [ '0', 'ΑΠΛΟΚΕΙΜΕΝΟ:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'ΠΕΡΙΟΧΗ', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ΠΕΡΙΟΧΗΚ', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'ΑΡΙΘΜΟΣΟΝΟΜΑΤΟΣΧΩΡΟΥ', 'ΑΡΙΘΜΟΣΟΝΟΜΑΤΟΧΩΡΟΥ', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__ΔΕΣΜΟΣΝΕΑΣΕΝΟΤΗΤΑΣ__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΠΕΡΙΧΟΜΕΝΟΥ__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__ΧΩΡΙΣΕΠΕΞΕΝΟΤ__', '__ΧΩΡΙΣΕΠΕΞΕΡΓΑΣΙΑΕΝΟΤΗΤΩΝ__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__ΧΩΡΙΣΠΙΝΑΚΟΘΗΚΗ__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__ΧΩΡΙΣΕΥΡΕΤΗΡΙΟ__', '__NOINDEX__' ],
	'notitleconvert'            => [ '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΤΙΤΛΟΥ__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__ΧΩΡΙΣΠΠ__', '__ΧΩΡΙΣΠΙΝΑΚΑΠΕΡΙΕΧΟΜΕΝΩΝ__', '__NOTOC__' ],
	'ns'                        => [ '0', 'ΧΟ:', 'ΧΩΡΟΣΟΝΟΜΑΤΩΝ:', 'ΟΧ:', 'ΟΝΟΜΑΤΟΧΩΡΟΣ:', 'NS:' ],
	'numberingroup'             => [ '1', 'ΟΜΑΔΑΑΡΙΘΜΗΣΗΣ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'ΕΝΕΡΓΟΙΧΡΗΣΤΕΣ', 'ΑΡΙΘΜΟΣΕΝΕΡΓΩΝΧΡΗΣΤΩΝ', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'ΑΡΙΘΜΟΣΔΙΑΧΕΙΡΙΣΤΩΝ', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'ΑΡΙΘΜΟΣΑΡΘΡΩΝ', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'ΑΡΙΘΜΟΣΕΠΕΞΕΡΓΑΣΙΩΝ', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'ΑΡΙΘΜΟΣΑΡΧΕΙΩΝ', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'ΑΡΙΘΜΟΣΣΕΛΙΔΩΝ', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'ΑΡΙΘΜΟΣΧΡΗΣΤΩΝ', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'ΑΡΙΣΤΕΡΟΠΑΡΑΓΕΜΙΣΜΑ', 'PADLEFT' ],
	'padright'                  => [ '0', 'ΔΕΞΙΠΑΡΑΓΕΜΙΣΜΑ', 'PADRIGHT' ],
	'pagename'                  => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣ', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'ΣΕΛΙΔΕΣΣΤΗΝΚΑΤΗΓΟΡΙΑ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesinnamespace'          => [ '1', 'ΣΕΛΙΔΕΣΣΤΗΝΠΕΡΙΟΧΗΟΝΟΜΑΤΩΝ:', 'ΣΕΛΙΔΕΣΣΤΗΝΠΟ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'ΜΕΓΕΘΟΣΣΕΛΙΔΑΣ', 'PAGESIZE' ],
	'plural'                    => [ '0', 'ΠΛΗΘΥΝΤΙΚΟΣ:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'ΕΠΙΠΕΔΟΠΡΟΣΤΑΣΙΑΣ', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'ΓΥΜΝΑ:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'Γ', 'R' ],
	'redirect'                  => [ '0', '#ΑΝΑΚΑΤΕΥΘΥΝΣΗ', '#REDIRECT' ],
	'revisionday'               => [ '1', 'ΜΕΡΑΑΛΛΑΓΗΣ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ΜΕΡΑΑΛΛΑΓΗΣ2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'ΚΩΔΙΚΟΣΑΛΛΑΓΗΣ', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'ΜΗΝΑΣΑΛΛΑΓΗΣ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'ΜΗΝΑΣΑΝΑΘΕΩΡΗΣΗΣ1', 'REVISIONMONTH1' ],
	'revisiontimestamp'         => [ '1', 'ΧΡΟΝΟΣΗΜΑΝΣΗΑΛΛΑΓΗΣ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'ΧΡΗΣΤΗΣΑΝΑΘΕΩΡΗΣΗΣ', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'ΕΤΟΣΑΛΛΑΓΗΣ', 'REVISIONYEAR' ],
	'scriptpath'                => [ '0', 'ΔΙΑΔΡΟΜΗΠΡΟΓΡΑΜΜΑΤΟΣ', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'ΕΞΥΠΗΡΕΤΗΤΗΣ', 'SERVER' ],
	'servername'                => [ '0', 'ΟΝΟΜΑΕΞΥΠΗΡΕΤΗΤΗ', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'ΙΣΤΟΧΩΡΟΣ', 'SITENAME' ],
	'special'                   => [ '0', 'λειτουργία', 'special' ],
	'staticredirect'            => [ '1', '__ΣΤΑΤΙΚΗΑΝΑΚΑΤΕΥΘΥΝΣΗ__', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'ΔΙΑΔΡΟΜΗΣΤΥΛ', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣΚ', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝ', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝΚ', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣΚ', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'ΑΛΛΑΓΗ:', 'SUBST:' ],
	'tag'                       => [ '0', 'ετικέτα', 'tag' ],
	'talkpagename'              => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝΚ', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝ', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝΚ', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__ΠΠ__', '__ΠΙΝΑΚΑΣΠΕΡΙΕΧΟΜΕΝΩΝ__', '__TOC__' ],
	'uc'                        => [ '0', 'ΚΕΦΑΛΑΙΑ:', 'UC:' ],
	'ucfirst'                   => [ '0', 'ΠΡΩΤΟΚΕΦΑΛΑΙΟ:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗURL:', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'ΔΙΑΔΡΟΜΗ', 'PATH' ],
	'url_query'                 => [ '0', 'ΕΡΩΤΗΜΑ', 'QUERY' ],
];

$fallback8bitEncoding = 'iso-8859-7';
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
$linkTrail = '/^([a-zαβγδεζηθικλμνξοπρστυφχψωςΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩάέήίόύώϊϋΐΰΆΈΉΊΌΎΏΪΫ]+)(.*)$/sDu';

$datePreferences = [
	'default',
	'dmy',
	'ISO 8601',
];

$defaultDateFormat = 'dmy';

$datePreferenceMigrationMap = [
	'default',
	'dmy',
	'dmy',
	'dmy'
];

$dateFormats = [
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];
