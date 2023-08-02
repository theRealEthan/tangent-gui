# Movie Recommendation GUI

This GUI application makes use of the Movie Recommendation API to get recommended movies based on a movie ID. The data is received from the API microservice.

## Installation Instructions
*Ensure you have the API Microservice Running

The installation instructions are the same as for the Movie Recommendation API.

1. Ensure you have docker running.
2. Run `docker compose up --build`.
3. The GUI application will run on port 8081, so navigate to:

   http://localhost:8081

## Further Information

For more information, please see the following resources:

* [TMBD API](https://developers.themoviedb.org/3/getting-started/introduction)
* [Docker Compose](https://docs.docker.com/compose/)
* [Phalcon PHP](https://phalcon.io/)

## Contact

If you have any questions, please contact me at ethanatyahoo.com@gmail.com

## Extra Details

The GUI application is a simple Phalcon PHP application that uses the Bootstrap framework. 
It has a simple interface that allows users to enter a movie ID and get the recommended movies for that movie.