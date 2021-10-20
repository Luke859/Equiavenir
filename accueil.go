package Accueil

import {
	"fmt"
	"log"
	"net/http"
	"text/template"
}

func Accueil(w http.ResponseWriter){

}
t, err := template.ParseFiles("static/HTML/layout.html")
    if err != nil {
        log.Fatalf("Template execution: %s", err)
        return
    }
    t.Execute(w, postOne)
    fmt.Println("Page Accueil ✔️")