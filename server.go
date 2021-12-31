package main

import (
	"net/http"

	accueil "./src/go"
)

func main() {

	http.HandleFunc("/", accueil.Accueil)
	http.HandleFunc("/connexion", accueil.ConnexionPage)
	http.HandleFunc("/contact", accueil.ContactPage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))

	http.ListenAndServe(":8080", nil)

}
