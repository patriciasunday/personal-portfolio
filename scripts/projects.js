/*
Author: Patricia Sunday
Desc: javascript file for projects page in portfolio
For: Assignment 1-projects.html
*/

//execute script once window loads
window.onload = function () {
    let projectsShown = 0; //to store amount of projects to be shown on screen
    let currentProjectIndex = 0; //initializing current project index as first project index in array
    const backButton = document.getElementById("back");
    const forwardButton = document.getElementById("forward");
    const projects = document.getElementsByClassName("project"); //to store all projects as elements in array
    const projectTitles = document.getElementsByClassName("project-title"); //to store all project titles since they'll be clicked

    //to change amount of projects to be shown based on page width
    function updateProjectsShown(){
        let pageWidth = window.innerWidth;

        if (pageWidth<800){
            projectsShown = 1;
        }
        else{
            projectsShown = 2;
        }
    }
    updateProjectsShown();

    //to update project view based on current project index and amount of projects to show
    function updateView(){
        //iterating through projects
        for (let i=0; i<projects.length; i++){
            //only show project if its between current project index(inclusive) and projects shown range
            if(i>=currentProjectIndex && i<(currentProjectIndex + projectsShown)) {
                projects[i].style.display = "block";
            } else {
                projects[i].style.display = "none";
            }
        }
    }

    //to decrement current project index
    function decrementCurrentProjectIndex(){
        if (currentProjectIndex>0){
            currentProjectIndex--;
            updateView();
        }
    }

    //to increment current project index
    function incrementCurrentProjectIndex(){
        if (currentProjectIndex<projects.length - projectsShown) {
            currentProjectIndex++;
            updateView();
        }
    }

    //to update current project index depending on button clicked
    backButton.addEventListener("click", decrementCurrentProjectIndex);
    forwardButton.addEventListener("click", incrementCurrentProjectIndex);

    //to toggle details dropdown on each title
    for (let i=0; i<projectTitles.length; i++){
        projectTitles[i].addEventListener("click", function (){
            const details = projectTitles[i].nextElementSibling;

            //hide details if showing, show details if hidden
            if(details.style.display === "block"){
                details.style.display = "none";
            }
            else{
                details.style.display = "block";
            }
        });
    }

    //to update projects when window is resized
    window.addEventListener("resize", () =>{  
        updateProjectsShown();
        updateView();
    });

    //update project view on load
    updateView();
};
