# Company Profile Website

## 1. Project Title

**Professional Company Profile Website Using Laravel**

---

## 2. Introduction

### What is a Company Profile Website?

A Company Profile Website is a website that provides information about a business, including its background, mission, services, contact information, and other important details. It serves as an online representation of a company where visitors can learn more about the business and what it offers.

### Why Businesses Need One

Businesses need a company profile website because it allows them to establish an online presence and make important information easily accessible to customers. A professional website can also help build trust, improve the company's credibility, and allow potential customers to learn about its products or services.

### Purpose of the Project

The purpose of this project is to develop a professional company profile website using the Laravel framework. The website demonstrates the use of Laravel's MVC architecture, routing, controllers, Blade templating, layouts, and components.

The project contains several pages, including:

* Home Page
* About Page
* Services Page
* Contact Page

The website also includes a reusable navigation bar and footer to provide a consistent design throughout the different pages.

---

## 3. Objectives

The following objectives were accomplished in the development of the project:

1. Create a functional company profile website using Laravel.
2. Apply the Model-View-Controller (MVC) architecture.
3. Create and organize Laravel routes.
4. Create a `CompanyController` for handling page requests.
5. Use Blade templates to create dynamic and reusable web pages.
6. Create a reusable Blade layout for the website.
7. Use Blade components for common website elements such as the navigation bar.
8. Create separate Home, About, Services, and Contact pages.
9. Create a consistent navigation bar and footer.
10. Practice organizing files according to Laravel's folder structure.
11. Troubleshoot common Laravel routing, controller, and Blade errors.

---

# 4. MVC Architecture

## What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture pattern that separates an application into three main parts:

* **Model** – Handles data and communication with the database.
* **View** – Handles what the user sees on the website.
* **Controller** – Handles requests and determines what should happen when a user visits a page.

In this project, the main focus is on the Controller and View because the website primarily presents company information.

## Why Laravel Uses MVC

Laravel uses the MVC architecture because it helps developers organize their applications into separate and manageable parts. Instead of placing all the code in one file, Laravel separates routing, application logic, and webpage presentation.

For example, the `CompanyController` handles requests while Blade files are responsible for displaying the pages.

## Advantages of MVC

MVC provides several advantages:

* **Better organization** – Different parts of the application are placed in their appropriate locations.
* **Easier maintenance** – Changes can be made to one part without affecting the entire application.
* **Code reusability** – Components and layouts can be reused on multiple pages.
* **Easier debugging** – Errors can be easier to locate because the application is separated into different parts.
* **Scalability** – The application can be expanded more easily as new features are added.

## MVC Request Flow

The basic flow of this Laravel website can be represented as:

```text
        Browser
           │
           ▼
         Route
           │
           ▼
      Controller
           │
           ▼
       Blade View
           │
           ▼
   Response to Browser
```

For example, when a visitor opens the Home page, the browser sends a request to Laravel. The route identifies the appropriate controller method, the controller returns the required Blade view, and Laravel sends the generated HTML back to the browser.

---

# 5. Laravel Routing

## What is Routing?

Routing is the process of determining what should happen when a user visits a specific URL. Laravel routes connect URLs to the appropriate controller methods or views.

Laravel web routes are commonly stored in:

```text
routes/web.php
```

## Named Routes

Named routes allow routes to be given a specific name. Instead of repeatedly writing the URL, the route name can be used when creating links.

