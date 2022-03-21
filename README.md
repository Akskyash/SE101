# SE101

An example of a Computer Graphics code,

Code:

#include<windows.h>

#include <GL/glut.h>

void init(void)

{

	glClearColor(0.0, 0.0, 0.0, 0.0);
  
	glMatrixMode(GL_PROJECTION);
  
	gluOrtho2D(0.0, 600.0, 0.0, 600.0);
  
}

void cube(void)

{

	glClear(GL_COLOR_BUFFER_BIT);
  
	glPointSize(4.0);
  
	glBegin(GL_LINES);
  

    glVertex2f(102.95f, 246.37f);
    
    glVertex2f(101.71f, 87.24f);
    

    glVertex2f(101.71f, 87.24f);
    
    glVertex2f(374.34f, 86.0f);
    


    glVertex2f(374.34f, 86.0f);
    
    glVertex2f(432.32f, 140.28f);
    


    glVertex2f(374.34f, 86.0f);
    
    glVertex2f(375.57f, 246.37f);
    

    glVertex2f(375.57f, 246.37f);
    
    glVertex2f(431.09f, 303.12f);
    

    glVertex2f(102.95f, 246.37f);
    
    glVertex2f(158.46f, 304.35f);
    

    glVertex2f(102.95f, 246.37f);
    
    glVertex2f(375.57f, 246.37f);
    

    glVertex2f(158.46f, 304.35f);
    
    glVertex2f(431.09f, 303.12f);
    

    glVertex2f(431.09f, 303.12f);
    
    glVertex2f(432.32f, 140.28f);
    

	glEnd();
  
	glFlush();
  
}


int main(int argc, char* argv[])

{

	glutInit(&argc, argv);
  
	glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
  
	glutInitWindowPosition(150, 150);
  
	glutInitWindowSize(500, 500);
  
	glutCreateWindow("Cube");
  
	init();
  
	glutDisplayFunc(cube);
  
	glutMainLoop();
  

	return 0;
  

}
