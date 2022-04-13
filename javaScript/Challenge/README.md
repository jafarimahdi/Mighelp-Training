
# JavaScript Basic

### Type of PopUp

* `ALert('')`  =>   show popUp
* `prompt('')` =>  get input from user like popUp
---
## Functions

* `function Declaration`  
    
        function someThing( ){ 

        }

* `function Expression`  

        var someThing = function( ){ 
            
        }
---
## Objects

1- __`Object literal`__

    var user = { firstName: "john", 
                lastName:"smith" , 
                birthday: 1987,
                family:['bob','jane','mark']
                };

2- __`new object Syntax`__

    var user = new Object( );

        user.firstName ="John";
        user.lastName = "smith";
        user["birthday"]= 1987;  // we can use [" "] to fill it also
---
## Loops 

* normal forLoop

        for(var i=0;i < Array.length;i++){
        console.log(Array[i])   // from index[0] --> end 
         }

* Backward forLoop

        for(var i = Array.length(-1); i>= 0;i--){ 
        console.log(Array[i])   // from index[-1] end --> index[0]
        }
* new forLoop

        for(var i of Array){
       }
* forEach()

* map() 

         make new array from the array

* While ()

* Do While

* Switch()

### continue & Break

* continue : ignore this condition from the process
        
        if(!some condition ) continue;
* break : if condition is happen, stop the process

        if(!some condition) break;
---
## DOM

[DOM Manipulation ... ](https://blog.garstasio.com/you-dont-need-jquery/dom-manipulation/)
* __Select__

        document.querySelector('')  ==>  #id  .class  Tag
        document.querySelectorAll(' ')  ==>   .class   Tag
        document.getElementById(' ');
        document.getElementsByClassName(' ');
        document.getElementsByTagName(' ');

* Select.ClassList

        class

        classList.toggle('')
        classList.add('')
        classList.remove('')
        classList.value
        classList.contains( )  // boolean

* Select.Style

        style
       
        style.color =''
        style.background =''
        style.width = ''

        style.display ='none'
        style.display ='block

        style.setAttribute('')
        style.removeAttribute('')
        style.getAttribute('')
        style.hasAttribute('')


* Select.textContent = 'someText'
* Select.innerText
* Select.innerHtml = <em> something </em>


---

## __Events__

* 1- Specific place 

        document.querySelector( # . '').addEventListener( )
* 2- Global

        document.addEventListener( )




* 1- addEventListener( ' __click__ ' , function( ))


* 2- addEventListener( '__keypress__' , function ( event ){
         if ( event.keycode === 13 ){ 
                 do some } })



[keyCodes ...](http://keycodes.atjayjo.com/#charcode)
        
[More Events ....](https://developer.mozilla.org/en-US/docs/Web/Events)

---
### Functions :

__1- Function as argument in Function__
        
  --> function( function( ){ } )
* a- __`CallBack Function`__

        have second function  as argument/parameter inside first function and call the second function by first one

* b- __`Anonymous Function`__

        function doesn't have name and usually use for the Events and it can be useful just inside the concept not out



* `2- Function Returning Function:` __Closures__

        function interviewQuestion (job){
                return function(name){
                         if(job === 'designer'){
                                console.log(name + ', please explain what UX design is);
                        } else if (job === 'teacher'){
                                console.log(name +'what you teach');
                        } else {
                                console.log(name + 'what do you do')
                        }
               }
        }
                --------------------------------
        // call both function with two argument
        
        interviewQuestion('teacher')('janus');

* __`Function constructor`__

        function something(name,age,lastName){
                this.name = name;
                this.age = age;
                this.lastName = lastName;
        }       ------------
          // add new function inside this function
                something.prototype.newFun = function(){ 
                do some here
        }
                -------------------------------------------
        // make object from the function

        var example1 = new something('john',27,smith);
      


* __`Function IIFE`__

        (function (){

                var score = Math.random()* 10;
                console.log(score > 5);
        })();

* `Add New Function` __.prototype__

        object.prototype.newFun = function(  ){  }
---

#### Call, Bind, Apply

* 1- __`call()`__ --> method Borrowing

        .call( parameter1, parameter2, parameter3, .... );

* 2- __`apply() `__

        .apply( parameter1, [index1,index2, ....] )

* 3- __`Bind()`__

        .bind()

---
* object.create( )

--- 
### Converting

__`.parseInt()`__
        
        Convert the (String Numbers) to Int/Number 

__`.parseFloat( )`__

        convert to Float Number

__`.toFixed()`__

        (2.4567).toFixed(2)  --> '2.46'   String
        
        (2).toFixed(3)    --> '2.000'      String
---

* __Time & Date( )__


        var christmas = new Date(2019,11,25)  // make direct day and time
        ----

        var date = new Date( )  // Current time

        var year = date.getFullYear();
        var month = date.getMonth();

        and more ...
---

## New In  ES6 / ES2015 

* 1`Var: global`    2`Let: bracket` 3`Const:can't change`

* __String Methods ()__

        .startsWith('')  //boolean  
        .endsWith('')    //boolean  
        .includes('')   //boolean 

        ---------
        .charAt()       //char
        
        .search()       //index
        .indexOf()      //index
        .lastIndexOf()  //index

        -------
        .concat()

        ---------  find and change
        .match() 
        .replace()

        ---------
        .repeat(N)

        -------
        .slice( , )
        .subStr( , )

        ---------------- convert
        .split('')     //to Array
        Array.from()   //to Array

        --------
        .toLowerCase()
        .toUpperCase()

        ----------
        .trim()  //delete space from start & end

        -------------
        .valueOf()      //str
        --------
        .length()       //num



---
* __Array Methods( )__

             
         ----------   search 

        .find( el => el > 5);
        .findIndex( el => el > 5);

        .include()
        .indexOf()

        ------------

        .reduce( (prev, current, index) => prev + cur, 0); // reduce array to single value
        .filter(el =>)
        ----------- convert

        .concat()
        .join() // to string
        .toString()
        --------------- add or delete

        .push()
        .pop()
        .shift()
        .unShift()
        .splice(x,y,z)
        -----------

        .slice(a,z)

        ------------ order

        .reverse()
        .sort()
        .sort(a,b)
        ----------
        .length()

---
* __Arrow function()__

        let numbers =[1,2,3,4,5,6]

        1- Argument/ Parameter:  

                * with one Argument: (  =>) 
                        numbers.map(el => el + SOMETHING);

                * with multiple Argument:  (( , ) =>)
                        numbers.map((el, index) => el & index + SOMETHING);

        2- Line

                * in One line
                        numbers.map(el => el +  DO SOMETHING ): 
                
                * in multiple line have to use { } and RETURN
                        
                        numbers.map(el => {
                                return el + DO SOMETHING
                        });
---
* __Destructuring__


---
* __MAP()__  better then __Object__ ?

        let data = new map( )
        
        data.
`.set( )` `.get( )` `.size( )` `.delete( )` `.has( )` `.clear( )`

---

* __Class__

* inherit 

---

### synchronous VS.  Asynchronous

* CallBack [simple..](https://www.youtube.com/watch?v=xHneyv38Jro)

* CallBack Hell
* promise

    [more...](https://morioh.com/p/0ca377c4d872?fbclid=IwAR3zvcKhZwvh8eeck1BPSMfgOcoAp333ALvNM7x_GqxpHuLd8Dw5bewS5nw)

* Async Function 
        
         . await

* Ajax and Api

* 1- fetch( ) & Json


* 2- then()

* 3- catch()

[some time we have to use the:  crossorigin.me](https://corsproxy.github.io/)

* Async function & await fetch()