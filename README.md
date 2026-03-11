# Robotics School Project

##  Project Description
This project is a management system for a robotics school.  
It allows administrators to manage users, groups, courses, robotics kits, and student enrollments.

## Entity-Relationship Model
The database schema includes the following entities:

- **Users** → belong to a group and can enroll in courses.
- **Groups** → organize users into teams or classes.
- **Courses** → each course uses a robotics kit.
- **RoboticsKits** → available kits for courses.
- **Enrollments** → connect students with courses and groups.

![ER Diagram](//www.plantuml.com/plantuml/png/dL7BQWCn3BpxAuIFXVn0Ju5IUkYjq7FOXrX4lVPYoRIboRzNQvlWXGqjkMcaaMR6Fh9qKTBi37eX-GRxpXZPGiUGrWf-3C03ZV08FKtaHQ7lPbJC4ibFYd7koBMDfMF-375iUp6upT8KGrfExU6BkPfuMOVPHU7zRQFTVWefCfRreTJ_YJ4Y3v4MeU2rBVWbsNOVX0O-VP3SSlliDPoR5HPDlE9TNPOqejzSstqFgEPloRvLQwzKTLklzoRM--NVB-5mE9_hy-lKzkY2dnWaMDCchCIofRmQhoNjNClLBgU4pgHIMbDRbR79cNbf7IgmveX-JBFx1G00)
