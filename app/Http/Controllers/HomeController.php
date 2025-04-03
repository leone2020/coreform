<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostra la homepage
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.home');
    }
    
    /**
     * Mostra la pagina Chi Siamo
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function chiSiamo()
    {
        return view('pages.chi-siamo');
    }
    
    /**
     * Mostra la pagina Università
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function universita()
    {
        return view('pages.universita');
    }
    
    /**
     * Mostra la pagina Orientamento
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function orientamento()
    {
        return view('pages.orientamento');
    }
    
    /**
     * Mostra la pagina Contatti
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contatti()
    {
        return view('pages.contatti');
    }
    
    /**
     * Mostra la pagina Acquista
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function acquista()
    {
        return view('pages.acquista');
    }
    
    /**
     * Mostra la pagina dell'elenco delle certificazioni.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function certificazioni()
    {
        return view('pages.certificazioni');
    }
    
    /**
     * Mostra la pagina Privacy
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Mostra la pagina di dettaglio di una certificazione.
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function certificazioneDettaglio($slug)
    {
        // Array di dati di esempio per le certificazioni
        $certificazioni = [
            'alfabetizzazione-digitale' => [
                'titolo' => 'Certificazione Internazionale di Alfabetizzazione Digitale',
                'titolo_completo' => 'CERTIFICATO INTERNAZIONALE DI ALFABETIZZAZIONE DIGITALE ACCREDIA CIAD',
                'sottotitolo' => 'Obbligatoria per ATA, conforme al CCNL scuola in vigore dal 19 gennaio 2024.',
                'descrizione_breve' => 'Ottieni il Tuo Certificato Online, Senza Bocciate, Pagamento Gratuita',
                'prezzo_originale' => '299.00',
                'prezzo_scontato' => '199.00',
                'logo_riconoscimento' => asset('images/certificazioni/logo-miur.png'),
                'descrizione_lunga' => 'La Certificazione Internazionale di Alfabetizzazione Digitale (CIAD) è un attestato riconosciuto a livello internazionale che certifica le competenze digitali di base. Questa certificazione è particolarmente importante per il personale ATA delle scuole, in conformità con il CCNL scuola in vigore dal 19 gennaio 2024.',
                'vantaggi' => [
                    'Riconoscimento ufficiale delle competenze digitali',
                    'Valida per concorsi e graduatorie',
                    'Spendibile nel mondo del lavoro',
                    'Conformità con i requisiti del CCNL scuola',
                    'Esame online senza necessità di spostamenti'
                ],
                'modalita_acquisto' => 'Puoi acquistare la certificazione direttamente online, con pagamento immediato o rateizzato tramite Scalapay. Dopo l\'acquisto riceverai le credenziali per accedere alla piattaforma di formazione e sostenere l\'esame quando ti sentirai pronto.'
            ],
            'lim' => [
                'titolo' => 'Certificazione LIM',
                'titolo_completo' => 'CERTIFICAZIONE PER L\'USO DIDATTICO DELLA LAVAGNA INTERATTIVA MULTIMEDIALE',
                'sottotitolo' => 'Certificazione per l\'uso didattico della Lavagna Interattiva Multimediale.',
                'descrizione_breve' => 'Certifica le tue competenze nell\'uso didattico della LIM',
                'prezzo_originale' => '249.00',
                'prezzo_scontato' => '149.00',
                'logo_riconoscimento' => asset('images/certificazioni/logo-miur.png'),
                'descrizione_lunga' => 'La Certificazione LIM attesta le competenze nell\'utilizzo didattico della Lavagna Interattiva Multimediale. È particolarmente indicata per docenti di ogni ordine e grado che desiderano certificare le proprie competenze digitali applicate alla didattica.',
                'vantaggi' => [
                    'Riconoscimento delle competenze digitali applicate alla didattica',
                    'Valida per concorsi e graduatorie scolastiche',
                    'Migliora le possibilità di impiego nelle istituzioni scolastiche',
                    'Percorso formativo completo con esame finale',
                    'Supporto tecnico durante tutto il percorso'
                ],
                'modalita_acquisto' => 'Puoi acquistare la certificazione online con pagamento immediato o rateizzato. Riceverai le credenziali per accedere alla piattaforma di formazione e sostenere l\'esame.'
            ],
            'eipass' => [
                'titolo' => 'Certificazione EIPASS',
                'titolo_completo' => 'EUROPEAN INFORMATICS PASSPORT',
                'sottotitolo' => 'Certificazione informatica riconosciuta a livello europeo.',
                'descrizione_breve' => 'Certifica le tue competenze informatiche con uno standard europeo',
                'prezzo_originale' => '349.00',
                'prezzo_scontato' => '249.00',
                'logo_riconoscimento' => asset('images/certificazioni/logo-eipass.png'),
                'descrizione_lunga' => 'EIPASS (European Informatics Passport) è un programma di certificazione informatica riconosciuto a livello europeo che attesta il possesso delle competenze nell\'utilizzo degli strumenti ICT. Questa certificazione è riconosciuta in ambito lavorativo e accademico.',
                'vantaggi' => [
                    'Riconoscimento europeo delle competenze informatiche',
                    'Valida per concorsi pubblici e graduatorie',
                    'Spendibile in ambito lavorativo in tutta Europa',
                    'Percorso formativo flessibile',
                    'Esame online monitorato da casa'
                ],
                'modalita_acquisto' => 'È possibile acquistare la certificazione EIPASS online con pagamento unico o rateizzato. Dopo l\'acquisto riceverai l\'accesso alla piattaforma di formazione e potrai prenotare l\'esame quando ti sentirai pronto.'
            ],
            'coding' => [
                'titolo' => 'Certificazione Coding',
                'titolo_completo' => 'CERTIFICAZIONE CODING E PENSIERO COMPUTAZIONALE',
                'sottotitolo' => 'Certifica le competenze di programmazione e pensiero computazionale.',
                'descrizione_breve' => 'Sviluppa e certifica le competenze di programmazione',
                'prezzo_originale' => '259.00',
                'prezzo_scontato' => '159.00',
                'logo_riconoscimento' => asset('images/certificazioni/logo-miur.png'),
                'descrizione_lunga' => 'La Certificazione Coding attesta le competenze nell\'ambito della programmazione e del pensiero computazionale. È rivolta a docenti, studenti e professionisti che vogliono acquisire e certificare competenze nel campo della programmazione informatica e del pensiero computazionale.',
                'vantaggi' => [
                    'Riconoscimento delle competenze di programmazione',
                    'Valida per concorsi e graduatorie nel settore educativo',
                    'Arricchisce il curriculum con competenze sempre più richieste',
                    'Percorso pratico con esercitazioni reali',
                    'Esame finale basato su progetti pratici'
                ],
                'modalita_acquisto' => 'La certificazione è acquistabile online con diverse modalità di pagamento. Il percorso include materiali didattici, esercitazioni pratiche e l\'esame finale.'
            ],
            'bundle-informatica' => [
                'titolo' => 'Bundle Certificazioni Informatiche',
                'titolo_completo' => 'BUNDLE 4 CERTIFICAZIONI INFORMATICHE',
                'sottotitolo' => 'Include: LIM, Coding, Tablet e Competenze Digitali Avanzate',
                'descrizione_breve' => 'Pacchetto completo di certificazioni informatiche a prezzo vantaggioso',
                'prezzo_originale' => '199.00',
                'prezzo_scontato' => '99.00',
                'logo_riconoscimento' => asset('images/certificazioni/logo-miur.png'),
                'descrizione_lunga' => 'Questo bundle comprende 4 certificazioni informatiche fondamentali: Certificazione LIM per l\'uso didattico della lavagna interattiva, Certificazione Coding per le competenze di programmazione, Certificazione Tablet per l\'utilizzo in ambito didattico e Certificazione Competenze Digitali Avanzate. Il pacchetto è pensato per offrire una formazione completa a un prezzo vantaggioso.',
                'vantaggi' => [
                    'Risparmio significativo rispetto all\'acquisto singolo',
                    'Formazione completa in diverse aree dell\'informatica',
                    'Titoli validi per graduatorie e concorsi',
                    'Accesso a tutte le piattaforme di formazione',
                    'Assistenza dedicata durante tutto il percorso'
                ],
                'modalita_acquisto' => 'Il bundle è acquistabile in un\'unica soluzione o con pagamento rateizzato. L\'accesso alle piattaforme di formazione è immediato dopo l\'acquisto e gli esami possono essere sostenuti quando preferisci.'
            ],
            'inglese' => [
                'titolo' => 'Certificazione di Lingua Inglese',
                'titolo_completo' => 'CERTIFICAZIONE DI LINGUA INGLESE',
                'sottotitolo' => 'Certificazione linguistica riconosciuta dal MIUR, livelli da A1 a C2.',
                'descrizione_breve' => 'Scegli il livello di certificazione più adatto alle tue esigenze',
                'logo_riconoscimento' => asset('images/certificazioni/logo-miur.png'),
                'descrizione_lunga' => 'Le certificazioni di lingua inglese attestano il livello di conoscenza della lingua secondo il Quadro Comune Europeo di Riferimento per le lingue (QCER). Sono riconosciute dal MIUR e valide per concorsi, graduatorie e crediti formativi.',
                'vantaggi' => [
                    'Riconoscimento ufficiale del MIUR',
                    'Validità internazionale',
                    'Spendibile nel mondo del lavoro e accademico',
                    'Certificazione senza scadenza',
                    'Esame online senza necessità di spostamenti'
                ],
                'modalita_acquisto' => 'Puoi acquistare la certificazione online e scegliere il livello che preferisci. Riceverai le credenziali per accedere alla piattaforma di formazione e sostenere l\'esame.',
                'livelli' => [
                    'b2' => [
                        'nome' => 'Livello B2',
                        'descrizione' => 'Livello intermedio superiore',
                        'prezzo' => 499.00
                    ],
                    'c1' => [
                        'nome' => 'Livello C1',
                        'descrizione' => 'Livello avanzato',
                        'prezzo' => 549.00
                    ],
                    'c2' => [
                        'nome' => 'Livello C2',
                        'descrizione' => 'Livello di padronanza',
                        'prezzo' => 599.00
                    ]
                ]
            ],
        ];

        // Se lo slug non esiste nell'array, reindirizza alla lista
        if (!isset($certificazioni[$slug])) {
            return redirect()->route('certificazioni');
        }
        
        // Usa template diversi in base allo slug
        if ($slug === 'inglese') {
            return view('pages.certificazione-inglese', [
                'certificazione' => $certificazioni[$slug]
            ]);
        }
        
        return view('pages.certificazione-dettaglio', [
            'certificazione' => $certificazioni[$slug]
        ]);
    }
}