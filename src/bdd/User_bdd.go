package bdd

import (
	"database/sql"
	"fmt"

	_ "github.com/mattn/go-sqlite3"
)

func InsertUser(email string, password string, db *sql.DB) int {
	statement, err := db.Prepare("INSERT INTO User (email, password) VALUES(?,?)")
	if err != nil {
		fmt.Println(err)
		fmt.Println("error Prepare new user")
		return (500)
	}
	statement.Exec(email, password)
	db.Close()
	return (0)
}
