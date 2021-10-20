package accueil

import (
	"fmt"
	"log"
	"net/http"
	"text/template"
)

var t *template.Template
var tErr *template.Template

func Accueil(w http.ResponseWriter, r *http.Request) {

	t, err := template.ParseFiles("Accueil.html")
	if err != nil {
		log.Fatalf("Template execution: %s", err)
		return
	}
	t.Execute(w, nil)
	fmt.Println("Page Accueil ✔️")
}
