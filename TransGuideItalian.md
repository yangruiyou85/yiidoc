# Introduzione #
Questo documento descrive:
  * la procedura di traduzione
  * le regole di traduzione
  * gli strumenti suggeriti

Attualmente l'attività principale in corso è la traduzione della 'Guida definitiva a Yii'.
Lo stato delle traduzioni è il seguente (**% tradotto** + `% in traduzione`):
  * Guida definitiva a Yii (**38%** + 26%)
  * Messaggi del framework Yii (**100%** + 0%)
  * Pagina di convalida dei requisiti (**100%** + 0%)
  * Tutorial 'sviluppo di un blog con Yii' (**0%** + 0%)

(Ogni sezione si trova in costante revisione ed aggiornamento)


# Dettagli #
La procedura da seguire per la traduzione è la seguente:
  1. scegliere l'argomento da tradurre
  1. eseguire la traduzione prestando attenzione alle convenzioni
  1. aggiungere/aggiornare il file tradotto nel repository
  1. sincronizzare la versione tradotta, quando viene aggiornato l'originale

**Per iniziare occorre scaricare il contenuto del repository.** I documenti originali della guida sono disponibili nella cartella `../yiidoc/guide/source`,
mentre i documenti tradotti dovranno essere collocati nella cartella `../yiidoc/guide/it`.
L'intera guida può essere disponibile in locale all'indirizzo http://localhost/yiidoc/index.php .

Successivamente, si sceglie l'argomento che non è stato ancora tradotto verificando che nella cartella `it` del repository non esista alcun file corrispondente.
Se una sezione del file non è stata ancora tradotta, ma il file è già stato aggiunto al repository, vuol dire che qualcuno è già al lavoro per la traduzione di quel file.
Quando si sceglie un argomento, si dovrebbe anche aggiungere il file originale al ramo italiano del repository per indicare che il file è in fase di traduzione.

I file di traduzione dovrebbero essere convertiti in formato UTF-8 per una corretta visualizzazione.


## File in traduzione: ##
**Guida definitiva a Yii**:
  * /guide/it/extension.integration.txt (Simone (Demo) Gentili)
  * /guide/it/extension.use.txt (Simone (Demo) Gentili)
  * /guide/it/test.overview.txt (Alessio Barnini)
  * /guide/it/topics.auth.txt (Fabio Ingala)
  * /guide/it/topics.console.txt (Fabio Ingala)
  * /guide/it/topics.error.txt (Fabio Ingala)
  * /guide/it/topics.gii.txt (Fabio Ingala)
  * /guide/it/topics.i18n.txt (Fabio Ingala)
  * /guide/it/topics.logging.txt (Fabio Ingala)
  * /guide/it/topics.performance.txt (Fabio Ingala)
  * /guide/it/topics.prado.txt (Fabio Ingala)
  * /guide/it/topics.security.txt (Fabio Ingala)
  * /guide/it/topics.theming.txt (Fabio Ingala)
  * /guide/it/topics.url.txt (Fabio Ingala)
  * /guide/it/topics.webservice.txt (Fabio Ingala)

**Messaggi del framework Yii**:
> `Tutti i file sono stati tradotti`

**Pagina di convalida dei requisiti**:
> `Tutti i file sono stati tradotti`

**Tutorial sviluppo blog con Yii**:
> `Nessun file in corso di traduzione`


