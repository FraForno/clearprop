<?php

return [
    'dashboard' => [
        'greeting' => 'Ciao ',
		'unauthorized' => 'Accesso non autorizzato',
        'title' => 'Dashboard',
        'statistics' => [
            'global' => 'Tutto il Club',
            'instructor' => 'Come Instruttore',
            'personal' => 'Personale',
            'title_linechart' => 'Activities',
            'title_linechart_chart' => 'Monthly total',
            'grantotal' => 'Balance',
            'incomeAmountTotal' => 'Incomes',
            'activityAmountTotal' => 'Activities',
            'totalAirtime' => 'Tempo di volo totale',
            'loggedMissions' => 'Voli effettuati',
            'avgdurationpermission' => 'Durata media volo',
        ],
        'show_all_reservations' => 'Visualizza tutte le prenotazioni',
        'reservation_title' => 'Prenotazioni',
        'personal_request' => 'Prenotazione',
        'slot_title' => 'Appuntamenti',
        'slot_title_singular' => 'Appuntamento',
        'book_slot' => 'Prenota ora!',
        'revoke_slot' => 'Cancella prenotazione',
        'create_booking_action' => 'Crea prenotazione',
        'create_charter_booking' => 'Volo',
        'create_school_booking' => 'Lezione',
        'create_maintenance_booking' => 'Manutenzione',
        'edit_request' => 'Modifica richiesta',
    ],
    'profile' => [
        'title_singular' => 'Il mio account',
        'finance_stats' => 'Finanze',
        'personal_data' => 'Dati personali',
        'finance' => [
            'personal' => 'Personale',
            'instructor' => 'Come Instructtore',
            'global' => 'Globale',
        ],
        'balance_sum' => 'Saldo',
        'activity_sum' => 'Spese di attività',
        'payment_sum' => 'Pagamenti acc. voli',

    ],
    'userManagement' => [
        'title' => 'Gestione Utenti',
        'title_singular' => 'Gestione Utenti',
    ],
    'permission' => [
        'title' => 'Permessi',
        'title_singular' => 'Permesso',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Titolo',
            'title_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'role' => [
        'title' => 'Ruoli',
        'title_singular' => 'Ruolo',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Titolo',
            'title_helper' => '',
            'permissions' => 'Permissions',
            'permissions_helper' => '',
            'created_at' => 'Creato in data',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato in data',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato in data',
            'deleted_at_helper' => '',
        ],
    ],
    'user' => [
        'title' => 'Soci',
        'title_singular' => 'Socio',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Nome',
			'name_helper' => '',
			'surname' => 'Cognome',
            'surname_helper' => '',
            'email' => 'Email',
            'email_helper' => '',
            'email_verified_at' => 'Email verificata in data',
            'email_verified_at_helper' => '',
            'password' => 'Password',
            'password_helper' => 'Impostare una password per il primo accesso dell\'utente',
			'password_edit_helper' => 'Lasciare in bianco per mantenere password attuale',
            'roles' => 'Profilo',
            'roles_helper' => 'Tipo di profilo',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'factor' => 'Listino prezzi',
            'factor_helper' => 'Listino prezzi abbinato',
            'instructor' => 'Istruttore',
            'instructor_helper' => '',
            'medical_due' => 'Scadenza visita medica',
            'medical_due_helper' => 'Data di scadenza della visita medica',
			'associate_due' => 'Scadenza quota associativa',
            'associate_due_helper' => 'Data di scadenza della quota associativa',
            'license' => 'Numero attestato',
            'license_helper' => 'Numero dell\'attestato o della licenza di volo',
            'lang' => 'Lingua',
            'lang_helper' => 'Lingua dell\'interfaccia',
            'params' => 'Parametri',
            'params_helper' => 'Parametri aggiuntivi',
            'taxno' => 'Codice fiscale',
            'taxno_helper' => '',
            'phone_1' => 'Telefono 1',
            'phone_1_helper' => '',
            'phone_2' => 'Telefono 2',
            'phone_2_helper' => '',
			'phone_3' => 'Telefono 3',
            'phone_3_helper' => '',
			'fax' => 'Fax',
            'fax_helper' => '',
            'address' => 'Indirizzo',
            'address_helper' => '',
            'city' => 'Città',
            'city_helper' => '',
			'zipcode' => 'CAP',
            'zipcode_helper' => '',
			'prov' => 'Provincia',
            'prov_helper' => '',
            'privacy' => 'Acconsento il trattamento dei miei dati personali',
            'plane' => 'Ratings',
            'plane_helper' => '',
			'notes' => 'Note',
			'notes_helper' => '',
			'birthdate' => 'Nato il',
			'birthdate_helper' => 'Data di nascita',
			'birthplace' => 'Nato a',
			'birthplace_helper' => 'Luogo di nascita',
        ],
    ],
    'plane' => [
        'title' => 'Aeroplani',
        'title_singular' => 'Aeroplano',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'callsign' => 'Callsign',
            'callsign_helper' => '',
            'vendor' => 'Costruttore',
            'vendor_helper' => '',
            'model' => 'Modello',
            'model_helper' => '',
            'prodno' => 'Matricola',
            'prodno_helper' => 'Nr. seriale o matricola',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'active' => 'Attivo',
            'active_helper' => 'Aeroplano è operativo',
            'counter_type' => 'Tipo di orametro',
            'counter_type_helper' => '',
            'warmup_type' => 'Riscaldamento a carico',
            'warmup_type_helper' => 'Seleziona se il riscaldamento è a carico del pilota',
        ],
    ],
    'factor' => [
        'title' => 'Listini prezzi',
        'title_singular' => 'Listino prezzi',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Nome',
            'name_helper' => '',
            'description' => 'Descrizione',
            'description_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'type' => [
        'title' => 'Tipi di attività',
        'title_singular' => 'Tipo di attività',
        'title_select' => 'Selezionare attività',
        'price' => 'Prezzo al minuto (€)',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Nome',
            'name_helper' => '',
            'description' => 'Descrizione',
            'description_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'active' => 'Attivo',
            'active_helper' => '',
            'instructor' => 'Attività con instruttore?',
            'instructor_helper' => '',
        ],
    ],
    'setting' => [
        'title' => 'Impostazioni',
        'title_singular' => 'Impostazione',
    ],
    'activity' => [
        'title' => 'Attività',
        'title_singular' => 'Attività',
        'title_noedit' => 'Informazione',
        'title_lessons' => 'Lezioni',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'user' => 'Pilota',
            'user_helper' => '',
            'plane' => 'Aeroplano',
            'plane_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'type' => 'Tipo di attività',
            'type_helper' => '',
            'event_start' => 'Orario di inizio',
            'event_start_helper' => '',
            'event_stop' => 'Orario di fine',
            'event_stop_helper' => '',
            'engine_warmup' => 'Engine Warmup',
            'engine_warmup_helper' => '',
            'warmup_start' => 'Warmup Start',
            'warmup_start_helper' => '',
            'counter' => 'Orametro',
            'counter_start' => 'Orametro inizio',
            'counter_start_helper' => 'Lasciare 0 per misura in ore e minuti',
            'counter_stop' => 'Orametro fine',
            'counter_stop_helper' => 'Inserire HH.MM in caso di misura in ore e minuti (es. 0.3 per mezz\'ora)',
			'counter_stop_hhmm' => 'Minuti di volo',
            'counter_stop_hhmm_helper' => 'Inserire i minuti di volo (es. 30 per mezz\'ora o 120 per due ore)',
            'warmup_minutes' => 'Minuti di riscaldamento',
            'warmup_minutes_helper' => '',
            'rate' => 'Prezzo di base',
            'rate_helper' => '',
            'minutes' => 'Minuti',
            'minutes_helper' => '',
            'amount' => 'Importo',
            'amount_helper' => '',
			'paid' => 'Pagato',
            'paid_helper' => '',
            'departure' => 'Campo di partenza',
            'departure_helper' => '',
            'arrival' => 'Campo di destinazione',
            'arrival_helper' => '',
            'event' => 'Data',
            'event_helper' => '',
            'copilot' => 'Copilota',
            'copilot_helper' => '',
            'instructor' => 'Istruttore',
            'instructor_helper' => '',
            'created_by' => 'Creato il',
            'created_by_helper' => '',
            'opt1' => 'Regolare',
            'opt2' => 'Istruttore',
            'split_cost' => 'Attività condivisa',
            'split_cost_helper' => 'Il copilota è obbligatrio per dividere i costi',
            'description' => 'Note',
            'description_helper' => 'Note opzionali',
        ],
    ],
    'security' => [
        'title' => 'Sicurezza',
        'title_singular' => 'Sicurezza',
    ],
    'booking' => [
        'title' => 'Prenotazioni',
        'title_singular' => 'Prenotazione',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'date' => 'Data / Ora',
            'reservation_start' => 'Inizio',
            'reservation_start_helper' => 'Attenzione: Selezionare ora locale (CEST)',
            'reservation_stop' => 'Fine',
            'reservation_stop_helper' => 'Attenzione: Selezionare ora locale (CEST)',
            'description' => 'Descrizione',
            'description_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'user' => 'Pilota',
            'user_helper' => '',
            'school_user' => 'Pilota/Allievo',
            'school_user_helper' => '',
            'assignee' => 'Assigned to',
            'assignee_helper' => 'Puoi assegnarlo a qualsiasi socio',
            'plane' => 'Aeroplano',
            'plane_helper' => '',
            'instructor_needed' => 'Volo con istruttore?',
            'instructor_needed_helper' => 'Se il rating non è stato specificato si può solo prenotare con istruttore',
            'status' => 'Status',
            'status_helper' => '',
            'mode' => 'Modalità',
            'mode_helper' => '',
            'instructor' => 'Istruttore',
            'instructor_helper' => ' ',
            'created_by' => 'Creato il',
            'created_by_helper' => '',
            'pax' => 'pax',
            'pax_helper' => ' ',
            'email' => 'Invia email di conferma',
            'email_helper' => 'Se selezionato, verrà inviata una e-mail di conferma',
            'checkin' => 'Aperto al Check-In?',
            'checkin_seats' => 'Numero totale',
            'checkin_helper' => 'Specifica il numero massimo di posti',
            'seats_taken' => 'Posti occupati',
            'seats_taken_helper' => '',
            'seats_available' => 'Posti dispon.:',
            'seats_available_helper' => '',
        ],
    ],
    'parameter' => [
        'title' => 'Parametri',
        'title_singular' => 'Parametro',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'slug' => 'Slug',
            'slug_helper' => '',
            'value' => 'Value',
            'value_helper' => '',
            'lang' => 'Lang',
            'lang_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'activityManagement' => [
        'title' => 'Gestione attività',
        'title_singular' => 'Gestione attività',
    ],
    'activityReport' => [
        'title' => 'Report',
        'title_singular' => 'Report mensile',
        'title_generate' => 'Email socio',
        'description_text' => 'Genera il report delle attività di questo socio e mandalo a: ',
        'fields' => [
            'activityfrom' => 'from',
            'activityfrom_helper' => 'Begin report',
            'activityuntil' => 'until',
            'activityto_helper' => 'End report',
            'reportname' => 'Name of the report',
            'reportname_helper' => 'Ex.: 2020-02-01_Reportname_Pilotname',
            'generateReport' => 'Genera e manda subito',
        ],
        'reports' => [
            'activityReportTotal' => 'Totale',
            'activityReportSummary' => 'Resoconto',
            'activityReportByUser' => 'Totale attività per socio',
            'activityReportByInstructor' => 'Totale attività per istruttore',
            'activityReportByType' => 'Tipo di attività',
            'activityReportByPlane' => 'Aeroplano',
            'activityByUser' => 'Nome socio',
            'activityByInstructor' => 'Nome istruttore',
            'activityByMinutes' => 'Minuti',
            'activityTotalTime' => 'ore:minuti',
            'amount' => 'Saldo',
            'totaltime' => 'Totale ore',
        ],
    ],
    'expenseManagement' => [
        'title' => 'Gestione cassa',
        'title_singular' => 'Gestione cassa',
    ],
    'expenseCategory' => [
        'title' => 'Categorie spese',
        'title_singular' => 'Categoria spese',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Nome',
            'name_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'incomeCategory' => [
        'title' => 'Categorie versamenti',
        'title_singular' => 'Categoria versamenti',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Nome',
            'name_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'deposit' => 'Deposit',
            'deposit_helper' => 'Please indicate if it is a fee or a deposit for activities',
        ],
    ],
    'expense' => [
        'title' => 'Spese',
        'title_singular' => 'Spesa',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'expense_category' => 'Expense Category',
            'expense_category_helper' => '',
            'entry_date' => 'Entry Date',
            'entry_date_helper' => '',
            'amount' => 'Importo',
            'amount_helper' => '',
            'description' => 'Descrizione',
            'description_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
        ],
    ],
    'income' => [
        'title' => 'Versamenti',
        'title_singular' => 'Versamento',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'income_category' => 'Income Category',
            'income_category_helper' => '',
            'entry_date' => 'Entry Date',
            'entry_date_helper' => '',
            'amount' => 'Importo',
            'amount_helper' => '',
            'description' => 'Descrizione',
            'description_helper' => '',
            'created_at' => 'Creato il',
            'created_at_helper' => '',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => '',
            'deleted_at' => 'Cancellato il',
            'deleted_at_helper' => '',
            'user' => 'Member',
            'user_helper' => '',
            'created_by' => 'Creato il',
            'created_by_helper' => '',
        ],
    ],
    'expenseReport' => [
        'title' => 'Report cassa',
        'title_singular' => 'Report cassa',
        'reports' => [
            'title' => 'Report',
            'title_singular' => 'Report',
            'incomeReport' => 'Report versamenti',
            'incomeByCategory' => 'versamenti per categoria',
            'expenseByCategory' => 'Spese per categoria',
            'income' => 'Versamento',
            'expense' => 'Spesa',
            'profit' => 'Profitto',
        ],
    ],
    'calendar' => [
        'title' => 'Calendario',
        'fivedays' => '+5',
        'tendays' => '10 Tage',
        'week' => 'Sett.',
        'month' => 'Mese',
    ],
    'slot' => [
        'title' => 'Tipi di slot',
        'title_singular' => 'Tipo slot',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Titolo',
            'title_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
            'user' => 'Partecipanti',
            'user_helper' => 'Notam: Se la lista dei partecipanti è vuota, lo slot è visibile per tutti.',
            'instructor' => 'Istruttori',
            'instructor_helper' => ' ',
        ],
    ],
    'schedule' => [
        'title' => 'Prenotazioni slot',
        'title_singular' => 'Prenotazione slot',
        'fields' => [
            'user_helper' => 'Notam: Se selezioni un pilota al salvataggio lo status verrà cambiato in confermato',
            'instructor_helper' => ' ',
        ],
    ],
    'planning' => [
        'title' => 'Pianificazioni',
        'title_singular' => 'Pianificazione',
    ],
    'billing' => [
        'title' => 'Pagamenti',
        'title_singular' => 'Pagamento',
        'fields' => [
            'title' => 'Soggetto di pagamento',
            'title_helper' => ' ',
            'amount' => 'Valore',
            'amount_helper' => ' ',
        ],
    ],
    'checkout' => [
        'fields' => [
            'card-element' => 'Inserisci i dettagli della tua carta',
            'cardholder-name' => 'Intestatario',
            'card-number' => 'Numero carta',
            'card-cvc' => 'CVC',
            'card-exp' => 'Scad.',
        ],
    ],
    'userAlert' => [
        'title' => 'Notifiche',
        'title_singular' => 'Notifica',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'alert_text' => 'Testo',
            'alert_text_helper' => ' ',
            'alert_link' => 'Link',
            'alert_link_helper' => ' ',
            'user' => 'Soci',
            'user_helper' => ' ',
            'created_at' => 'Creato il',
            'created_at_helper' => ' ',
            'updated_at' => 'Aggiornato il',
            'updated_at_helper' => ' ',
        ],
    ],
    'assetManagement' => [
        'title' => 'Assets',
        'title_singular' => 'Asset',
    ],
    'assetCategory' => [
        'title' => 'Categorie assets',
        'title_singular' => 'Categoria asset',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Nome',
            'name_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
        ],
    ],
    'assetLocation' => [
        'title' => 'Sedi',
        'title_singular' => 'Sede',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Nome',
            'name_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
        ],
    ],
    'assetStatus' => [
        'title' => 'Statuses',
        'title_singular' => 'Status',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Nome',
            'name_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
        ],
    ],
    'asset' => [
        'title' => 'Assets',
        'title_singular' => 'Asset',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'category' => 'Categoria',
            'category_helper' => ' ',
            'serial_number' => 'Numero seriale',
            'serial_number_helper' => ' ',
            'name' => 'Nome',
            'name_helper' => ' ',
            'photos' => 'Foto',
            'photos_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'location' => 'Sede',
            'location_helper' => ' ',
            'notes' => 'Note',
            'notes_helper' => ' ',
            'assigned_to' => 'Assegnato a',
            'assigned_to_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
            'start_hours' => 'Ore in partenza',
            'start_hours_helper' => ' ',
            'start_date' => 'Data iniziale',
            'start_date_helper' => ' ',
            'end_hours' => 'Ore massimali',
            'end_hours_helper' => ' ',
            'end_date' => 'Data scadenza',
            'end_date_helper' => ' ',
            'plane' => 'Assegnato al velivolo',
            'plane_helper' => ' ',
            'current_running_hours' => 'Ore attuali',
        ],
    ],
    'assetsHistory' => [
        'title' => 'Storico assets',
        'title_singular' => 'Storico asset',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'asset' => 'Asset',
            'asset_helper' => ' ',
            'status' => 'Status',
            'status_helper' => ' ',
            'location' => 'Sede',
            'location_helper' => ' ',
            'assigned_user' => 'Assegnato a',
            'assigned_user_helper' => ' ',
            'created_at' => 'Creato al',
            'created_at_helper' => ' ',
            'updated_at' => 'Modificato al',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Cancellato al',
            'deleted_at_helper' => ' ',
        ],
    ],
];
