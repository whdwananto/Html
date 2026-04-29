#include <iostream>
#include <conio.h>
using namespace std;
int main(){
int penduduk = 1;
for(int i = 1 ; i <= 50 ; i++){
    if(i==1){

    }
    else if(i%3==0){
        penduduk /= 2;
    }else{
        penduduk *= 3;
    }
    cout<<penduduk<<endl;
}

}