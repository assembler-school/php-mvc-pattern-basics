<!-- This is the main generic view of your application, it's not required to use it -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>MVC basics</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="?">MVC Basics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="?controller=employees&action=getAllEmployees">DEMO</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?controller=salaries&action=getAllEmployees">Salaries</a>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h5>What is an architecture pattern?</h5>
        <p>The architectural pattern shows how a solution can be used to solve a reoccurring problem. In another word, it reflects how a code or components interact with each other. Moreover, the architectural pattern is describing the architectural style of our system and provides solutions for the issues in our architectural style. For example: how to separate the UI of the data module in our architectural style? How to integrate a third-party component with our system? how many tires will we have in our client-server architecture? Examples of architectural patterns are microservices, message bus, service requester/ consumer, MVC, MVVM, microkernel, n-tier, domain-driven design, and presentation-abstraction-control.</p>

        <h5>What is the MVC pattern?</h5>
        <p>MVC is a software architecture pattern, which separates the data and business logic of an application from its representation and the module responsible for managing events and communications. MVC Pattern stands for Model-View-Controller Pattern. This pattern is used to separate application's concerns.</p>
        <div class="row justify-content-center">
            <img class="img-fluid centered-image" src="./assets/img/mvc-diagram.png" alt="MVC Pattern Diagram" />
        </div>
        <ul>
            <li>
                <p><b>Model</b> - Model represents an object or JAVA POJO carrying data. It can also have logic to update controller if its data changes.</p>
            </li>
            <li>
                <p><b>View</b> - View represents the visualization of the data that model contains.</p>
            </li>
            <li>
                <p><b>Controller</b> - Controller acts on both model and view. It controls the data flow into model object and updates the view whenever data changes. It keeps view and model separate.</p>
            </li>
        </ul>

        <h5>Draw a scheme where you understand that the MVC pattern is clearly</h5>
        <div class="row mt-4 justify-content-center">
            <img class="img-fluid centered-image" src="./assets/img/mvc-scheme-question.png" alt="MVC scheme" />
        </div>

        <h5>Explain in which cases you would use this pattern</h5>
        <p>The MVC pattern can always be used on any dynamic web page, it helps to separate the graphical part from the logic behind it. In the case of 100% static pages it may not make much sense to use this pattern.</p>

        <h5>Describe step by step what happens in this pattern from when you create a Request until a Response is returned (you can give more than one example if you consider it necessary).</h5>
        <p>When the user (browser) interacts with our page and takes an action, the request is sent to the server.</p>
        <p> The controller takes the event, processes it, and looks up the correct information from the model who's stores the data and supplies the controller and the view of the necessary data.</p>
        <p>Once the data is received from the model, the controller, based on the action requested by the user, calls the view (the graphic part) and returns the necessary information that has been requested.</p>
        <h6>Example</h6>
        <p>Car driving mechanism is an example of the MVC model. Every car consist of three main parts:</p>
        <ul>
            <li><b>View</b>: User interface ( Gear lever, panels, steering wheel, brake, etc.)</li>
            <li><b>Controller</b>: Mechanism ( Engine)</li>
            <li><b>Model</b>: Storage ( Petrol or Diesel tank)</li>
        </ul>
        <h5>What advantages do you think this pattern has to use?</h5>
        <p>Here, are major benefits of using MVC architecture:</p>
        <ul>
            <li>Easy code maintenance easy to extend and grow</li>
            <li>MVC Model component can be tested separately from the user</li>
            <li>Easier support for new type of clients</li>
            <li>Development of the various components can be performed in a divided way.</li>
            <li>It helps you to avoid complexity by dividing an application into the three units. Model, View, and controller</li>
            <li>It only uses a Front Controller pattern which process web application requests through a single controller.</li>
            <li>Each part can be tested independently (Model, view, controller)</li>
            <li>It works well for Web apps which are supported by large teams of web designers and developers.</li>
            <li>Easier to maintain or modify.</li>
            <li>Search Engine Optimization (SEO) Friendly.</li>
            <li>All classed and objects are independent of each other so that you can test them separately.</li>
            <li>MVC design pattern allows logical grouping of related actions on a controller together.</li>
        </ul>
    </div>
</body>

</html>