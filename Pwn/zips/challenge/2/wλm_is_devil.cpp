#include <fcntl.h>
#include <iostream>
#include <cstring>
#include <cstdlib>
#include <unistd.h>
using namespace std;

class Human{
private:
	virtual void give_shell(){
		system("/bin/sh");
	}
protected:
	int age;
	string name;
public:
	virtual void introduce(){
		cout << "My name is " << name << endl;
		cout << "I am " << age << " years old" << endl;
	}
};
class dyf: public Human{
public:
        dyf(string name, int age){
                this->name = name;
                this->age = age;
        }
        virtual void introduce(){
                Human::introduce();
                cout << "dyf 真tm帅" << endl;
        }
};

class w_m: public Human{
public:
        w_m(string name, int age){
                this->name = name;
                this->age = age;
        }
        virtual void introduce(){
                Human::introduce();
                cout << "头给你拧掉!" << endl;
        }
};

int main(int argc, char* argv[]){
        Human* m = new dyf("dyf", 18);
        Human* w = new w_m("w*m", 18);

        size_t len;
        char* data;
        unsigned int op;
        while(1){
                cout <<"王阿姨刑房:"<<endl;
                cout << "1. 拧头\n2. 腰斩\n3. 凌迟\n";
                cin >> op;

                switch(op){
                        case 1:
                                m->introduce();
                                w->introduce();
                                break;
                        case 2:
                                len = atoi(argv[1]);
                                data = new char[len];
                                read(open(argv[2], O_RDONLY), data, len);
                                cout << "您已列入4月枪毙名单" << endl;
                                break;
                        case 3:
                                delete m;
                                delete w;
                                break;
                        default:
                                break;
                }
        }

        return 0;
}
