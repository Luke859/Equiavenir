package main

import (
	"net/http"

	accueil "./src/accueil"
)

func main() {

	http.HandleFunc("/", accueil.Accueil)

	http.ListenAndServe(":8080", nil)

}
