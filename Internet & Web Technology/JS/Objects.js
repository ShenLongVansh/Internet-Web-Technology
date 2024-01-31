let lectures = 10;
let section = 3;
let title = "JS";

const course = {    //objects creation to store multiple values and for resusability
    //key: value
    lectures: 10,
    section: 3,
    title: "JS",  //this comma is important for using nested object
    notes: { //nested object
        introduction : "Introduction to JS"
    },
    enroll() {
        console.log("You are enrolled");
    }  
}


course.enroll(); //calling the function
console.log(course);

course.price = 1000; //adding new key value pair or updating it
