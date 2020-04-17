#Simple RSS Feed Reader

Ablauf
•	Erstellen eines leeren Laravel-Projekts
•	Bootstrap herunterladen
•	"vedmant/laravel-feed-reader": "^1.4", installieren 
•	Erstellen eines Controller -> RssController
•	Definition einer Funktion zum Abrufen der RSS-Feed-URL und zum Übergeben der Daten an eine View
•	Erstellen einer View zum Anzeigen die Feeds mit Responsive Bootstrap-Karten (Kacheln)
•	Erstellen eines Jobs (Command) -> App \ Console \ Commands \ updateRssFeed.php zum Ausführen der Controller-Methode
•	Setzen den Job in die Schedule-Funktion (App\Console\Kernel.php), damit er alle 60 Minuten automatisch ausgeführt wird
•	Einfügen des Schedule in die Server-Cron-Jobliste
