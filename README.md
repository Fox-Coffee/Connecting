# Connecting

## Overview

This PHP-MySQL web application is a simple data management system with a user interface built using HTML, CSS, and JavaScript. It allows users to view, add, and update records in a MySQL database.

## Features

- Displaying records in a table format.
- Adding new records through a form.
- Error handling and a user-friendly error page.

## File Structure

- **index.php**: The main page that displays the records and includes the form for adding new entries.
- **error.html**: The error page shown when there are issues accessing the content.
- **add.php**: Handles the addition of new records to the database.
- **style/style.css**: Contains the styling for the application.
- **javascript/error.js**: Provides client-side functionality for the error page.
- **inc/config.php**: Configuration file for defining database connection parameters.
- **inc/load.php**: Autoloads classes.
- **classes/connect.class.php**: Defines the `Connect` class for handling database connections.

## Installation

1. Set up a MySQL database using the provided configuration parameters in `inc/config.php`.
2. Import the database schema from the provided `schema.sql` file.
3. Place all files in a web server directory.
4. Ensure proper file permissions for security.

## Usage

1. Access the application through the web browser.
2. View and interact with the records in the table.
3. Use the form to add new records to the database.

## Dependencies

- PHP
- MySQL
- Web server (e.g., Apache of NGINX)
- PDO extension for PHP

## Note

Ensure that error reporting is enabled during development and disabled in production for security reasons.

Feel free to customize and extend the application based on your requirements.

Happy coding!