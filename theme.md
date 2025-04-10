# Theme Information  
This page helps new developers continue working on this theme. 

# Starter Theme Sass 
## Overview
Starter Theme Sass is a WordPress theme based on the Underscores starter theme and enhanced with Sass for improved styling management. The theme has been customized to fit the specific needs of the Baizonn Learning Center website, which caters to parents seeking math and science education for their children. The theme is designed with a streamlined layout, minimal hardcoded content, and is highly flexible for future updates and scalability.

This theme also serves as a learning tool for new developers looking to understand WordPress theme development. It provides a solid base to customize and extend for various types of websites.

## Key Features of the Theme
- **Custom Header & Footer Modifications**
Instead of editing the existing header, we created a custom header for the site to better align with the Baizonn Learning Center's needs.
For the footer, we modified the existing footer to maintain consistency with the original theme structure, while ensuring it remains dynamic and customizable through WordPress settings. This allows easy updates for footer content, such as contact info and social media links, via the WordPress admin panel.

- **Simplified Layout**
To create a cleaner and more focused layout, we removed unnecessary sidebars and widgets. This allows the content to take center stage and makes the website easier to navigate for users.

- **Commented PHP Functions**
Most PHP functions within the theme have detailed comments explaining what they do. This helps any developers, especially those unfamiliar with PHP, to understand the theme’s structure and functionality.

- **Theme Unit Test Compatibility**
The theme has been tested with the Theme Unit Test data to ensure that it works well with various WordPress content types, such as posts, pages, and media. This ensures robustness and compatibility with different WordPress setups.

- **No Hardcoded Content**
The theme ensures that no content such as the site title, footer information, or other elements are hardcoded. This makes the theme flexible, allowing for easy updates through the WordPress admin panel rather than requiring code changes.

# Customization Details
- **header.php**: Contains the markup for the website's header. We've customized this file to remove the default site title and incorporate a more relevant navigation menu that fits our client's branding.

-  **footer.php**: We modified the existing footer to ensures that footer content (such as contact info, social media links, etc.) is dynamic and can be easily updated through the WordPress admin interface.

- **page.php**: The primary template for individual pages. We made adjustments, including removing sidebars and widgets to provide a cleaner layout suited for the learning center’s needs.

- **template-content.php**: This file handles the layout of page content. Customizations were made to ensure that it aligns with the overall design and structure required for the website.

- **style.scss**: The main Sass file that holds most of the styles for the theme. This is the file you'll likely be working with for any styling updates or tweaks as needed.

- **functions.php**: Contains important functions that enable theme support for features such as custom menus, widgets, etc. We’ve removed unnecessary functions that weren’t needed for this theme to keep it lean and efficient.

## Design Decisions
- **Logo & Navigation Customization**: One of the key adjustments was to separate the logo and navigation menu into two distinct containers to prevent the logo from being squeezed, especially as more menu items were added. This helps maintain a balanced, professional layout.

- **Sub-navigation (Dropdown)**: We retained the sub-navigation (dropdown) feature from the default theme, which allows for multi-level menu options. This was essential for the website’s structure, ensuring easy navigation for both parents and students.

## Installation and Setup
- Download the starter-theme-sass.
- To install the theme, go to **Appearance > Themes** in your WordPress dashboard.
  - Click **Add New** and **Upload Theme**.
  - Select the `starter-theme-sass.zip` file, then click **Install Now** and **Activate**.
- Set your custom header image by navigating to **Appearance > Customize > Header Image**.

## Development Guidelines
- **SASS** (Syntactically Awesome Stylesheets) is used for styling the theme. The main SCSS file is located in `starter-theme-sass/sass/style.scss`, which is compiled into `style.css` for production use.

## Additional Resources
- [WordPress Theme Development Docs](https://developer.wordpress.org/themes/)
- [Underscores Documentation](https://underscores.me/) (The base theme this is built from)
