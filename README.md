# URAF (Unified Request for Assistance Form)

This project implements the Unified Request for Assistance Form (URAF) as a Laravel application with a Bootstrap 5–styled, mobile-responsive form.

## Form fields

1. **first_name** (required)  
2. **middle_name**  
3. **last_name** (required)  
4. **gender**  
5. **passport_no**  
6. **other_id_no** (e.g. iqama no, Saudi residence id)  
7. **e_mail_or_facebook_name** (e-mail or Facebook name)  
8. **occupation**  
9. **phone_no**  
10. **location_abroad**  
11. **employer_name**  
12. **employer_phone_no**  
13. **recruitment_agency_name_abroad**  
14. **recruitment_agency_name_local**  
15. **complaint** (paragraph)  
16. **location** (lat/lng from browser, optional)  
17. **uploads** – up to 3 files, optional (PDF, JPG, PNG, GIF, DOC, DOCX; max 10 MB each)

## Setup

1. Configure your `.env` (database, etc.).
2. Run migrations:
   ```bash
   php artisan migrate
   ```
3. Create the public storage link for file uploads:
   ```bash
   php artisan storage:link
   ```
4. Start the app (e.g. `php artisan serve`).

## Routes

- **GET /** – URAF form  
- **POST /** – Submit form  
- **GET /success/{id}** – Success page after submission  

## Implementation details

- **Controller:** `App\Http\Controllers\UrafController` (index, store, success)  
- **Model:** `App\Models\UrafRequest`  
- **Migration:** `database/migrations/..._create_uraf_requests_table.php`  
- **Views:** `resources/views/uraf/form.blade.php`, `resources/views/uraf/success.blade.php`  

Form uses Bootstrap 5 (CDN), is mobile responsive, includes client-side geolocation (optional), validation with `old()` repopulation, and a success page with reference number.
