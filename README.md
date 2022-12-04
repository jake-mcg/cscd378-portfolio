# cscd378-portfolio

## Goals

We hope to have a project portfolio site with individual portfolios for each of our team members, as well as administration capabilities. The project section of the site will detail the technologies we used in developing the site as well as how we fulfilled the given requirements for the project. Each individual portfolio will contain descriptions of the person’s qualifications, including a biography, resume, projects. Finally, the administration section will have a login system and a log of the site’s access history.

## Milestones Met and Not Met
TBD…

## Post-mortem
TBD…

## User guide
1. Ensure Phpmyadmin is Installed
	- If it is not, right click inside Laragon: Tools > Quick add > Phpmyadmin
2. Log onto Phpmyadmin
    - User: root
    - Password: [empty]
3. Import provided database file

	a. Import tab
	
	b. browse file and select mydatabase.sql
	
	c. Press the import button

4. Enable SSL on Laragon
	- menu->apache->ssl-> enable
	- menu->apache->ssl-> add laragon.crt to trust store
5. Set Document Root
	- go to menu and hover over your current document root (by default it is called www)
	- click switch document root and set it to the project folder
6. Open the website
	- hover over the document root and click the button labelled "pages"
