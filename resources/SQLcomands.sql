INSERT INTO questions(
    qst_no,
    question
)VALUES
(1,"What is an architecture pattern?"),
(2,"What is the MVC pattern?"),
(3,"Draw a scheme where you understand that the MVC pattern is clearly"),
(4,"Explain in which cases you would use this pattern"),
(5,"Describe step by step what happens in this pattern from when you create a Request until a Response is returned"),
(6,"What advantages do you think this pattern has to use?");



INSERT INTO answers(
    qst_no,
    anw_no,
    answer,
    is_correct
)VALUES
(1,"1","An Architectural Pattern it’s a predefine structural organization. It provides a set of predefined subsystems, their responsibilities, and organize the relationships between them.",true),
(1,"2","An Architectural Pattern it’s a programming lenguage. It provides a set of predefined subsystems.",false),
(1,"3","An Architectural Pattern it’s a Hook. It provides a set of predefined subsystems and organize the relationships between them.",false),
(1,"4","It's a new version of React",false),

(2,"5","It’s an Arquitectural Pattern thought for web applications whose workflow include database calls;
MVC = Model, View, Controller architecture. Model = HTML + CSS / View = SQL / Controller = JS or PHP",false),
(2,"6","It’s an Arquitectural Pattern thought for web applications whose workflow include database calls;
MVC = Model, View, Controller architecture. Model = SQL / View = HTML + CSS / Controller = JS or PHP",true),
(2,"7","It’s an Arquitectural Pattern thought for web applications whose workflow include database calls;
MVC = Model, View, Controller architecture. Model = JS + PHP / View = SQL / Controller = HTML + CSS",false),
(2,"8","It's a Mobile Vacutation Center",false),

(3,"9","Option 1",false),
(3,"10","Option 2",false),
(3,"11","Option 3",true),
(3,"12","Option 4",false),

(4,"13","It's recommanded when you will design an App that need a GUI(Grafical User Interface)'View', that need to sen
send querys to the database 'Model' and gets the data with functionality'Controller'",true),
(4,"14","It's recommanded when you will design an App that need a GUI(Grafical User Interface)",false),
(4,"15","It's recommanded when you will just send querys to the database",false),
(4,"16","It's recommanded when you get the data with dynamic functionality",false),

(5,"17","
1- The index call to the controller
2- the Controller requie the viewer file(this naw have acces to the data that recollect the model)
3- the Controller requier the data of the function of Model",false),
(5,"18","
1- The Model send the query
2- The index call to the controller
3- the Controller requie the viewer file(this naw have acces to the data that recollect the model)
4- the Controller requier the data of the function of Model",false),
(5,"19","
1- The Model send the query
2- the Controller requier the data of the function of Model
3- the Controller requie the viewer file(this naw have acces to the data that recollect the model)",false),
(5,"20","
1- The Model send the query
2- the Controller requier the data of the function of Model
3- the Controller requie the viewer file(this naw have acces to the data that recollect the model)
4- The index call to the controller",true),

(6,"21","It's free",false),
(6,"22","MVC enables logical grouping of related actions on a controller together. The views for a specific model are also grouped together",true),
(6,"23","The framework navigation can be complex because it introduces new layers of abstraction and requires users to adapt to the decomposition criteria of MVC.",false),
(6,"24","Knowledge on multiple technologies becomes the norm. Developers using MVC need to be skilled in multiple technologies",false);


