package main

import (
	"net/http"

	accueil "./src/accueil"
)

func main() {

	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))

	http.HandleFunc("/", accueil.Accueil)

	http.ListenAndServe(":8080", nil)

}
