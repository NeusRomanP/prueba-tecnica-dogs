# Setup project
## Backend
- Install composer dependences  
  `composer install`

- Copy .env file  
  `cp .env.example .env`

- Generate an app encryption key  
  `php artisan generate:key`

- Create an empty database and setup the infromation in your .env file  

- Run:  
  `php artisan migrate`

- Run project:  
  `php artisan serve`

## Frontend
- Run:  
  `npm install`

- Create a .env at the root frontend folder with the following variables:  
  `BACKEND_URL=http://localhost:8000/api`  
  `IMGS_URL=http://localhost:8000/storage/images`

- Run project:  
  `npm run dev`

# Features
- Adding dogs: At the menu you can find a view for adding dogs. You must add An image, a breed, a color and a size.
- Main view: When dogs are added you can see them at the main view. They are paginated, 12 per page.
- Dog details: After clicking a dog at the main view it redirects to the dog details view. If you want to delete the dog you can from this view.
- Elj Copy: Copy of this page https://www.europelanguagejobs.com/companies 