## File già tradotti: ##
**Guida definitiva a Yii** (38%):
  * /guide/it/basics.application.txt (Fabio Ingala)
  * /guide/it/basics.best-practices.txt (Fabio Ingala)
  * /guide/it/basics.controller.txt (Fabio Ingala)
  * /guide/it/basics.component.txt (Fabio Ingala)
  * /guide/it/basics.convention.txt (Fabio Ingala)
  * /guide/it/basics.entry.txt (Fabio Ingala)
  * /guide/it/basics.model.txt (Fabio Ingala)
  * /guide/it/basics.module.txt (Fabio Ingala)
  * /guide/it/basics.mvc.txt (Fabio Ingala)
  * /guide/it/basics.namespace.txt (Fabio Ingala)
  * /guide/it/basics.view.txt (Fabio Ingala)
  * /guide/it/basics.workflow.txt (Fabio Ingala)
  * /guide/it/database.overview.txt (Giancarlo Albanese)
  * /guide/it/extension.create.txt (Simone (Demo) Gentili)
  * /guide/it/extension.overview.txt (Giancarlo Albanese)
  * /guide/it/form.overview.txt (Giancarlo Albanese)
  * /guide/it/index.txt (Fabio Ingala)
  * /guide/it/quickstart.apache-nginx-config.txt (Fabio Ingala)
  * /guide/it/quickstart.first-app.txt (Fabio Ingala)
  * /guide/it/quickstart.first-app-yiic.txt (Fabio Ingala)
  * /guide/it/quickstart.installation.txt (Fabio Ingala)
  * /guide/it/quickstart.what-is-yii.txt (Fabio Ingala)

**Messaggi del framework Yii** (100%):
  * /messages/it/yii.php (Francesco, Fabio Ingala)
  * /messages/it/zii.php (Fabio Ingala)
  * /views/it/error.php (Qiang Xue, Fabio Ingala)
  * /views/it/error400.php (Qiang Xue, Fabio Ingala)
  * /views/it/error401.php (Qiang Xue)
  * /views/it/error403.php (Qiang Xue, Fabio Ingala)
  * /views/it/error404.php (Qiang Xue, Fabio Ingala)
  * /views/it/error500.php (Qiang Xue)
  * /views/it/error503.php (Qiang Xue)
  * /views/it/exception.php (Qiang Xue)
  * /views/it/log-firebug.php (Qiang Xue)
  * /views/it/log.php (Qiang Xue, Fabio Ingala)
  * /views/it/profile-callstack-firebug.php (Qiang Xue)
  * /views/it/profile-callstack.php (Qiang Xue, Fabio Ingala)
  * /views/it/profile-summary-firebug.php (Qiang Xue)
  * /views/it/profile-summary.php (Qiang Xue, Fabio Ingala)

**Pagina di convalida dei requisiti** (100%):
  * /requirements/messages/it/yii.php (Fabio Ingala)
  * /requirements/views/it/index.php (Fabio Ingala)

**Tutorial sviluppo blog con Yii** (0%):
> `Traduzione non ancora iniziata`


## File da tradurre: ##
**Guida definitiva a Yii**:
  * /guide/it/caching.data.txt
  * /guide/it/caching.dynamic.txt
  * /guide/it/caching.fragment.txt
  * /guide/it/caching.overview.txt
  * /guide/it/caching.page.txt
  * /guide/it/changes.txt
  * /guide/it/database.ar.txt
  * /guide/it/database.arr.txt
  * /guide/it/database.dao.txt
  * /guide/it/database.migration.txt
  * /guide/it/database.query-builder.txt
  * /guide/it/form.action.txt
  * /guide/it/form.builder.txt
  * /guide/it/form.model.txt
  * /guide/it/form.table.txt
  * /guide/it/form.view.txt
  * /guide/it/test.fixture.txt
  * /guide/it/test.functional.txt
  * /guide/it/test.unit.txt
  * /guide/it/toc.txt
  * /guide/it/upgrade.txt

**Messaggi del framework Yii**:
> `Tutti i file sono stati tradotti`

**Pagina di convalida dei requisiti**:
> `Tutti i file sono stati tradotti`

