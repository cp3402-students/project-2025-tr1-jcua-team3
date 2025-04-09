# Theme Information  

This page helps new developers continue working on this theme. It covers key features, editable files, design decisions, and color schemes.
Modify `style.css` for styling, `functions.php` for functionality, and `template-parts/` for layout changes.


# Theme Name: Starter Theme SASS

## Overview
The **Starter Theme SASS** is a WordPress theme designed for educational purposes. It has been modified to serve as an ideal learning tool for new developers who want to understand WordPress theme development. The theme is simple, easy to use, and can be customized for different types of websites. The theme serves as a base for further learning and customizations.

## Key Features
- **Custom Header**: Users can upload their own header image through the WordPress Customizer.
- **Responsive Layout**: The theme is fully responsive, ensuring a seamless experience across all devices.
- **SASS Styling**: The theme utilizes SASS (Syntactically Awesome Stylesheets) for a more efficient and scalable styling process.
  
## Files We Edit
The following files were edited to customize the theme for our specific site needs:
- **`header.php`**: Modified to support custom header images and site title/logo.
- **`footer.php`**: Custom footer layout, including widget areas.
- **`page.php`**: Adjusted the structure of the default page layout to match the site's needs.
- **`template-content.php`**: Customized to control the content display on different pages.
- **`style.css`**: Edited for site-wide styling, including colors, typography, and layout.
- **`functions.php`**: Added and modified theme setup, custom functionality, and widget areas.
- **`sidebar.php`**: Made changes to the sidebar layout and widget placement.
- **`single.php`**: Adjusted layout for individual blog posts.
  
Additional modifications may be required depending on further customizations for the theme.

## Design Decisions
- **Color Scheme**: The theme uses a light background with dark text to prioritize readability.
  - Primary Color: #0073aa (blue)
  - Secondary Color: #555555 (dark gray)
- **Typography**: System fonts are used for better performance and accessibility.

## Customizability Options
- **Color Options**: Modify the header and background colors directly from the WordPress Customizer.
- **Layout Choices**: Choose between a full-width or boxed layout through the WordPress Customizer.

## Installation and Setup
- To install the theme, go to **Appearance > Themes** in your WordPress dashboard.
  - Click **Add New** and **Upload Theme**.
  - Select the `starter-theme-sass.zip` file, then click **Install Now** and **Activate**.
- Set your custom header image by navigating to **Appearance > Customize > Header Image**.

## Development Guidelines
- Follow the [WordPress coding standards](https://developer.wordpress.org/coding-standards/) to ensure your theme is well-structured and compatible with future WordPress versions.
- **SASS** (Syntactically Awesome Stylesheets) is used for styling the theme. The main SCSS file is located in `starter-theme-sass/sass/style.scss`, which is compiled into `style.css` for production use.

## Contributing
- If you want to contribute, fork the GitHub repo and submit a pull request with improvements or bug fixes.
- For feature requests or bug reports, open a new issue on GitHub.

## Additional Resources
- [WordPress Theme Development Docs](https://developer.wordpress.org/themes/)
- [Underscores Documentation](https://underscores.me/) (The base theme this is built from)
