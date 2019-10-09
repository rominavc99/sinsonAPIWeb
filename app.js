const namee = document.getElementById('name1');
const secondnamee = document.getElementById('secondname1');
const lastnamee = document.getElementById('lastname1');
const agee = document.getElementById('age1');
const photoo = document.getElementById('photo1');
const descriptioon = document.getElementById('description1')

const apiUrl = 'https://localhost:5001/simpsons/character'

const apiResponse = async url => {
    const response = await fetch(`${apiUrl}/3`)
    const data = await response.json();
    console.log(data);

    const {name, secondName, lastName, age, description} = data;
    const imgpic = data.photo;



    photoo.src = imgpic;
    agee.innerText = age;
    namee.innerText = name;
    secondnamee.innerText = secondName;
    lastnamee.innerText = lastName;
    descriptioon.innerText = description;
  
};

apiResponse(apiUrl);