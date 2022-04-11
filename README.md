# IndySCCA.org Live Timing

GitHub repository for the IndySCCA.org live timing website.

### Branches:
- Master: A set of classes and functions to display SCCA autocross events
- NCCC: A set of classes and functions to display National Council of Corvette Clubs autocross events such as the Indiana Corvette Enthusiasts
- OneLapofAmerica: A set of classes and functions to display One Lap of America autocross events

### How to use:
1. In order to implement your own version of an autocross live timing website, you first have to be using the [Pronto Timing System](https://www.prontotimingsystem.com/).
2. Next, you can either clone the repository and checkout the branch you would like, or you can download a zip file of the branch you choose from GitHub.
3. Edit the following files to tailor the site to your needs:
   - pageTitle.html - Title and main heading of the live timing website
   - sponsors.html - List of images to show as sponsors on the website
   - stylesheet.css - CSS file that stylizes the main page and subsequent class pages
   - functions.php - Alter the variables fmchannel and horizontal_classes to your liking
4. Upload all of the files and folders to a subfolder of your liking on your webserver.
5. Alter your TSLive program settings "Dir:" and "Non Class dir:" to point to the "files" subfolder you uploaded. In this example image, both settings are pointing to a live subfolder
    - ![TSLive](/images/tslive.png)
6. Begin your event and enjoy your live timing.
