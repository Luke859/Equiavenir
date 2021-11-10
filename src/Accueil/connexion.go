package accueil

import (
	"fmt"
	"log"
	"net/http"
	"text/template"
)

func ConnexionPage(w http.ResponseWriter, r *http.Request) {

	t, err := template.ParseFiles("template/layout.html", "template/connexion.html", "template/navbar.html")
	if err != nil {
		log.Fatalf("Template execution: %s", err)
		return
	}
	t.Execute(w, nil)
	fmt.Println("Page de connexion ✔️")
}
