## Laravel Backend Task Assignment

For the backend API, I use Laravel MVC framework with MySQL.

## To run

- Clone the project from git repository
- Start the mysql server on your local **[mysql.server start]**
- Make sure you have a database created for this app.
- Write the Database info in .env file
- Migrate with migration files in this app **[php artisan migrate]**
- Import neccessary data from provided sql dump file or csv file.
- Run this command **[php artisan serve](Laravel development server started: <http://127.0.0.1:8000>)**

## API documentation

### API to get all patients
- URL: /patients
- Method: GET

### API to get the appointments by patient name
- URL: /appointments/{patient_name}
- Method: GET

