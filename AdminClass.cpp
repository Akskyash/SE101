#include <iostream>

using namespace std;

class Admin
{
    string adminName;
    string adminEmail;

    public:

    Admin(string name, string email);

    void vehicleCondition();
    void check_license();
    void printName();
    void printEmail();

};

Admin :: Admin(string name, string email)
{
    adminName = name;
    adminEmail = email;
}

//Admin :: Admin(string email){
  //adminEmail = email;
//}

void Admin :: vehicleCondition()
{
    cout<<"\n"<<endl;
    cout<<"Check Vehicle Condition: ";
    cout << "The Vehicle Condition is (OK / NOT OK)" << endl;
}

void Admin :: check_license()
{
    cout<<"\n"<<endl;
    cout<<"Driver License: ";
    cout << "Verification of driver license (OK / NOT OK)" << endl;
}

void Admin :: printName()
{
    cout << adminName << endl;
}

void Admin :: printEmail()
{
    cout << adminEmail << endl;
}

int main()
{
    cout<<"ADMIN CLASS \n"<<endl;
    cout<<"Admin Details: \n"<<endl;
    Admin a("Name of Admin: Md. Ashraful Islam","Email of Admin: ashrafadmin@gmail.com");
    a.printName();
    a.printEmail();
    cout<<"\n"<<endl;
    cout<<"Admin Methods: "<<endl;
    a.vehicleCondition();
    a.check_license();
}
