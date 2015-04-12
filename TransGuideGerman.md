# Richtlinien für die Übersetzung ins Deutsche #

## Einleitung ##

Yii ist ein herausragendes Framework mit praktisch mustergültigem Quellcode. Genauso sollte auch die Dokumentation durch gute Lesbarkeit überzeugen. Daher sollen hier einige Richtlinien für die Übersetzung an die Hand gegeben werden.

## Einrichten der Umgebung ##

Um die Übersetzungen auch gleich betrachten zu können, gibt es eine Yii-Anwendung innerhalb des Yiidoc-Projekts. Wenn ein SVN-Checkout nach **/yiidoc** in ein Webverzeichnis vorgenommen wurde, kann z.B. der Guide über diese URL aufgerufen werden:

> http://www.myhost.com/yiidoc?r=guide


## Richtlinien für die Übersetzung ##

### Sprachstil ###

Die Übersetzung sollte nicht Wort für Wort erfolgen, sondern vielmehr den Sinn des Textes in gutem Deutsch wiedergeben. Allzulange Sätze sind zu vermeiden. Im englischen getrennt geschriebene Worte werden i.d.R. im Deutschen zusammengeschrieben. So wird aus "web application" die "Webanwendung". Bei sehr langen Worten können diese mit Bindestrich getrennt werden.

### Anrede ###

Bei persönlicher Anrede des Lesers wird immer die "Sie"-Form verwendet.


### Fachbegriffe ###

Fachbegriffe werden nicht übersetzt, wenn sie im deutschen Sprachraum einigermaßen gebräuchlich sind (z.B. Framework). Klassen-, Funktions- und Variablennamen in Yii werden prinzipiell **nicht** übersetzt.

Bei Begriffen, die nicht übersetzt werden oder schwer verständlichen Klassennamen kann **bei der ersten Verwendung** eine deutsche Übersetzung in Klammern folgen (Bsp. 1). Sinngemäße freie Übersetzungen werden mit **sinngem.:** gekennzeichnet (Bsp. 2). Wird ein Begriff übersetzt und seine englische Originalbezeichnung ist im Framework oft von Bedeutung, kann der englische Begriff in Klammern angeführt werden (Bsp. 3).

Beispiele:

  1. _Die Komponente wird lazy (faul) erzeugt, wenn zum ersten mal darauf zugegriffen wird._
  1. _Ein Widget (sinngem.: Dings) ist eine..._
  1. _...sprechen wir von einer Erweiterung (engl.: extension)_

Auch sämtliche Dateinamen für Controller, Views, etc. werden nicht übersetzt. Auch viele spezifische Begriffe wie "Model", "View", "Controller" werden nicht übersetzt, um die Verzahnung mit Verzeichnisnamen (z.B. protected/views) zu erhalten.

Bei projektspez. Begriffen (z.B. "PHP extension" oder "Apache DocumentRoot") wird im Zweifelsfall die deutsche Dokumentation der entsprechenden Softwareprojekte herangezogen.


Die folgenden Listen sind als Diskussionsgrundlage zu verstehen. Spätere Änderungen sollten dann aber konsistent in der gesamten Dokumentation angepasst werden.

#### Übersetzbare Fachbegriffe ####

  * access control filter - Zugangskontrollfilter
  * application base directory - Anwendungsverzeichnis
  * application component - Komponente, Anwendungskomponente, Applikationskomponente
  * application user component - Userkomponente (als Teil des auth frameworks)
  * attribute - Attribut (OOP: Eigenschaften von Model-Klassen)
  * authentication - Authentifiezerung
  * authorization - Berechtigung, Autorisierung
  * authorization item - Autorisierungselement
  * authorization manager - Autorisierungsmanager
  * base class - Basisklasse (OOP)
  * bootstrap file - Startdatei
  * business rule - Geschäftsregel
  * call stack - Aufrufstapel
  * choice format - Auswahlformat
  * command - Befehl, Kommando
  * component - Komponente
  * contact - Kontakt (Kontaktseite, ...)
  * class - Klasse (OOP)
  * entry script - Startscript, Eingangsscript, Ladescript
  * extension (PHP) - Erweiterung
  * form - Formular
  * fragment (bei caching) - Fragment, Seitenabschnitt
  * global state - globaler Status
  * home - Start, Startseite, Home
  * loader (yii loader, etc.) - Ladescript
  * log (to) - loggen, protokollieren
  * log level - Logstufe, Protokollierungsstufe, Stufe
  * log route - Logroute
  * login - anmelden, Anmeldung (Anmeldeseite, ...)
  * logout - abmelden, Abmeldung
  * massive assignment - Massenzuweisung (Model)
  * method - Methode
  * message routing - Routing, Routing von Logmeldungen
  * message filtering - Filterung, Filtern von Logmeldungen
  * message source (i18n) - Textquelle
  * (named) scope - Scope
  * object - Objekt (OOP)
  * operation (RBAC) - Operation
  * path alias - Pfadalias
  * performance profiling - Performanceanalyse
  * property (member, attribute, ..) - Eigenschaft (gilt jedoch nicht für Attribute eines Models)
  * relational query - Relationale Abfrage (!= Verbundabfrage!!)
  * relational activerecord - Relationale ActiveRecords
  * role - Rolle
  * role-based access control - Rollenbasierte Zugriffskontrolle
  * task (RBAC) - Tätigkeit
  * text message (i18n) - Textmeldung
  * user - Benutzer, Anwender, evtl. Besucher
  * web application - Webanwendung, Webapplikation

#### Nicht zu übersetzende Begriffe ####

  * Action, _die_
  * `ActiveRecord`, _das_
  * Array, _das_
  * Behavior, _das_
  * Button, _der_
  * Cache (bzw. Caching), _der_
  * Callback, _der_
  * Client, _der_
  * Constraints (Plural), _die_
  * Controller, _der_
  * Debug, _das_ Debuggen, _der_ Debugmodus
  * Eager Loading, _das_
  * Event, _das_
  * Exception, _die_
  * `FormModel`, _das_
  * Framework, _das_
  * Fixture, _das_
  * Label, _das_
  * Layout, _das_
  * Lazy Loading, _das_
  * Model, _das_
  * Namespace, _der_
  * Performance, _die_
  * Request, _der_
  * Route, _die_
  * Screenshot, _der_
  * Scope, _der_
  * Script, _das_
  * Session, _die_
  * String, _der_
  * Traffic, _der_
  * Validator, _der_
  * View, _der_ (evtl. auch _die_)
  * Widget, _das_
  * Wrapper, _der_

#### Grenzfälle ####

  * Theme - Bleibt Theme, evtl. in Klammern "Motiv"
  * Asset - Bleibt Asset, aus Mangel einer vernünftigen Übersetzung
  * cache dependency - Cachen mit Abhängkeit.