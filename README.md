# Writeup

## Goals

- A project portfolio site with individual portfolios for each of our team members
- Administration system with:
  - Login feature
  - Display logs
- Project section detailing the technologies used in sites development
- Section detailing how we fulfilled the given requirements of the project
- Individual portfolios will contain a combination of:
  - Biography
  - Qualifications
  - Resume
  - Export resume as PDF
  - Projects
  - Ability to add content dynamically.

## Milestones Met and Not Met

- [x] A project portfolio site with individual portfolios for each of our team members
- [x] Administration system with:
  - [x] Login feature
  - [x] Display logs
- [x] Project section detailing the technologies used in sites development
- [x] Section detailing how we fulfilled the given requirements of the project
- [x] Individual portfolios will contain a combination of:
  - [x] Biography
  - [x] Qualifications
  - [x] Resume
  - [] Export resume as PDF
  - [x] Projects
  - [] Ability to add content dynamically.

## Post-mortem

The most challenging portion of the project was deciding what initial libraries to use and how to create a project with them. We spent several weeks trying different ones and eventually decided on using phpAuth for our login system, and MDBootstrap for our UI. Another challenging component was correctly sending information to and from our database that was not a part of the phpAuth library. We were able to get this functionality working and use it in several pages of the site. Lastly our group's initial idea of the site was uniform in the big picture but not as cohesive on the specific implementation details. As some portions were being developed independently, the overall theme of the site was different from various pages. After realizing this we came together and created a uniform header and footer for the site and themed the subsequent pages from that styling.

## User guide

### Site Setup

1. Ensure phpMyAdmin is Installed
   - In Laragon right click: Tools > Quick add > phpMyAdmin
2. Log onto phpMyAdmin
   - User (default): root
   - Password (default): [empty]
3. Import provided database file
   - Import tab
   - Browse file and select mydatabase.sql
   - Press the import button
4. Enable SSL on Laragon
   - menu->apache->ssl-> enable
   - menu->apache->ssl-> add laragon.crt to trust store

### Site Features

#### About Section

You can navigate here from the navbar by selecting \* _About_ \*
This page shows the itemized Final Project Specifications, and what our group did to fulfill them.

#### Team Section

You can navigate here from the navbar by selecting \* _Team_ \*
This page displays the team members of the project and provides a link to each members portfolio page.

#### Portfolio Pages

Each team member has a portfolio page that has some(potentially fictional) professional information about the team member including a short bio, links to email and github accounts, work/education history, and prior projects.

#### Contact Us Section

You can navigate here from the navbar by selecting \* _Contact Us_ \*
This page will display cookies at the top if cookies have been saved.
It will also display a contact form that can be filled out to create a cookie with the form's information. That information is also saved to the database.

#### Login Section

You can navigate here from the navbar by selecting \* _login_ _, or by clicking the top-right button on the navbar.
The seeded database accounts all have the same password of _ _password_. \*
`
	Username: hello@goodbye.com
	Password: password
	`

#### Admin Section

After being logged in you can navigate here from the navbar by selecting \* _Admin_ \*
There are multiple tabs with different admin features on them.

**Register Account** tab allows a new user account to be created.

**Contact Messages** tab displays saved contact messages from the database

**Failed Logins** tab displays failed login attempts from the database. This function uses the phpAuth library and by default values are removed after 24 hours. Data has been seeded here manually to show functionality of the website.