Example:

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
```

The route is given the name `home`.

It can then be referenced using:

```php
route('home')
```

Named routes make navigation easier to manage because URLs do not need to be hard-coded throughout the application.

## GET Requests

The `GET` method is commonly used when retrieving or displaying a webpage.

Example:

```php
Route::get('/about', [CompanyController::class, 'about']);
```

When a user visits:

```text
/about
```

Laravel sends the request to the `about()` method of the `CompanyController`.

## Route Definitions

The project's routes are defined in `routes/web.php`.

Example:

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');

Route::get('/about', [CompanyController::class, 'about'])->name('about');

Route::get('/services', [CompanyController::class, 'services'])->name('services');

Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

### Screenshot: `web.php`

<img width="1920" height="1032" alt="ddbe0dc5-37e9-49bb-9417-28326d81a9d8" src="https://github.com/user-attachments/assets/46034cd1-3522-4ad0-9b09-31ddf7337a0e" />



# 6. Controllers

## Purpose of Controllers

Controllers are responsible for handling requests from users and determining what response should be returned.

In this project, the `CompanyController` handles the different company profile pages.

The controller is located at:

```text
app/Http/Controllers/CompanyController.php
```

## Benefits of Controllers

Controllers provide several benefits:

* They keep application logic organized.
* They prevent routes from becoming too complicated.
* They allow multiple routes to use different controller methods.
* They make the application easier to maintain.
* They follow Laravel's MVC architecture.

## Controller Methods

The `CompanyController` contains methods responsible for displaying each page.

Example:

```php
<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
```

Each method returns a Blade view that is displayed in the browser.

For example:

```php
return view('about');
```

tells Laravel to load:

```text
resources/views/about.blade.php
```

### Screenshot: `CompanyController.php`

<img width="1920" height="1032" alt="bd4e1b5e-696f-4510-aee4-c98125c74d62" src="https://github.com/user-attachments/assets/a49bfc5f-c667-4e38-a493-62b1b60b09de" />

# 7. Blade Templating Engine

Blade is Laravel's built-in templating engine. It allows developers to create HTML pages while using Laravel features and syntax.

Blade files use the:

```text
.blade.php
```

extension.

For example:

```text
resources/views/home.blade.php
```

## Blade Layouts

A Blade layout provides a common structure that can be shared by multiple pages.

For example, the website can have a main layout containing:

* Navigation bar
* Main content area
* Footer

Instead of creating the same navigation and footer code on every page, the layout can be reused.

Example:

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
```

## Blade Components

Blade components allow reusable sections of the interface to be created.

For example, the navigation bar can be created as a component:

```text
resources/views/components/navbar.blade.php
```

It can then be used with:

```blade
<x-navbar />
```

This prevents the same navigation code from being copied into every page.

## `@extends`

The `@extends` directive allows a Blade page to use an existing layout.

Example:

```blade
@extends('layouts.app')
```

This tells the page to use the layout located at:

```text
resources/views/layouts/app.blade.php
```

## `@section`

The `@section` directive defines content that will be placed inside a section of the layout.

Example:

```blade
@section('content')

<h1>Welcome to Our Company</h1>

<p>Learn more about our company and services.</p>

@endsection
```

## `@yield`

The `@yield` directive defines where content from a child Blade page will appear.

Example:

```blade
@yield('content')
```

If a child page contains:

```blade
@section('content')
    <h1>Home Page</h1>
@endsection
```

the content will appear where `@yield('content')` is located.

## `@include`

The `@include` directive allows another Blade file to be inserted into the current page.

Example:

```blade
@include('components.footer')
```

This can be used to include reusable sections such as footers or other partial views.

## Sample Blade Page

Example of a page using a layout:

```blade
@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<section>
    <h1>About Our Company</h1>

    <p>
        Learn more about our company, mission, and services.
    </p>
</section>

@endsection
```

### Screenshot: Blade Layout

<img width="1920" height="1032" alt="4e381402-abf2-48d3-bf6f-2a19fcc186f8" src="https://github.com/user-attachments/assets/99f38e85-59d0-4535-8d91-da5add2ae6e3" />



### Screenshot: Blade Component

<img width="1920" height="1032" alt="image" src="https://github.com/user-attachments/assets/31eaf531-96d5-4f5e-aacd-07a1cc40ca08" />



# 8. Laravel Folder Structure

Laravel organizes its files into different folders based on their purpose.

## `app/`

The `app/` folder contains the main application code.

For this project, the controller is located inside:

```text
app/Http/Controllers/
```

The `CompanyController.php` file is located here.

## `routes/`

The `routes/` folder contains the application's route definitions.

The main web routes for this project are located in:

```text
routes/web.php
```

## `resources/`

The `resources/` folder contains frontend resources such as Blade views, CSS, and JavaScript files.

The website's Blade pages are stored inside:

```text
resources/views/
```

Examples include:

```text
home.blade.php
about.blade.php
services.blade.php
contact.blade.php
```

## `public/`

The `public/` folder contains files that are directly accessible by the browser.

It also contains Laravel's entry point:

```text
public/index.php
```

Assets such as images and compiled frontend files can also be placed or generated here.

## `bootstrap/`

