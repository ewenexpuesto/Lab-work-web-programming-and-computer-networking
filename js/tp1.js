function introduction() {
    nombre1 = parseInt(prompt("¿Cuál es tu nombre?"));
    nombre2 = parseInt(prompt("¿Cuál es tu nombre?"));
    nombre3 = nombre1 + nombre2
    alert("Hola " + nombre3 + ", bienvenido a la página de prueba.");
}

function checkDriverAge() {
    age = parseInt(prompt("¿Cuál es tu edad?"));
    if (age < 18) {
        console.log("désolé vous êtes trop jeune pour conduire une voiture");
    }
    else if (age >= 18) {
        alert("Bienvenue au club")
    }
    else {
        alert("Bon voyage");
}
}

// pour exécuter la fonction, l'appeler dans la console

x = function() {
    console.log("hmmm");
};


function array() {
    fruit = ["banane", "orange", "kiwi", "pomme", "cerise"];
    fruit.splice(2, 1, "mangue"); // remplace "kiwi" par "mangue"
    fruit.push("fraise"); // ajoute "fraise" à la fin du tableau
    fruit.sort().reverse();
    console.log(fruit);

    array2 = ["BMW", ["AUDI", ["Ferrari"], "Benz"]];
    console.log(array2[1][1][0])
}

user = {
    username: "john_doe",  // Nom d'utilisateur
    password: "1234abc"    // Mot de passe
  };

database = [user];

newsfeed = [
    {
      username: "alice_smith",
      timeline: ["Post 1", "Post 2", "Post 3"]
    },
    {
      username: "bob_jones",
      timeline: ["Post A", "Post B", "Post C"]
    },
    {
      username: "charlie_brown",
      timeline: ["Post X", "Post Y", "Post Z"]
    }
  ];

function login() {
    username = prompt("Quel est votre nom d'utilisateur ?");
    password = prompt("Quel est votre mot de passe ?");

    for (var i = 0; i < database.length; i++) {
        if (username === database[i].username && password === database[i].password) {
            console.log(newsfeed);
        }
    }
    alert("Nom d'utilisateur ou mot de passe incorrect.");
}

// Sélectionner les éléments du DOM
const shoppingList = document.getElementById('shoppingList');
const newItemInput = document.getElementById('newItemInput');
const addItemButton = document.getElementById('addItemButton');

// Fonction pour ajouter un item à la liste
function addItem() {
    const newItem = newItemInput.value.trim(); // Récupère la valeur du champ input et enlève les espaces autour

    if (newItem === '') {
        alert('Item cannot be empty!'); // Ne pas ajouter un item vide
        return;
    }

    const li = document.createElement('li'); // Crée un nouvel élément de liste <li>
    li.textContent = newItem; // Assigne le texte à l'élément
    shoppingList.appendChild(li); // Ajoute l'élément à la liste existante

    newItemInput.value = ''; // Réinitialise le champ input après l'ajout
    newItemInput.focus(); // Redonne le focus sur le champ input pour ajouter un autre item
}

// Ajouter un item en cliquant sur le bouton
addItemButton.addEventListener('click', addItem);

// Ajouter un item en appuyant sur la touche "Enter"
newItemInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        addItem();
    }
});