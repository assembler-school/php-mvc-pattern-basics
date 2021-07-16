# Questions

### 1. What is an architecture pattern?

An architectural pattern is a general, reusable solution to a commonly occurring problem in software architecture within a given context.


### 2. What is the MVC pattern?

The Model-View-Controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application. MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.

### 3. Draw a scheme abou MVC pattern


![MVC pattern](https://i.stack.imgur.com/YgydT.png)

### 4. Which cases we use MVC pattern

We use MVC pattern in case of clear separation of concerns in order to define the pattern components:

- View: where sends user requests and receive updates
- Controller: Intermediate interfave between Model and View in order to decide which task execute from Model depending of View request.
- Model: Pure application data.

### 5. Request sequence step by step

1. User sends a request through View component to the Controller.
2. Depending of which kind os request Controller receives, it decides to call and update a Model's function which new data request.
3. Model executes propertly function with Controller's updating and sends notify back to Controller.
4. With the new updating from the Model, the Controller decides what should be rendered on the View.
5. User get updated information rendered on the View

### 6. MVC advantages

- Faster delopment process.
- One of the most pattern used.
- Promotes scheme programming.
- Ability to provide multiple views.
- Support for asynchronous technique.
- The modification does not affect the entire model.
- MVC pattern returns the data without formatting.
- SEO friendly developtent platform.
