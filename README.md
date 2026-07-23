# 157-modul-treuerabatt
Treue Rabatt für Zen Cart 1.5.7 deutsch

Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
* https://github.com/zencartpro/157-modul-treuerabatt/releases


Mit diesem Modul können Stammkunden bei zukünftigen Bestellungen mit einem Treuerabatt belohnt werden, der auf ihrer bisherigen Bestellhistorie innerhalb eines individuell einstellbaren Zeitraums basiert. 
Als Zeiträume sind möglich:
* alltime = alle Bestellungen
* year = in diesem Jahr
* quarter = in diesem Quartal
* month = in diesem Monat

Für den eingestellten Zeitraum wird dann eine Rabatt-Tabelle hinterlegt für die Gesamtwerte und Rabatt Prozente.
* Der Standardwert (1000:5,1500:7,5,2000:10) gewährt dem Kunden:
* Einen Rabatt von 5 % bei einem Gesamtwert > 1000.
* Einen Rabatt von 7,5 % bei einem Gesamtbetrag von mehr als 1500.
* Einen Rabatt von 10 % bei einem Gesamtbetrag von mehr als 2000.

Weitere Features:
* Sie können eine durch Kommata getrennte Liste von Bestellstatus-IDs angeben, um zu bestimmen, welche Bestellungen im Zeitraum für die Berechnung der kumulierten Bestellwerte in Frage kommen.
* Ebenfalls einstellbar ist, ob die Versandkosten und Steuern berücksichtigt werden sollen
* Das Modul deaktiviert sich automatisch, wenn es feststellt, dass ein Gutschein auf die Bestellung angewendet wurde.
* Während des Bezahlvorgangs wird dem Kunden angegeben, auf welche Bestandteile (Artikel, Versandkosten und Steuern) sich der Rabatt bezieht.

# Installation
* Die Ordner/Dateien im Ordner NEUE DATEIEN in der vorgegebenen Strauktur ins Shopverzeichnis hochladen. 
* Dabei werden keine bestehenden Dateien überschrieben.
* Unter Module > Zusammenfassung das Modul ot_loyalty_discount installieren und nach Ihren Wünschen konfigurieren.