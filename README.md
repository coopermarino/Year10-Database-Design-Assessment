# Year10-Database-Design-Assessment

Database website to easily keep track of players scores in wii bowling

Demonstrating real world applications of Databases by storing players scores within it

**How to use:**

- Download project as zip or "git clone https://github.com/coopermarino/Year10-Database-Design-Assessment.git"
- Download XAMPP from the offical SourceForge repository (https://sourceforge.net/projects/xampp/files/)
- After XAMPP has installed run it, if it isnt already

**MacOS Users:**
Do not install the "-vm" version of xampp

-Install lampp via the installer
- Put the downloaded project files in 'htdocs' folder

**MacOS**
You can find the htdocs folder in:
  Applications/XAMPP/xamppfiles/htdocs
  
**Windows**
You can find the htdocs folder in:
  C:/XAMPP/htdocs
  
**Linux**
You can find the htdocs folder in:
  /opt/lampp/htdocs


- In your internet browser go to:
  http://localhost/phpmyadmin
  
- Once you are in the phpmyadmin page press "New" on the left hand side column and you will be prompted to enter a database name **Ensure the name is "year10ist"** and set the database to utf8mb4_general_ci and press create

- after creating the database select it on the left hand side and then up the top press import. Press "Choose file" and locate "Games.sql" within the "database" folder found inside the project files (It will also be in htdocs/database/Games.sql). Then scroll to the bottom of the page and press "Impoort"

- After completing steps you can access the page in your Internet Browser with "http://localhost"
