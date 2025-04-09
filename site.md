# Site Information

Think about someone else, perhaps the client, who already knows WordPress taking over the running of the site itself: how do they add new content – as a page or a post? In what category? You may have used a plugin for a calendar of events or something, which needs to be described. Do not recreate WordPress documentation but clearly explain to the client’s site maintainer how this site is organised and can be updated.

## Staging and Live Sites Explained

There are 2 sites for the client's maintainer, staging and live. Having these 2 sites are good because to can make changes to the contents or work on updates for the staging site without worrying about breaking the live site.

### WordPress Logins
Here are the url's of both the staging and live sites.

Staging: [http://3.24.178.18/wp-admin](http://3.24.178.18/wp-admin)

Live: [http://13.210.12.189/wp-admin](http://13.210.12.189/wp-admin)

Once you have clicked the url, you will be prompted to input the username and password to gain wp-admin access. Login details for both are: 

- Username = user
- Password =

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
To make changes to the styles of the pages on your site, in the menu click 'Appearence' then click 'Customise'. From here click 'Additional CSS'. This is where the styles for your pages will belong.

### Pushing Changes from Staging Site to Live Site
To push the changes made from the staging site to the live site, we used a plugin called ALL-in-One WP Migration. This plugin is available on both wordpress sites, and will allow for exporting one site to another making it a copy of the first site. 

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
