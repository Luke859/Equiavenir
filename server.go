package main

import (
	"net/http"

	accueil "./src/Accueil"
)

func main() {

	http.HandleFunc("/", accueil.Accueil)
	http.HandleFunc("/inscription", accueil.InscritpionPage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))

	http.ListenAndServe(":8080", nil)

}
