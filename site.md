# Site Information

## Staging and Live Sites Explained

There are 2 sites for the client's maintainer, staging and live. Having these 2 sites are good because to can make changes to the contents or work on updates for the staging site without worrying about breaking the live site.

### WordPress Logins
Here are the url's of both the staging and live sites.

Staging: [http://3.24.178.18/wp-admin](http://3.24.178.18/wp-admin)

Live: [http://13.210.12.189/wp-admin](http://13.210.12.189/wp-admin)

Once you have clicked the url, you will be prompted to input the username and password to gain wp-admin access. 

## Adding Content
### Adding Pages
After you have successfully logged into WordPress you will be in the dashboard. 

If you want to add a page just follow these steps:
- In the menu on the left click pages
- Then click the 'Add New Page' button.
  
### Making Changes to Page Content
If you want to make a change to the content of a page simply navigate to the page you wish to make the changes, click on the options button in the top right corner which should appear as 3 vertical dots, then click 'Code Editor'. From here you will be able to add or make changes to the content in html.

### Adding Media
If you want to add or change some Media items, navigate to the dashboard of the site and in the menu on the left click 'Media'. 

- To add your own Media, Click 'Add New Media File'
- To change current Media, Hover over the Media item you wish to make changes and you will see options to 'Edit', 'Delete Permanently', 'View', 'Copy URL', or 'Download file'.

### Adding Styles to CSS
To make changes to the site’s styles:
- In the left-hand menu, click Appearance, then select Customize.
- From there, go to Additional CSS.
- You can add custom CSS here to change the appearance of your pages (e.g., colors, fonts, spacing).

## Changing the Site Logo and footer
To change the logo or header image:
- Go to Appearance > Customize in the WordPress admin menu.
- Select <strong>Site Identity</strong> and upload your new logo or change the header image.

To change the footer deatils:
- Go to Appearance > Customize in the WordPress admin menu.
- Select <strong>Footer Settings</strong> and update the details like comapny name, address and contact information.

## Using Plugins
### Pushing Changes from Staging Site to Live Site
To push the changes made from the staging site to the live site, we used a plugin called <strong>ALL-in-One WP Migration.</strong> This plugin is available on both wordpress sites, and will allow for exporting one site to another making it a copy of the first site. 

In this instance once you have made changes in the staging site and want to copy it over to the live site, follow the steps below.

ON STAGING SITE

- In the Menu, Click 'ALL-in-One WP Migration'.
- Click 'Export'
- Now Click 'EXPORT SITE TO'
- Click 'FILE'
- Wait for it to load then Click 'Download'

ON LIVE SITE

- In the Menu, Click 'ALL-in-One WP Migration'.
- Click 'Import'
- Now Click 'IMPORT SITE FROM'
- Click 'FILE'
- Then navigate to where you downloaded the export file of the staging site

### WPForms Plugin for Registration Form
To manage the WPForms plugin for the registration form:

* Installation:

- Once WPForms is installed on WordPress, it will appear in the WordPress dashboard under the WPForms menu.

* Creating or Editing a Form:

- To create a new form, click on WPForms in the dashboard and click Add New. You can either start from scratch or choose from an existing template.

- In the template, you can add new fields and modify them using the Field Options.

- If you need to change the form layout—for example, to display fields like Full Name and Contact Number side by side—this layout adjustment can be achieved through CSS for better alignment and design. WPForms provides built-in tools to adjust the form’s structure, but custom CSS can be added via the WordPress Customizer to fine-tune the form's appearance.

* Embedding the Form:

- Once you've customized the form, you can embed it into any page using the Embed button located in the top right of the form editor.

- Select the desired page or post where you want the form to appear, and WPForms will generate a shortcode for you to insert into the page.

By following the instructions above, you should be able to easily manage pages, modify content, and handle the registration form on your site. If you have any questions about WPForms or migrating content from staging to live, don’t hesitate to reach out for further assistance.

