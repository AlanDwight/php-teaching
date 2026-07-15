// backend node prompt and user data collection
const prompt = require("prompt-sync")() // calling function and returning function
const data = prompt("type something: ")
console.log(data)

// primitive data type
// string 
// boolean 
// number 
// undefined
// null
// BigInt

// userData camel case // js 
// user_data snake case // python


console.log(Boolean(undefined))
console.log(Boolean(null))
console.log(Boolean(NaN))

// function scope vs block scope

// var,    fs 
// let, const    bs 
// let and const are block

// var is hoisted 
// if var is defined it is available at the top of the function

// type cohoesion 
// implicit type inversion/conversion

// NaN not a number

// LOOSE equality
// STRICT equality

// console.log("hello" || true) // truthy value 
// falsy value

// switch collapse
// switch fall through

// array iin js are mutable even if they are const

// array destructuring 
// spread operator
// tenary operator
// nested destructuring

// x and y are same reference 

// naked while .. one line while

// destructuring objects

// function expression
// arrow function // es6 // direct return

// rest parameter
// reduce function

// asynchronous js

// promises

// concurrency with js

for (let index = 0; index < 10; index++) {
    console.log(index);
    
}

let array = [1,2,3,4]

array.forEach((element, index) => {
    console.log(`${index}, ${element}`)
});

for(let value of array){
    console.log(value)
}