**Tutorial 'sviluppo di un blog con Yii'**:
  * /blog/it/comment.admin.txt
  * /blog/it/comment.create.txt
  * /blog/it/comment.model.txt
  * /blog/it/final.deployment.txt
  * /blog/it/final.future.txt
  * /blog/it/final.logging.txt
  * /blog/it/final.url.txt
  * /blog/it/portlet.comments.txt
  * /blog/it/portlet.menu.txt
  * /blog/it/portlet.tags.txt
  * /blog/it/post.admin.txt
  * /blog/it/post.create.txt
  * /blog/it/post.display.txt
  * /blog/it/post.model.txt
  * /blog/it/prototype.auth.txt
  * /blog/it/prototype.database.txt
  * /blog/it/prototype.scaffold.txt
  * /blog/it/prototype.summary.txt
  * /blog/it/start.design.txt
  * /blog/it/start.overview.txt
  * /blog/it/start.requirements.txt
  * /blog/it/start.testdrive.txt
  * /blog/it/toc.txt


## Convenzioni adottate nella traduzione: ##

### Norme generali ###
Quelle che seguono sono le regole generali che si dovrebbero seguire durante il lavoro di traduzione:
  1. esposizione in conformità con l'originale in prima persona plurale (noi);
  1. molti termini non hanno traduzione definita e/o diffusa in italiano, quindi se il testo include un termine tra parentesi quadre, accanto ad esso, la prima volta che viene menzionato, si dovrebbe specificare la versione inglese, (v. Elenco dei termini e loro traduzione, vedi sotto);
  1. se durante la traduzione sembra che una parte del testo non abbia senso o non si è sicuri su come interpretarlo correttamente, racchiudere questo blocco di testo tra le virgolette `*` (in questo modo il font diventa corsivo). Ciò consentirà di eseguire prove di lettura mettendo a fuoco l'intero argomento;
  1. quando si traduce si dovrebbero evitare errori di sintassi e/o grammatica!
  1. nel testo ci potrebbero essere dei riferimenti a fonti esterne, se il link è quello di una pagina di definizione, utilizzare se disponibile la versione italiana della stessa risorsa, o qualsiasi altra risorsa autorevole, che fornisca un link alla versione italiana. Per esempio http://en.wikipedia.org/wiki/Captcha => http://it.wikipedia.org/wiki/Captcha
  1. i commenti nel codice andrebbero tradotti, se ciò non distorce il significato originale;
  1. dopo l'operazione di upload del file tradotto, se necessario, modificare il titolo contenuto all'interno della TOC (Table Of Content - Tavola dei contenuti);
  1. aggiungi i tuoi commenti, possibili integrazioni, ma non sentirti incoraggiato altrimenti è il caos. L'originale dovrebbe essere uno. In caso di necessità metti il commento alla fine aggiungendo "(nota)"
  1. dopo una modifica generale del documento chi vuole collaborare è invitato ad eseguire in modo autonomo solo le correzioni degli errori grammaticali e di sintassi che non sono stati corretti in precedenza. In altri casi è necessario presentare una proposta di correzione e migliorare la discussione e, se necessario, apportare modifiche a livello generale di tutte le sezioni del documento.


### Struttura del documento ###
Per la traduzione corretta delle unità strutturali del documento, si adotta la seguente struttura
  * **Capitolo 1**
    * Sezione 1
    * Sezione 2
      * _Comma 1_
    * ...
    * Sezione N
  * **Capitolo 2**
  * ...
  * **Capitolo N**

Per quanto riguarda il manuale completo, la struttura sarà la seguente:
  * **Panoramica**
    * Nuove funzionalità
    * Che cosa è Yii
    * Installazione
    * Creazione della prima applicazione con Yii
      * _Connessione al database_
      * _Creazione operazioni CRUD_
  * **Nozioni di base**
  * **Operare con i form**
  * **Lavorare con i database**
  * **Caching**
  * **Estendere Yii**
  * **Esecuzione dei test**
  * **Argomenti speciali**


### Traduzione dei marcatori ###
La traduzione dei marcatori come "> Nota:" e simili, viene eseguita in questo modo : `> Note|'Nota:' traduzione della nota: .... `

