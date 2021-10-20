package main

import (
	"net/http"

	accueil "./accueil"
)

func main() {

	http.HandleFunc("/", accueil.Accueil)

	http.ListenAndServe(":8080", nil)

}
