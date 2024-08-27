# Modularbeit
### Abgabe: xx.xx.xxxx

---
## Auftrag:

### Abgabe 31.8.24 23:59 (1 Woche nach letztem Modul Tag)
Git Repo (Es zählt das Commitdatum < Abgabe)  
URL zur im Internet erreichbaren Website  
### Mussanforderungen  
Inhaltlich muss es ein vollständiges CV sein.  
Inkl. Persönliche Daten, Portrait, Berufserfahrung, Ausbildung, sonstige Skills. 1  
Es muss ordentlich aussehen in Google Chrome und Edge. 1  
Die Website muss übers Internet aufrufbar sein. 1  
Man muss über ein Kontaktformular eine Nachricht an dich «senden» können.  
Eingabe des Formulars, Senden der Formulardaten an Server. 1  
### Sollanforderungen  
Es muss ansprechend aussehen. Macht es so, dass ihr den Link bei der nächsten Bewerbung einsenden könntet. 0.5  
Die Website schneidet mit einem guten Page-Score ab. (Google Lighthouse Extension Score) 0.5  
Die Website ist Responsive und sieht auch auf dem Handy ordentlich aus. 0.5  
Das an den Server gesendete Formular soll entweder in ein JSON-File lokal auf dem Server gespeichert werden oder es
wird effektiv eine Mail an dich versendet. 0.5  
Das gibt eine Maximalpunktzahl von 6 Punkten  

### Restriktionen  
Es muss eine Website sein. Ihr könnt nicht einfach ein PDF darstellen. Alle Informationen müssen als HTML existieren.  
Solange ihr die Website implementiert, dürft ihr jegliche Technologien und Tools verwenden, die ihr zur Verfügung habt.  
Der Source Code muss auf einem Github Repo vorhanden sein. Wenn ihr ein CMS verwendet, dann müsst ihr entsprechend
mindestens das CSS und HTML exportieren können.

---

## Zusatz von Asterisk333

Dies ist der reine Code welcher fur die webseite genutzt wird. 

Das Hosting der Webseite läuft durch [render.com](https://render.com/) und da die Webapp mit php lauft muss folgendes 
Repo als base genutzt werden: https://github.com/render-examples/php-laravel-docker

Das hosting nutzt das folgende [Repo](https://github.com/Asterisk333/php-laravel-docker)
In den commits ist zu sehen, dass die Anpassung fur den Render darin lag in `/public/` den code aus diesem Repo
einzufegen

Die webseite ist unter: https://cv-display.onrender.com/ zu erreichen, durch de natur von render.com kann 
es beim erstmaligen Laden zu Verzögerungen kommen

### Lighthouse Einschätzung
Ich habe das Lighthouse Plugin laufen lassen und dieses 
[Ergebnis](https://pagespeed.web.dev/analysis/https-cv-display-onrender-com/77bt3gewyh?form_factor=mobile&category=performance&category=accessibility&category=best-practices&category=seo&hl=de&utm_source=lh-chrome-ext) erhalten