Così, la nota, per la lingua italiana, diventa simile a questa: `> Note|Nota: Gli esempi in questa sezione utilizzano i moduli standard di ...`

I marcatori sono:
  * Tip => Suggerimento
  * Note => Nota
  * Info => Informazione


### Traduzione delle immagini ###
Le immagini per la documentazione sono contenute nella cartella `images`, se disponibili, possono essere tradotte e salvate in formato `png`.
Le didascalie devono essere come le seguenti: `![pagina di Login] (login1.png)`


### Grammatica ###
  * Prestare attenzione allo stile generale, all'ortografia ed alla punteggiatura prima di eseguire l'upload della versione finale della traduzione. Può risultare utile utilizzare un programma di editing con correttore grammaticale/ortografico incorporato;
  * (Aggiungere altre regole).


### Elenco dei termini e loro traduzione ###

  * apply migration - applicare la migrazione
  * bootstrap script - script di bootstrap/avvio
  * case-insensitive - indifferente al maiuscolo/minuscolo
  * case-sensitive - sensibile al maiuscolo/minuscolo
  * choice format - formato di scelta
  * controller - controller
  * customize - personalizzare/adattare
  * development - sviluppo
  * directory - cartella
  * entry script - script di ingresso
  * fetching (data) - recupero (dati)
  * info - informazione
  * internationalization - internazionalizzazione
  * layout - aspetto/layout/struttura
  * locale - locale
  * message - messaggio
  * message source - sorgente del messaggio
  * model - model
  * named scope - ambito di validità/visibilità del nome
  * note - nota
  * parameter binding - parametro vincolante
  * placeholder - segnaposto
  * redoing migration - riesecuzione della migrazione
  * render a view - visualizzare una view
  * request processing - elaborazione della richiesta
  * required parameter - parametro necessario
  * resolve request - risoluzione della richiesta
  * revert migration - inverte la migrazione
  * route - route/percorso
  * SQL query - query SQL
  * SQL statement - dichiarazione SQL
  * theme - tema grafico
  * timestamp - data e ora
  * tip - suggerimento
  * view - view
  * web application - web application/applicazione web


## Lavorare con il repository ##
Per lavorare con il repository è possibile utilizzare qualsiasi [client-SVN](http://subversion.tigris.org/links.html#all-clients),
uno facile da usare con Windows è [Tortoise SVN](http://tortoisesvn.net/). Una guida dettagliata di funzionamento in lingua italiana non sembra ancora disponibile.
Prima di aggiungere il file modificato al server, è necessario aggiornare la copia locale. Nel caso in cui il file non sia stato modificato dagli altri partecipanti,
è possibile caricarlo sul server. In caso contrario, è necessario confrontare e fondere la versione sul server con la versione locale.
Ogni aggiornamento tramite SVN deve essere accompagnata da una breve nota che descriva le modifiche essenziali eseguite.


## L'importanza del supporto della traduzione ##
Dato che periodicamente vengono apportare modifiche all'originale, è necessario seguire gli aggiornamenti del file originale e rilevarle in tempo per apportare le modifiche al file tradotto.
Per fare questo, alla fine di ogni file è inserito un marcatore con una versione del documento.
Ad esempio: `<div class="revision">$Id: form.view.txt 772 2009-02-28 18:23:17Z qiang.xue $</div>`
Questo marcatore è il 772.
Se la versione di origine e di destinazione sono diversi, cioè il marcatore dell'originale e della traduzione sono diversi,
è necessario apportare modifiche nella traduzione e sostituire il marcatore sulla data.

Per eseguire il confronto, è possibile utilizzare l'utility syncguide : `../yiidoc/protected/yiic syncguide it`

Se il contenuto originale è cambiato, è necessario correggere la traduzioni in conformità con le modifiche. Per tenere traccia delle modifiche si può utilizzare SVN.