The `bootstrap/` folder contains files used to initialize the Laravel application.

It also contains cached framework files.

## `config/`

The `config/` folder contains Laravel's configuration files.

These files control different parts of the application, including:

* Database configuration
* Application settings
* Mail configuration
* Session configuration
* Cache configuration

---

# 9. Screenshots

The following screenshots should be included in the documentation to demonstrate the completed website and Laravel implementation.

## Home Page

The Home page serves as the main landing page of the company profile website.

> **Insert Home Page screenshot here.**


## About Page

The About page provides information about the company, its background, and its purpose.

> **Insert About Page screenshot here.**



## Services Page

The Services page presents the services offered by the company.

> **Insert Services Page screenshot here.**



## Contact Page

The Contact page provides the company's contact information and allows visitors to find ways to communicate with the business.

> **Insert Contact Page screenshot here.**



## Navigation Bar

The navigation bar allows users to move between the different pages of the website.

> **Insert Navigation Bar screenshot here.**



## Footer

The footer provides additional information and creates a consistent ending section across the website.

> **Insert Footer screenshot here.**



## Route Definitions

> **Insert `web.php` screenshot here.**



## Controller

> **Insert `CompanyController.php` screenshot here.**



## Blade Layout

> **Insert Blade layout screenshot here.**


# 10. Problems Encountered

During the development of the Laravel Company Profile Website, several challenges were encountered.

## Problem 1: Route Not Found

One of the problems encountered was receiving a route-related error when trying to access a webpage.

This happened when the URL did not have a corresponding route definition in `web.php`, or when the route was incorrectly defined.

For example, if the About page was accessed but the `/about` route was missing, Laravel could not determine which page should be displayed.

## Problem 2: View Not Found

Another problem encountered was a "View not found" error.

This occurred when Laravel was instructed to load a Blade view that did not exist or when the view name did not match the actual filename.

For example:

```php
return view('about');
```

requires the following file to exist:

```text
resources/views/about.blade.php
```

If the file was named differently, Laravel would not be able to find it.

## Problem 3: Controller Namespace Issues

A controller namespace issue was also encountered during development.

Laravel controllers normally use a namespace such as:

```php
namespace App\Http\Controllers;
```

If the controller namespace or the controller import in `web.php` was incorrect, Laravel could not properly locate the controller.

## Problem 4: Blade Syntax Errors

Another challenge involved Blade syntax.

Blade uses directives such as:

```blade
@extends()
@section()
@yield()
@include()
```

Using an incorrect directive, missing `@endsection`, or specifying an incorrect view name could cause the page to fail.

---

# 11. Solutions

## Solution 1: Fixing Route Errors

The route definitions were checked and corrected in:

```text
routes/web.php
```

The required controller was also imported correctly.

Example:

```php
use App\Http\Controllers\CompanyController;
```

The routes were then defined correctly:

```php
Route::get('/about', [CompanyController::class, 'about'])
    ->name('about');
```

After correcting the route, the About page could be accessed successfully.

## Solution 2: Fixing View Errors

The Blade view filenames and locations were checked.

For example:

```php
return view('about');
```

was matched with:

```text
resources/views/about.blade.php
```

The view name in the controller was corrected whenever it did not match the actual Blade filename.

## Solution 3: Fixing Controller Namespace Issues

The controller namespace was checked and corrected.

The controller uses:

```php
namespace App\Http\Controllers;
```

The controller was also imported correctly in `web.php`:

```php
use App\Http\Controllers\CompanyController;
```

This allowed Laravel to properly locate and use the `CompanyController`.

## Solution 4: Fixing Blade Syntax Errors

The Blade files were checked for incorrect directives and missing closing statements.

For example:

```blade
@extends('layouts.app')

@section('content')

    <h1>Welcome</h1>

@endsection
```

Using the correct Blade syntax allowed the pages to properly inherit the layout and display their content.

---

# Conclusion

The Laravel Company Profile Website project provided practical experience in developing a web application using the Laravel framework. The project demonstrated the use of Laravel routing, controllers, Blade templates, layouts, components, and the MVC architecture.

Through the development process, several common Laravel problems were also encountered and resolved, including route errors, missing views, controller namespace issues, and Blade syntax errors.

Overall, the project helped demonstrate how Laravel can be used to create an organized, reusable, and professional company profile website.
