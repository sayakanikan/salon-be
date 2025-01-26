# Salon Booking Application
Salon Booking Online Application is for booking salon service with prefered schedule and therapist.

### Instalation Instruction
1. Clone the app on local repository
2. Duplicate the `.env.example` and rename it to `.env`
3. Adjust the database based on your local database (default mysql)
4. Go to terminal and run `composer install`
5. Then run `php artisan key:generate` to generate application key
6. Then run `php artisan migrate --seed` to run migration and seeder
7. Then run `php artisan storage:link` to link storage and public folder
8. Then run the app using `php artisan serve`

NOTE: Data Locations, Treatments, Therapist, Users already exist in database seeder.

Default User:<br/>
email: test@gmail.com<br/>
password: password

### API Endpoints
- POST /login
- POST /register
- GET /locations
- GET /treatments/{locationId}
- GET /therapists/{treatmentId}
- POST /appointments/check-slot
- POST /appointments/save-booking
- GET /appointments/{id}
