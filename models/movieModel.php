<?php
require_once("./config/dbConst.php");

function getMovies()
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM movies;";
        $response = mysqli_query($dbConst, $query);
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getMovieById($id)
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM movies WHERE movie_id = $id;";
        $response = mysqli_query($dbConst, $query);
        return mysqli_fetch_all($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function createMovie($movie)
{
    try {
        $dbConst = mysqli_connect(DB_HOST, USER_NAME, DB_PASSWORD, DB_NAME);
        $newMovie = mysqli_query($dbConst, "SELECT * FROM movies WHERE movie_name = '$movie[movie_name]', released_year = '$movie[released_year]', runtime = '$movie[runtime]'");
        if (mysqli_num_rows($newMovie) > 0) {
            return "Movie already exists";
        } else {
            mysqli_query(
                $dbConst,
                "INSERT INTO movies (movie_name, released_year, runtime)
                VALUES ('$movie[movie_name]', '$movie[released_year]', '$movie[runtime]');
                "
            );
            return "New movie created successfully!";
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
