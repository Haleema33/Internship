
# Oasis-Internship WordPress Site


## Table of Contents

1. [Project Overview](#project-overview)
2. [Features](#features)
3. [Local Development Setup](#local-development-setup)
4. [Installation Instructions](#installation-instructions)
5. [Usage](#usage)
6. [Deployment](#deployment)
7. [Folder Structure](#folder-structure)
8. [Contributing](#contributing)


## Project Overview

**Oasis-Internship WordPress Site** is a dynamic and responsive WordPress landing page designed to showcase the highlights of an internship program. This project was developed locally using Local by Flywheel and is version-controlled with GitHub.

## Features

- **Responsive Design**: Ensures the site looks great on all devices.
- **Customizable Content**: Easily update text, images, and other media through the WordPress dashboard.
- **Fast Loading**: Optimized for quick load times.
- **SEO Friendly**: Built with best practices for search engine optimization.

## Local Development Setup

To set up this WordPress site locally using Local by Flywheel, follow these steps:

1. **Install Local by Flywheel**:
   - Download and install Local by Flywheel from [Local by Flywheel's official site](https://localwp.com/).

2. **Clone the Repository**:
   - Clone this repository to your local machine:
     ```bash
     git clone https://github.com/Haleema33/Oasis-Internship.git
     ```

3. **Set Up Local by Flywheel**:
   - Open Local by Flywheel and create a new site using the "Custom" setup options.
   - Use the `app/public` directory from the cloned repository as the root directory for the site.

4. **Configure Database**:
   - Set up the WordPress database credentials in `wp-config.php` to match the database created by Local by Flywheel.
   - Typically, these credentials will be:
     - Database Name: `local`
     - Username: `root`
     - Password: `root`
     - Host: `localhost`

5. **Import the Database**:
   - If you have a database export (like `database.sql`), import it into your Local by Flywheel setup via phpMyAdmin or the Local by Flywheel database manager.

## Installation Instructions

To install this project locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/Haleema33/Oasis-Internship.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Oasis-Internship
   ```

3. Start Local by Flywheel and add the cloned project directory as a new site.

4. Update your `wp-config.php` file with the correct database credentials.

5. Open the site in your browser via Local by Flywheel to complete the WordPress installation steps.

## Usage

- Access the WordPress admin dashboard via `http://your-local-site/wp-admin` (replace `your-local-site` with your Local by Flywheel site URL).
- Use the WordPress dashboard to add or update content, install plugins, and manage the site.

## Deployment

To deploy this site to a live server:

1. **Export the Database**:
   - Use a plugin like [WP Migrate DB](https://wordpress.org/plugins/wp-migrate-db/) to export the database.
   - Ensure that you update the URLs in the database to match your live site.

2. **Upload Files to Server**:
   - Use FTP or your hosting provider’s file manager to upload the site files to the live server.

3. **Import the Database**:
   - Import the database to your live server’s database using phpMyAdmin or a similar tool.

4. **Update `wp-config.php`**:
   - Ensure the `wp-config.php` file on the live server has the correct database credentials for your live database.

## Folder Structure

```plaintext
Oasis-Internship/
├── .gitignore
├── README.md
├── wp-admin/
├── wp-content/
│   ├── plugins/
│   ├── themes/
│   ├── uploads/
│   └── ...
├── wp-includes/
├── wp-config.php
└── ...
```

- `wp-admin/`: Core WordPress admin files.
- `wp-content/`: Your content, themes, plugins, and uploads.
- `wp-includes/`: Core WordPress includes.
- `wp-config.php`: WordPress configuration file.

## Contributing

If you wish to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

