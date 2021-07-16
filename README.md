
`#html` `#css` `#js` `#php`  `#basics`  `#master-in-software-engineering`

# PHP MVC Basic Patterns<!-- omit in toc -->

>This project is part of the Master in Software Development. The objective was to create an application able to manage a json with all the employees from a company.
 ### Main objetives:
- Understand what it is an architecture pattern, what it is used for, and what advantages it can bring to the project
- Learn to implement the MVC pattern
- Learn more about the use of this pattern for future implementations in
popular Working Frameworks

## Index <!-- omit in toc -->
- [Theory 📚](#theory-)
- [Where to start?🚀](#where-to-start)
  - [Requirements📋](#requirements)
  - [Install🔧](#install)
- [Deployment📦](#deployment)
- [How to use 💻](#how-to-use-)
  - [Main page](#main-page)
  - [Employees page](#employees-page)
    - [Employee details page](#employee-details-page)
    - [Add employee page](#add-employee-page)
  - [Departments Page](#departments-page)
    - [Department details page](#department-details-page)
- [Project structure 📁](#project-structure-)
- [Tools and tecnologies used 🛠️](#tools-and-tecnologies-used-️)
- [Project requirements 📏](#project-requirements-)
- [Resources](#resources)


## Theory 📚

 1. **What is an architecture pattern?**
It is a general, reusable solution to a commonly occurring problem in software architecture within a given context. The architectural patterns address various issues in software engineering, such as computer hardware performance limitations, high availability and minimization of a business risk.


 2. **What is the MVC pattern?**
MVC is a software architectural pattern for implementing user interfaces on computers. It divides a given application into three interconnected parts, the Model, View and Controller (MVC).
- Model: the classes and methods that interact with the database.
- View:  it has to display the data to the client, so its understandable and easy to read.
- Controller: it is the intermediary beetwen the view and the model, which manages the user interactions with the view, requests the data to the model and returns this data to the view.
 4. **Draw a scheme where you understand that the MVC pattern is clearly**
 ![enter image description here](https://victorroblesweb.es/wp-content/uploads/2013/11/mvc-php.jpg)
 5. **Explain in which cases you would use this pattern**
 It can be useful in many cases, specially when we have in mind the scalability of a project.
 7. **Describe step by step what happens in this pattern from when you create a Request until a Response is returned (you can give more than one example if you consider it necessary)**
 First, the client sends a request to the controller, interacting with the view. Then, the controller requests the data to the model, which returns that data. With that data, the controller sends that to the view, that finally renders what's important for the user.
 8. **What advantages do you think this pattern has to use?**
 The main advantage of architecture is reusability, security and increasing the performance of application.

## Where to start?🚀

### Requirements📋

To run this project you need yo have XAMPP installed in your PC (or MUMP in the case of Mac users). For more information about XAMPP visit [their website](https://www.apachefriends.org/es/index.html).

### Install🔧

To clone this repository you have make in terminal:

```
git clone https://github.com/mhfortuna/php-mvc-pattern-basics.git
```
Then you need to copy this folder to `htdocs` or change the server root variable.
It's important to import de database to your MySQL installation and change the credentials on `config/db.php`

## Deployment📦

To open the file explorer just open a browser and go to [localhost](localhost)
You'll have to login, the credentials are:

## How to use 💻
### Main page
Here we can choose which controller to use, not much else.
### Employees page
Here we can see all the employees of the database, with their main information. We can also delete employees. We have buttons to go to the "Add employee" page and the "Employee details" page.
#### Employee details page
Here you can see **all** the avaliable data about the selected employee.
#### Add employee page
This is a form where you can fill al the inputs to add a new employee. After a successful operation you'll be redirected to the employees page.
### Departments Page
Here you can see a list of all the company's departments. 
#### Department details page
Here you will have more info of the selected department



## Project structure 📁

```
assets/
config/
controllers/
models/
resources/
views/
```


## Tools and tecnologies used 🛠️

* PHP
* HTML
* Bootstrap 
* MySQL

## Project requirements 📏

- All code included comments need to be write in English
- Use a code style like camelCase
- HTML never use inline styles
- It is recommended to divide the tasks into several subtasks so that you can associate each particular step of the construction with a specific commit
- You should try as much as possible that the commits and planned tasks are the same
 - You must create a correctly documented README.md file in the root directory of the project (see guidelines in Resources)

## Resources

-  [What can PHP do?](https://www.php.net/manual/es/intro-whatcando.php)

-  [XAMPP](https://www.apachefriends.org/es/index.html)

-  [How to install XAMPP on Windows](https://www.youtube.com/watch?v=h6DEDm7C37A)

-  [What is a web server?](https://www.youtube.com/watch?v=Yt1nesKi5Ec)

-  [Web server basics](https://www.youtube.com/watch?v=3VqfpVKvlxQ)